<?php

namespace Controllers;

class InfosController
{
    public function displayMentionLegalesPage()
    {
        $view = "InfosLegales/mentionsLegale.phtml";

        include_once "views/layout.phtml";
    }

    public function displayPolitiqueDeConfidentialitePage()
    {
        $view = "InfosLegales/PolitiqueDeConfidentialite.phtml";

        include_once "views/layout.phtml";
    }


    public function displaySourcesPage()
    {
        $view = "InfosLegales/soucesIcones.phtml";

        include_once "views/layout.phtml";
    }
}



