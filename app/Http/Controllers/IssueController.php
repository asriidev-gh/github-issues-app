<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;

class IssueController extends Controller
{
    protected $gitHubService;

    public function __construct(GitHubService $gitHubService)
    {
        $this->gitHubService = $gitHubService;
    }

    public function index()
    {
        $issues = $this->gitHubService->getAssignedIssues();
        return view('issues.index', ['issues' => $issues]);
    }

    public function show($id)
    {
        $issues = $this->gitHubService->getAssignedIssues();
        $issue = collect($issues)->firstWhere('id', $id);

        return view('issues.show', ['issue' => $issue]);
    }
}
