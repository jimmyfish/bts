<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 14:13
 */

namespace Yanna\bts\Domain\Repository;

use Yanna\bts\Domain\Contracts\Repository\JawabanRepositoryInterface;
use Yanna\bts\Domain\Entity\jawaban;
use Doctrine\ORM\EntityRepository;

class DoctrineJawabanRepository extends EntityRepository implements JawabanRepositoryInterface {

    /**
     * @param $id
     * @return Jawaban
     */
    public function findById($id)
    {
       return $this->find($id);
    }

    /**
     * @param $jawaban
     * @return Jawaban
     */
    public function findByJawaban($jawaban)
    {
        return $this->findOneBy(['jawaban'=>$jawaban]);
    }
}