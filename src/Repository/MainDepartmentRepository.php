<?php

namespace App\Repository;

use App\Entity\MainDepartment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MainDepartment>
 *
 * @method MainDepartment|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainDepartment|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainDepartment[]    findAll()
 * @method MainDepartment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainDepartmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MainDepartment::class);
    }

    //    /**
    //     * @return MainDepartment[] Returns an array of MainDepartment objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?MainDepartment
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
