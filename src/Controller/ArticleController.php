<?php
/**
 * Created by PhpStorm.
 * User: Renel
 * Date: 2019-01-13
 * Time: 12:06
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf('Future page show to article: %s', $slug));
    }

}