<?php
// Récupération des données du formulaire
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$mail= $_POST['mail'];
$telephone= $_POST['telephone'];
$sujet= $_POST['sujet'];
$message = $_POST['message'];

// connection à la base de données
$db = new PDO('mysql:host=localhost;dbname=sitepokgourmet','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$sql = 'SELECT * FROM `visiteurs` ';
$requete = $db->query($sql);

// enregistrement des données du formulaire dans la table 'visiteurs'
$stmt = $db->prepare('INSERT INTO contact_form (nom, prenom, mail, telephone, sujet, message) VALUES (?, ?)');
$stmt->execute([$nom, $prenom, $mail, $telephone, $sujet, $message]);
?>
    

    <div class="contacteznous mx-4 lg:mx-0 my-10">
        <h2 class="h2marron mb-10">Nous contacter</h2>
        <div class="formulaire-map">
            <div class="bordure block p-6 rounded-lg shadow-lg bg-white">
                <form>
                  <!--   <div class="grid grid-cols-2 gap-4">
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput123"
                            aria-describedby="emailHelp123" placeholder="Nom">
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                            bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
                            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput124"
                            aria-describedby="emailHelp124" placeholder="Prénom">
                        </div>
                    </div> -->
                    
                  <div class="form-group mb-6"  enctype="multipart/form-data" onsubmit="return validate()" method="post">
                        <input type="email" class="form-control block w-full px-3 py-1.5
                        text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput8"
                        placeholder="Nom">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block w-full px-3 py-1.5
                        text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput8"
                        placeholder="Prénom">
                    </div> 
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block w-full px-3 py-1.5
                        text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput8"
                        placeholder="Mail">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block w-full px-3 py-1.5
                        text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput8"
                        placeholder="Téléphone">
                    </div>
                    <div class="form-group mb-6">
                        <input type="email" class="form-control block w-full px-3 py-1.5
                        text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                        transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none" id="exampleInput8"
                        placeholder="Sujet">
                    </div>
                    <div class="form-group mb-6">
                        <textarea class="form-control block w-full px-3 py-1.5
                            text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                            transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-300 focus:outline-none"
                            id="exampleFormControlTextarea13"
                            rows="3"
                            placeholder="Message">
                        </textarea>
                    </div>
                    <div class="form-group  form-check text-center mb-6">
                        <input type="checkbox"
                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-gray-600 checked:border-gray-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                        id="exampleCheck87" checked>
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Envoie-moi une copie du mail</label>
                    </div>
                    <?php include("static/tools/boutton3.php"); ?>
                </form>
            </div>
            <div class="map d-flex w-full h-64 justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.7982815413593!2d2.433622515893346!3d48.785741179280485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673449d8b48e3%3A0x83768eac6932ce9f!2s9%20Rue%20Marc%20Seguin%2C%2094000%20Cr%C3%A9teil!5e0!3m2!1sfr!2sfr!4v1664376805336!5m2!1sfr!2sfr" width="400" height="250" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

<style>
.bordure{
  border: solid 2px  rgb(72,69,38);
  border-radius: 30px 5px 30px 5px;
  border: solid 2px  rgb(72,69,38);
  border-radius: 30px 5px 30px 5px;
  width: 100%;
  padding: 3%;
  margin-bottom: 30px;
}

.form-control{
  border: solid 0.5px  rgb(72,69,38);
  border-radius: 10px 2px 10px 2px;
  border: solid 0.5px  rgb(72,69,38);
  border-radius: 10px 2px 10px 2px;
  width: 100%;
}

  .contacteznous{
  margin-top: 50px;
}

.formulaire-map{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.map iframe{
  border-radius: 30px 5px 30px 5px;
  box-shadow: 3px 3px 5px 5px rgb(215, 157, 102, 0.3);
  height: 250px;
  width: 100%;
}

/* LAPTOP ET DESKTOP */
@media screen and (min-width:769px) and (max-width:2570px){

.formulaire-map{
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;
  padding-left: 100px;
  padding-right: 50px;
}

.form-control{
  width: 100%;
}  

.contacteznous{
  margin-bottom: 100px;
  height: auto;
  
}

.contacteznous .h2marron{
  margin-left: 100px;
  margin-top: 100px;
  margin-bottom: 0px;
}

.bordure{
  width: 60%;
  height: auto;
  padding: 2%;
  padding-right: 100px;
  margin: 0px;
}

.map{
  height: 400px;
  width: 40%;
  transform: translateX(-50px);
}

.map iframe{
  width: 100%;
  height: 300px;
  margin-top: 50px;
  align-items: center;
}
}


/* Tablette */
@media screen and (min-width:481px) and (max-width:768px){
  .formulaire-map{
  display: flex;
  flex-direction: column;
  align-items: center;
  transform: translateY(50px);
}

.bordure{
  border: solid 2px  rgb(72,69,38);
  border-radius: 30px 5px 30px 5px;
  width: 80%;
  height: 420px;
  padding: 20px;
}

.form-control{
  border: solid 0.5px  rgb(72,69,38);
  border-radius: 10px 2px 10px 2px;
  width: 100%;
}

.map iframe{
  border-radius: 30px 5px 30px 5px;
  box-shadow: 3px 3px 5px 5px rgb(215, 157, 102, 0.3);
  height: 250px;
  width: 70%;
  position: relative;
  top: -80px;
  margin-left: 15%;
}

.h2marron{
  margin-bottom: 0px;
}
}
</style>