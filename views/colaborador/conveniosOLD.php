<?php 
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;

?>
<style type="text/css">
	.panel.panel-default.convenios {
    box-shadow: 1px 4px 16px 3px rgba(199, 197, 199, 0.49);
    background-color: #1d1d1d;
}

h3.convenios {
        color: #fff;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
}

</style>



   	  <div class="panel panel-default convenios" >
   	  
   		<h3 class="convenios">&nbsp;&nbsp;&nbsp;Beneficios y Convenios Flesan</h3>
     
   		</div>

   		<p class="convenios"><strong>Busca tus beneficios: <?php

        echo Select2::widget([
          'name' => 'kv_theme_select2',
          'data' => ArrayHelper::map(app\models\TipoBeneficioConvenioFlesan::find()->all(), 'idtipo', 'nombre'),
          'theme' => Select2::THEME_BOOTSTRAP,
          'options' => [
            'placeholder' => 'Filtro',
            'onchange' => 'idCombo = this.id;$.post("index.php?r=buscar/convenios&idtipo="+$(this).val(), function(data){agrega(idCombo,data);});',

        ],
          'pluginOptions' => [
              'allowClear' => true
          ],
      ]);

       ?></strong> <br>
    En Grupo FLESAN tenemos varios beneficios y convenios para ti. Revisa las categorías y conoce más de nuestra oferta.</p>
 		<hr>

    <div id="conveniof">

    </div>
   		


</div>

<script>
            function agrega(id, data)
            { 

              document.getElementById("conveniof").innerHTML = data;


             console.log(data);

               

            }
        </script>