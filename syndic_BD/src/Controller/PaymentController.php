<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    /**
     * @Route("/payment", name="payment")
     */
    public function index()
    {
        return $this->render('houses/payment/payment.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }
    /**
     * @Route("/payment2", name="payment2")
     */
    public function index1()
    {
        return $this->render('houses/payment/payment2.html.twig', [
            'controller_name' => 'Payment2Controller',
        ]);
    }
    /**
     * @Route("/payann", name="pay_ann")
     */
    public function index2()
    {
        return $this->render('houses/payment/payAnn.html.twig', [
            'controller_name' => 'PayAnnController',
        ]);
    }
    /**
     * @Route("/histPay", name="hist")
     */
    public function index3()
    {
        return $this->render('houses/histpay.html.twig', [
            'controller_name' => 'histController',
        ]);
    }
    /**
     * @Route("/month", name="month")
     */
    public function index4()
    {
        return $this->render('houses/payMonth.html.twig', [
            'controller_name' => 'payMonthController',
        ]);
    }

    /**
     * @Route("/confirm", name="confirm")
     */
    public function index5()
    {
        return $this->render('houses/payment/confirm.html.twig', [
            'controller_name' => 'ConfirmController',
        ]);
    }
}
