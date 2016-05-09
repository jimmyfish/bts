<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 14:16
 */

namespace Yanna\bts\Domain\Repository;

use Yanna\bts\Domain\Contracts\Repository\SoalRepositoryInterface;
use Yanna\bts\Domain\Entity\Soal;
use Doctrine\ORM\EntityRepository;

class DoctrineSoalRepository extends EntityRepository implements SoalRepositoryInterface {

    /**
     * @param $id
     * @return Soal
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param $pertanyaan
     * @return Soal
     */
    public function findByPertanyaan($pertanyaan)
    {
        return $this->findOneBy(['pertanyaan'=>$pertanyaan]);
    }
}