<?php

namespace App\Services;

use GuzzleHttp\Client;

class GitHubService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.github.com/',
            'headers' => [
                'Authorization' => 'token ' . env('GITHUB_PERSONAL_TOKEN'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);
    }

    public function getAssignedIssues()
    {
        $response = $this->client->get('issues', [
            'query' => ['filter' => 'assigned', 'state' => 'open'],
        ]);

        return json_decode($response->getBody(), true);
    }

    public function getIssueDetails($issueUrl)
    {
        $response = $this->client->get($issueUrl);

        return json_decode($response->getBody(), true);
    }
}
