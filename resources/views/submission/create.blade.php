@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Call for Papers - Submission Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('submission.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label class="form-label">Full Name *</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Phone Number *</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Email Address *</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Select Track *</label>
            <select name="track" class="form-select" required>
                <option value="">-- Select --</option>
                <option>AI</option>
                <option>ML</option>
                <option>Data Science</option>
                <option>Mathematics</option>
                <option>Statistics</option>
                <option>Algebra</option>
                <option>Mathematical Biology</option>
                <option>Complex Analysis</option>
                <option>Mathematical Education</option>
                <option>Computational Mathematics</option>
                <option>Mathematical Finance</option>
                <option>Cryptography and Coding Theory</option>
                <option>Mathematical Modelling</option>
                <option>Data Science and Machine Learning</option>
                <option>Mathematical Physics</option>
                <option>Differential Equations</option>
                <option>Number Theory</option>
                <option>Discrete Mathematics</option>
                <option>Numerical Analysis</option>
                <option>Fluid Mechanics</option>
                <option>Operations Research</option>
                <option>Fuzzy Mathematics</option>
                <option>Optimization Techniques</option>
                <option>Functional Analysis</option>
                <option>Partial Differential Equations</option>
                <option>Geometry and Topology</option>
                <option>Probability and Statistics</option>
                <option>Graph Theory and Network Analysis</option>
                <option>Ring Theory</option>
                <option>Computational Fluid Dynamics</option>
            </select>
        </div>

        <div class="col-12">
            <label class="form-label">Upload Abstract (PDF/DOC/DOCX) *</label>
            <input type="file" name="abstract" class="form-control" accept=".pdf,.doc,.docx" required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
