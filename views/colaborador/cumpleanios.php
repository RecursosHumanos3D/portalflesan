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



  .widget {
    padding: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    margin: 0 0 -12px 0!important;
}
  .widget-body.bordered-top.bordered-sky {
    height: 100%!important;
    overflow-x: none; 
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
img.img-circle.img-sm {
    width: 9%;
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

a.nombreCumple {
    font-size: 14px;
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
  <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">
    <h3 class="Clima"><strong>Cumpleaños</strong> Flesan</h3>
    <br>
    <h3>Hoy:</h3>
    <div class="widget-body bordered-top bordered-sky">
       <div class="widget">
          <ul class="list-unstyled team-members">
            <?php if(empty($colaboradores)){ ?>
            <li>
              <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                  <p class="nohay" align="left">No hay cumpleaños hoy.</p>
                </div>                             
              </div>
            </li>
            <?php }else{ ?>
              <?php foreach ($colaboradores as $c) { 
                $cumple = $c['nombre'];
                $model2 = BuscarController::findColaboradorRut($c['rutColaborador']);
                $perfil2 = BuscarController::findPerfil($model2->idperfilRed);
              ?> 
            <li>
              <div class="row">
                <div class="col-md-9 col-xs-10">
                  <p class="cumple" align="left"><img class=" img-circle img-sm" src="../web/img/perfil/t/<?php echo $c["rfoto"];?>" 
                    style="-ms-transform: rotate(0deg);-webkit-transform: rotate(0deg);transform: rotate(0deg);margin-right: 5px;    margin-top: -4px;" alt="Alt Text">
                  <a class="nombreCumple" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$model2["rutColaborador"]; ?>"><?php echo $cumple; ?></a>
                  </p>
                    
                </div>
              <div class="col-md-3 col-lg-3 col-xs-2 text-right">

                <p class="torta"><i class="fas fa-birthday-cake"></i></p>
              </div>
              <br>
              </div>
            </li> <hr class="visible-xs">
            <?php } ?>
            <?php } ?>
        </ul>
    </div>  
  </div>

<br><br>
  <h3>Próximos 7 Días:</h3>
  <div class="widget-body bordered-top bordered-sky">
    <div class="widget">
      <ul class="list-unstyled team-members">
      <?php if(empty($proximos)){ ?>
        <li>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <p class="nohay" align="left">No hay cumpleaños proximamente.</p>
            </div>
          </div>
        </li>
      <?php }else{ ?>
        <?php foreach ($proximos as $p) { 
          $prox = $p['nombre'];
          $dia = $p['dia'];
          $mes = $p['mes'];
          $foto = $p['rfoto'];
            if($mes == '1'){
              $nombremes= 'Enero';
            }
            if($mes == '2'){
              $nombremes= 'Febrero';
            }
            if($mes == '3'){
              $nombremes= 'Marzo';
            }if($mes == '4'){
                $nombremes= 'Abril';
            }
            if($mes == '5'){
              $nombremes= 'Mayo';
            }
            if($mes == '6'){
              $nombremes= 'Junio';
            }
            if($mes == '7'){
              $nombremes= 'Julio';
            }
            if($mes == '8'){
              $nombremes= 'Agosto';
            }
            if($mes == '9'){
              $nombremes= 'Septiembre';
            }
            if($mes == '10'){
              $nombremes= 'Octubre';
            }
            if($mes == '11'){
              $nombremes= 'Noviembre';
            }
            if($mes == '12'){
              $nombremes= 'Diciembre';
            }
            
          $model2 = BuscarController::findColaboradorRut($p['rutColaborador']);
          $perfil2 = BuscarController::findPerfil($model2->idperfilRed);
        ?> 
        <li>
          <div class="row">
            <div class="col-md-9 col-xs-8 col-sm-9 col-lg-9">
              <p class="cumple" align="left"><img class=" img-circle img-sm" src="../web/img/perfil/t/<?php echo $p["rfoto"];?>" 
                    style="-ms-transform: rotate(0deg);-webkit-transform: rotate(0deg);transform: rotate(0deg);margin-right: 5px;    margin-top: -4px;" alt="Alt Text">
              <a class="nombreCumple" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$model2["rutColaborador"]; ?>"><?php echo $prox; ?></a>
              </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-4 text-right">
              <p><?php echo $dia; ?> de <?php echo $nombremes; ?></p>
              <p class="torta"><i class="fas fa-birthday-cake"></i></p>
            </div>
            <br>
          </div>
        </li> <hr class="visible-xs"> <?php } ?>
              <?php } ?>     
        </ul>                                
  </div>
</div>

<br><br>
  <h3>Próximos 30 Días:</h3>
  <div class="widget-body bordered-top bordered-sky">
    <div class="widget">
      <ul class="list-unstyled team-members">
      <?php if(empty($proxmes)){ ?>
        <li>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <p class="nohay" align="left">No hay el proximo mes.</p>
            </div>
          </div>
        </li>
      <?php }else{ ?>
        <?php foreach ($proxmes as $p) { 
          $prox = $p['nombre'];
          $dia = $p['dia'];
          $mes = $p['mes'];
          $foto = $p['rfoto'];
            if($mes == '1'){
              $nombremes= 'Enero';
            }
            if($mes == '2'){
              $nombremes= 'Febrero';
            }
            if($mes == '3'){
              $nombremes= 'Marzo';
            }if($mes == '4'){
                $nombremes= 'Abril';
            }
            if($mes == '5'){
              $nombremes= 'Mayo';
            }
            if($mes == '6'){
              $nombremes= 'Junio';
            }
            if($mes == '7'){
              $nombremes= 'Julio';
            }
            if($mes == '8'){
              $nombremes= 'Agosto';
            }
            if($mes == '9'){
              $nombremes= 'Septiembre';
            }
            if($mes == '10'){
              $nombremes= 'Octubre';
            }
            if($mes == '11'){
              $nombremes= 'Noviembre';
            }
            if($mes == '12'){
              $nombremes= 'Diciembre';
            }
            
          $model2 = BuscarController::findColaboradorRut($p['rutColaborador']);
          $perfil2 = BuscarController::findPerfil($model2->idperfilRed);
        ?> 
        <li>
          <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-8">
              <p class="cumple" align="left"><img class=" img-circle img-sm" src="../web/img/perfil/t/<?php echo $p["rfoto"];?>" 
                    style="-ms-transform: rotate(0deg);-webkit-transform: rotate(0deg);transform: rotate(0deg);margin-right: 5px;    margin-top: -4px;" alt="Alt Text">
              <a class="nombreCumple" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$model2["rutColaborador"]; ?>"><?php echo $prox; ?></a>
              </p>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-4 text-right">
              <p><?php echo $dia; ?> de <?php echo $nombremes; ?></p>
              <p class="torta"><i class="fas fa-birthday-cake"></i></p>
            </div>
            <br>
          </div>
        </li> <hr class="visible-xs"> <?php } ?>
              <?php } ?>     
        </ul>                                
  </div>
</div>



<br><br>
 <h3>Todos</h3>
    <div class="widget-body bordered-top bordered-sky">
       <div class="widget">
          <ul class="list-unstyled team-members">
            <?php if(empty($todos)){ ?>
            <li>
              <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                  <p class="nohay" align="left">No hay cumpleaños para mostrar.</p>
                </div>                             
              </div>
            </li>
            <?php }else{ ?>
              <?php 
              $enero = array(); $febrero=array(); $marzo = array(); $abril = array(); $mayo = array(); $junio = array(); $julio = array(); $agosto = array(); $septiembre = array(); $octubre = array(); $noviembre = array(); $diciembre = array(); 
              foreach ($todos as $t) { 
                $nombre = $t['nombre'];
                $dia = $t['dia'];
                $mes = $t['mes'];
                $foto = $t['rfoto'];

            if($mes == '1'){
              $nombremes= 'Enero';
              $enero[] = $t['nombre'];
              $enero[] =$t['dia'];
              $enero[] =$t['mes'];
              $enero[] =$t['rfoto'];
 }
            if($mes == '2'){
              $nombremes= 'Febrero';
              $febrero[] =$t['nombre'];
              $febrero[] =$t['dia'];
              $febrero[] =$t['mes'];
              $febrero[] =$t['rfoto'];
            } 
            if($mes == '3'){
              $nombremes= 'Marzo';
              $marzo[] = $t['nombre'];
              $marzo[] =$t['dia'];
              $marzo[] =$t['mes'];
              $marzo[] =$t['rfoto'];
            }if($mes == '4'){
                $nombremes= 'Abril';
                $abril[] =$t['nombre'];
                 $abril[] =$t['dia'];
              $abril[] =$t['mes'];
              $abril[] =$t['rfoto'];
            }
            if($mes == '5'){
              $nombremes= 'Mayo';
              $mayo[] =$t['nombre'];
               $mayo[] =$t['dia'];
              $mayo[] =$t['mes'];
              $mayo[] =$t['rfoto'];
            }
            if($mes == '6'){
              $nombremes= 'Junio';
              $junio[] =$t['nombre'];
               $junio[] =$t['dia'];
              $junio[] =$t['mes'];
              $junio[] =$t['rfoto'];
            }
            if($mes == '7'){
              $nombremes= 'Julio';
              $julio[] =$t['nombre'];
              $julio[] =$t['dia'];
              $julio[] =$t['mes'];
              $julio[] =$t['rfoto'];
            }
            if($mes == '8'){
              $nombremes= 'Agosto';
              $agosto[] =$t['nombre'];
               $agosto[] =$t['dia'];
              $agosto[] =$t['mes'];
              $agosto[] =$t['rfoto'];
            }
            if($mes == '9'){
              $nombremes= 'Septiembre';
              $septiembre[] =$t['nombre'];
              $septiembre[] =$t['dia'];
              $septiembre[] =$t['mes'];
              $septiembre[] =$t['rfoto'];
            }
            if($mes == '10'){
              $nombremes= 'Octubre';
              $octubre[] =$t['nombre'];
              $octubre[] =$t['dia'];
              $octubre[] =$t['mes'];
              $octubre[] =$t['rfoto'];
            }
            if($mes == '11'){
              $nombremes= 'Noviembre';
              $noviembre[] =$t['nombre'];
              $noviembre[] =$t['dia'];
              $noviembre[] =$t['mes'];
              $noviembre[] =$t['rfoto'];
            }
            if($mes == '12'){
              $nombremes= 'Diciembre';
              $diciembre[] =$t['nombre'];
              $diciembre[] =$t['dia'];
              $diciembre[] =$t['mes'];
              $diciembre[] =$t['rfoto'];
            }
            
                $model2 = BuscarController::findColaboradorRut($t['rutColaborador']);
                $perfil2 = BuscarController::findPerfil($model2->idperfilRed);
   
              ?>  

            
     
            <li>
              <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-8 ">
                  <p class="cumple" align="left"><img class=" img-circle img-sm" src="../web/img/perfil/t/<?php echo $t["rfoto"];?>" 
                    style="-ms-transform: rotate(0deg);-webkit-transform: rotate(0deg);transform: rotate(0deg);margin-right: 5px;    margin-top: -4px;" alt="Alt Text">
                  <a class="nombreCumple" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$model2["rutColaborador"]; ?>"><?php echo $t['nombre']; ?></a>
                  </p>
                    
                </div>
              <div class="col-md-3 col-lg-3 col-sm-3 col-xs-4 text-right">
               <p><?php echo $t['dia']; ?> de <?php echo $nombremes; ?> </p>
                <p class="torta"><i class="fas fa-birthday-cake"></i></p>
              </div>
              <br>
              </div>
            </li> <hr class="visible-xs">
        
      
<?php } }?>
  </ul>

        
    </div>  
  </div>

<?php

echo $this->render('sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>   
