@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Client</h2>
    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $client->full_name }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address">{{ $client->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="front_id_image">Front ID Image</label>
            <input type="file" class="form-control" id="front_id_image" name="front_id_image">
        </div>
        <div class="form-group">
            <label for="back_id_image">Back ID Image</label>
            <input type="file" class="form-control" id="back_id_image" name="back_id_image">
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes">{{ $client->notes }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
</div>
@endsection