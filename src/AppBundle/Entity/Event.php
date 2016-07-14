<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/19/16
 * Time: 3:49 PM
 */

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
/**
 * Class Event
 * @package AppBundle\Entity
 * @ORM\Table(name="event")
 * @ORM\HasLifecycleCallbacks()
 *
 */
class Event
{
    /** @var double
     *  @ORM\Column(type="bigint", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\Length(min=3)
     */
    private $name;
    /**
     * @Assert\Date()
     * @ORM\Column(name="startdate", type="datetime", nullable=true)
     */
    private $startDate;
    /**
     * @Assert\Date()
     * @ORM\Column(name="enddate", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="event")
     */
    private $createdBy;

    /**
     * @return float
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param float $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }





}