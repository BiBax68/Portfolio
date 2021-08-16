<?php

if(isset($_POST['done']))
    {
        if(isset($_POST['user_name']) AND isset($_POST['user_mail']) AND isset($_POST['user_message']))
        {
            if(!empty($_POST['user_name']) AND !empty($_POST['user_mail']) AND !empty($_POST['user_message']))
            {
                $name=htmlspecialchars($_POST['user_name']);
                $mail=htmlspecialchars($_POST['user_mail']);
                $message=htmlspecialchars($_POST['user_message']);
            }
        }
    }
?>