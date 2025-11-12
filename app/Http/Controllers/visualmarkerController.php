<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualMarkerController extends Controller
{
    public function index()
    {
        // Static data (you can later replace with DB data)
        $locations = [
            [
                'title' => 'Valankulam',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Periyakulam Lake',
                'url'   => url('/markers/valankulam'),
            ],
            [
                'title' => 'Periyakulam',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Avinashi Road',
                'url'   => url('/markers/periyakulam'),
            ],
            [
                'title' => 'Selva Chinthamani Kulam',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Gandhipuram',
                'url'   => url('/markers/selva-chinthamani'),
            ],
            [
                'title' => 'Valankulam (Duplicate)',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Periyakulam Lake',
                'url'   => url('/markers/valankulam-2'),
            ],
            [
                'title' => 'Selva Chinthamani Kulam (Duplicate)',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Gandhipuram',
                'url'   => url('/markers/selva-chinthamani-2'),
            ],
        ];

        // ✅ Return view properly with compact() variable
        return view('user.frontpage.VisualMarkers.Visual_Markers', compact('locations'));
    }
}
