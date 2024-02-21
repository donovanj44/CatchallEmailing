<!DOCTYPE HTML>  
<html lang="en">
<head>
    <title>Send emails from your catchall.</title>
</head>

    <?php
    $senderEmail = '';
    $recipientEmail = '';
    $emailMessage = "Thank you for filling out the form!\nHopefully you will visit the website again!";
    $emailMessage = wordwrap($emailMessage, 70);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    <!-- $headers .= "From: <jdonova9@uvm.edu>"; -->

    function getData($field) {
        if(!isset($_POST[$field])) {
            $data = "";
        } else {
            $data = htmlspecialchars($_POST[$field]);
            $data = trim($data);
        }
        return $data;
    }
    

?>

<main>
    <form action="#" method="post" id="usrform">
        <label for="sendEmail">Your email including domain:</label>
        <input type="text" id="sendEmail" name="sendEmail" onfocus="this.select()" tabindex="120" value="<?php print $senderEmail; ?>" required>
        <fieldset>
            <legend>Recipient Email:</legend>
            <input type="text" id="recEmail" name="recEmail" onfocus="this.select()" tabindex="120" value="<?php print $recipientEmail; ?>" required>
        </fieldset>
    </form>
</main>

</html>


