<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class PenggunaController extends Controller
{
    /**
     * Menampilkan semua pengguna
     */
    public function index()
    {
        $penggunas = User::latest()->paginate(5);

        return view('admin.pengguna.index', compact('penggunas'));
    }


    /**
     * Form tambah pengguna
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }


    /**
     * Simpan pengguna baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role' => 'required|in:Admin,User',
            'status' => 'required|in:Aktif,Nonaktif',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('admin.pengguna.index')
            ->with('success', 'Pengguna berhasil ditambahkan.');
    }


    /**
     * Form edit pengguna
     */
    public function edit(User $pengguna)
    {
        return view('admin.pengguna.edit', compact('pengguna'));
    }


    /**
     * Update pengguna
     */
    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($pengguna->id),
            ],

            'role' => 'required|in:Admin,User',
            'status' => 'required|in:Aktif,Nonaktif',

            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'status' => $request->status,
        ];

        // Kalau password diisi, baru ubah password
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $pengguna->update($data);

        return redirect()
            ->route('admin.pengguna.index')
            ->with('success', 'Pengguna berhasil diperbarui.');
    }


    /**
     * Hapus pengguna
     */
    public function destroy(User $pengguna)
    {
        // Supaya akun yang sedang login tidak terhapus
        if (auth()->id() === $pengguna->id) {
            return redirect()
                ->route('admin.pengguna.index')
                ->with('error', 'Akun yang sedang digunakan tidak dapat dihapus.');
        }

        $pengguna->delete();

        return redirect()
            ->route('admin.pengguna.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}