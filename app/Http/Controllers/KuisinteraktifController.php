<?php

namespace App\Http\Controllers;

use App\Models\Kuisinteraktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KuisInteraktifController extends Controller
{
    // tampil data (biasanya cuma 1)
    public function index()
    {
        $data = Kuisinteraktif::first();
        return response()->json($data);
    }

    // simpan data
    public function store(Request $request)
    {
        $request->validate([
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cerita_kami' => 'nullable|string',
        ]);

        $data = new Kuisinteraktif();

        if ($request->hasFile('foto_utama')) {
            $data->foto_utama = $request->file('foto_utama')
                ->store('kuis-interaktif', 'public');
        }

        $data->cerita_kami = $request->cerita_kami;
        $data->save();

        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $data
        ]);
    }

    // update data
    public function update(Request $request, $id)
    {
        $data = Kuisinteraktif::findOrFail($id);

        $request->validate([
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cerita_kami' => 'nullable|string',
        ]);

        if ($request->hasFile('foto_utama')) {
            if ($data->foto_utama) {
                Storage::disk('public')->delete($data->foto_utama);
            }

            $data->foto_utama = $request->file('foto_utama')
                ->store('kuis-interaktif', 'public');
        }

        $data->cerita_kami = $request->cerita_kami;
        $data->save();

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ]);
    }
}
