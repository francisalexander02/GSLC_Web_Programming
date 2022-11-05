<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index()
    {
        return view('problems', [
            'problems' => Problem::all()
        ]);
    }
}
