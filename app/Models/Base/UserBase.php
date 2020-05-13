<?php
namespace App\Models\Base;

use RobinTheHood\PhpFramework\Database\DatabaseObject\DatabaseObject;
use RobinTheHood\DateTime\DateTime;


class UserBase extends DatabaseObject
{
    protected $mail;
    protected $password;


    /************
    *    SET    *
    *************/
    public function setMail($value)
    {
        $this->mail = $value;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }



    /************
    *    GET    *
    *************/
    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }



    /************
    *    IS    *
    *************/


    /**************************
    *    GET-SINGEL-OBJECT    *
    ***************************/


    /************************
    *    GET-ALL-OBJECTS    *
    *************************/

}
