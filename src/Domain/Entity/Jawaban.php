<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 14:00
 */

namespace Yanna\bts\Domain\Entity;

/**
 * Class Jawaban
 * @Entity(repositoryClass="Yanna\bts\Domain\Repository\DoctrineJawabanRepository")
 * @package Yanna\bts\Domain\Entity
 * @HasLifecycleCallbacks
 * @Table(name="jawaban")
 */
class Jawaban
{
    /**
     * @Id
     * @Column(type="integer",nullable=false)
     * @var int
     * @GeneratedValue
     */
    public $id;

    /**
     * @OneToOne(targetEntity="Yanna\bts\Domain\Entity\Soal",inversedBy="Jawaban",cascade={"persist"})
     * @JoinColumn(name="soal_id",referenceColumnName="id",nullable=false,onDelete="CASCADE")
     * @var Soal
     */
    public $soal;

    /**
     * @Column(type="text",nullable=true)
     * @var string
     */
    public $jawaban;

    public static function create($jawaban,Soal $soal)
    {
        $jawabanInfo = new Jawaban();

        $jawabanInfo->setJawaban($jawaban);
        $jawabanInfo->setSoal($soal);

        return $jawabanInfo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getJawaban()
    {
        return $this->jawaban;
    }

    public function setJawaban($jawaban)
    {
        $this->jawaban = $jawaban;
    }

}