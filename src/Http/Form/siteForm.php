<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/04/16
 * Time: 5:37
 */

namespace Yanna\bts\Http\Form;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class siteForm extends AbstractType
{
    private $regional;

    private $poc;

    private $prodef;

    private $siteId;

    private $siteName;

    private $towerOwner;

    private $address;

    private $fop;

    private $longitude;

    private $latitude;

    private $existingSystem;

    private $remark;

    private $stats;

    private $subcont;

    private $spv;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'regional',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input Regional','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'poc',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input poc','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'prodef',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input prodef','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'site_id',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input site id','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'site_name',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input Site Name','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'tower_owner',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input tower owner','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'address',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input address','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'fop',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input fop','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'spv',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input spv','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]
        )->add(
            'longitude',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input longitude','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'latitude',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input latitude','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'existing_system',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input existing system','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'remark',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input remark','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'stats',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input stats','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'subcont',
            'text',
            [
                'constraints'=>new Assert\NotBlank(),
                'label' => false,
                'attr' => ['class'=>'form-control','placeholder'=>'Input subcont','required'=>'required'],
                'label_attr'=> ['class'=>'field-label']
            ]

        )->add(
            'kirim',
            'submit',
            [
                'attr' => ['class' => 'btn btn-primary btn-block btn-flat'],
                'label' => 'submit'
            ]
        );
    }

    public function getName()
    {
        return 'site_form';
    }

    public function getRegional()
    {
        return $this->regional;
    }

    public function setRegional($regional)
    {
        $this->regional = $regional;
    }

    public function getPoc()
    {
        return $this->poc;
    }

    public function setPoc($poc)
    {
        $this->poc = $poc;
    }

    public function getProdef()
    {
        return $this->prodef;
    }

    public function setProdef($prodef)
    {
        $this->prodef = $prodef;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    public function getTowerOwner()
    {
        return $this->towerOwner;
    }

    public function setTowerOwner($towerOwner)
    {
        $this->towerOwner = $towerOwner;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getFop()
    {
        return $this->fop;
    }

    public function setFop($fop)
    {
        $this->fop =$fop;
    }

    public function getSpv()
    {
        return $this->spv;
    }

    public function setSpv($spv)
    {
        $this->spv = $spv;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getExistingSystem()
    {
        return $this->existingSystem;
    }

    public function setExistingSystem($existingSystem)
    {
        $this->existingSystem = $existingSystem;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    public function getSubcont()
    {
        return $this->subcont;
    }

    public function setSubcont($subcont)
    {
        $this->subcont = $subcont;
    }

}