<?php

namespace App\Controllers\CustomerControllers;

use RobinTheHood\PhpFramework\Controllers\ModelController\ModelController;
use RobinTheHood\PhpFramework\ArrayHelper;
use RobinTheHood\PhpFramework\Button;
use RobinTheHood\PhpFramework\Session;
use RobinTheHood\PhpFramework\Request;
use RobinTheHood\DateTime\DateTime;

class UsersController extends ModelController
{
    protected $options = [
        'enabledFields' => ['mail', 'password'],
        'autoFieldTypes' => 'on',
        'fieldTypes' => [
            'created' => 'datetime',
            'changed' => 'datetime',
            'confirmed' => 'datetime',
            'password' => 'password',
        ],
        'actions' => 'all'
    ];

    public function preInvoke()
    {
    }

    public function postInvoke()
    {
    }

    public function invokeIndex()
    {
        $this->invokeModelIndex($this->options);
    }

    public function invokeShow()
    {
        $this->invokeModelShow($this->options);
    }

    public function invokeNew()
    {
        $this->invokeModelNew($this->options);
    }

    public function invokeEdit()
    {
        $this->invokeModelEdit($this->options);
    }

    public function invokeMultiEdit()
    {
        $this->invokeModelMultiEdit($this->options);
    }

    public function invokeMultiEditAdd()
    {
        $this->invokeModelMultiEditAdd($this->options);
    }

    public function invokeDelete()
    {
        $this->invokeModelDelete();
    }
}
