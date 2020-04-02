<?php
	/**
	 * Class SecondController
	 *
	 * @package App\Controller
	 * @author  Milan Djordjevic <mdjordjevic@jaggaer.com>
	 *
	 * @date    : 4/2/20
	 * @time    : 9:26 PM
	 */

	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class SecondController {

		/**
		 * @Route("/second")
		 * @return Response
		 */
		public function show() {
			return new Response("Hello from second controller!");
		}

		/**
		 * @Route("/second/{param}")
		 * @param $param
		 * @return Response
		 */
		public function showWithParam($param) {
			return new Response('Hello again with method argument: '.$param);
		}
	}