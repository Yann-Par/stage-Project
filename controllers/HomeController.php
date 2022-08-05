<?php

namespace Controllers;

class HomeController
{
    public function displayHomePage()
    {
        unset($_SESSION['messageWin']);
        unset($_SESSION['messageLoose']);
        unset($_SESSION['messageErr']);

        $view = "homePage.phtml";
        include_once "views/layout.phtml";
    }
}

?>