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
if (!isset($_POST["submit"]) || $_POST["submit"] != "contact") {
    header("Location: register.php"); exit;
}






// get the posted data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$message = $_POST["contact_message"];

// check that a name was entered
if (emptyempty($name))
    $error = "You must enter your name.";
// check that an email address was entered
elseif (emptyempty($email_address))
    $error = "You must enter your email address.";
// check for a valid email address
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))
    $error = "You must enter a valid email address.";
// check that a message was entered
elseif (emptyempty($message))
    $error = "You must enter a message.";

// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header("Location: contact-form.php?e=".urlencode($error)); exit;
}

// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Message:\n\n$message";

// send the email
mail ("mail@example.com", "New Contact Message", $email_content);

// send the user back to the form
header("Location: contact-form.php?s=".urlencode("Thank you for your message.")); exit;

?>


?>