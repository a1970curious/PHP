<?php
class smtp_mail
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
            $this->compose($name, $from, $subject, $body);
        }
    }
    function compose($name, $from, $subject, $body)
    {
        $time = time();						//Time lookup
        $date = strftime('%d/%m/%y %H:%M', $time);		//Getting Date and Adding Time
        $subject = '['.$date.']'.$subject;			//Creating Subject with date and time
        $to = "ADD@EMAIL_ADDRESS.COM"; 				//Set receiving email address
        $message =
        '____________________________________  
        '.$body.'
        '.$name.'
        ------------------------------------';			//Define the messages to be sent
        $host = "mail.example.com";				//SMTP Server
        $username = "smtp_username";				//SMTP Username
        $password = "smtp_password";				//SMTP Password
        $headers = array ('From' => $from,'To' => $to,'Subject' => $subject);
        $smtp = Mail::factory('smtp',array ('host' => $host,'auth' => true,'username' => $username,'password' => $password));
        $mail = $smtp->send($to, $headers, $message);
        $this->send($mail);
    }
    function send($mail)
    {
        if (PEAR::isError($mail)) 
        {
                echo("<p>" . $mail->getMessage() . "</p>");
        } else 
        {
                echo("<p>Message successfully sent!</p>");
        }
    }
}