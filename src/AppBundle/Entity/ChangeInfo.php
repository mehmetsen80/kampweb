<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/19/16
 * Time: 3:49 PM
 */

namespace AppBundle\Entity;


class ChangeInfo
{

    /**
     * @Assert\Length(min=3)
     */
    private $newfullname;
    /**
     * @var
     * @Assert\Email()
     */
    private $newusername;
    /**
     * @var
     */
    private $newpassword;

    /**
     * @return mixed
     */
    public function getNewfullname()
    {
        return $this->newfullname;
    }

    /**
     * @param mixed $newfullname
     */
    public function setNewfullname($newfullname)
    {
        $this->newfullname = $newfullname;
    }

    /**
     * @return mixed
     */
    public function getNewusername()
    {
        return $this->newusername;
    }

    /**
     * @param mixed $newusername
     */
    public function setNewusername($newusername)
    {
        $this->newusername = $newusername;
    }

    /**
     * @return mixed
     */
    public function getNewpassword()
    {
        return $this->newpassword;
    }

    /**
     * @param mixed $newpassword
     */
    public function setNewpassword($newpassword)
    {
        $this->newpassword = $newpassword;
    }



}