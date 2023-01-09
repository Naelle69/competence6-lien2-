<?php
$db = new PDO('mysql:host=localhost;dbname=sitepokgourmet','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$sql = 'SELECT * FROM `recettes` ';
$requete = $db->query($sql);
While ($news = $requete->fetch()) {
  echo '<div class="recettes shrink-0 snap-center">
  <img class="imagerecette" src="'.$news["image"].'"/>
  <div class="ideetext text-center">
    <h4 class="h4vert mb-2">'.$news["titre1"].' </h4>
    <h4 class="h4blanc"> '.$news["titre2"].' </h4>
  </div>
</div>';
}
?>
    
       

<style scoped>
.card{
  perspective: 1000px;
}

.relative {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: row;
}

.card-inner{
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: 0.6s;
}

.card:hover .card-inner{
  transform:rotatex(180deg);
}

.cardfront, .cardback{
  position: absolute;
  height: 100%;
  width: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.cardfront{
  background-image: url("static/images/grandfond.svg");
  background-repeat: no-repeat;
}

.cardfront:before{
  content:"";
  position: absolute;
  height: 100%;
  width: 100%;
  top:0%;
  background: linear-gradient(0deg);
}

.cardfront .card-content{
  z-index: 1;
  color:white;
} 

.cardback{
 background-image: url("static/images/grandfondvert.svg");
  background-repeat: no-repeat; 
  transform: rotatex('180deg');
}


.recettes{
  background-image: url("static/images/grandfond.svg");
  background-repeat: no-repeat;
  background-position: center;
  width: 230px;
  height: 350px;;
  padding: 3%;
}

.recettes:hover{ 
  background-image: url("static/images/grandfondvert.svg");
  background-position: center;
}
 

.ideetext .h4vert:hover{
  color:#D79D66
}


.imagerecette{
  width: 120px;
  border-radius: 50%;
  position: relative;
  left: 30px;
}

/* TABLETTE */
@media screen and (min-width:481px) and (max-width:768px){
.recettes{
  width: 240px;
  height: 450px;
  margin: 0px;
}

.ideetext{
  position: relative;
  top: 100px;
}

.imagerecette{
  width: 130px;
  border-radius: 50%;
  position: relative;
  left: 30px;
  top: 30px;
}
}


/* LAPTOP ET DESKTOP */
@media screen and (min-width:769px) and (max-width:2570px){

.recettes{
  width: 680px;
  height: 700px;
  margin-top: 50px;
}

.ideetext{
  position: relative;
  top: 130px;
}

.imagerecette{
  width: 180px;
  border-radius: 50%;
  position: relative;
  left: 100px;
}
}

</style>