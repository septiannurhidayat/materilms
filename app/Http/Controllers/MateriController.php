<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Log;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        
        // Log data untuk debugging
        Log::info($materi);
        
        // Jika koleksi kosong, tambahkan handling di sini
        if ($materi->isEmpty()) {
            return view('materi.index', ['message' => 'No data found', 'materi' => $materi]);
        }
        
        return view('materi.index', compact('materi'));
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'meeting_number' => 'required|integer',
            'file' => 'nullable|file',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('materi_files', 'public');
            $validatedData['file_path'] = $filePath;
        }

        // Simpan data
        $materi = Materi::create($validatedData);

        return redirect()->route('materi.index')->with('success', 'Materi created successfully.');
    }

    public function show($id)
{
    Log::info("Trying to find Materi with ID: " . $id);
    $materi = Materi::find($id);
    if (!$materi) {
        Log::warning("Materi not found with ID: " . $id);
        abort(404, 'Materi not found');
    }
    Log::info("Materi found: " . $materi);
    return view('materi.show', compact('materi'));
}


    
    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        return view('materi.edit', compact('materi'));
    }
    
    public function update(Request $request, $id)
    {
        // Find the Materi to update
        $materi = Materi::findOrFail($id);

        // Validasi data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'meeting_number' => 'required|integer',
            'file' => 'nullable|file',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('materi_files', 'public');
            $validatedData['file_path'] = $filePath;
        }

        // Update data
        $materi->update($validatedData);

        return redirect()->route('materi.index')->with('success', 'Materi updated successfully.');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();
        return redirect()->route('materi.index')->with('success', 'Materi deleted successfully.');
    }
}
