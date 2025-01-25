<!DOCTYPE html>
<html>
<head>
    <title>GitHub Issue Details</title>
</head>
<body>
    <a href="{{ route('issues.index') }}">Back to Issues</a>
    <h1>Issue #{{ $issue['number'] }}</h1>
    <h2>{{ $issue['title'] }}</h2>
    <p>{{ $issue['body'] }}</p>
    <p>Created: {{ \Carbon\Carbon::parse($issue['created_at'])->diffForHumans() }}</p>
</body>
</html>
