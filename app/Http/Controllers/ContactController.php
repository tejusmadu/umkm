<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function kontak()
    {
        $contacts = Contact::latest()->get();

        return view('kontak', compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Buat entri baru di tabel contacts
        Contact::create($validatedData);

        return redirect()->route('create')->with('success', 'Kontak Anda telah berhasil terkirim.');
    }
    public function edit(Contact $contact)
    {
        return view('edit_kontak', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        // Validasi data input untuk update
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        // Update data kontak
        $contact->update($validatedData);

        return redirect()->route('kontak')->with('success', 'Data kontak berhasil diperbarui.');
    }
    public function destroy(Contact $contact)
    {
        // Hapus data kontak
        $contact->delete();

        return redirect()->route('kontak')->with('success', 'Data kontak berhasil dihapus.');
    }
}
