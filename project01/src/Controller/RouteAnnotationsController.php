<?php
	/**
	 * Class RouteAnnotationsController
	 *
	 * @package App\Controller
	 *
	 * @project project01
	 * @author  Miki <63016469+mdjordjevic86@users.noreply.github.com>
	 *
	 * @date    : 4/2/20
	 * @time    : 9:26 PM
	 */

	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class RouteAnnotationsController {

		/**
		 * @Route("/routeannotations")
		 * @return Response
		 */
		public function show() {
			return new Response("Hello from second controller!");
		}

		/**
		 * @Route("/routeannotations/{param}")
		 * @param $param
		 * @return Response
		 */
		public function showWithParam($param) {
			return new Response('Hello again with method argument: '.$param);
		}
	}