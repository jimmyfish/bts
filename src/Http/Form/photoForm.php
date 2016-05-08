<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 07/05/2016
 * Time: 17:41
 */

namespace Yanna\bts\Http\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
class photoForm extends AbstractType {

    /**
     * @var UploadedImage
     */
    private $siteLocation;

    /**
     * @var UploadedImage
     */
    private $gpsCoordinate;

    /**
     * @var UploadedImage
     */
    private $shelterView;

    /**
     * @var UploadedImage
     */
    private $overviewInside;

    /**
     * @var UploadedImage
     */
    private $fepIndoor;

    /**
     * @var UploadedImage
     */
    private $fepOutdoor;

    /**
     * @var UploadedImage
     */
    private $feederIndoor;

    /**
     * @var UploadedImage
     */
    private $feederBreeding;

    /**
     * @var UploadedImage
     */
    private $internalGrounding;

    /**
     * @var UploadedImage
     */
    private $externalGb;

    /**
     * @var UploadedImage
     */
    private $alarmBox;

    /**
     * @var UploadedImage
     */
    private $acpdbInternal;

    /**
     * @var UploadedImage
     */
    private $mcbAt;

    /**
     * @var UploadedImage
     */
    private $rectifierCabinet;

    /**
     * @var UploadedImage
     */
    private $mcbAtRectifier;

    /**
     * @var UploadedImage
     */
    private $rack;

    /**
     * @var UploadedImage
     */
    private $antennaMechanicalSectorA;

    /**
     * @var UploadedImage
     */
    private $antennaMechanicalSectorB;

    /**
     * @var UploadedImage
     */
    private $antenaMechanicalSectorC;

    /**
     * @var UploadedImage
     */
    private $azimuthSectorA;

    /**
     * @var UploadedImage
     */
    private $azimuthSectorB;

    /**
     * @var UploadedImage
     */
    private $azimuthSectorC;

    /**
     * @var UploadedImage
     */
    private $labellingOfCpri;

    /**
     * @var UploadedImage
     */
    private $connectionOfCpriSectorA;

    /**
     * @var UploadedImage
     */
    private $connectionOfCpriSectorB;

    /**
     * @var UploadedImage
     */
    private $connectionOfCpriSectorC;

