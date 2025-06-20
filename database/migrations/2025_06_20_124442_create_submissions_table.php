<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function create()
    {
        $tracks = [
    'AI',
    'ML',
    'Data Science',
    'Mathematics',
    'Statistics',
    'Algebra',
    'Mathematical Biology',
    'Complex Analysis',
    'Mathematical Education',
    'Computational Mathematics',
    'Mathematical Finance',
    'Cryptography and Coding Theory',
    'Mathematical Modelling',
    'Data Science and Machine Learning',
    'Mathematical Physics',
    'Differential Equations',
    'Number Theory',
    'Discrete Mathematics',
    'Numerical Analysis',
    'Fluid Mechanics',
    'Operations Research',
    'Fuzzy Mathematics',
    'Optimization Techniques',
    'Functional Analysis',
    'Partial Differential Equations',
    'Geometry and Topology',
    'Probability and Statistics',
    'Graph Theory and Network Analysis',
    'Ring Theory',
    'Computational Fluid Dynamics'
];

        return view('submission.create', compact('tracks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'track' => 'required|string',
            'abstract' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('abstract')->store('abstracts', 'public');

        DB::table('submissions')->insert([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'track' => $request->input('track'),
            'abstract_file' => $path,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Submission successful!');
    }
}
