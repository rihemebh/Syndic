<?php


namespace App\Controller;
use App\Entity\Search;
use App\Entity\Worker;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class workerController extends AbstractController
{
    /**
     * @Route("/workers", name="workers")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {   $search= new Search();
        $workers=$paginator->paginate(
            $this->getDoctrine()->getRepository(Worker::class)->findByExampleField($search),
            $request->query->getInt('page',1), 4

            );

        $form=$this->createForm(SearchType::class, $search);
        $form->handleRequest($request);
        return $this->render('staff/worker.html.twig', [
            'controller_name' => 'workerController',
            'workers'=> $workers,
            'form' => $form->createView(),
        ]);
    }}