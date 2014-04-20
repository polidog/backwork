<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/04/20
 * Time: 16:38
 */

namespace Polidog\BackworkBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class SettingsController
 * @package Polidog\BackworkBundle\Controller
 * @Route("{name}/settings")
 */
class SettingsController
{
	/**
	 * @param $name
	 *
	 * @Route("/profile")
	 * @Template
	 */
	public function profileAction($name)
	{
		return [];
	}
} 