<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig');
    }
    #[Route('/add', name: 'app_add')]
    public function ADD(): Response
    {
        return $this->render('produit/produit-add.html.twig');
    }
    #[Route('/list', name: 'app_list')]
    public function List(): Response
    {
        return $this->render('produit/produit-list.html.twig');
    }
}
