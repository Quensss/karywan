<?php

namespace App\Http\Controllers;

use App\Models\ClientRequest;
use Illuminate\Http\Request;

class ClientRequestController extends Controller
{
    // Menampilkan form untuk menambahkan permintaan client
    public function create()
    {
        return view('client-requests.create');
    }

    // Menyimpan data permintaan client ke database
    public function store(Request $request)
    {
        // Validasi data yang diinputkan
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'jumlah_pegawai' => 'required|integer|min:1',
            'lokasi' => 'required|string|max:255',
            'durasi_kontrak' => 'required|string|max:255',
            'kualifikasi' => 'required|string',
        ]);

        // Menyimpan data ke database
        ClientRequest::create($validated);

        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('client-requests.create')->with('success', 'Permintaan berhasil ditambahkan!');
    }

    public function index()
    {
        // Mengambil semua data client_requests dari database
        $clientRequests = ClientRequest::all();

        // Mengirimkan data ke view 'dashboard'
        return view('dashboard', compact('clientRequests'));
    }

}

