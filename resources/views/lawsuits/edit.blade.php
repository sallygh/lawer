@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الدعوى</title>
    <!-- إضافة Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">تحرير القضية</h1>
        <form action="{{ route('lawsuits.update', $lawsuit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="type">نوع القضية:</label>
                <select class="form-control" name="type" id="type">
                    <option value="مدني" {{ $lawsuit->type == 'مدني' ? 'selected' : '' }}>مدني</option>
                    <option value="شرعي" {{ $lawsuit->type == 'شرعي' ? 'selected' : '' }}>شرعي</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject">موضوع القضية:</label>
                <input type="text" class="form-control" name="subject" id="subject" value="{{ $lawsuit->subject }}">
            </div>

            <div class="form-group">
                <label for="status">حالة القضية:</label>
                <select class="form-control" name="status" id="status">
                    <option value="انتظار" {{ $lawsuit->status == 'انتظار' ? 'selected' : '' }}>انتظار</option>
                    <option value="تم التسجيل" {{ $lawsuit->status == 'تم التسجيل' ? 'selected' : '' }}>تم التسجيل</option>
                    <option value="قيد الدراسة" {{ $lawsuit->status == 'قيد الدراسة' ? 'selected' : '' }}>قيد الدراسة</option>
                    <option value="تم الفصل" {{ $lawsuit->status == 'تم الفصل' ? 'selected' : '' }}>تم الفصل</option>
                </select>
            </div>

            <div class="form-group">
                <label for="agreed_amount">المبلغ المتفق عليه:</label>
                <input type="text" class="form-control" name="agreed_amount" id="agreed_amount" value="{{ $lawsuit->agreed_amount }}">
            </div>

            <div class="form-group">
                <label for="remaining_amount">المبلغ المتبقي:</label>
                <input type="text" class="form-control" name="remaining_amount" id="remaining_amount" value="{{ $lawsuit->remaining_amount }}">
            </div>

            <div class="form-group">
                <label for="paid_amount">المبلغ المدفوع:</label>
                <input type="text" class="form-control" name="paid_amount" id="paid_amount" value="{{ $lawsuit->paid_amount }}">
            </div>

            <button type="submit" class="btn btn-primary btn-block">حفظ التعديلات</button>
        </form>
    </div>

    <!-- إضافة Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection