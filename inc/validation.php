<?php

$to = "elmedin.medija@ricardo.ch"; // email address to which the form data will be sent
//$to = "nobel.martinez@ricardo.ch"; // email address to which the form data will be sent
$from = "support@ricardo.ch";
$subject = "New API request"; // subject of the email that is sent

/*
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
*/

// check for form submission - if it doesn't exist then send back to contact form
if (isset($_POST["submit"]))  {


    //comments letter limit
    $limit = 500;

    //Error Array
    $error_msg=array();

    //DEFAULT PERSONAL DATA
    $message = $_POST["inputComment"];

    $user_name = $_POST["inputUserName"];
    $first_name = $_POST["inputFirstName"];
    $last_name = $_POST["inputLastName"];

    $email_address = trim($_POST["inputEmail"]);
    $phone = $_POST["inputPhone"];

    //COMPANY DATA
    $company_name = $_POST["inputCompany"];
    $company_url = $_POST["inputUrl"];
    $company_entity = $_POST["inputEntity"];
    $employees = $_POST["inputEmployees"];

    $company_ip = $_POST["inputIP"];
    $company_tech = $_POST["inputTech"];

    /* ADDITIONAL FIELDS ACCORDING TO CHOSEN FORM*/
    $radio_toggler = $_POST["toggler"];
    $form_type = $_POST["formtype"];


    // REQUEST FORM 1
    if ($radio_toggler == "1" || $form_type == "1") {

        //chosen option
        $theme = "I need access to the API for my own ricardo.ch account";
        $added_title = "Technical impplementation";
        $radio_drop = $_POST["radio-drop"];
        $email_added = '';

        //ADDITIONAL DATA
        if($radio_drop == "1") {

            $company_name2 = $_POST["inputCompany2"];
            $first_name2 = $_POST["inputFirstName2"];
            $last_name2 = $_POST["inputLastName2"];

            $phone2 = $_POST["inputPhone2"];
            $email_address2 = $_POST["inputEmail2"];

            //validate
            if (empty($company_name2)) {
                $error_msg[] = "Company name cannot be empty";
            }
            if (empty($first_name2) || is_numeric($first_name2)) {
                $error_msg[] = "Please enter a valid name";
            }
            if (empty($last_name2) || is_numeric($last_name2)) {
                $error_msg[] = "The last name field must contain only letters, spaces, dashes ( - ) and single quotes ( '
                )";
            }

            if (empty($email_address2) || !filter_var($email_address2, FILTER_VALIDATE_EMAIL)) {
                $error_msg[] = "E-Mail must have a valid format, such as name@mailhost.com";
            }
            if (empty($phone2) || !is_numeric($phone2)) {
                $error_msg[] = "Enter valid phone number";
            }

            $email_added =
                "Addition: $added_title \n\n" .
                "Company name: $company_name2 \n" .
                "Name: $first_name2 $last_name2\n" .
                "E-Mail: $email_address2\n" .
                "Phone: $phone2\n\n";

        }

    }
    // REQUEST FORM 2
    elseif($radio_toggler == "2" || $form_type == "2") {

        //chosen option
        $theme = "I need access to the API to build a tool or app";


        $message2 = $_POST["inputComment2"];

        if (empty($message2) || (strlen($message2) > $limit)) {
            $error_msg[] = "The Comments field cannot be left empty.";
        }

        $email_added =
            "COMMENT:\n" .
            "$message2";

    }
    // REQUEST FORM 3
    elseif($radio_toggler == "3" || $form_type == "3"){

        //chosen option
        $theme = "I need access to the API for a client";
        $added_title = "Information about your client";

        $user_name2 = $_POST["inputUserName2"];

        $first_name2 = $_POST["inputFirstName2"];
        $last_name2 = $_POST["inputLastName2"];

        $email_address2 = trim($_POST["inputEmail2"]);
        $phone2 = $_POST["inputPhone2"];

        $message2 = $_POST["inputComment2"];

        //COMPANY DATA
        $company_name2 = $_POST["inputCompany"];
        $company_url2 = $_POST["inputUrl2"];
        $company_entity2 = $_POST["inputEntity2"];
        $employees2 = $_POST["inputEmployees2"];


        if (empty($message2) || (strlen($message2) > $limit)) {
            $error_msg[] = "The Comments field cannot be left empty.";
        }

        if (empty($user_name2)) {
            $error_msg[] = "your client's ricardo.ch username cannot be empty";
        }
        if (empty($first_name2) || is_numeric($first_name2)) {
            $error_msg[] = "Please enter a valid name";
        }
        if (empty($last_name2) || is_numeric($last_name2)) {
            $error_msg[] = "The last name field must contain only letters, spaces, dashes ( - ) and single quotes ( '
                )";
        }
        if (empty($company_name2)) {
            $error_msg[] = "Your client's company name cannot be empty";
        }
        if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $company_url2)) {
            $error_msg[] = "URL of your client's comapny is invalid";
        }

        if (empty($company_entity2)) {
            $error_msg[] = "Your client's legal entity cannot be empty";
        }
        if (empty($employees2) || !is_numeric($employees2)) {
            $error_msg[] = "Your client's number of employees is invalid";
        }


        if (empty($email_address2) || !filter_var($email_address2, FILTER_VALIDATE_EMAIL)) {
            $error_msg[] = "Your client's E-Mail must have a valid format, such as name@mailhost.com";
        }
        if (empty($phone2) || !is_numeric($phone2)) {
            $error_msg[] = "Enter your clien's valid phone number";
        }

        $email_added =
            "Addition: $added_title \n\n" .
            "Name: $first_name2 $last_name2\n" .
            "username: $user_name2\n" .
            "E-Mail: $email_address2\n\n" .
            "Phone: $phone2\n\n" .
            "COMMENT:\n" .
            "subject: $theme2\n" .
            "$message2\n\n" .
            "Company name: $company_name2 \n" .
            "URL: $company_url2 \n" .
            "Legal entity: $company_entity2 \n" .
            "Number of employees: $employees2 \n\n";

    }




    // check

    if (empty($message) || (strlen($message) > $limit)) {
        $error_msg[] = "The Comments field cannot be left empty.";
    }

    if (empty($user_name)) {
        $error_msg[] = "username cannot be empty";
    }
    if (empty($first_name) || is_numeric($first_name)) {
        $error_msg[] = "Please enter a valid name";
    }
    if (empty($last_name) || is_numeric($last_name)) {
        $error_msg[] = "The last name field must contain only letters, spaces, dashes ( - ) and single quotes ( '
                )";
    }

    if (empty($company_name)) {
        $error_msg[] = "Company name cannot be empty";
    }
    /*if (empty($company_url) || !filter_var($company_url, FILTER_VALIDATE_URL)) {
        $error_msg[] = "Companie's URL is invalid";
    }*/

    if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $company_url)) {
        $error_msg[] = "Companie's URL is invalid";
    }


    if (empty($company_entity)) {
        $error_msg[] = "Legal entity cannot be empty";
    }
    if (empty($employees) || !is_numeric($employees)) {
        $error_msg[] = "Number of employees is invalid";
    }


    if (empty($email_address) || !filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $error_msg[] = "Your email must have a valid format, such as name@mailhost.com";
    }

    if (empty($phone) || !is_numeric($phone)) {
        $error_msg[] = "Enter valid phone number";
    }

    if (empty($company_ip) || !preg_match("/[0-9\.-\s]/", $company_ip)) {
        $error_msg[] = "We need your static IP (range) to allow you access to our environment";
    }
    if (empty($company_tech)) {
        $error_msg[] = "What OS, technology, language will be used to communicate with the API?";
    }


    if ($error_msg) {
        echo '<div class="alert"><ul>';
        foreach ($error_msg as $err) {
            echo '<li>'.$err.'</li>';
        }
        echo '</ul></div>';
    }

    // write the email content

    $email_body =
        "Name: $first_name $last_name\n" .
        "username: $user_name\n\n" .
        "E-Mail: $email_address\n" .
        "phone: $phone\n\n" .
        "subject: $theme\n" .
        "COMMENT:\n" .

        "$message\n\n" .
        "Company name: $company_name \n" .
        "URL: $company_url \n" .
        "Legal entity: $company_entity \n" .
        "Number of employees: $employees \n\n" .
        "IP range: $company_ip\n" .
        "Technology: $company_tech\n\n";


   // echo $email_body;
   // echo $email_added;
   // exit();

    if  (!$error_msg) {

        ini_set("sendmail_from", $from);
        $headers = "From: $from";
        $email_messages = $email_body.$email_added;

        mail($to, $subject, $email_messages);

        echo '
        <div class="alert alert-success alert-block">
          <h3>Thank you!</h3>
            <p>We will get back to you as soon as possible!</p>
            <a class="btn" href="index.php"><i class="icon-double-angle-left"></i> to homepage</a>
        </div>
        ';
        exit();
    }

}
?>