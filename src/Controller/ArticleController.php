<?php
/**
 * Created by PhpStorm.
 * User: mrriv
 * Date: 27/06/2019
 * Time: 17:04
 */

namespace App\Controller;

use symfony\routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ArticleController
{
    /**
     * @route("/")
     */
    public function Homepage(){
        return new Response('yooooo');
    }

    public function show(){

    }
}