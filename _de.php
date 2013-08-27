<?php 
$titel = "Optimierungsvorschläge zur Kategorienstruktur";
$navigation = "0";
include '../../inc/include.php'; 

kopf($titel);
navigation($titel,$navigation);




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
	
	if($xml != false)
	{
		if(!empty($vorschlag))
		{
			$nz = chr(13).chr(10);
			$text = strip_tags($text);
			$text = htmlentities($text);
			$kategorie = utf8_encode($kategorie);	
			$text = str_replace($nz, ' <br> ',$text);
			$an = "alexander.dischoe@ricardo.ch";
			$from ="From: Formular Optimierungsvorschlag";
			$betreff = "Vorschlag für Kategorienoptimierung – $kategorie";
			$kategorie = "Kategorie: $kategorie $nz";
			$inhalt ="Optimierungsvorschlag: $vorschlag $nz";
			$linie = "------------------------------------- $nz";
			$miglied ="Benutzername: $xml->Alias $nz";
			$namemitglied = "Vorname: $xml->FirstName $nz";
			$nachnamemitglied = "Nachname: $xml->LastName $nz";
			$phone = "Telefon: $xml->Phone $nz";
			$email = "$xml->EMail $nz";
			$text = "$kategorie$inhalt$linie$miglied$namemitglied$nachnamemitglied$phone$email";
			mail($an,$betreff, $text, $from);
			
			$success = true;
		}
		else
		{
			$fehler .= '<p style="color:red;font-weight:bold">Es ist folgender Fehler aufgetreten: Bitte f&uuml;llen Sie das Feld f&uuml;r den Optimierungsvorschlag aus.</p><br>';
		}
	}
	else
	{
		$fehler .= '<p style="color:red;font-weight:bold">Es ist folgender Fehler aufgetreten: Benutzername oder Passwort falsch</p><br />';
	}
	
	
}
?>


<script language=javascript>
var count = "500"; 
function limiter(){
var tex = document.FormVerif.vorschlag.value;
var len = tex.length;
if(len > count){
        tex = tex.substring(0,count);
        document.FormVerif.vorschlag.value =tex;
        return false;
}
document.FormVerif.limit.value = count-len;
}

</script>



<style type="text/css" media="screen">
	table {
		font-size: 12px;
	}
	
	td {
	padding-top:15px;
	}
	
	.small_box  {
		display:none;
	}
	.title {
		width:960px;
	}
	.two {
		width:680px;
	}
</style>
<div class="title"><?php echo utf8_encode($titel);?></div>
<br>
<div class="cols two">
	<?php
    if(isset($success))
	{
		?>
        <p style="color:green;"><strong>Ihr Vorschlag wurde erfolgreich abgeschickt.</strong><br>

Wir danken Ihnen vielmals f&uuml;r Ihr Engagement und w&uuml;nschen 
weiterhin viel Spass und Erfolg auf ricardo.ch!<br></p>
<?php
	}
	else if (isset($fehler))
	{
		echo '<p sryle="color:red;">'.$fehler.'<p>';
	}
	?>
	<p>Bitte f&uuml;llen Sie alle nachfolgenden Felder aus und klicken Sie anschliessend auf &#8222;Absenden&#8220;. <br>Ihr Vorschlag wird bei uns intern gepr&uuml;ft und Sie werden so rasch wie m&ouml;glich unser Feedback zu Ihrem Vorschlag erhalten.</p>

