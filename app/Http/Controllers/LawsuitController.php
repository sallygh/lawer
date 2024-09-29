<?php

namespace App\Http\Controllers;

use App\Models\Lawsuit;
use App\Models\Client;
use Illuminate\Http\Request;

class LawsuitController extends Controller
{
    public function index()
    {
        $lawsuits = Lawsuit::with(['plaintiff', 'defendant'])->get();
        return view('lawsuits.index', compact('lawsuits'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('lawsuits.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $lawsuit = new Lawsuit($request->all());
        $lawsuit->save();
        return redirect()->route('lawsuits.index');
    }

    public function edit(Lawsuit $lawsuit)
    {
        $clients = Client::all();
        return view('lawsuits.edit', compact('lawsuit', 'clients'));
    }

    public function update(Request $request, Lawsuit $lawsuit)
    {
        $lawsuit->update($request->all());
        return redirect()->route('lawsuits.index');
    }

    public function destroy(Lawsuit $lawsuit)
    {
        $lawsuit->delete();
        return redirect()->route('lawsuits.index');
    }
}
