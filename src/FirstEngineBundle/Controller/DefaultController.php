<?php
namespace FirstEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FirstEngineBundle:Default:index.html.twig');
    }
}
