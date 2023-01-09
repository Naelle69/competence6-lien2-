
<div id="app" class="notreblog">

<div class="nosconseils">
  <div class="directives">
    <div  class="texteconseils">
      <div class="conseilprincipal">
        <h3 class="h3vert">{{soustitre}}</h3>
        <p class="ptexte">{{texte}}</p>
      </div>
      <img class="img-conseil" :src="require(`@/assets/images/${image}`)">
    </div>

<?php
$db = new PDO('mysql:host=localhost;dbname=sitepokgourmet','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$sql = 'SELECT * FROM `textearticle` ';
$requete = $db->query($sql);
While ($news = $requete->fetch()) {
    echo '<div  class="texteconseils">
            <div class="conseilprincipal">
                <h3 class="h3vert">'.$news["soustitre"].'</h3>
                <p class="ptexte">'.$news["texte"].' </p>
            </div>
            <img class="imagerecette" src="'.$news["image"].'"/>
        </div>';
}
?>
    