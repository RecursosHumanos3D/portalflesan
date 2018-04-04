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
.sidenav {
            height: 100%; /* 100% Full-height */
            width: 0; /* 0 width - change this with JavaScript */
            position: fixed; /* Stay in place */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            right: 0;
            background-color: #fff; /* Black*/
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 60px; /* Place content 60px from the top */
            transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
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

      echo $this->render('sider',[
        'rutColaborador' => $rutColaborador,
      ]);

      ?>   
    </div>
    <div class="col-md-9">
     <h3 class="Clima"><strong>Capacitación</strong> Flesan</h3>
     <br>
     <div class="row clima" style="background-color: white">
      <div class="col-sm-6" style="background-color: #ff9800">
        <?= Html::img('@web/img/Banner.png', ['class' => 'banner']); ?>
      </div>
      <div class="col-sm-6" >      
        <div class="pronto">
          <h2 class="pronto" align="center" > PRONTO </h2>
          <p class="pronto" align="center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.  </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php

echo $this->render('sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>   
