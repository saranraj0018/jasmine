<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'lighting' => 'required|string',
            'type' => 'required|string',
            'size' => 'required|string',
        ]);

        // You can now process booking or redirect
        return redirect()->route('booking.summary')->with('data', $validated);
    }
}
