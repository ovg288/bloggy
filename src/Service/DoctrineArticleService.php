<?php

namespace App\Service;

use App\Entity\Article;

class DoctrineArticleService implements IArticleService
{
    public function create(): Article
    {
        $dt = new \DateTime("now");

        $article = new Article();
        $article->setName('Test');
        $article->setAnnounce('Announce');
        $article->setContent('Content');
        $article->setCreatedAt($dt);
        $article->setUpdatedAt($dt);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($article);
    }

    public function update(Article $article): Article
    {

    }

    public function destroy(Article $article)
    {

    }

    public function archive(Article $article)
    {

    }
}