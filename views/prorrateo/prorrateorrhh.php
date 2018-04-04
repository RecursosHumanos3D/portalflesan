<?php

  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use yii\bootstrap\Modal;
  use yii\helpers\Url;
  use app\Controllers\BuscarController;
  use kartik\widgets\FileInput;
  use app\models\Prorrateo;
  use yii\web\Controller;
  date_default_timezone_set("America/Santiago");

  $session = Yii::$app->session;
  $rutColaborador = $session['rut'];
?>

<style type="text/css">

  .pronto {
    padding: inherit;
  }
  h2.pronto {
    font-weight:  bolder;
    margin-top: 21%;
  }
  p.pronto{
   text-align: justify;
 }

body {
  background-repeat: repeat;
  min-height: 100%!important; 
}
.row.clima {
    margin-left: 0%;
}
.well {
    margin-left: -3%;
    margin-right: 4.5%;
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #ffffff;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
@media only screen  and (max-width : 3000px) and (min-width : 2560px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 12%!important;
  }
}

@media only screen  and (max-width : 2240) and (min-width : 2000px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 12%!important;
  }
}

@media only screen  and (max-width : 2000px) and (min-width : 1600px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 16%!important;
  }
}

@media only screen  and (max-width : 1600px) and (min-width : 1500px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 17%!important;
  }
}

@media only screen  and (max-width : 1500px) and (min-width : 1400px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 18%!important;
  }
}
/* Large screens ----------- */
@media only screen  and (max-width : 1500px) and (min-width : 1000px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 20%!important;
  }
}
@media only screen  and (max-width : 1500px) and (min-width : 1400px) {
  /* Styles */
  .sidebar-nav-fixed {
    width: 19%!important;
  }
}
</style>



<div class="container">
  <div class="row">
    <div class="col-md-3 hidden-xs hidden-sm">
      <?php

      echo $this->render('../colaborador/sider',[
        'rutColaborador' => $rutColaborador,
      ]);

      ?>   
    </div>
    <div class="col-md-9">
     <h3 class="Prorrateo"><strong>Prorrateo</strong> RRHH</h3>
     <br>
    
  </div>
</div>
</div>
<?php

echo $this->render('../colaborador/sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>   
