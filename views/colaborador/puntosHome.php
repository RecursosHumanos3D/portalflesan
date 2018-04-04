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

      body {
        background-repeat: repeat;
        min-height: 100%!important; 
      }
      p.subTitulo {
        text-transform: uppercase;
        font-weight: bolder;
        color: black;
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
      p.adv {
        font-size: 11px;
      }


    </style>



    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
          <?php
            echo $this->render('sider',[
            'rutColaborador' => $rutColaborador,
            ]);

            ?>   
          </div>
          <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
           <h3 class="titulo"><strong> Mis Puntos</strong> Flesan</h3>
           <br>
           <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <?php
              echo $this->render('cardpuntos',[
              'puntaje' => $puntaje,
              'suma' => $suma,
              ]);
              ?>   
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
             <br><br><br>
             <p class="subTitulo">¡Revisa los beneficios que puedes canjear!</p>
             <p class="adv">* Antes de canjear debe conversar con su supervisor, acordando día y fecha que se tomara el beneficio*</p>
           </div>
           <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <br><br>
            <?php
              echo $this->render('puntos',[
              'beneficio' => $beneficio, 
              'model' => $colaborador,
              'rutColaborador' => $rutColaborador,
              'perfil' => $perfil,
              'puntaje' => $puntaje,
              ]);
              ?>   
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
