<?php
namespace App\Views;

use RobinTheHood\PhpFramework\Views\Twig\TwigView;

use App\Models\User;

class StandardCustomerView extends TwigView
{
    public function __construct($relativTemplateFile = '', array $variables = [])
    {
        $button = new \RobinTheHood\PhpFramework\Button([
            'app' => 'customer',
            'controller' => 'users',
            'action' => 'index'
        ]);

        $this->setVars([
            'buttonUser' => $button->change(['action' => 'index'])
        ]);

        parent::__construct($relativTemplateFile, $variables);
    }
}
