<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 26/04/2016
 * Time: 6:12
 */

namespace Yanna\bts\Domain\Entity;

/**
 * Class Documentation
 * @Entity(repositoryClass="Yanna\bts\Domain\Repository\DoctrineDocumentationRepository")
 * @package Yanna\bts\Domain\Entity
 * @HasLifecycleCallbacks
 * @Table(name="documentation")
 */
class Documentation {

    /**
     * @Id
     * @Column(type="integer",nullable="false")
     * @var int
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string",name="site_name",length=255,nullable=false)
     * @var string
     */
    private $siteName;

    /**
     * @Column(type="string",name="form_state",length=500,nullable=false)
     * @var string
     */
    private $formState;

    /**
     * @Column(type="string",length=255,nullable=false)
     * @var string
     */
    private $username;

    /**
     * @Column(type="datetime",name="crreated_at",nullable=false)
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Column(type="datetime",name="updated_at",nullable=true)
     * @var \DateTIme
     */
    private $updatedAt;

    public static function create()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    public function getFormState()
    {
        return $this->formState;
    }

    public function setFormState($formState)
    {
        $this->formState = $formState;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function timestampableCreateEvent()
    {
        $this->createdAt = new \DateTime();
    }

    public function timestampableUpdateEvent()
    {
        $this->updatedAt = new \DateTime();
    }

}