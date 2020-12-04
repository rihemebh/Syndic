<?php


namespace App\Controller;
use App\Entity\House;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class housesController extends AbstractController
{
    /**
     * @Route("/houses", name="houses")
     */
    public function index()
    {
        $houses=$this->getDoctrine()->getRepository(House::class)->findAll();
        return $this->render('houses/houses.html.twig', [
            'controller_name' => 'housesController',
            'houses'=>$houses
        ]);
}}