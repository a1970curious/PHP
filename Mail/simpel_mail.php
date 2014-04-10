<?php
    class simpel_mail
    {
        function compose($name, $from, $subject, $body)
        {
            $time = time();											//Time lookup
            $date = strftime('%d/%m/%y %H:%M', $time);				//Getting Date and Adding Time
            $subject = '['.$date.']'.$subject;						//Creating Subject with date and time
            $to = "ADD@EMAIL_ADDRESS.COM"; 							//Set receiving email address

            $message =
            '____________________________________  
            '.$body.'
            '.$name.'
            ------------------------------------';					//Define the messages to be sent

            mail($to, $subject, $message, 'From: '.$from);	//Set receiving mail, subject, message and sender

            echo '<p>Message successfully sent!</p>';
        }
    }