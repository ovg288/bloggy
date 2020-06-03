<?php

namespace App\Service;

use App\Entity\Article;

interface IArticleService
{
    public function create();

    public function destroy(Article $article);

    public function update(Article $article);

    public function archive(Article $article);
}