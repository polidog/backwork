<?php

namespace Polidog\BackworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * デフォルトコントローラ
 * @package Polidog\BackworkBundle\Controller
 *
 * @Route("/")
 * @Template
 * @Method({"GET"})
 */
class DefaultController extends Controller
{
	/**
	 * @Route("/")
	 * @Template
	 * @return array
	 */
	public function indexAction()
    {
		if ($this->get("security.context")->isGranted("ROLE_USER")) {
			return $this->redirect($this->generateUrl("polidog_backwork_default_dashboard"));
		}
        return [];
    }

	/**
	 * @Route("/dashboard")
	 * @Template
	 * @Method({"GET"})
	 */
	public function dashboardAction()
	{
		return [];
	}
}
