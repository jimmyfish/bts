<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 14:06
 */

namespace Yanna\bts\Domain\Contracts\Repository;

use Yanna\bts\Domain\Entity\Soal;
interface SoalRepositoryInterface {


    /**
     * @param $id
     * @return Soal
     */
    public function findById($id);

    /**
     * @param $pertanyaan
     * @return Soal
     */
    public function findByPertanyaan($pertanyaan);

}