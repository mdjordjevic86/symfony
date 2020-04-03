<?php
	/**
	 * Class ThirdController
	 *
	 * @package App\Controller
	 * @author  Milan Djordjevic <mdjordjevic@jaggaer.com>
	 *
	 * @date    : 4/3/20
	 * @time    : 6:21 PM
	 */

	namespace App\Controller;


	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;

	class ThirdController extends AbstractController {

		/**
		 * Test passing vars to twig template engine
		 * @Route("/third")
		 */
		public function show() {
			$debugText = "This is some text to test passing vars to twig template engine";

			return $this->render(
				'third/show.html.twig',
				[
					'testText' => $debugText
				]
			);
		}
	}