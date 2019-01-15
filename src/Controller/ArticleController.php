<?php
/**
 * Created by PhpStorm.
 * User: Renel
 * Date: 2019-01-13
 * Time: 12:06
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first symfony page word');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        $comments = [
            'Bacon pancakes are amazing?',
            '  A. Bob Burger',
            'B. Adventure Time',
               'C. South Park',
            'D. None of the above',
        ];
        return $this->render('article/show.html.twig',[
           'title'=> ucwords(str_replace('-',' ',$slug)),
            'comments'=> $comments,
        ]);
    }

}