<form name="FormVerif" action="https://www.ricardo.ch/pages/themen/category_suggestion/de.php" method="post">
  <table align="left">
    <tr>
      <td colspan="2">Welche Hauptkategorie betrifft Ihr Vorschlag?</td>
      <td width="256"><select id="categoryAndLevel" name="categoryAndLevel">
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Alle Kategorien'){echo 'selected="selected"';} ?> value="Alle Kategorien">Alle Kategorien</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Antiquit&auml;ten & Kunst'){echo 'selected="selected"';} ?> value="Antiquit&auml;ten & Kunst"> Antiquit&auml;ten & Kunst</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Audio, TV & Video'){echo 'selected="selected"';} ?> value="Audio, TV & Video"> Audio, TV & Video</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Briefmarken'){echo 'selected="selected"';} ?> value="Briefmarken"> Briefmarken</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'B&uuml;cher & Comics'){echo 'selected="selected"';} ?> value="B&uuml;cher & Comics"> B&uuml;cher & Comics</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'B&uuml;ro & Gewerbe'){echo 'selected="selected"';} ?> value="B&uuml;ro & Gewerbe"> B&uuml;ro & Gewerbe</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Computer & Netzwerk'){echo 'selected="selected"';} ?> value="Computer & Netzwerk"> Computer & Netzwerk</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Dienstleistungen'){echo 'selected="selected"';} ?> value="Dienstleistungen"> Dienstleistungen</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Filme & DVD'){echo 'selected="selected"';} ?> value="Filme & DVD"> Filme & DVD</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Foto & Optik'){echo 'selected="selected"';} ?> value="Foto & Optik"> Foto & Optik</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Ferien & Reisen'){echo 'selected="selected"';} ?> value="Ferien & Reisen"> Ferien & Reisen</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Fahrzeuge'){echo 'selected="selected"';} ?> value="Fahrzeuge"> Fahrzeuge</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Fahrzeugzubeh&ouml;r'){echo 'selected="selected"';} ?> value="Fahrzeugzubeh&ouml;r"> Fahrzeugzubeh&ouml;r</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Games & Spielkonsolen'){echo 'selected="selected"';} ?> value="Games & Spielkonsolen"> Games & Spielkonsolen</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Handwerk & Garten'){echo 'selected="selected"';} ?> value="Handwerk & Garten"> Handwerk & Garten</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Handy, Festnetz, Funk'){echo 'selected="selected"';} ?> value="Handy, Festnetz, Funk"> Handy, Festnetz, Funk</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Haushalt & Wohnen'){echo 'selected="selected"';} ?> value="Haushalt & Wohnen"> Haushalt & Wohnen</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Immobilien'){echo 'selected="selected"';} ?> value="Immobilien"> Immobilien</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Kind & Baby'){echo 'selected="selected"';} ?> value="Kind & Baby"> Kind & Baby</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Kleidung & Accessoires'){echo 'selected="selected"';} ?> value="Kleidung & Accessoires"> Kleidung & Accessoires</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Kosmetik & Pflege'){echo 'selected="selected"';} ?> value="Kosmetik & Pflege"> Kosmetik & Pflege</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Modellbau & Hobby'){echo 'selected="selected"';} ?> value="Modellbau & Hobby"> Modellbau & Hobby</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'M&uuml;nzen'){echo 'selected="selected"';} ?> value="M&uuml;nzen"> M&uuml;nzen</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Musik & Musikinstrumente'){echo 'selected="selected"';} ?> value="Musik & Musikinstrumente"> Musik & Musikinstrumente</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Sammeln & Seltenes'){echo 'selected="selected"';} ?> value="Sammeln & Seltenes"> Sammeln & Seltenes</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Spielzeug & Basteln'){echo 'selected="selected"';} ?> value="Spielzeug & Basteln"> Spielzeug & Basteln</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Sports'){echo 'selected="selected"';} ?> value="Sports"> Sports</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Stellenangebote'){echo 'selected="selected"';} ?> value="Stellenangebote"> Stellenangebote</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Tickets & Gutscheine'){echo 'selected="selected"';} ?> value="Tickets & Gutscheine"> Tickets & Gutscheine</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Tierzubeh&ouml;r'){echo 'selected="selected"';} ?> value="Tierzubeh&ouml;r"> Tierzubeh&ouml;r</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Tiere'){echo 'selected="selected"';} ?> value="Tiere"> Tiere</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Uhren & Schmuck'){echo 'selected="selected"';} ?> value="Uhren & Schmuck"> Uhren & Schmuck</option>
          <option <?php if(isset($_POST['categoryAndLevel']) && $_POST['categoryAndLevel'] == 'Wein & Genuss'){echo 'selected="selected"';} ?> value="Wein & Genuss"> Wein & Genuss</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2">Ihr Optimierungsvorschlag</td>
      <td></td>
    </tr>
    <tr>
      <td colspan="3" style="padding-top:0"><label>
        <textarea name="vorschlag" wrap="physical" rows="10" cols="74" onkeyup="limiter()" ><?php if (isset($_POST['vorschlag'])) {echo $_POST['vorschlag']; }; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td colspan="3" style="padding-top:0;">Zeichen:
        <script language=javascript>
document.write("<input type=text name=limit size=4 readonly value="+count+">");
    </script></td>
    </tr>
    <tr>
      <td width="122">Ihr Benutzername:</td>
      <td width="173"><input type="text" name="username" value="" id="username"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Ihr Passwort:</td>
      <td><input type="password" name="password" value="" id="password"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input style="padding:5px" type="button" value="Zur&uuml;ck zur Startseite" name="back" onclick="javascript:{location.href='http://www.ricardo.ch'}"></td>
      <td colspan="2"><input type="hidden" name="check" value="1">
          <input type="submit" name="submit" value="Absenden" id="submit" style="padding:5px"></td>
    </tr>
  </table>
</form>
</div>

<div class="cols">
<img src="img/kategorie.jpg" alt="PiracyDay">
</div>

<div class="clear"></div>
<?php fuss(); ?>
