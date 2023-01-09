<?php
?>
    <div class="nosplats ml-2 mt-10">
        <div class="h offres ml-4 mt-10">
          <h2 class="h2marron mb-4"> Nos offres </h2>
          <h3 class="h3vert mb-4"> Nos plats </h3>
        </div>
        <!-- ---------------------début section nos plats------------------------------------------------- -->
        <div class="relative snap-mandatory snap-x overflow-auto mt-10">
          <?php include("includes/nosoffres/plats.php"); ?>  
        </div>
    </div>

<style>

.relative {
display: flex;
align-items: center;
justify-content: space-between;
flex-direction: row;
height: auto;
overflow-y: hidden;
}



/* TABLETTE */
/* @media screen and (min-width:481px) and (max-width:768px){

}


/* LAPTOP ET DESKTOP */
@media screen and (min-width:769px) and (max-width:2570px){
  .relative {
height: auto;
padding-right: 5%;
padding-left: 5%;
}
}

</style>