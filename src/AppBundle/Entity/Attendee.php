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
class Attendee extends User
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
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Please enter a valid username")
     * @Assert\Email()
     */
    protected  $username;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isactive;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event", inversedBy="attentees")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
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
     * Add event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return Attendee
     */
    public function addEvent(\AppBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \AppBundle\Entity\Event $event
     */
    public function removeEvent(\AppBundle\Entity\Event $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        return $this->events;
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


}
