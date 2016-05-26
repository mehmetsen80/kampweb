<?php
/**
 * Created by PhpStorm.
 * User: msen
 * Date: 3/10/16
 * Time: 5:13 PM
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 * @ORM\Table(name="person")
 * @ORM\HasLifecycleCallbacks()
 */
class Person
{
    /**
     * @var double
     * @ORM\Column(type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="fullname", type="string", length=100)
     */
    protected $fullname;

    /**
     * @var string
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    protected $gender;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    protected $email;

    /**
     * @Assert\Date()
     * @ORM\Column(name="birthday", nullable=false)
     */
    protected $birthday;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default" = 1}, nullable=false)
     */
    protected $active = 1;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $cellphone;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Dependent", mappedBy="person")
     */
    protected $dependents;

    /**
     * @var datetime $createdat
     *
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    /**
     * @var datetime $modifiedat
     *
     * @ORM\Column(type="datetime")
     */
    private $modifiedat;


    public function __construct() {
        $this->updatedTimestamps();
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
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Person
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }


    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Person
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }




    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Person
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @return ArrayCollection|Dependent[]
     */
    public function getDependents()
    {
        return $this->dependents;
    }


    /**
     * Add dependent
     *
     * @param \AppBundle\Entity\Dependent $dependent
     *
     * @return Person
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
     * Set cellphone
     *
     * @param integer $cellphone
     *
     * @return Person
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return integer
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }



    /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
        $this->setModifiedat(new \DateTime(date('Y-m-d H:i:s')));
        if($this->getCreatedat() == null)
        {
            $this->setCreatedat(new \DateTime(date('Y-m-d H:i:s')));
        }
    }



    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Person
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set modifiedat
     *
     * @param \DateTime $modifiedat
     *
     * @return Person
     */
    public function setModifiedat($modifiedat)
    {
        $this->modifiedat = $modifiedat;

        return $this;
    }

    /**
     * Get modifiedat
     *
     * @return \DateTime
     */
    public function getModifiedat()
    {
        return $this->modifiedat;
    }


    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    function __toString()
    {
        return "id: ". $this->id ."  fullanme: ". $this->fullname . "  gender: ". $this->gender .
        "  email: ". $this->email ."  birthday: ". $this->birthday ."  phone: ".
        $this->cellphone ."   createdat: ". $this->createdat->format('Y-m-d H:i:s') ."  modifiedat: ". $this->modifiedat->format('Y-m-d H:i:s');
    }


}
