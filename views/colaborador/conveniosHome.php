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

$session = Yii::$app->session;
        $rutColaborador = $session['rut'];
?>


  <div class="container-fluid" style="margin-top:84px;">
    <div class="row-fluid">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  animated fadeInLeft">
        <div class="row">
          <div class="col-md-3 col-lg-3 hidden-xs">
            <?php

            echo $this->render('sider');

            ?>  
          </div>



          <div class="profile-info-right amigo">
            <div class="tab-content">
              <div class="col-md-7 col-lg-7 col-xs-12">
              <div class="col-md-12 col-lg-12 col-xs-12">
                  
                <hr>
                 <div class="col-md-12 col-lg-12 col-xs-12" >
                  <?php
                  echo $this->render('convenios');
                  ?>
                  <?php

                                   echo $this->render('sidel',[
                             
                                    'rutColaborador' => $rutColaborador,
                                   ]);

                                   ?>    
                </div>
           
             
              <hr>

              

              

            </div>

          </div>
        </div>
      </div>
    </div>




  </div>
  <!-- end activities -->
  <!-- followers -->


</div>
