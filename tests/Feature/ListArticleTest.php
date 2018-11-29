<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListArticleTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function shouldListArticle()
    {
        $response = $this->get('api/article');

        $response->assertstatus(200);
        $response->assertjson([

            'title' => 'Articolo 1',
            'body' => 'Questo è un articolo',
            'creationDate' => '2018-11-29 00:00:00',

        ]);
    }
}