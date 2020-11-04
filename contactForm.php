<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "alex.coldicott@outlook.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received and email from ".$name.".\n\n".$message;
        
        mail($mailTo, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>