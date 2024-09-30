@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة موكل جديد</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
            font-family: 'Cairo', sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h1 class="text-center my-4">إضافة موكل جديد</h1>
        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="full_name">الاسم الكامل:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">الهاتف:</label>
                <input type="text" id="phone" name="phone" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">العنوان:</label>
                <textarea id="address" name="address" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="front_id_image">صورة الهوية الأمامية:</label>
                <input type="file" id="front_id_image" name="front_id_image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="back_id_image">صورة الهوية الخلفية:</label>
                <input type="file" id="back_id_image" name="back_id_image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="notes">ملاحظات:</label>
                <textarea id="notes" name="notes" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">إضافة موكل</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

@endsection