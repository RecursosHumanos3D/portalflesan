  <?php

  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\bootstrap\Modal;
  use yii\helpers\Url;
  use app\Controllers\BuscarController;
  use kartik\widgets\FileInput;
  use app\models\Colaborador;
  use app\models\RAmigos;
  use yii\web\Controller;
  date_default_timezone_set("America/Santiago");
  ?>




  <div class="container">
    <div class="row">
      <div class="col-md-3 hidden-xs hidden-sm">
        <?php

        echo $this->render('sider',[
          'rutColaborador' => $rutColaborador,
        ]);

        ?>   
      </div>
      <div class="col-md-9">

        
        <br>
        <div class="container-fluid">
         <h2><strong>Biblioteca</strong> flesan</h2>
        </div>

        <?php
          $tipo = $model[0] ["bibIdTipo"];

          if($tipo==1 || $tipo==2 || $tipo==3 || $tipo==4){

                   echo $this->render('archivoContenido', [
                                       'model' => $model,
                                       'tipo' => $tipo,
                                      
                                   ]);


          }
          if($tipo==5){

              echo $this->render('videoContenido', [
                                       'model' => $model,
                                      
                                   ]);
          }
          if($tipo==6){
              echo $this->render('imagenContenido', [
                                       'model' => $model,
                                      
                                   ]);
          }
          if($tipo==7){
              echo $this->render('textoContenido', [
                                       'model' => $model,
                                      
                                   ]);
          }
          



         ?>

         <div class="container-fluid">
         <h3 style="font-weight: 500;"><?php echo $model[0]["bibNombreContenido"]; ?></h3>
         <legend style="    font-size: 15px!important;    font-weight: 700;">Visitas:<?php echo $model[0]["bibVisita"]; ?></legend>
         <p><?php echo $model[0]["bibDescripcionContenido"]; ?></p>
        </div>





  </div>
</div>
</div>




</div>
<!-- end activities -->
<!-- followers -->


</div>
<?php

echo $this->render('sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>  