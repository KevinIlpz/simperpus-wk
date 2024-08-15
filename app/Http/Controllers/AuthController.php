<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'NIS' => 'required|string',
            'Password' => 'required|string',
        ]);

        $siswa = Siswa::where('NIS', $validated['NIS'])->first();

        if (!$siswa || !Hash::check($validated['Password'], $siswa->Password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Here, you would generate a token and return it, or start a session, etc.
        return response()->json(['message' => 'Login successful']);
    }
}

