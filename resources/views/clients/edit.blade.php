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

    <div class="container text-center rtl">
        <h2 class="text-right">Edit Client</h2>
        <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3 text-right">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $client->full_name }}">
            </div>
            <div class="mb-3 text-right">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
            </div>
            <div class="mb-3 text-right">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address">{{ $client->address }}</textarea>
            </div>
            <div class="mb-3 text-right">
                <label for="front_id_image" class="form-label">Front ID Image</label>
                <input type="file" class="form-control" id="front_id_image" name="front_id_image">
            </div>
            <div class="mb-3 text-right">
                <label for="back_id_image" class="form-label">Back ID Image</label>
                <input type="file" class="form-control" id="back_id_image" name="back_id_image">
            </div>
            <div class="mb-3 text-right">
                <label for="notes" class="form-label">Notes</label>
                <textarea class="form-control" id="notes" name="notes">{{ $client->notes }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Client</button>
        </form>
    </div>

    @endsection