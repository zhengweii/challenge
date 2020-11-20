<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index() {
      $availableLabs = [
          [
            'labName' => 'FinTech Innovation Lab',
            'location' => 'Accenture, Toronto'
          ],
          [
            'labName' => 'Cognitive Analytics & Visualization Lab',
            'location' => 'Toronto, Canada'
          ]
      ];

      return view('lab', compact('availableLabs'));
    }
}
