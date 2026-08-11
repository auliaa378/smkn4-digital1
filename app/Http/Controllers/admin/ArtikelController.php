<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Menampilkan semua artikel
     */
    public function index(Request $request)
    {
        $query = Artikel::query();

        // Search
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // Filter kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $artikels = $query
            ->latest('tanggal')
            ->paginate(4)
            ->withQueryString();

        return view('admin.artikel.index', compact('artikels'));
    }


    /**
     * Form tambah artikel
     */
    public function create()
    {
        return view('admin.artikel.create');
    }


    /**
     * Simpan artikel
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('artikel', 'public');
        }

        Artikel::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }


    /**
     * Form edit artikel
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }


    /**
     * Update artikel
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $gambar = $artikel->gambar;

        if ($request->hasFile('gambar')) {

            if ($gambar && Storage::disk('public')->exists($gambar)) {
                Storage::disk('public')->delete($gambar);
            }

            $gambar = $request->file('gambar')->store('artikel', 'public');
        }

        $artikel->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
            'gambar' => $gambar,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }


    /**
     * Hapus artikel
     */
    public function destroy(Artikel $artikel)
{
    if ($artikel->gambar) {

        $foto = public_path('images/artikel/' . $artikel->gambar);

        if (file_exists($foto)) {
            unlink($foto);
        }
    }

    $artikel->delete();

    return redirect()
        ->route('admin.artikel.index')
        ->with('success', 'Artikel berhasil dihapus.');
}
}