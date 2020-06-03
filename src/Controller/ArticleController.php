<?php

namespace App\Controller;

use App\Service\DoctrineArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/api/article/list", name="article.list", methods={"GET"})
     * @return JsonResponse
     */
    public function list()
    {
        return $this->json([
            'success' => []
        ]);
    }

    /**
     * @Route("/api/article/create", name="article.create", methods={"GET"})
     * @param DoctrineArticleService $articleService
     * @return JsonResponse
     */
    public function create(DoctrineArticleService $articleService)
    {
        $article = $articleService->create();

        return $this->json([
            'success' => $article
        ]);
    }

    /**
     * @Route("/api/article/{id}/show", name="article.show", requirements={"id"="\d+"}, methods={"GET"})
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        return $this->json([
            'success' => []
        ]);
    }

    /**
     * @Route("/api/article/{id}/update", name="article.update", requirements={"id"="\d+"}, methods={"POST"})
     * @param DoctrineArticleService $articleService
     * @return JsonResponse
     */
    public function update(DoctrineArticleService $articleService)
    {
        return $this->json([
            'success' => []
        ]);
    }

    /**
     * @Route("/api/article/{id}/archive", requirements={"id"="\d+"})
     * @param DoctrineArticleService $articleService
     * @return JsonResponse
     */
    public function archive(DoctrineArticleService $articleService)
    {
        return $this->json([
            'success' => []
        ]);
    }
}
