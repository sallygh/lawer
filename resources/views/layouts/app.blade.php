<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع إدارة القضايا القانونية</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            direction: rtl;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>موقع إدارة القضايا القانونية</h1>
    </div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>