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
 * @ORM\Table(name="attendee")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 *
 */
class Attendee
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="attendees")
     * @ORM\JoinColumn(name="createdby", referencedColumnName="id")
     */
    private $createdBy;

    /**
     * @ORM\Column(type="bigint", name="userid")
     */
    protected $userid;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isactive;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event", inversedBy="attentees")
     * @ORM\JoinColumn(name="eventid", referencedColumnName="id", onDelete="CASCADE")
     */
    private $event;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdat", type="bigint", nullable=true)
     */
    protected $createdat;

    /**
     * @var \DateTime
     * @ORM\Column(name="modifiedat", type="bigint", nullable=true)
     */
    protected  $modifiedat;

    /**
     * @Assert\Date()
     * @ORM\Column(name="checkin", type="string", nullable=true)
     */
    private $checkin;

    /**
     * @Assert\Date()
     * @ORM\Column(name="checkout", type="string", nullable=true)
     */
    private $checkout;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $status;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Dependent", mappedBy="attendee")
     */
    protected $dependents;

    public function __construct()
    {
        $this->isactive = true;
        $this->updatedTimestamps();
        // may not be needed, see section on salt below
        //$this->salt = md5(uniqid(null, true));
    }

    /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
        $date = date_create();
        $unixDate = $date->getTimestamp();
        $this->setModifiedat($unixDate);
        if($this->getCreatedat() == null)
        {
            $date = date_create();
            $unixDate = $date->getTimestamp();
            $this->setCreatedat($unixDate);
        }
    }

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


    /**
     * Set isactive
     *
     * @param boolean $isactive
     *
     * @return Attendee
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set createdat
     *
     * @param integer $createdat
     *
     * @return Attendee
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return integer
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set modifiedat
     *
     * @param integer $modifiedat
     *
     * @return Attendee
     */
    public function setModifiedat($modifiedat)
    {
        $this->modifiedat = $modifiedat;

        return $this;
    }

    /**
     * Get modifiedat
     *
     * @return integer
     */
    public function getModifiedat()
    {
        return $this->modifiedat;
    }





    /**
     * Set event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return Attendee
     */
    public function setEvent(\AppBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }



    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Attendee
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set checkin
     *
     * @param \DateTime $checkin
     *
     * @return Attendee
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;

        return $this;
    }

    /**
     * Get checkin
     *
     * @return \DateTime
     */
    public function getCheckin()
    {
        return $this->checkin;
    }

    /**
     * Set checkout
     *
     * @param \DateTime $checkout
     *
     * @return Attendee
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;

        return $this;
    }

    /**
     * Get checkout
     *
     * @return \DateTime
     */
    public function getCheckout()
    {
        return $this->checkout;
    }

    /**
     * Add dependent
     *
     * @param \AppBundle\Entity\Dependent $dependent
     *
     * @return Attendee
     */
    public function addDependent(\AppBundle\Entity\Dependent $dependent)
    {
        $this->dependents[] = $dependent;

        return $this;
    }

    /**
     * Remove dependent
     *
     * @param \AppBundle\Entity\Dependent $dependent
     */
    public function removeDependent(\AppBundle\Entity\Dependent $dependent)
    {
        $this->dependents->removeElement($dependent);
    }

    /**
     * Get dependents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDependents()
    {
        return $this->dependents;
    }



    /**
     * Set status
     *
     * @param string $status
     *
     * @return Attendee
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
