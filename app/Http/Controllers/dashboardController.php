<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $locations = [
            [
                'title' => 'Ukkadam Lake',
                'date' => '3 months. Started 2024-01-15',
                'amout' => '$45,000',
                'active' => 'Active',
               
            ],
           
        ];

        // Return the view with compacted data
        return view('user.frontpage.dashboard.Dashboard', compact('locations'));
    }
}
