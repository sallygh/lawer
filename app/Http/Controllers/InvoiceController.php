<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Lawsuit;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('lawsuit')->get();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        $lawsuits = Lawsuit::all();
        return view('invoices.create', compact('lawsuits'));
    }

    public function store(Request $request)
    {
        $invoice = new Invoice($request->all());
        $invoice->save();
        return redirect()->route('invoices.index');
    }

    public function edit(Invoice $invoice)
    {
        $lawsuits = Lawsuit::all();
        return view('invoices.edit', compact('invoice', 'lawsuits'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        return redirect()->route('invoices.index');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
