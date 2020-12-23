<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class CalificacionesController extends AbstractActionController
{
    public function CalificacionesAction()
    {
        return new ViewModel();
    }
}