<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client($request->all());
        $client->save();

        // تحقق من وجود الملف
        if ($request->hasFile('front_id_image')) {
            // رفع الصورة وتخزينها في مجلد 'images'
            $path = $request->file('front_id_image')->store('images');

            // حفظ البيانات في قاعدة البيانات
            Client::create([
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'front_id_image' => $path,
                'back_id_image' => $request->file('back_id_image')->store('images'),
                'notes' => $request->input('notes'),
            ]);
        }
        return redirect()->route('clients.index');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }



    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
