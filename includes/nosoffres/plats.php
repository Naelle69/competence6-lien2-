<?php
$db = new PDO('mysql:host=localhost;dbname=sitepokgourmet','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$sql = 'SELECT * FROM `plats` ';
$requete = $db->query($sql);
While ($news = $requete->fetch()) {
    echo '<div class="plat p-12 shrink-0 ml-4 snap-center md:shrink">
    <span>
        <h4 class="h4vert mb-4"> '.$news["soustitre"].'</h4>
        <p class="ptexteplat pr-12">'.$news["texte"].' </p>
            <span class="achat flex w-full justify-between mt-4">
                <h4 class="h4vert mt-4 prix"> '.$news["prix"].' €</h4>
                <button class="ajout w-10 h-10">+</button>
            </span>
    </span>
    <img class="imagerecette" src="'.$news["image"].'"/>
</div>';
}
?>


<style>
.plat{
background-image: url("static/images/fondblanc.svg");
background-repeat: no-repeat;
margin-left: 10px;
margin-right: 70px;
width: 264px;
height: 320px;
padding-top: 40px;
padding-bottom: 0px;
}

.plat img{
position: relative;
top: -210px;
left: 140px;
z-index: 1;
box-shadow: 2px 2px 3px 3px rgb(215, 157, 102, 0.4);
}

.ajout{
color: #484526;
height: 50px;
width: 50px;
}


/* TABLETTE */
@media screen and (min-width:481px) and (max-width:768px){

.plat{
width: 264px;
padding: 30px;
padding-top: 60px;
margin-right: 70px;
margin-left: 10px;
}

.plat img{
width: 136px;
border-radius: 50%;
position: relative;
top: -190px;
left: 150px;
z-index: 1;
}

.ptexteplat{
width: 200px;
}
}


/* LAPTOP ET DESKTOP */
 @media screen and (min-width:769px) and (max-width:2570px){

.nosplats{
    margin-left: 100px;
    margin-bottom: 100px;
    margin-top: 100px;
}

.plat{
width: 344px;
padding: 50px;
margin-left: 10px;
margin-right: 70px;
}


.plat img{
width: 180px;
border-radius: 50%;
position: relative;
top: -160px;
left: 160px;
z-index: 1;
}

.ptexteplat{
width: 200px;
}
}
</style>


   