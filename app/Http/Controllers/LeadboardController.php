<?php

namespace App\Http\Controllers;

use App\Models\Leadboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadboardController extends Controller
{
    public function index()
    {
        $data = Leadboard::first();
        return view('leadboard.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'cerita_kami' => 'nullable|string',
        ]);

        $data = Leadboard::first() ?? new Leadboard();

        if ($request->hasFile('foto_utama')) {
            if ($data->foto_utama) {
                Storage::disk('public')->delete($data->foto_utama);
            }

            $data->foto_utama = $request->file('foto_utama')
                ->store('leadboard', 'public');
        }

        $data->cerita_kami = $request->cerita_kami;
        $data->save();

        return redirect()->back()->with('success', 'Data Leadboard berhasil disimpan ✨');
    }
}
