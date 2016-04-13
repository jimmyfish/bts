<?php
/**
 * Created by PhpStorm.
 * User: jimmy
 * Date: 08/04/16
 * Time: 4:21
 */

namespace Yanna\bts\Http\Form;

use Silex\Application;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Yanna\bts\Domain\Entity\Site;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class selectSiteForm extends AbstractType
{

    private $siteId;

    private $siteName;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $site = new Site();
      $builder->add(
          'siteId',
          EntityType::class,
          [
              'class' => 'Yanna\bts\Domain\Entity\Site',
              'choices' => $site->getSiteId()
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

    /**
     * @return string
     */
    public function getName()
    {
        return 'selectSite_form';
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



}