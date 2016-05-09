<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 14:08
 */

namespace Yanna\bts\Domain\Contracts\Repository;

use Yanna\bts\Domain\Entity\Jawaban;
interface JawabanRepositoryInterface {

    /**
     * @param $id
     * @return Jawaban
     */
    public function findById($id);

    /**
     * @param $jawaban
     * @return Jawaban
     */
    public function findByJawaban($jawaban);
}