<?php

namespace Controllers;

class ContactController
{
    public function displayContactPage()
    {
        

        $view = "Sites/contact.phtml";
        include_once "views/layout.phtml";
    }
    
    
    public function sendMail()
    {
        $lastname       = htmlspecialchars($_POST['lastname']);
        $firstname      = htmlspecialchars($_POST['firstname']);
        $mail           = htmlspecialchars($_POST['mail']);
        $phone          = htmlspecialchars($_POST['phone']);
        $object         = htmlspecialchars($_POST['object']);
        $comment        = $_POST['comment'];
        

        // $destinataire = "yparis94@live.fr";
        //    $subject = $object;
        //    $message = "Bonjour $comment  ";
        // //    $headers = "From: yann.paris.91@gmail.com";

        //     mail($destinataire, $subject, $message);
           
        //    var_dump($message);
        
        if( isset($lastname) && !empty($lastname) && strlen($lastname) >= 3
            &&
            isset($firstname) && !empty($firstname) && strlen($firstname) >= 3 
            &&
            isset($mail) && !empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL) 
            &&
            isset($comment) && !empty($comment)
            &&
            isset($phone) && !empty($phone)
            
        ){
            $destinataire = "yparis94@live.fr";
            $subject = $object;
            $message = "$comment \r\n \r\n \r\n"   ; 
            $message.= "de $lastname $firstname \r\n \r\n";
            $message .= "tel : $phone . ";
            
            $headers = "From: $mail";

            if(mail($destinataire, $subject, $message, $headers))
            {
                

                $_SESSION['messageWin'] = "Votre demande est bien prise en compte";

                

                unset($_SESSION['messageLoose']);
                unset($_SESSION['messageErr']);

                header('Location: '.$_SERVER['HTTP_REFERER']);
                exit();

            }else{
                $message = "Désolé, votre demande n'a pas été prise en compte, <br> veuillez réessayer plus tard.";

                $_SESSION['messageLoose'] = $message;

                unset($_SESSION['messageWin']);
                
                unset($_SESSION['messageErr']);

                header('Location: '.$_SERVER['HTTP_REFERER']);
                exit();
            }
            
            
        
        }  else {
            $message = "Merci de bien vouloir remplir tous les champs";

            $_SESSION['messageErr'] = $message;


            unset($_SESSION['messageWin']);
            unset($_SESSION['messageLoose']);
        

            
            header('Location: '.$_SERVER['HTTP_REFERER']);
            exit();


        }
        
        
    
        
        
        
        
    }
}

