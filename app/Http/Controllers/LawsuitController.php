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
    public function edit($id)
    {
        $lawsuit = Lawsuit::findOrFail($id);
        return view('lawsuits.edit', compact('lawsuit'));
    }

    public function update(Request $request, $id)
    {
        $lawsuit = Lawsuit::findOrFail($id);
        $lawsuit->update($request->all());
        return redirect()->route('lawsuits.index')->with('success', 'تم تحديث القضية بنجاح');
    }

    public function destroy(Lawsuit $lawsuit)
    {
        $lawsuit->delete();
        return redirect()->route('lawsuits.index');
    }
}
