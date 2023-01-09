<?php
?>

<div class="nosavis mb-10 relative snap-mandatory snap-x overflow-auto" >
      <div class="mx-4 shrink-0 scroll-ml-4 snap-center md:shrink">
        <div class="avis1">
          <div class="icones">
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/couverts.svg"/>
            </div>
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/bolle.svg"/>
            </div>
          </div>
          <div class="avis">
            <h3 class="h3vert mb-2"> Réservez une table </h3>
            <p class="ptexte mb-2"> Réservez en ligne dans tous nos restaurants en France. </p>
            <a class="h5marron underline " href="#"> Réserver</a>
          </div>
        </div>
      </div>

      <div class="mx-4 shrink-0 scroll-ml-4 snap-center md:shrink">
        <div class="avis1">
          <div class="icones">
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/etoilemarron.svg"/>
            </div>
            <div>
              <img class="iconesavis2" src="static/images/svg-icones/emoji.svg"/>
            </div>
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/etoilemarron.svg"/>
            </div>
          </div>
          <div class="avis">
            <h3 class="h3vert mb-2"> Voir les derniers avis </h3>
            <p class="ptexte mb-2"> Des centaines de photos et des avis sur nos restaurants.</p>
            <a class="h5marron underline " href="#"> Voir les avis </a>
          </div>
        </div>
      </div>
          
      <div class="mx-4 shrink-0 scroll-ml-4 snap-center md:shrink">
        <div class="avis1">
          <div class="icones">
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/app1.svg"/>
            </div>
            <div class="cercleavis">
              <img class="iconesavis1" src="static/images/svg-icones/app2.svg"/>
            </div>
          </div>
          <div class="avis">
            <h3 class="h3vert mb-2"> L'App Pok'Gourmet </h3>
            <p class="ptexte mb-2"> Téléchargez l'application pour recevoir des offres exclusives!</p>
            <a class="h5marron underline " href="#"> Télécharger l'Appli </a>
          </div>
        </div>
      </div>
</div>

<style>

.nosavis{
  padding-top: 8%;
  padding-bottom: 5%;
  display: flex;
  align-items: center;
}

.cercleavis{
  border: solid 2px rgb(72,69,38);
  background-color: #ffffff;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.avis{
  width: 280px;
  height: 250px;
  background-color: #ffffff;
  border: solid 1px #D79D66;
  border-radius: 30px 5px 30px 5px;
  padding: 30px;
  padding-top: 70px;
  text-align: center;
}

.icones{
  width: auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
  position: relative;
  top:30px;
  gap: 20px; 
}

.iconesavis1{
  width: 36px;
}

.iconesavis2{
  position: relative;
  top: -55px;
  width: 60px;
  height: 60px;
}


/* ORDINATEUR */

@media screen and (min-width:769px) and (max-width:2570px){
  .nosavis{
  padding-top:4%;
  padding-bottom: 4%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.cercleavis{
  border: solid 2px rgb(72,69,38);
  background-color: #ffffff;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.avis{
  width: 390px;
  height: 300px;
  background-color: #ffffff;
  border: solid 1px #D79D66;
  border-radius: 30px 5px 30px 5px;
  padding: 30px;
  padding-top: 70px;
  text-align: center;
}

.icones{
  width: auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
  position: relative;
  top:30px;
  gap: 20px; 
}

.iconesavis1{
  width: 36px;
}

.iconesavis2{
  position: relative;
  top: -55px;
  width: 60px;
  height: 60px;
}
}


/* TABLETTE */
@media screen and (min-width:481px) and (max-width:768px){

  .nosavis{
  padding-top:60px;
  padding-bottom: 3%;
  margin-bottom: 60px;
  display: flex;
  align-items: center;
}

.cercleavis{
  border: solid 2px rgb(72,69,38);
  background-color: #ffffff;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.avis{
  width: 280px;
  height: 250px;
  background-color: #ffffff;
  border: solid 1px #D79D66;
  border-radius: 30px 5px 30px 5px;
  padding: 30px;
  padding-top: 70px;
  text-align: center;
}

.icones{
  width: auto;
  display: flex;
  flex-direction:row;
  justify-content: center;
  position: relative;
  top:30px;
  gap: 20px; 
}

.iconesavis1{
  width: 36px;
}

.iconesavis2{
  position: relative;
  top: -55px;
  width: 60px;
  height: 60px;
}
}
</style>