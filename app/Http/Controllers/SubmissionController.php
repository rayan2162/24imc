<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    // Show the submission form
    public function create()
    {
        return view('submission.create');
    }

    // Handle the submitted form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'track' => 'required|string',
            'abstract' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Upload file to storage/app/public/abstracts
        $filePath = $request->file('abstract')->store('abstracts', 'public');

        // Insert into database using Query Builder
        DB::table('submissions')->insert([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'track' => $request->input('track'),
            'abstract_file' => $filePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Submission successful!');
    }

    // Admin dashboard to view submissions
    public function dashboard()
    {
        $submissions = DB::table('submissions')->orderBy('created_at', 'desc')->get();
        return view('submission.dashboard', compact('submissions'));
    }
}
