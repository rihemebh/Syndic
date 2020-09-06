<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class workerController extends AbstractController
{
    /**
     * @Route("/workers", name="workers")
     */
    public function index()
    {
        return $this->render('staff/worker.html.twig', [
            'controller_name' => 'workerController',
        ]);
    }}