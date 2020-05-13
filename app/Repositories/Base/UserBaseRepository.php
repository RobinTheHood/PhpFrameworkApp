<?php
namespace App\Repositories\Base;

use RobinTheHood\PhpFramework\Database\Repository\Repository;

class UserBaseRepository extends Repository
{
    function __construct()
    {
        parent::__construct();

        $this->className = 'User';
        $this->addStructure([
            'mail' => ['varchar(255)', ''],
            'password' => ['varchar(255)', '']
        ]);
    }
}
