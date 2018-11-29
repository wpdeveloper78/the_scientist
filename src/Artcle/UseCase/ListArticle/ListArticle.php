<?php

namespace LaravelDay\Article\UseCas\ListArticle;

class ListArticle
{
    public function __invoke():array{

        return[
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ]
        ];
    }

}