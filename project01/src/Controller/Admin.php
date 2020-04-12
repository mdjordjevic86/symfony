<?php
	/**
	 * Class Admin
	 *
	 * @package Controller
	 * @author  Miki <63016469+mdjordjevic86@users.noreply.github.com>
	 *
	 * @date    : 4/12/20
	 * @time    : 8:16 AM
	 */

	namespace App\Controller;


	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class Admin extends AbstractController {

		/**
		 * @Route("/admin/article/new")
		 */
		public function newArticle() {
			return new Response(sprintf(
				"Article with id: %d created",
				555
            ));
		}
	}