<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/19/16
 * Time: 3:49 PM
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
/**
 * Class Event
 * @package AppBundle\Entity
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
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
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @ORM\Column(name="startdate", type="datetime", nullable=true)
     */
    protected $startDate;

    /**
     * @ORM\Column(name="enddate", type="datetime", nullable=true)
     */
    protected $endDate;

    /**
     * @ORM\Column(name="description" , type="text", nullable=true)
     */
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="events")
     * @ORM\JoinColumn(name="createdby", referencedColumnName="id")
     */
    protected $createdby;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Attendee", mappedBy="event")
     */
    protected $attentees;


    /**
     * @ORM\Column(type="boolean")
     */
    protected $isactive;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdtime", type="bigint", nullable=true)
     */
    protected $createdtime;

    /**
     * @var \DateTime
     * @ORM\Column(name="modifiedtime", type="bigint", nullable=true)
     */
    protected  $modifiedtime;

    public function __construct()
    {
        $this->isactive = true;
        $this->attentees = new ArrayCollection();
        $this->updatedTimestamps();
    }



    /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
//        $date = date_create();
//        $unixDate = $date->getTimestamp();
//        $this->setModifiedat($unixDate);
//        if($this->getCreatedat() == null)
//        {
//            $date = date_create();
//            $unixDate = $date->getTimestamp();
//            $this->setCreatedat($unixDate);
//        }
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Event
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     *
     * @return Event
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
     * Set createdtime
     *
     * @param integer $createdtime
     *
     * @return Event
     */
    public function setCreatedtime($createdtime)
    {
        $this->createdtime = $createdtime;

        return $this;
    }

    /**
     * Get createdtime
     *
     * @return integer
     */
    public function getCreatedtime()
    {
        return $this->createdtime;
    }

    /**
     * Set modifiedtime
     *
     * @param integer $modifiedtime
     *
     * @return Event
     */
    public function setModifiedtime($modifiedtime)
    {
        $this->modifiedtime = $modifiedtime;

        return $this;
    }

    /**
     * Get modifiedtime
     *
     * @return integer
     */
    public function getModifiedtime()
    {
        return $this->modifiedtime;
    }

    /**
     * Set createdby
     *
     * @param \AppBundle\Entity\User $createdby
     *
     * @return Event
     */
    public function setCreatedby(\AppBundle\Entity\User $createdby = null)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return \AppBundle\Entity\User
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }


    function __toString()
    {
        return "Event { id: ". $this->id ."  name: ". $this->name . "  startdate: ". $this->startDate->format('Y-m-d H:i:s') . "  enddate: ". $this->endDate->format('Y-m-d H:i:s') .
        "  description: ". $this->description ."  isactive: ". $this->isactive . "  createdtime: ". date('Y-m-d H:i:s', $this->createdtime) ."  modifiedtime: ". date('Y-m-d H:i:s', $this->modifiedtime) . " }";
    }

    /**
     * Set attendeeid
     *
     * @param \AppBundle\Entity\Attendee $attendeeid
     *
     * @return Event
     */
    public function setAttendeeid(\AppBundle\Entity\Attendee $attendeeid = null)
    {
        $this->attendeeid = $attendeeid;

        return $this;
    }

    /**
     * Get attendeeid
     *
     * @return \AppBundle\Entity\Attendee
     */
    public function getAttendeeid()
    {
        return $this->attendeeid;
    }

    /**
     * Add attentee
     *
     * @param \AppBundle\Entity\Attendee $attentee
     *
     * @return Event
     */
    public function addAttentee(\AppBundle\Entity\Attendee $attentee)
    {
        $this->attentees[] = $attentee;

        return $this;
    }

    /**
     * Remove attentee
     *
     * @param \AppBundle\Entity\Attendee $attentee
     */
    public function removeAttentee(\AppBundle\Entity\Attendee $attentee)
    {
        $this->attentees->removeElement($attentee);
    }

    /**
     * Get attentees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAttentees()
    {
        return $this->attentees;
    }
}
