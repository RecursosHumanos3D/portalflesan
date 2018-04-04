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

  $lugar = 1;
  $rut2 = 1;
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
         <?php
                  echo $this->render('listado2',[
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                                          ]);
                  ?>   
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
