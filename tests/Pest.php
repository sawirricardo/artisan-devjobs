<?php

use Illuminate\Support\Facades\Http;
use Sawirricardo\ArtisanDevjobs\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Http::fake([
            'larajobs.com/*' => Http::response([
                [
                    'id' => 2760,
                    'organization' => 'Test',
                    'title' => 'Senior Laravel Developer',
                    'location' => 'Remove / EST Timezone',
                    'type' => null,
                    'url' => 'https://example.com',
                    'salary' => null,
                    'published_at' => '2022-09-12T17:02:47.000000Z',
                    'tags' => [
                        ['name' => 'php', 'slug' => 'php'],
                        ['name' => 'vue', 'slug' => 'vue'],
                        ['name' => 'react', 'slug' => 'react'],
                        ['name' => 'senior', 'slug' => 'senior'],
                    ],
                ],
            ], 200),
            'vuejobs.com/*' => Http::response([
                [
                    'id' => 2760,
                    'company' => [
                        'name' => 'Test',
                    ],
                    'title' => 'Senior Vue Laravel Developer',
                    'location' => 'Remove / EST Timezone',
                    'type' => null,
                    'url' => 'https://example.com',
                    'published_at' => [
                        'date' => '2022-10-12',
                        'for_humans' => '5 hours ago',
                    ],
                ],
            ], 200),
        ]);
    })
    ->in(__DIR__);
