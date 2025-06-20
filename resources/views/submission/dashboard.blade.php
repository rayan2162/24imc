@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Submission Dashboard</h2>

    @if ($submissions->isEmpty())
        <div class="alert alert-warning">No submissions yet.</div>
    @else
        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Track</th>
                        <th>File</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submissions as $index => $submission)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $submission->name }}</td>
                            <td>{{ $submission->email }}</td>
                            <td>{{ $submission->phone }}</td>
                            <td>{{ $submission->track }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $submission->abstract_file) }}" class="btn btn-sm btn-primary" target="_blank">View</a>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($submission->created_at)->format('Y-m-d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
