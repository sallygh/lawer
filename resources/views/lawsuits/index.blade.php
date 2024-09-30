@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة القضايا</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
        }

        .table {
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">قائمة القضايا</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>النوع</th>
                    <th>الموضوع</th>
                    <th>المدعي</th>
                    <th>المدعى عليه</th>
                    <th>الحالة</th>
                    <th>المبلغ المتفق عليه</th>
                    <th>المبلغ المتبقي</th>
                    <th>المبلغ المدفوع</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lawsuits as $lawsuit)
                <tr>
                    <td>{{ $lawsuit->id }}</td>
                    <td>{{ $lawsuit->type }}</td>
                    <td>{{ $lawsuit->subject }}</td>
                    <td>{{ $lawsuit->plaintiff->full_name ?? 'N/A' }}</td>
                    <td>{{ $lawsuit->defendant->full_name ?? 'N/A' }}</td>
                    <td>{{ $lawsuit->status }}</td>
                    <td>{{ $lawsuit->agreed_amount }}</td>
                    <td>{{ $lawsuit->remaining_amount }}</td>
                    <td>{{ $lawsuit->paid_amount }}</td>
                    <td>
                        <a href="{{ route('lawsuits.edit', $lawsuit->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                        <form action="{{ route('lawsuits.destroy', $lawsuit->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

@endsection