<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Cairo', sans-serif;
        }

        .header {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            margin: 20px 20px 20px 20px;
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            width: 100%;
            max-width: 600px;
        }

        .btn {
            font-size: 20px;
            padding: 15px 30px;
        }

        @media (max-width: 768px) {
            .button-grid {
                grid-template-columns: 1fr;
            }

            .btn {
                font-size: 18px;
                padding: 10px 20px;
            }
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
</body>

</html>