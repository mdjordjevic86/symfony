<?php
	/**
	 * Class YamlRoutesController
	 *
	 * @package App\Controller
	 *
	 * @date    : 4/2/20
	 * @time    : 8:17 PM
	 */

	namespace App\Controller;

	use Symfony\Component\HttpFoundation\Response;

	class YamlRoutesController {

		/**
		 * First controller
		 * Route called from routes.yaml
		 */
		public function show() {
			return new Response("Hello from first symfony controller!");
		}
	}