	  <?php

    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
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

    @media only screen and (max-width : 768px) {
      div#footer {
    min-height: 80%!important;
        overflow-y: auto;
}
     h3.Clima {
      margin-top: 37%!important;
    }
  }
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

.jotape{
      margin-bottom: 0px;
}
div#footer {
    min-height: 70%!important;
        overflow-y: auto;
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
    <div class="col-md-8 col-lg-8">
     <br>
       <a style="cursor: pointer" target="_blank" title="¡Click Aqui!" href="https://flesan.gointegro.com/authentication/login" ><img class="visible-lg visible-md" src="../web/img/gobened.jpg"></a>
       <a style="cursor: pointer" target="_blank" href="https://flesan.gointegro.com/authentication/login" ><img class="visible-xs" src="../web/img/gobenem.jpg"></a>

    <br> <br> 
       <?php
                  echo $this->render('convenios', [ 'categorias' => $categorias, ]);

                  ?>

                  <!-- Trigger the modal with a button -->
                  <br>

<?php

echo $this->render('sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>   


<div id="footer" style="display: none;" class="navbar jotape navbar-default navbar-fixed-bottom collapse in">
  <a style="float: right;
    font-size: 20px;
    margin-right: 3%;"  onclick="cerrar();">
                       <i class="fas fa-times-circle"></i>
                       Cerrar

                    </a>
        <div id="conveniof">

                </div>
    </div>
<script type="text/javascript">
  function cerrar(){
     document.getElementById('footer').style.display = 'none';

  }
</script>