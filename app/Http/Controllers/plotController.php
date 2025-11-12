<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plotController extends Controller
{
    public function index()
    {
        $plots = [
            [
                'name' => 'Ukkadam Lake',
                'location' => 'Ukkadam, Coimbatore',
                'availability' => 'Available',
                'color' => 'green',
                'price' => '$15,000 (Per month)',
                'seats' => 10
            ],
            [
                'name' => 'RS Puram Junction',
                'location' => 'RS Puram, Coimbatore',
                'availability' => 'Limited',
                'color' => 'yellow',
                'price' => '$45,000 (Per month)',
                'seats' => 20
            ],
            [
                'name' => 'Gandhipuram Signal',
                'location' => 'Gandhipuram, Coimbatore',
                'availability' => 'Unavailable',
                'color' => 'red',
                'price' => '$50,000 (Per month)',
                'seats' => 8
            ],
            [
                'name' => 'RS Puram Junction',
                'location' => 'RS Puram, Coimbatore',
                'availability' => 'Limited',
                'color' => 'yellow',
                'price' => '$45,000 (Per month)',
                'seats' => 20
            ],
            [
                'name' => 'RS Puram Junction',
                'location' => 'RS Puram, Coimbatore',
                'availability' => 'Limited',
                'color' => 'yellow',
                'price' => '$45,000 (Per month)',
                'seats' => 20
            ],
            [
                'name' => 'Ukkadam Lake',
                'location' => 'Ukkadam, Coimbatore',
                'availability' => 'Available',
                'color' => 'green',
                'price' => '$15,000 (Per month)',
                'seats' => 10
            ],
            [
                'name' => 'Gandhipuram Signal',
                'location' => 'Gandhipuram, Coimbatore',
                'availability' => 'Unavailable',
                'color' => 'red',
                'price' => '$50,000 (Per month)',
                'seats' => 8
            ],
        ];

        return view('user.frontpage.plots.index', compact('plots'));
    }
}
