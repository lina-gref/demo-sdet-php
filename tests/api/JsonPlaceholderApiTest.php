<?php

namespace Tests\Api;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class JsonPlaceholderApiTest extends TestCase
{
    public function testGetPostsReturnsSuccess(): void
    {
        // Arrange: Set up our HTTP client
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'timeout'  => 2.0,
        ]);

        // Act: Make the API request
        $response = $client->request('GET', 'posts/1');

        // Assert: Check that the result is what we expect
        $this->assertEquals(200, $response->getStatusCode());
    }
}