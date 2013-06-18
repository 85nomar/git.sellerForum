<?php


/*
if ($_POST['check'] == 1)
{
    $fehler = "";
    $vorschlag = $_POST['vorschlag'];
    $kategorie = $_POST['categoryAndLevel'];
    
    function verifyUser($username, $password) {
        global $failure, $user_xml;
        
        $xmlurl = 'https://ws.qxlricardo.com/QxlRicardoWebServices/AccountService.asmx/CheckAccount?userNick='.urlencode($username).'&userPassword='.urlencode($password).'&userCountryNr=2&userIP='.$_SERVER['SERVER_ADDR'].'&ticks=0&identifier=s4g7s-(sl@)*258dh489)%2B@2o';
        $xml = simplexml_load_file($xmlurl);
        if ($xml->ID != 0) {
            return $xml;
        } else {
            return false;
        }
    }
    
    $xml = verifyUser($_POST['username'], $_POST['password']);
    
    if($xml != false){
        
        //CONTENT HERE IF TRUE
        echo 'content true!';
    }
}
*/

// check for form submission - if it doesn't exist then send back to contact form
if (isset($_POST["submit"]))  {
    //header("Location: request.php"); exit;

    $radioToggler = $_POST["toggler"];


    if ($radioToggler == 1) {

        //PERSONAL DATA
        $user_name = $_POST["inputUserName"];
        $first_name = $_POST["inputFirstName"];
        $last_name = $_POST["inputLastName"];

        $email_address = $_POST["inputEmail"];
        $phone = $_POST["inputPhone"];
        $message = $_POST["inputMessage"];

        //COMPANY DATA
        $company_name = $_POST["inputCompany"];
        $company_entity = $_POST["inputEntity"];

        //ADDITIONAL DATA
        $user_name2 = $_POST["inputUserName2"];
        $first_name2 = $_POST["inputFirstName2"];
        $last_name2 = $_POST["inputLastName2"];

        $phone2 = $_POST["inputPhone2"];
        $email_address2 = $_POST["inputEmail2"];

        // check
        if (emptyempty($user_name))
            $error = "You must enter your username.";
        // check that an email address was entered
        elseif (emptyempty($first_name))
            $error = "You must enter your first name.";
        elseif (emptyempty($last_name))
            $error = "You must enter your last name.";


        elseif (emptyempty($email_address))
            $error = "You must enter your email address.";
        // check for a valid email address
        elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))
            $error = "You must enter a valid email address.";
        elseif (emptyemty($phone)) {
            $error = "Please enter a phone number";
        }
        // check that a message was entered
        elseif (emptyempty($message))
            $error = "You must enter a message.";

        // check if an error was found - if there was, send the user back to the form
        if (isset($error)) {
            header("Location: contact-form.php?e=".urlencode($error)); exit;
        }

        // write the email content
        $email_content = "Name: $first_name $last_name\n";
        $email_content .= "Email Address: $email_address\n";
        $email_content .= "Message:\n\n$message";

        // send the email
        mail ("al.playero@gmail.com", "New API request", $email_content);

        // send the user back to the form
        header("Location: contact-form.php?s=".urlencode("<p class='alert-success'><strong>Thank you for your message</strong><br />We'll contact you as soon as possible.</p>")); exit;


    }elseif($radioToggler == 2) {
        echo $radioToggler;
    }elseif($radioToggler == 3){
        echo $radioToggler;
    }



}
?>
