<!DOCTYPE html>
<html>
<head>
    <title>GitHub Issues</title>
</head>
<body>
    <h1>Assigned GitHub Issues</h1>
    <ul>
        @foreach ($issues as $issue)
            <li>
                <a href="{{ route('issues.show', ['id' => $issue['id']]) }}">
                    #{{ $issue['number'] }} - {{ $issue['title'] }}
                </a>
                <p>Created: {{ \Carbon\Carbon::parse($issue['created_at'])->diffForHumans() }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