    /**
     * @var UploadedImage
     */
    private $groundingCable;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'siteLocation',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'gpsCoordinate',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                      'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'shelterView',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                      'maxSize' => '10m',
                      'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'overviewInside',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required' => 'required']
            ]
        )->add(
            'fepIndoor',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required' => 'required']
            ]
        )->add(
            'fepOutdoor',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'feederIndoor',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'feederBreeding',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required' => 'required']
            ]
        )->add(
            'internalGrounding',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'externalGb',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'alarmBox',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr'=>['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'acpdbInternal',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'mcbAt',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'rectifierCabinet',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'mcbAtRectifier',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'rack',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes'=>['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorA',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorB',
            'image',
            [
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorC',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'azimuthSectorA',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'azimuthSectorB',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]

        )->add(
            'azimuthSectorC',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'labellingOfCpri',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOfCpriSectorA',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOfCpriSectorB',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOFCpriSectorC',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'atrr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'groundingCable',
            'image',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',
                        'mimeTypes' => ['image/jpg','image/jpeg','image/png'],
                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'kirim',
            'submit',
            [
                'attr' => ['class' => 'btn btn-primary btn-block btn-flat ']
            ]
        );

    }

    public function getName()
    {
        return 'photo_form';
    }

    public function getSiteLocation()
    {
        return $this->siteLocation;
    }

    public function setSiteLocation($siteLocation)
    {
        $this->siteLocation = $siteLocation;
    }

    public function getGpsCoordinate()
    {
        return $this->gpsCoordinate;
    }

    public function setGpsCoordinate($gpsCoordinate)
    {
        $this->gpsCoordinate = $gpsCoordinate;
    }

    public function getShelterView()
    {
        return $this->shelterView;
    }

    public function setShelterView($shelterView)
    {
        $this->shelterView = $shelterView;
    }

    public function getOverviewInside()
    {
        return $this->overviewInside;
    }

    public function setOverviewInside($overviewInside)
    {
        $this->overviewInside = $overviewInside;
    }

    public function getFepIndoor()
    {
        return $this->fepIndoor;
    }

    public function setFepIndoor($fepIndoor)
    {
        $this->fepIndoor = $fepIndoor;
    }

    public function getFepOutdoor()
    {
        return $this->fepOutdoor;
    }

    public function setFepOutdoor($fepOutdoor)
    {
        $this->fepOutdoor = $fepOutdoor;
    }

    public function getFeederIndoor()
    {
        return $this->feederIndoor;
    }

    public function setFeederIndoor($feederIndoor)
    {
        $this->feederIndoor = $feederIndoor;
    }

    public function getFeederBreeding()
    {
        return $this->feederBreeding;
    }

    public function setFeederBreeding($feederBreeding)
    {
        $this->feederBreeding = $feederBreeding;
    }

    public function getInternalGrounding()
    {
        return $this->internalGrounding;
    }

    public function setInternalGrounding($internalGrounding)
    {
        $this->internalGrounding = $internalGrounding;
    }

    public function getExternalGb()
    {
        return $this->externalGb;
    }

    public function setExternalGb($externalGb)
    {
        $this->externalGb = $externalGb;
    }

    public function getAlarmBox()
    {
        return $this->alarmBox;
    }

    public function setAlarmBox($alarmBox)
    {
        $this->alarmBox = $alarmBox;
    }

    public function getAcpdbInternal()
    {
        return $this->acpdbInternal;
    }

    public function setAcpdbInternal($acpdbInternal)
    {
        $this->acpdbInternal = $acpdbInternal;
    }

    public function getMcbAt()
    {
        return $this->mcbAt;
    }

    public function setMcbAt($mcbAt)
    {
        $this->mcbAt = $mcbAt;
    }

    public function getRectifierCabinet()
    {
        return $this->rectifierCabinet;
    }

    public function setRectifierCabinet($rectifierCabinet)
    {
        $this->rectifierCabinet = $rectifierCabinet;
    }

    public function getMcbAtRectifier()
    {
        return $this->mcbAtRectifier;
    }

    public function setMcbAtRectifier($mcbAtRectifier)
    {
        $this->mcbAtRectifier = $mcbAtRectifier;
    }

    public function getRack()
    {
        return $this->rack;
    }

    public function setRack($rack)
    {
        $this->rack = $rack;
    }

    public function getAntennaMechanicalSectorA()
    {
        return $this->antennaMechanicalSectorA;
    }

    public function setAntennaMechanicalSectorA($antennaMechanicalSectorA)
    {
        $this->antennaMechanicalSectorA = $antennaMechanicalSectorA;
    }

    public function getAntennaMechanicalSectorB()
    {
        return $this->antennaMechanicalSectorB;
    }

    public function setAntennaMechanicalSectorB($antennaMechanicalSectorB)
    {
        $this->antennaMechanicalSectorB = $antennaMechanicalSectorB;
    }

    public function getAntennaMechanicalSectorC()
    {
        return $this->antenaMechanicalSectorC;
    }

    public function setAntennaMechanicalSectorC($antennaMechanicalSectorC)
    {
        $this->antenaMechanicalSectorC = $antennaMechanicalSectorC;
    }

    public function getAzimuthSectorA()
    {
        return $this->azimuthSectorA;
    }

    public function setAzimuthSectorA($azimuthSectorA)
    {
        $this->azimuthSectorA = $azimuthSectorA;
    }


    public function getAzimuthSectorB()
    {
        return $this->azimuthSectorB;
    }

    public function setAzimuthSectorB($azimuthSectorB)
    {
        $this->azimuthSectorB = $azimuthSectorB;
    }

    public function getAzimuthSectorC()
    {
        return $this->azimuthSectorC;
    }

    public function setAzimuthSectorC($azimuthSectorC)
    {
        $this->azimuthSectorC = $azimuthSectorC;
    }

    public function getLabellingOfCpri()
    {
        return $this->labellingOfCpri;
    }

    public function setLabellingOfCpri($labellingOfCpri)
    {
        $this->labellingOfCpri = $labellingOfCpri;
    }

    public function getConnectionOfCpriSectorA()
    {
        return $this->connectionOfCpriSectorA;
    }

    public function setConnectionOfCpriSectorA($connectionOfCpriSectorA)
    {
        $this->connectionOfCpriSectorA = $connectionOfCpriSectorA;
    }

    public function getConnectionOfCpriSectorB()
    {
        return $this->connectionOfCpriSectorB;
    }

    public function setConnectionOfCpriSectorB($connectionOfCpriSectorB)
    {
        $this->connectionOfCpriSectorB = $connectionOfCpriSectorB;
    }

    public function getConnectionOfCpriSectorC()
    {
        return $this->connectionOfCpriSectorC;
    }

    public function setConnectionOfCpriSectorC($connectionOfCpriSectorC)
    {
        $this->connectionOfCpriSectorC = $connectionOfCpriSectorC;
    }

    public function getGroundingCable()
    {
        return $this->groundingCable;
    }

    public function setGroundingCable($groundingCable)
    {
        $this->groundingCable = $groundingCable;
    }



}