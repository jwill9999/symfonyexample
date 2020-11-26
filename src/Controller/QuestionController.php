<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homePage()
    {
        return new Response("Testing content");
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $answers = [
                "answer one",
                "answer two",
                "answer three"
        ];
        return $this->render("question/show.html.twig", [
                'question' => ucwords(str_replace("-", " ", $slug)),
                "answers" => $answers
        ]);

    }
}