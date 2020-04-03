<?php
	/**
	 * Class TwigController
	 *
	 * @package App\Controller
	 *
	 * @project project01
	 * @author  Miki <63016469+mdjordjevic86@users.noreply.github.com>
	 *
	 * @date    : 4/3/20
	 * @time    : 6:21 PM
	 */

	namespace App\Controller;


	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;

	class TwigController extends AbstractController {

		/**
		 * Test passing vars to twig template engine
		 * @Route("/twig")
		 */
		public function show() {
			$debugText = "This is some text to test passing vars to twig template engine";

			return $this->render(
				'twig/show.html.twig',
				[
					'testText' => $debugText
				]
			);
		}

		/**
		 * Prints array inside the template
		 * @Route("/twig/printr")
		 */
		public function printArray() {
			$testArray = [
				'test 1',
				'test 2',
				'test 3',
				'test 4',
				'test 5',
			];

			return $this->render(
				'twig/printArray.html.twig',
				[
					'testArray' => $testArray
				]
			);
		}
	}