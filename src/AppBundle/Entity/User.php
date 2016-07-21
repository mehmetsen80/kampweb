<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:17 PM
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use \DateTime;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(fields="username", message="Email already taken")
 *
 */
class User implements AdvancedUserInterface, \Serializable
{
    /** @var double
     *  @ORM\Column(type="bigint", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Please enter a valid username")
     * @Assert\Email()
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank()
     */
    protected $fullname;

    /**
     * @var array
     * @ORM\Column(name="roles", type="json_array")
     */
    protected $roles;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    /**
     * @Assert\Length(max=4096)
     * @Assert\NotBlank()
     */
    protected $plainPassword;

    /**
     * @var string
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    protected $gender;

    /**
     * @Assert\Date()
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     */
    protected $birthday;

    /**
     * @var integer
     * @ORM\Column(type="string", nullable=true)
     */
    protected $cellphone;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Dependent", mappedBy="user")
     */
    protected $dependents;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Event", mappedBy="createdby")
     */
    protected $events;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isactive;

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
     * @ORM\Column(name="ccode", type="string", nullable=true)
     */
    protected $ccode;
    
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

    /*********************************** Getters ****************************************/

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
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
     * @return mixed
     */
    public function getPlainPassword()
    {

        return $this->plainPassword;
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

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return '';
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
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
     * Get modifiedat
     *
     * @return \DateTime
     */
    public function getModifiedat()
    {
        return $this->modifiedat;
    }

    /**
     * @return int
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }


    /**
     * @return mixed
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * @return ArrayCollection|Dependent[]
     */
    public function getDependents()
    {
        return $this->dependents;
    }

    /**
     * @return ArrayCollection|Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }






    /************************************** Setters *********************************************/

    public function setRoles(array $roles){
        $this->roles = $roles;
        return $this;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {

        $this->password = $password;

        return $this;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     *
     * @return User
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {

        $this->plainPassword = $plainPassword;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param int $cellphone
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;
    }


    /**
     * @param mixed $ccode
     */
    public function setCcode($ccode)
    {
        $this->ccode = $ccode;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return User
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
        return $this;
    }

    /**
     * Set modifiedat
     *
     * @param \DateTime $modifiedat
     *
     * @return User
     */
    public function setModifiedat($modifiedat)
    {
        $this->modifiedat = $modifiedat;
        return $this;
    }

    /**
     * @param mixed $confirmationToken
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    }





    /***************************************** Others ***************************************************/


    /**
     * Add dependent
     *
     * @param \AppBundle\Entity\Dependent $dependent
     *
     * @return User
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

    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {

        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->getIsactive();
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isactive
        ));
    }


    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isactive
            ) = unserialize($serialized);
    }


}