<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/3/16
 * Time: 5:52 PM
 */

namespace AppBundle\Services;


use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class Md5PasswordEncoderService implements PasswordEncoderInterface
{

    public function encodePassword($raw, $salt)
    {
        return md5($raw);
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        return md5($raw) == $encoded;
    }
}