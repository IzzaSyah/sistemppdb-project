<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document; // Assuming you have a Document model to store the file paths

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kartukeluarga' => 'required|file|mimes:jpg,jpeg,png,pdf',
            'ijazah' => 'required|file|mimes:jpg,jpeg,png,pdf',
            'sertifikat' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        $document1Path = $request->file('kartukeluarga')->store('documents','public');
        $document2Path = $request->file('ijazah')->store('documents','public');
        $document3Path = $request->file('sertifikat') 
        ? $request->file('sertifikat')->store('documents') : null;

        Document::create([
            'kartukeluarga' => $document1Path,
            'ijazah' => $document2Path,
            'sertifikat' => $document3Path,
        ]);

        return back()->with('success', 'Documents uploaded successfully.');
    }
}
