<?php if (!empty($this->sErrMsg)): ?>

    <div>
        <h2 class="h2marron">Notre blog conseils</h2>
        <Notreblog v-for="(product,index) in products" :key="index" :id="product.id" :soustitre="product.soustitre" :texte="product.texte" :image="product.image" :button="product.boutton" />
    </div>

    <div id="app" class="notreblog">
        <div class="nosconseils">
            <div class="directives">
                
            </div>
        </div>
    </div>

<?php endif ?>