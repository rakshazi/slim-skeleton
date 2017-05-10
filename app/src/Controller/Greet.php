<?php

namespace App\Controller;

class Greet extends \Rakshazi\SlimSuit\Controller
{
    public function helloAction()
    {
        return $this->render('greet.html');
    }
}
