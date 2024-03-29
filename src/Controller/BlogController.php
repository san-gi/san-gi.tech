<?php

namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blogCode', name: 'blogCode')]
    public function blogCode(): Response
    {
        return $this->render('blog/indexCode.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blogRando', name: 'blogRando')]
    public function blogRando(): Response
    {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        return $this->render('blog/indexRando.html.twig', [
            'categories' => $categories
        ]);
    }

}
