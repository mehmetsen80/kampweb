<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:17 PM
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank()
     */
    private $fullname;
    /**
     * @var array
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @Assert\Length(max=4096)
     * @Assert\NotBlank()
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isactive;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdat", type="datetime", nullable=true)
     */
    protected $createdat;
    /**
     * @var \DateTime
     * @ORM\Column(name="modifiedat", type="datetime", nullable=true)
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
        $this->setModifiedat(new \DateTime(date('Y-m-d H:i:s')));
        if($this->getCreatedat() == null)
        {
            $this->setCreatedat(new \DateTime(date('Y-m-d H:i:s')));
        }
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


    public function setRoles(array $roles){
        $this->roles = $roles;
        return $this;
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
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
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
     * @return User
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

}