<?php
/**
 * Created by PhpStorm.
 * User: muhammetergenc
 * Date: 3/21/16
 * Time: 2:53 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DependentsRepository")
 * @ORM\Table(name="dependent")
 * @ORM\HasLifecycleCallbacks()
 */
class Dependent
{

    /**
     * @var double
     * @ORM\Column(type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    private $gender;


    /**
     * @Assert\Date()
     * @ORM\Column(name="birthday", nullable=false)
     */
    private $birthday;

    /**
     * @var string
     * @ORM\Column(type="string", length=6, nullable=false)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person", inversedBy="dependents")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;


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
     * @return Dependent
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
     * Set gender
     *
     * @param string $gender
     *
     * @return Dependent
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

    public function setPerson(\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
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
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



    /**
     * @return DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * @param DateTime $createdat
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
    }

    /**
     * @return DateTime
     */
    public function getModifiedat()
    {
        return $this->modifiedat;
    }

    /**
     * @param DateTime $modifiedat
     */
    public function setModifiedat($modifiedat)
    {
        $this->modifiedat = $modifiedat;
    }

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    function __toString()
    {
        return "id: ". $this->id ."  name: ". $this->name . "  gender: ". $this->gender .
        "  email: ". $this->email ."  birthday: ". $this->birthday ." 
        createdat: ". $this->createdat->format('Y-m-d H:i:s') ."  modifiedat: ". $this->modifiedat->format('Y-m-d H:i:s') . " person: ". $this->person;
    }


}
