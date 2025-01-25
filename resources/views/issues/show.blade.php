@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Back to List Button -->
        <a href="{{ route('issues.index') }}" class="btn btn-secondary mb-4">Back to List</a>

        <!-- Card Component for Issue Details -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Issue #{{ $issue['number'] }}: {{ $issue['title'] }}</h2>
            </div>
            <div class="card-body">
                <!-- Issue Creation Date -->
                <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($issue['created_at'])->format('F d, Y H:i') }}</p>
                
                <!-- Divider -->
                <hr>

                <!-- Issue Details -->
                <p><strong>Details:</strong></p>
                <p>{{ $issue['body'] }}</p>
            </div>
        </div>
    </div>
@endsection
