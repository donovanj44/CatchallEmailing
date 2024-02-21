<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Send emails from your catchall</title>
    </head>

<?php
    $senderEmail = '';
    $recipientEmail = '';
    $subject = '';
    $emailMessage = "";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <jdonova9@uvm.edu>";
    

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
<body>
    <main>
        <form action="#" method="post" id="usrform">
            <fieldset>
                <legend>Email:</legend>
            <input type="text" id="sendEmail" name="sendEmail" onfocus="this.select()" tabindex="120" value="" required>
            </fieldset>
            <fieldset>
                <legend>Recipient email:</legend>
                <input type="text" id="recEmail" name="recEmail" onfocus="this.select()" tabindex="120" value="" required>
            </fieldset>
            <fieldset>
                <legend>Subject:</legend>
                <input type="text" id="subject" name="subject" onfocus="this.select()" tabindex="120" value="" required>
            </fieldset>
            <fieldset>
                <legend>Message Content:</legend>
                <p>
                    <textarea rows="4" cols="25" name="messageContent" form="usrform" id="messageContent" maxlength="500" onfocus="this.select()" tabindex="120"></textarea>
                </p>
            </fieldset>
            <input type="submit" value="Submit" name="btnSubmit">
        </form>
    </main>
</body>
</html>