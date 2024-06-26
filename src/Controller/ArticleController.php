<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{slug}', name: 'article_show')]
    public function show(?Article $article): Response
    {

        if (!$article) {
            return $this->redirectToRoute('app_homepage');
        }
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }
}
