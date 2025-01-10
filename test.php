

<?php
/*
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$apiKey = '2ef4961d97de49b1be07ae0933792552';
$client = new Client(['base_uri' => 'https://newsapi.org/v2/']);

// Fetch data for each section
$topHeadlines = getTopHeadlines($client, $apiKey);

// Function to get top headlines
function getTopHeadlines($client, $apiKey) {
    // API call for top headlines
    $response = $client->request('GET', 'everything', [
        'query' => [
            'q' => 'business',
            'apiKey' => $apiKey,
        ]
    ]);
    return json_decode($response->getBody(), true);
}

print_r($topHeadlines);
?>

