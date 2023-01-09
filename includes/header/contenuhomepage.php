<?php
?>
<header>
<!--     <div class="homepage"> -->
    <div class="navbar ml-4"> 
      <div class="contentmobile">
        <div class="rechercher" href="lien">
          <img src="static/images/svg-icones/loupemarron.svg" alt="Rechercher" width="20"/>
        </div>
        <div class="home" href="lien">
          <img src="static/images/svg-icones/home.svg" alt="Rechercher" width="20"/>
        </div>
        <div class="contactnavigation">
          <div class="telephone" href="lien">
            <img src="static/images/svg-icones/telephonemarron.svg" alt="Panier" width="19"/> 
          </div>
          <div class="enveloppe" href="lien">
            <img src="static/images/svg-icones/enveloppe.svg" alt="Mon compte" width="20"/>
          </div>
          <div class="facebook" href="lien">
            <img src="static/images/svg-icones/facebookmarron.svg" alt="Panier" width="19"/> 
          </div>
          <div class="instagram" href="lien">
            <img src="static/images/svg-icones/instagrammarron.svg" alt="Mon compte" width="20"/>
          </div>
        </div>
        <div class="client">
          <div class="panier" href="lien">
            <img src="static/images/svg-icones/paniermarron.svg" alt="Panier" width="19"/> 
          </div>
          <div class="moncompte" href="lien">
            <img src="static/images/svg-icones/moncompte.svg" alt="Mon compte" width="20"/>
          </div>
        </div>
      </div>
    </div>
    <div class="contenuhomepage mr-4">
      <div class="logohomepage mt-11 mb-8">
        <img src="images/logobeige.svg" alt="Logo Pok'Gourmet" width="70"/>
      </div>

      <div class="pokgourmet w-70 mb-4">
        <h1 class="mb-5">Pok'Gourmet</h1>
        <h2 class="h2marron mb-6">Donnez vie à vos envies</h2>
        <p class="pgourmet mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc, ut auctor lectus . At enim aucacilisis eget. Condimenpellentesque risus, tincidunt. Pro morbi tempor, curabitur neque quam convallis.</p>
        <!-- <button class="bouton1 mb-8" name="button" type="button"> Découvrir nos produits </button>
         -->
        <?php include("static/tools/boutton2.php"); ?>
      </div>
      <?php include("static/tools/boutton4.php"); ?>

      <div class="offredelasemaine w-full">
        <iframe class="videohompepage" src="https://www.youtube.com/embed/ez4zQr6CSnY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="offre">
            <h4 class="h4vert mb-4">Offre de la semaine</h4>
            <p class="ptexte mb-2">Pok'Veggie </p>
            <p class="ptexte mb-2">7€</p>

            <?php include("static/tools/boutton1.php"); ?>
            <!-- <button class="bouton2" name="button" type="button"> Acheter </button> -->
        </div>
      </div>
    </div>
</header>

<style scoped>
header{
  background-color: #62615C;
  width: 100%;
  height: 770px;
  z-index: -1;
  display: flex;
  flex-direction: row;
  gap: 20px;
}

  .contenuhomepage{
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  position: relative;
  top: 50px;
} 

.offredelasemaine{
  background-color: #ffffff;
  border-radius:50px 5px 0px 0px;
/*   padding: 1rem;
  padding-bottom: 15%;
  position:relative;
  top: 25px; */
}

.videohompepage{
  border-radius:35px 5px 35px 5px;
  box-shadow: 1px 1px 3px 3px rgba(222, 162, 105, 0.5); 
/*   width: 97%;
  height: auto;
  margin-bottom: 20px; */
}

.offre{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

.pokgourmet{
  height: auto;
  width: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}

  .pgourmet{
      display: none; 
    }

  .navbar{
  padding:80px 5px 80px 5px;
  height:690px;
  width: 40px;
  background-color: #484526;
  border-radius: 15px 5px 15px 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 40px;
 /*  position: relative;
  left: 20px;
  top: 70px; */
} 

.navbar:hover{
  box-shadow: 1px 1px 3px 3px rgb(222, 162, 105, 0.2);
}

.contentmobile {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
  height: 450px;
  }

.client{
  height: 80px;
  display: flex;
  justify-content: space-around;
  flex-direction: column;
}

.contactnavigation{
  height: 160px;
  display: flex;
  justify-content: space-around;
  flex-direction: column;
}

.contenuhomepage{
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  position: relative;
  top: 20px;
}

.offredelasemaine{
  padding: 1rem;
  padding-bottom: 15%;
  position:relative;
  top: 25px;
  height: 500px;
}

.videohompepage{
  width: 100%;
  height: 45%;
  margin-bottom: 20px;
}

.offre{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}

.pokgourmet{
  height: auto;
  width: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}


/* TABLETTE */
/*  @media screen and (min-width:481px) and (max-width:768px){
  header{
    width: 100%;
    height: 810px;
    margin: 0%;
    padding: 0%;
  }
 .navbar{
      display:none
    }

    .pgourmet{
      display: block; 
    }

  .logohomepage{
    display: none;
  }

  .contenuhomepage{

      width: 100%;
      height: 100%;
      margin-left: 0%;
      margin-right: 0%;
    }
  
    .offredelasemaine{
      display: flex;
      flex-direction: row-reverse;      
      justify-content: space-evenly;
      align-items: center;
      width: 80%;
      height: 250px;
      left: -150px;
      border-radius: 0px 5px 50px 0px;
      padding: 0%;
    }

    .offre{
      margin-left: 20px;
      margin-right: 20px;
    }

    .videohompepage{
      width: 50%;
      height: 80%;
      margin-bottom: 0px;
    }
  
    .pokgourmet{
      width: 90%;
      display: flex;
      align-items:flex-start;
      margin-left: 0%;
      margin-top: 5%;
      margin-bottom: 0px;
    } 
}
 */
/* ORDINATEUR */
/*  @media screen and (min-width:769px) and (max-width:2570px){

  .navbar{
      display:none
    }

  header{
      width: 100%;
      margin: 0%;
     height: auto;
     padding-top: 250px;
     padding-bottom: 250px;
    }

    .pgourmet{
      display: block; 
    }

    .logohomepage{
    display: none;
    }
  
    .contenuhomepage{
      display: flex;
      flex-direction: row-reverse;
      justify-content: space-evenly;
      align-items: center;
      width: 100%;
      height: 100%;
      margin-left: 0%;
      margin-right: 0%;
      gap: 50px;
    }
  
    .offredelasemaine{
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
      align-items: center;
      width: 60%;
      height: 500px;
      padding: 0%;
      margin: 0px;
      padding-right: 20px;
      margin: 0%;
      top: 0px;
      border-radius: 0px 5px 50px 0px;
      box-shadow: 1px 1px 3px 3px rgba(222, 162, 105, 0.3); 
    }
  
    .pokgourmet{
      width: 40%;
      height: 500px;
      margin-left: 0px;
      justify-content: space-around;
      align-items: flex-start;
      margin-right: 150px;
      margin-bottom: 0px;
    }
  
    .videohompepage{
      height: 400px;
      width: 60%;
      margin-bottom: 0px;
      border-radius:30px 5px 30px 5px;  
    }
  
    .offre{
      margin-left: 70px;
      width: 30%;
    }
} */
</style>