<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index()
    {
        $locations = [
            'Kurichi Kulam' => [
                ['name' => 'Pollachi Highway', 'plots' => 45, 'premium' => 12, 'exclusive' => 8],
                ['name' => 'City Center Route', 'plots' => 32, 'premium' => 15, 'exclusive' => 5],
            ],
            'Valankulam' => [
                ['name' => 'Thiruvalluvar Statue', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
                ['name' => 'Main Road', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
                ['name' => 'Main Road', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
            ],
            'Periyakulam' => [
                ['name' => 'SBOA School Road', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
                ['name' => 'Market Area', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
                ['name' => 'Main Road', 'plots' => 45, 'series' => 'Series A', 'premium' => 12, 'exclusive' => 8],
            ],
        ];

        return view('ads.available', compact('locations'));
    }

    public function book($area)
    {
        $type = request('type');
        return view('ads.book', compact('area', 'type'));
    }
}





