<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 26/04/16
 * Time: 4:07
 */

namespace Yanna\bts\Domain\Entity;

/**
 * Class Engineer
 * @package Yanna\bts\Domain\Entity
 * @Entity(repositoryClass="Yanna\bts\Domain\Repository\DoctrineEngineerRepository")
 * @HasLifecycleCallbacks
 * @Table(name="engineer")
 */
class Engineer
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @var int
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(name="site_name", type="string", length=255, nullable=false)
     * @var string
     */
    private $siteName;

    /**
     * @Column(name="form_state", type="string", length=500, nullable=false)
     * @var string
     */
    private $formState;

    /**
     * @Column(name="validate_state", type="integer", nullable=true)
     * @var int
     */
    private $validateState;

    /**
     * @Column(type="string", length=255, nullable=false)
     * @var string
     */
    private $username;

    /**
     * @Column(type="datetime", nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    public static function create()
    {

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param $siteName
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    /**
     * @return string
     */
    public function getFormState()
    {
        return $this->formState;
    }

    /**
     * @param $formState
     */
    public function setFormState($formState)
    {
        $this->formState = $formState;
    }

    /**
     * @return int
     */
    public function getValidateState()
    {
        return $this->validateState;
    }

    /**
     * @param $validateState
     */
    public function setValidateState($validateState)
    {
        $this->validateState = $validateState;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @PrePersist
     * @return void
     */
    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @PrePersist
     * @return void
     */
    public function timestampableUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }
}