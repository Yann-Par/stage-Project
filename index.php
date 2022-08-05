<?php
session_start();

spl_autoload_register( function($class)
{
    require_once lcfirst( str_replace('\\', '/', $class)). '.php';
});


if( array_key_exists( 'route', $_GET))
{
    switch( $_GET['route'])
    {
        case "home" :
            $controller = new Controllers\HomeController();
            $controller->displayHomePage();
            break;
        
        /* Contact page */
            
        case "contact" :
            $controller = new Controllers\ContactController();
            $controller->displayContactPage();
            break;
        
        case "sendMail" :
            $controller = new Controllers\ContactController();
            $controller->sendMail();
            break;


        /* Plomberie Page */

        case "plomberie" :
            $controller = new Controllers\SitesController();
            $controller->displayPlomberiePage();
            break;

        /* Chauffage Page */
        case "chauffage" :
            $controller = new Controllers\SitesController();
            $controller->displayChauffagePage();
            break;

        /* Gaz Page */
        case "gaz" :
            $controller = new Controllers\SitesController();
            $controller->displayGazPage();
            break;

        /* Infos Page */
        case "mentionLegales" :
            $controller = new Controllers\InfosController();
            $controller->displayMentionLegalesPage();
            break;
        
        case "PolitiqueDeConfidentialite" :
            $controller = new Controllers\InfosController();
            $controller->displayPolitiqueDeConfidentialitePage();
            break;
        
        case "sources" :
            $controller = new Controllers\InfosController();
            $controller->displaySourcesPage();
            break;

        
        
    }
    
    
    
}    
    else
{
    header('Location: index.php?route=home');
    exit();
}

?>