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
     <h3 class="Clima"><strong>Preguntas</strong> Frecuentes</h3>
     <br>
     <div class="row clima" style="background-color: white">
      
      <div class="col-sm-12" >      
        <div class="pronto">
         
          <h4>¿Qué es Portal FLESAN?</h4>
          <p class="pronto" align="center"> Es un ambiente virtual de trabajo en donde podrás acceder a diversos portales, herramientas y a la comunicación corporativa de Grupo Flesan. </p>
          <br>
           <h4> ¿Cómo puedo acceder a mi Portal FLESAN?</h4>
          <p class="pronto" align="center"> Puedes acceder a través de tus mismos accesos de Gmail Corporativo. </p>
          <br>
           <h4>¿Qué plataformas puedo encontrar en Portal FLESAN?</h4>
          <p class="pronto" align="center">En Portal Flesan podrás acceder a diversas plataformas que utilizamos en la compañía, tales como Payroll, IConstruye, Biwiser, DEC, Canal de Denuncia, entre otros. </p>
          <br>
           <h4>¿En el Portal hay información de la empresa?</h4>
          <p class="pronto" align="center"> Sí, en Portal FLESAN podrás conocer todas las novedades del Grupo a través de la cuenta de Comunicaciones.  </p>
          <br>
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
