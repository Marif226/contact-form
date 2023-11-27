<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:2|max:50',
            'email' => 'required|email:rfc,dns',
            'message' => 'max:255',
        ]);

        return "Okay";
    }
}
