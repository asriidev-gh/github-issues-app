@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Assigned GitHub Issues</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Issue Number</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($issues as $issue)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $issue['number'] }}</td>
                        <td>{{ $issue['title'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($issue['created_at'])->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('issues.show', ['id' => $issue['id']]) }}" class="btn btn-primary btn-sm">
                                View
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
