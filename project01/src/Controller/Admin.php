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


	use App\Entity\Article;
	use Doctrine\ORM\EntityManagerInterface;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class Admin extends AbstractController {

		/**
		 * @Route("/admin/article/new")
		 * @param EntityManagerInterface $em
		 * @return Response
		 */
		public function newArticle(EntityManagerInterface $em) {

			$article = new Article();

			$article->setName("Test article subject - ".rand(1,999999))
				->setText("Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
				took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
				but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
				in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
				and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.")
				->setCreated(new \DateTime('now'))
				->setVisible(true)
				->setCatalogId(rand(1,3));

			$em->persist($article);
			$em->flush();

			return new Response(sprintf(
				"Article with id: %d created",
				$article->getId()
            ));
		}

		/**
		 * @Route("/admin/article/edit/{article_id<\d+>}")
		 * @param $article_id
		 * @return Response
		 */
		public function editArticle($article_id) {
			return new Response(sprintf(
                "Edit Article with id: %d",
                555
            ));
		}
	}