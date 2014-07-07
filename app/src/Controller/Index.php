<?php
namespace Controller;

use Silicone\Route;
use Silicone\Controller;

class Index extends Controller
{
    /**
     * @Route("/", name="index", methods="GET")
     */
    public function index()
    {
        return $this->render('index.twig');
    }
}