@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices List</title>
</head>

<body>
    <h1>Invoices List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Lawsuit</th>
                <th>Amount</th>
                <th>Invoice Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->lawsuit->subject ?? 'N/A' }}</td>
                <td>{{ $invoice->amount }}</td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>{{ $invoice->status }}</td>
                <td>
                    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

@endsection