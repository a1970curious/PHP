<?php
    include("simpel_mail.php");
    include("smtp.php");
    include("smtp_ssl.php");
    include("get_var.php");
?>
<!DOCKTYPE HTML>
<html>
    <head>
        <title>
                Mail Script
        </title>
    </head>
    <body>
        <form name="form1" method="post" action="post.php">
            Naam:<input name="name" type="text" value="">
            E-mail:<input name="form" type="text" value="">
            Onderwerp:<input name="subject" type="text" value="">
            <textarea name="body" rows="7" cols="45"></textarea>
            <input type="submit" name="Submit" value="Verzenden">
        </form>
        <?php
            $send_mail = new get();
            $send_mail->get_var();
        ?>
    </body>
</html>