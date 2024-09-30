<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع إدارة القضايا القانونية</title>


    <!-- إضافة رابط Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- إضافة ملف CSS الخاص بك -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .button-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 30px;
            /* مسافة بين الأزرار */
        }
    </style>
</head>

<body>

    <div class="button-grid">
        <a href="{{ route('lawsuits.index') }}" class="btn btn-outline-primary">تصفح القضايا</a>
        <a href="{{ route('lawsuits.create') }}" class="btn btn-outline-secondary">إضافة قضية</a>
        <a href="{{ route('clients.index') }}" class="btn btn-outline-success">أسماء الموكلين</a>
        <a href="{{ route('clients.create') }}" class="btn btn-outline-danger">إضافة اسم موكل</a>
        <a href="{{ route('invoices.create') }}" class="btn btn-outline-warning">إضافة مهمة</a>
        <a href="{{ route('invoices.index') }}" class="btn btn-outline-info">تصفح المهام</a>
        <a href="{{ route('clients.index') }}" class="btn btn-outline-dark">بحث</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>