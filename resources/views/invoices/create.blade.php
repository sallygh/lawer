<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Invoice</title>
</head>

<body>
    <h1>Add New Invoice</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <label for="lawsuit_id">Lawsuit:</label>
        <select id="lawsuit_id" name="lawsuit_id">
            @foreach ($lawsuits as $lawsuit)
            <option value="{{ $lawsuit->id }}">{{ $lawsuit->subject }}</option>
            @endforeach
        </select><br><br>

        <label for="amount">Amount:</label>
        <input type="number" step="0.01" id="amount" name="amount" required><br><br>

        <label for="invoice_date">Invoice Date:</label>
        <input type="date" id="invoice_date" name="invoice_date" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="مدفوعة">مدفوعة</option>
            <option value="غير مدفوعة">غير مدفوعة</option>
        </select><br><br>

        <button type="submit">Add Invoice</button>
    </form>
</body>

</html>