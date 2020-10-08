<?php

namespace App\Repository;

use App\Entity\Worker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Worker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Worker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Worker[]    findAll()
 * @method Worker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Worker::class);
    }

     /**
      * @return Worker[] Returns an array of Worker objects
      */

    public function findByExampleField($search)
    {
        $query=$this->createQueryBuilder('w');
        if($search->getName()){
             $query= $query->andWhere('w.name LIKE :val ')
                 ->setParameter('val', '%'.$search->getName().'%');
        }
        if($search->getJob()){
            $query= $query->andWhere( 'w.job LIKE :job')
                ->setParameter('job', '%'.$search->getJob().'%');
        }
        if($search->getCin()){
            $query= $query->andWhere(' w.cin LIKE :cin')
                ->setParameter('cin', '%'.$search->getCin().'%');
        }
            $query=$query->getQuery()
            ->getResult()
        ;
        return $query;
    }
   /*
    public function findOneBySomeField($value): ?Worker
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
