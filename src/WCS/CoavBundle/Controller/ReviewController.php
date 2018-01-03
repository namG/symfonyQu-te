<?php

namespace WCS\CoavBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class ReviewController
 * @package WCS\CoavBundle\Controller
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @Route("/",    name="review_index")
	 * @Method("GET")
	 */
    public function indexAction()
    {
        return $this->render('review/index.html.twig');
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @Route("/new",  name="review_new")
	 * @Method({"GET", "POST"})
	 */
    public function newAction()
    {
        return $this->render('review/new.html.twig');
    }

}
