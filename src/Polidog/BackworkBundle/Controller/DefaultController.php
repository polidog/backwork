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
        return [];
    }
}
