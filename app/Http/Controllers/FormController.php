<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        $formulir = Formulir::where('id_user', Auth::id())->first();
        return view('user.form', compact('formulir'));
    }

    public function submitForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'address' => 'required|string|max:500',
            'package' => 'required|string'
        ]);

        // Find the existing formulir for the authenticated user, or create a new instance
        Formulir::updateOrCreate(
            ['id_user' => Auth::id()], // Kriteria pencarian
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'birthdate' => $request->input('birthdate'),
                'address' => $request->input('address'),
                'asalsekolah' => $request->input('asalsekolah'),
                'nisn' => $request->input('nisn'),
                'nilai' => $request->input('nilai'),
                'kk' => $request->input('kk'),
                'package' => $request->input('package'),
                'nama_ayah' => $request->input('nama_ayah'),
                'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
                'nik_ayah' => $request->input('nik_ayah'),
                'nama_ibu' => $request->input('nama_ibu'),
                'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
                'nik_ibu' => $request->input('nik_ibu')
            ]
        );

        // Redirect back to the form page with success message
        return redirect()->back()->with('success', 'Formulir berhasil disimpan');

    }


    public function uploadDocument(Request $request)
    {
        // Validate the uploaded files
        $request->validate([
            'kartukeluarga' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'ijazah' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'sertifikat' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Store the uploaded files in the desired folder with original names
        $kartukeluargaName = $request->file('kartukeluarga')->getClientOriginalName();
        $ijazahName = $request->file('ijazah')->getClientOriginalName();
        $sertifikatName = $request->file('sertifikat')
            ? $request->file('sertifikat')->getClientOriginalName()
            : null;

        $request->file('kartukeluarga')->storeAs('public/uploads', $kartukeluargaName);
        $request->file('ijazah')->storeAs('public/uploads', $ijazahName);

        if ($sertifikatName) {
            $request->file('sertifikat')->storeAs('public/uploads', $sertifikatName);
        }

        // Save the filenames and user_id to the database
        $document = new Document();
        $document->id_user = auth()->user()->id;
        $document->kartukeluarga = $kartukeluargaName;
        $document->ijazah = $ijazahName;
        $document->sertifikat = $sertifikatName;
        $document->save();

        return back()->with('success', 'Documents uploaded and saved successfully.');
    }


}
