<?php
	/**
	 * Class FirstController
	 *
	 * @package App\Controller
	 * @author  Milan Djordjevic <mdjordjevic@jaggaer.com>
	 *
	 * @date    : 4/2/20
	 * @time    : 8:17 PM
	 */

	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;

	class FirstController {

		/**
		 * First controller
		 * Route called from routes.yaml
		 */
		public function show() {
			return new Response("Hello from first symfony controller!");
		}
	}