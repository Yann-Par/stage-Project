<?php

namespace Controllers;

class SitesController{

    public function displayPlomberiePage()
    {

        unset($_SESSION['messageWin']);
        unset($_SESSION['messageLoose']);
        unset($_SESSION['messageErr']);


        $view = "Sites/plomberiePage.phtml";

        include_once "views/layout.phtml";
    }

    public function displayChauffagePage()
    {

        unset($_SESSION['messageWin']);
        unset($_SESSION['messageLoose']);
        unset($_SESSION['messageErr']);

        
        $view = "Sites/chauffagePage.phtml";

        include_once "views/layout.phtml";
    }


    public function displayGazPage()
    {
        unset($_SESSION['messageWin']);
        unset($_SESSION['messageLoose']);
        unset($_SESSION['messageErr']);


        $view = "Sites/gazPage.phtml";

        include_once "views/layout.phtml";
    }
}