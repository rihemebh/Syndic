<?php


namespace App\Controller;
use App\Entity\WorkerSearch;
use App\Entity\Worker;
use App\Repository\WorkerRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ObjectManager;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Form\Extension\Core\Type\SearchType;
use \App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class workerController extends AbstractController
{

    private $repository;


    public function __construct(WorkerRepository $repo)
    {
        $this->repository=$repo;

    }

    /**
     * @Route("/workers", name="workers")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {   $search= new WorkerSearch();
        $form=$this->createForm(SearchType::class, $search);
        $form->handleRequest($request);
        $workers=$paginator->paginate(
            $this->repository->findByField($search),
            $request->query->getInt('page',1), 4);

        return $this->render('staff/worker.html.twig', [
            'controller_name' => 'workerController',
            'workers'=> $workers,
            'form' => $form->createView(),
        ]);
    }}