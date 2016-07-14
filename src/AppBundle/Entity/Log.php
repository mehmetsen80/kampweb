<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/14/16
 * Time: 1:22 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * Class Log
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LogRepository")
 * @ORM\Table(name="log")
 * @ORM\HasLifecycleCallbacks()
 *
 */
class Log
{
    /** @var double
     *  @ORM\Column(type="bigint", nullable=false)
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;
    /**
     * @var string
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;
    /**
     * @var string
     * @ORM\Column(name="channel", type="string", length=255, nullable=true)
     */
    private $channel;
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
    function __construct(){
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
        $date = date_create();
        $unixDate = $date->getTimestamp();
        $this->setModifiedtime($unixDate);
        if($this->getCreatedtime() == null)
        {
            $date = date_create();
            $unixDate = $date->getTimestamp();
            $this->setCreatedtime($unixDate);
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
     * Set message
     *
     * @param string $message
     *
     * @return Log
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set level
     *
     * @param string $level
     *
     * @return Log
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set createdtime
     *
     * @param integer $createdtime
     *
     * @return Log
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
     * @return Log
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
     * Set channel
     *
     * @param string $channel
     *
     * @return Log
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * @return string
     */
    function __toString()
    {
        return "id: ". $this->id ."  message: ". $this->message . "  level: ". $this->level . " createdtime: ". date('Y-m-d H:i:s', $this->createdtime) ."  modifiedtime: ". date('Y-m-d H:i:s', $this->modifiedtime);
    }
}