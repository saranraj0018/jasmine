<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualMarkerController extends Controller
{
    public function index()
    {
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
                'title' => 'Valankulam',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Periyakulam Lake',
                'url'   => url('/markers/selva-chinthamani'),
            ],
            [
                'title' => 'Selva Chinthamani Kulam',
                'seats' => 10,
                'image' => 'img/visual.png',
                'place' => 'Gandhipuram',
                'url'   => url('/markers/selva-chinthamani'),
            ],
        ];

        // Return the view with compacted data
        return view('user.frontpage.VisualMarkers.Visual_Markers', compact('locations'));
    }
}
