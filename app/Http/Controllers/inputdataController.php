<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inputdata; // Perbaiki penamaan model ke Inputdata
use Illuminate\Support\Facades\Log;

class inputdataController extends Controller
{
    public function inputdata()
    {
        $images = Inputdata::all();
        return view('inputdata', compact('images'));
    }
 public function kategori()
    {
        $images = Inputdata::all();
        return view('kategori', compact('images'));
    }

    public function home()
    {
        $images = Inputdata::all();
        return view('home', compact('images'));
    }
   
    
    //filter kategori
    public function kuliner()
{
    $images = Inputdata::where('category', 'kuliner')->get(); // Hanya ambil data dengan kategori 'kuliner'
    return view('kuliner', compact('images'));
}

public function oleholeh()
{
    $images = Inputdata::where('category', 'oleh-oleh')->get(); // Perbaiki nama kategori menjadi 'oleh-oleh'
    return view('oleholeh', compact('images'));
}

public function kerajinantangan()
{
    $images = Inputdata::where('category', 'kerajinan tangan')->get(); // Sesuaikan nilai kategori di sini
    return view('kerajinantangan', compact('images'));
}



//
    public function test()
    {
        $images = Inputdata::all();
        return view('test', compact('images'));
    }

    public function store(Request $request)
    {
        // Hapus 'title' dari validasi
        $request->validate([
            'description' => 'required|string',
            'category' => 'required|in:kuliner,oleh-oleh,kerajinan tangan',
            'price' => 'required|numeric',
            'whatsapp_link' => 'required|url',
            'google_maps_link' => 'required|url',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Log::info('Data yang diterima:', $request->all());

        $image = new Inputdata(); // Perbaiki penamaan model ke Inputdata
        // Hapus pengaturan title
        $image->description = $request->description;
        $image->category = $request->category;
        $image->price = $request->price;
        $image->whatsapp_link = $request->whatsapp_link;
        $image->google_maps_link = $request->google_maps_link;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $image->image_path = 'uploads/' . $imageName;
        }

        $image->save();

        return redirect()->route('inputdata')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $image = Inputdata::findOrFail($id);
        return view('edit_inputdata', compact('image'));
    }

    public function update(Request $request, $id)
    {
        // Hapus 'title' dari validasi
        $request->validate([
            'description' => 'required|string',
            'category' => 'required|in:kuliner,oleh-oleh,kerajinan tangan',
            'price' => 'required|numeric',
            'whatsapp_link' => 'required|url',
            'google_maps_link' => 'required|url',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = Inputdata::findOrFail($id);
        // Hapus pengaturan title
        $image->description = $request->description;
        $image->category = $request->category;
        $image->price = $request->price;
        $image->whatsapp_link = $request->whatsapp_link;
        $image->google_maps_link = $request->google_maps_link;

        if ($request->hasFile('image')) {
            if ($image->image_path && file_exists(public_path($image->image_path))) {
                unlink(public_path($image->image_path));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $image->image_path = 'uploads/' . $imageName;
        }

        $image->save();

        return redirect()->route('inputdata')->with('success', 'Data berhasil di update!');
    }

    public function destroy($id)
    {
        $image = Inputdata::findOrFail($id);
        if ($image->image_path && file_exists(public_path($image->image_path))) {
            unlink(public_path($image->image_path));
        }
        $image->delete();

        return redirect()->route('inputdata')->with('success', 'Data berhasil dihapus!');
    }
}

