<?php

namespace App\Repository;

use App\Entity\Commune;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Commune>
 *
 * @method Commune|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commune|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commune[]    findAll()
 * @method Commune[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommuneRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Commune::class);
    }

    public function findByNames(Array $names) {

        $sql = "
        SELECT
            c.id AS commune_id,
            c.name AS commune_name,
            p.id AS province_id,
            p.name AS province_name,
            r.id AS region_id,
            r.name AS region_name
        FROM
            commune c,
            province p,
            region r
        WHERE
            (r.id = p.region_id) AND
            (p.id = c.province_id)";
        
        $preParams = array();
        $preSql = false;
        
        $names = array_map('strtolower', $names);

        if(!empty($names)) {
            foreach ($names as $name) {
                $name = strtolower($name);
                $preSql = "((LOWER(r.name) LIKE '".$name."%') OR (LOWER(p.name) LIKE '".$name."%') OR (LOWER(c.name) LIKE '".$name."%'))";
                if(!($name === end($names))) {
                    $preSql .= " OR";
                }
                array_push($preParams, $preSql);
            }
        }
        
        if(!empty($preParams)) {
            $p = implode(" ", $preParams);
            $sql .= " AND (". $p . ")";
        }
        
        $sql .= " ORDER BY c.id;";

        $stmt = $this->_em->getConnection()->prepare($sql);
        $resultSet = $stmt->executeQuery();
        return $resultSet->fetchAll();
    }

}
