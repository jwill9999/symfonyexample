<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {
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
     * @return Response
     */
    public function show($slug)
    {
        return new Response(sprintf('test "%s"', ucwords(str_replace("-", " ", $slug))));
    }
}