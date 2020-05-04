<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyNewController extends AbstractController
{
    /**
     * @Route("/", name="my_new")
     */
    public function index()
    {
        return $this->render('my_new/index.html.twig', [
            'controller_name' => 'MyNewController',
        ]);
    }
}
