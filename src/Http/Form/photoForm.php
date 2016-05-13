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
     * @var UploadedFile
     */
    private $siteLocation;

    /**
     * @var UploadedFile
     */
    private $gpsCoordinate;

    /**
     * @var UploadedFile
     */
    private $shelterView;

    /**
     * @var UploadedFile
     */
    private $overviewInside;

    /**
     * @var UploadedFile
     */
    private $fepIndoor;

    /**
     * @var UploadedFile
     */
    private $fepOutdoor;

    /**
     * @var UploadedFile
     */
    private $feederIndoor;

    /**
     * @var UploadedFile
     */
    private $feederBreeding;

    /**
     * @var UploadedFile
     */
    private $internalGrounding;

    /**
     * @var UploadedFile
     */
    private $externalGb;

    /**
     * @var UploadedFile
     */
    private $alarmBox;

    /**
     * @var UploadedFile
     */
    private $acpdbInternal;

    /**
     * @var UploadedFile
     */
    private $mcbAt;

    /**
     * @var UploadedFile
     */
    private $rectifierCabinet;

    /**
     * @var UploadedFile
     */
    private $mcbAtRectifier;

    /**
     * @var UploadedFile
     */
    private $rack;

    /**
     * @var UploadedFile
     */
    private $antennaMechanicalSectorA;

    /**
     * @var UploadedFile
     */
    private $antennaMechanicalSectorB;

    /**
     * @var UploadedFile
     */
    private $antenaMechanicalSectorC;

    /**
     * @var UploadedFile
     */
    private $azimuthSectorA;

    /**
     * @var UploadedFile
     */
    private $azimuthSectorB;

    /**
     * @var UploadedFile
     */
    private $azimuthSectorC;

    /**
     * @var UploadedFile
     */
    private $labellingOfCpri;

    /**
     * @var UploadedFile
     */
    private $connectionOfCpriSectorA;

    /**
     * @var UploadedFile
     */
    private $connectionOfCpriSectorB;

    /**
     * @var UploadedFile
     */
    private $connectionOfCpriSectorC;

    /**
     * @var UploadedFile
     */
    private $groundingCable;

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder->add(
            'siteLocation',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'gpsCoordinate',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                      'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'shelterView',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                      'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'overviewInside',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required' => 'required']
            ]
        )->add(
            'fepIndoor',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required' => 'required']
            ]
        )->add(
            'fepOutdoor',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'feederIndoor',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'feederBreeding',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required' => 'required']
            ]
        )->add(
            'internalGrounding',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'externalGb',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'alarmBox',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr'=>['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'acpdbInternal',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'mcbAt',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'rectifierCabinet',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'mcbAtRectifier',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'rack',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorA',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorB',
            'file',
            [
                'constraints'=>[
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'antennaMechanicalSectorC',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'azimuthSectorA',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class' => 'form-control','required'=>'required']
            ]
        )->add(
            'azimuthSectorB',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]

        )->add(
            'azimuthSectorC',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'labellingOfCpri',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOfCpriSectorA',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOfCpriSectorB',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'connectionOFCpriSectorC',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

                    ])
                ],
                'attr' => ['class'=>'form-control','required'=>'required']
            ]
        )->add(
            'groundingCable',
            'file',
            [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Image([
                        'maxSize' => '10m',

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