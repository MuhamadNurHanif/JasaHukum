<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Kontak::create($data);

        Mail::send('emails.kontak', ['data' => $data], function ($message) {
            $message->to('trisulasmono@gmail.com')
                ->subject('Pesan Baru dari Form Kontak');
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
