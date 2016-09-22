<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 22/09/16
 * Time: 16:35
 */

namespace VoApi;
use Doctrine\DBAL\Connection;


class ClientDco
{
    private $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    protected function getDb()
    {
        return $this->db;
    }


    public function findAll()
    {
        $sql = "SELECT * FROM Client";
        $result = $this->getDb()->fetchAll($sql);

        $entities = array();
        foreach ( $result as $row ) {
            $id = $row['id'];
            $entities[$id] = $this->buildDomainObjects($row);
        }

        return $entities;
    }

}