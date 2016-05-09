<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 09/05/2016
 * Time: 13:56
 */

namespace Yanna\bts\Domain\Entity;

/**
 * Class Soal
 * @Entity(repositoryClass="Yanna\bts\Domain\Repository\DoctrineSoalRepository")
 * @package Yanna\bts\Domain\Entity
 * @HasLifecycleCallbacks
 * @Table(name="soal")
 */
class Soal
{

    /**
     * @Id
     * @Column(type="integer",nullable=false)
     * @var int
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="text",nullable=true)
     * @var string
     */
    private $pertanyaan;

    public static function create($pertanyaan)
    {
        $soalInfo = new Soal();

        $soalInfo->setPertanyaan($pertanyaan);

        return $soalInfo;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPertanyaan()
    {
        return $this->pertanyaan;
    }

    public function setPertanyaan($pertanyaan)
    {
        $this->pertanyaan = $pertanyaan;
    }

}