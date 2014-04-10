<?php
    class get
    {
        function get_var()
        {
            $name =     htmlspecialchars(filter_input(INPUT_GET, ['name']));
            $from =     htmlspecialchars(filter_input(INPUT_GET, ['form']));
            $subject =  htmlspecialchars(filter_input(INPUT_GET, ['subject']));
            $body =     htmlspecialchars(filter_input(INPUT_GET, ['body']));

            if(!isset($name, $from, $subject, $body))
            {
                die('One or more fields are empty!');
            }
            else{
                $s_mail = new simpel_mail();                        //Send mail using php mail() function
                $s_mail->compose($name, $from, $subject, $body);    //Calling function to mail
            }
        }
    }