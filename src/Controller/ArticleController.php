<?php


namespace App\Controller;
use App\Entity\Article;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends AbstractController
{

    public function index() : Response
    {
        return $this->render('article/article.twig', [
            'article' => 'www'
        ]);
    }
}