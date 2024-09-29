@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة قضية جديدة</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h1 class="text-center my-4">إضافة قضية جديدة</h1>
        <form action="{{ route('lawsuits.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">النوع:</label>
                <select id="type" name="type" class="form-control" required>
                    <option value="مدني">مدني</option>
                    <option value="شرعي">شرعي</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject">الموضوع:</label>
                <input type="text" id="subject" name="subject" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="plaintiff_id">المدعي:</label>
                <select id="plaintiff_id" name="plaintiff_id" class="form-control">
                    @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->full_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="defendant_id">المدعى عليه:</label>
                <select id="defendant_id" name="defendant_id" class="form-control">
                    @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->full_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">الحالة:</label>
                <select id="status" name="status" class="form-control" required>
                    <option value="انتظار">انتظار</option>
                    <option value="تم التسجيل">تم التسجيل</option>
                    <option value="قيد الدراسة">قيد الدراسة</option>
                    <option value="تم الفصل">تم الفصل</option>
                </select>
            </div>

            <div class="form-group">
                <label for="agreed_amount">المبلغ المتفق عليه:</label>
                <input type="number" step="0.01" id="agreed_amount" name="agreed_amount" class="form-control">
            </div>

            <div class="form-group">
                <label for="remaining_amount">المبلغ المتبقي:</label>
                <input type="number" step="0.01" id="remaining_amount" name="remaining_amount" class="form-control">
            </div>

            <div class="form-group">
                <label for="paid_amount">المبلغ المدفوع:</label>
                <input type="number" step="0.01" id="paid_amount" name="paid_amount" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">إضافة قضية</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection