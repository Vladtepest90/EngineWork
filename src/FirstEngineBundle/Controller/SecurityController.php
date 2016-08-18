<?php

namespace FirstEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class SecurityController extends Controller
{
	public function loginAction()
	{
		//primeramente llamaremos al servicio authenticationutils, el cual este servicio lo maneja symfony
		/* y nos entregara toda la lógica de seguridad
		 * 
		 */
		$authenticationUtils = $this->get('security.authentication_utils');

		$error = $authenticationUtils->getLastAuthenticationError();

		$lastUsername = $authenticationUtils->getLastUsername();

		return $this->render('FirstEngineBundle:Default:login.html.twig', array('last_username' => $lastUsername, 'error' => $error));
	}

	public function loginCheckAction()
	{
		
	}
}
