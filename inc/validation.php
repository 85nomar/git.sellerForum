<?php

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

?>