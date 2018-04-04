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
    use light\widgets\SweetAlert;
    date_default_timezone_set("America/Santiago");

    $session = Yii::$app->session;
    $rutColaborador = $session['rut'];
    ?>

    <style type="text/css">


	.btn-success:hover, .btn-success:focus, .btn-success.focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success {
    color: #fff;
    box-shadow: none;
    border-radius: -5;
    background-color: rgba(75, 31, 251, 1) !important;
    border-color: rgba(75, 31, 251, 1) !important;

}
body {
  background-repeat: repeat;
  min-height: 100%!important; 
  background: #e4e4e4!important;
}

.well {
    margin-left: -3%;
    margin-right: 4.5%;
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #ffffff!important;
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


.card {
 height: 276px!important;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
  background-color: #ffffff;
}
.card span.card-title {
    color: white;
    font-size: 24px;
        font-weight: bolder;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
      width: 45%!important;
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: 1;
}
.card .card-image span.card-title {
     bottom: 0;
    left: 0;
    padding: 5px;
    color: #059487;
    text-align: center;
    font-size: 14px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
  color: grey;
    font-size: 11px;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  /*padding: 16px;*/
      height: 42px!important;
      background-color: #4b1ffb;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}
.upp {
    height: 234px;
}
.card .btn-success {
 color: #fff;
    box-shadow: none;
    border-radius: -5;
    background-color: rgba(75, 31, 251, 1) !important;
    border-color: rgba(75, 31, 251, 1) !important;
    width: 100%!important
}

h5.puntos {
    font-weight: bolder;
    color: red;
    font-size: 16px;
}
.name {
    height: 145px;
}

@media (min-width: 768px) {
.card .btn-success {
   color: #fff;
    box-shadow: none;
    border-radius: -5;
    background-color: rgba(75, 31, 251, 1) !important;
    border-color: rgba(75, 31, 251, 1) !important;
}
img.img-responsive {
    height: 65px!important;
}
  }


  @media (max-width: 768px) {
    .card .btn-success {
  color: #fff;
    box-shadow: none;
    border-radius: -5;
    background-color: rgba(75, 31, 251, 1) !important;
    border-color: rgba(75, 31, 251, 1) !important;
}
    .card .card-image img {
    width: 30%!important;
    border-radius: 2px 2px 0 0;
    background-clip: padding-box;
    position: relative;
    z-index: 1;
}

    .upp {
    height: 285px!important;
}
.card {
    height: 327px!important;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}


  }

.custom-swal-class {
    overflow-x: visible;
    overflow-y: visible;
    max-height: 550px !important;
    min-height: 550px !important;
}
.swal2-overflow {
   overflow-x: visible;
    overflow-y: visible;
}

button.swal2-confirm.swal2-styled {
    background-color: #673AB7!important;
    border-left-color: rgb(48, 133, 214)!important;
    border-right-color: rgb(48, 133, 214)!important;
}

button.swal2-cancel.swal2-styled {
    display: inline-block!important;
    background-color: #F44336!important;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.4.1/sweetalert2.js"></script>

<script type="text/javascript">


function solicitarOLD(idbeneficio,rutColaborador) {
  var fecha = $("#solicitar-" + fecha + "").val();
  var solicitar = $("#solicitar-" + idbeneficio + "").val();
  var dato = Boolean(solicitar);
  var c = document.getElementById('c');
    swal({
        title: "Confirmación",
        text: "¿Seguro que desea canjear este beneficio seleccionado?",
        icon: "warning",
        buttons: ["Cancelar", true],
        dangerMode: true,
    })
    .then(function(willDelete){
      if (willDelete) {
        $.get("index.php?r=colaborador/validar&idbeneficio=" + idbeneficio + "&rutColaborador=" + rutColaborador  +"" ,
          function (dato) {
            if(dato == 1){
              swal({
                  title: 'Jornada de Toma',
                  content: {
                      element: "input",
                      attributes: {
                        id: "jornada",
                        placeholder: "Ingresa la Jornada (AM-PM-Todo el Día)",
                        type: "text",
                      },
                  },
                 
               
                  closeOnClickOutside: false,
                  closeOnEsc: false,
                  
                  onOpen: function() {
                    $('#jornada').text();
                  },
                  preConfirm: function() {
                    return Promise.resolve($('#jornada').text());
                  }
              }).then(function(result1) {
                  var jornada = document.getElementById('jornada');
                  console.log(result1);
                           
              swal({
                title: 'Fecha de toma de beneficio',
                content: {
                    element: "input",
                    attributes: {
                      id: "fechita",
                      placeholder: "Ingresa la fecha",
                      type: "date",

                    },
                },
               
               
                closeOnClickOutside: false,
                closeOnEsc: false,
              

                
              }).then(function(result) {
                  var fecha = document.getElementById('fechita');
                  console.log(fechita);
                  console.log(result);
                                
                  $.get("index.php?r=colaborador/solicitar&idbeneficio=" + idbeneficio + "&rutColaborador=" + rutColaborador  + "&fecha=" + result + "&jornada=" + result1 + "",
                      function (dat) {
                        $("#solicitar-" + fecha + "").val('');
                 	      $("#solicitar-" + jornada + "").val('');

                      }).fail(function () {
                        swal("No existe conexion a internet");
                      });
                        $("#solicitar-" + idbeneficio).attr('onclick', " ");
                        $("#solicitar-" + idbeneficio + "").val('');
                      swal("Felicidades!", "Su beneficio será efectivo el: " + result, "success")

                      .then(function(value){
                        location.reload();
                      });
                }).catch(function (err) {
                                        if (err) {
                                          swal("Oh no!", "Tu navegador no soporta esta acción", "error");
                                        } else {
                                          swal.stopLoading();
                                          swal.close();
                                        }
                                      });     
                            });
              
                        }else{
                          if(dato==4){
              
                              $("#solicitar-" + idbeneficio).attr('onclick', " ");
                             $("#solicitar-" + idbeneficio + "").val('');
                                       swal("Beneficio ya ha sido utilizado este Año")
                                    .then(function(value){
                           
                                    });
                        }else{

                          if(dato==0){
                                       swal("No tiene suficiente puntaje para canjear este beneficio.")
                                    .then(function(value){
                           
                                    });


                          }else{

                               swal("Beneficio ya ha sido utilizado este mes.")
                          .then(function(value){
                 
                          });

                          }


              }
                         
                        }
                        }).fail(function () {
                    alert("No existe conexion a internet");
                    // Handle error here
                });

            } else {
              swal("Su canje no ha sido efectuado!");
            }
          });

                
                


    }

    function solicitar (idbeneficio, rutColaborador){
      var fecha = $("#solicitar-" + fecha + "").val();
      var solicitar = $("#solicitar-" + idbeneficio + "").val();
      var dato = Boolean(solicitar);
      var c = document.getElementById('c');

      $.get("index.php?r=colaborador/validar&idbeneficio=" + idbeneficio + "&rutColaborador=" + rutColaborador  +"" ,
          function (dato) {
            if(dato == 1){
              
                             
              swal({
                  title: 'Fecha de toma de Beneficio',
                  html: '<input id="datepicker" type="date">',
                  showCancelButton: true,
  
                  onOpen: function() {
                    $('#datepicker').datepicker('getDate');
                  }
                 
              }).then(function(result) {
                  var fechita2 = document.getElementById('datepicker').value;
                  console.log(result);
                  console.log(fechita2);
           
              swal({
  title: 'Seleccione la jornada',
  input: 'select',
  inputOptions: {
    'AM': 'AM',
    'PM': 'PM',
    'Día Completo': 'Día Completo'
  },
  inputPlaceholder: 'Seleccionar',
  showCancelButton: true,
  inputValidator: function (result1) {
    return new Promise(function (resolve, reject) {
      if (result1 !== '') {
        resolve();
      } else {
        reject('Debes seleccionar una jornada');
      }
    });
  }
}).then(function(result1) {




            swal({
            title: "Confirmación",
            text: "¿Seguro que desea canjear este beneficio seleccionado? El Día: " + fechita2 + " en Jornada: " + result1,
            icon: "warning",
            buttons: ["Cancelar", true],
            showCancelButton: true,
          })
          .then(function(willDelete){
            if (willDelete) {

               $.get("index.php?r=colaborador/solicitar&idbeneficio=" + idbeneficio + "&rutColaborador=" + rutColaborador  + "&fecha=" + fechita2 + "&jornada=" + result1 + "",
                      function (dat) {
                        $("#solicitar-" + fecha + "").val('');
                        $("#solicitar-" + jornada + "").val('');

                      }).fail(function () {
                        swal("No existe conexion a internet");
                      });
                        $("#solicitar-" + idbeneficio).attr('onclick', " ");
                        $("#solicitar-" + idbeneficio + "").val('');
                      swal("Felicidades!", "Su beneficio será efectivo el: " + fechita2, "success")

                      .then(function(value){
                        location.reload();
                      });

            } else {
              swal("Su canje no ha sido efectuado!");
            }
          });

          });
                            });    

          }else{

          if(dato==4){
            $("#solicitar-" + idbeneficio).attr('onclick', " ");
            $("#solicitar-" + idbeneficio + "").val('');
            swal("Beneficio ya ha sido utilizado este Año")
            .then(function(value){
                           
            });
          }else{

          if(dato==0){
            swal("No tiene suficiente puntaje para canjear este beneficio.")
            .then(function(value){
                           
            });

          }else{
            swal("Beneficio ya ha sido utilizado este mes.")
            .then(function(value){
                 
            });

          }
          }
                         
                        }
        }).fail(function () {
            alert("No existe conexion a internet");
                    // Handle error here
        });
    }


</script>

 <?php foreach ($beneficio as $t) {

         $anio = BuscarController::canjeA($rutColaborador, $t["bId_Beneficio"]);
          $mes = BuscarController::canjeMes($rutColaborador, $t["bId_Beneficio"]);
          $puntaje = BuscarController::findPuntaje($rutColaborador);
         if( ($anio < $t["bvezporanio"]) && ($mes < $t["bvezpormes"])){
       ?>  

<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
            <div class="card">
            <div class="upp">
                <div class="card-image">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 imagen">
                    <br><center><img class="img-responsive" src="../web/img/beneficios/<?php echo $t["bimagen"]; ?>"></center>
                    <br>
                    </div>
                    <div class="name">
                    <center><span class="card-title"><?php echo $t["bNombre"]; ?></span></center>
                    </div>
                </div>
                
                <div class="card-content">
                  <center><p class="desc"><?php echo $anio; ?>/<?php echo $t["bvezporanio"]; ?> usados x <strong>año</strong></p>
              <p class="descr">Veces canjeable por <strong>mes</strong>: <?php echo $t["bvezpormes"]; ?></p></center>
              
              <div class="puntos">
              <center><h5 class="puntos"><?php echo $t["bValorBeneficio"]; ?> ptos</h5></center>
              </div>
                </div>
                </div>
                <div class="card-action">
                <div class="col-xs-12 downn">
                  <center> <button align="center" class="btn btn-success beneficios" id="solicitar-<?php echo $t["bId_Beneficio"]; ?>" onclick="solicitar(<?php echo $t["bId_Beneficio"]; ?>,<?php
                                        $session = Yii::$app->session;
                                        echo $session['rutColaborador'];
                                        ?>);">Solicitar</button>
                                        </div></center>

                                         
                </div>
            </div>
        </div>

        <?php }else{  ?>
          <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
            <div class="card">
             <div class="upp">
                <div class="card-image">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 imagen">
                    <br><center><img class="img-responsive" style="opacity: 0.5;" src="../web/img/beneficios/<?php echo $t["bimagen"]; ?>"></center>
                    <br>
                  </div>
                  <div class="name">
                    <center><span style="opacity: 0.5;" class="card-title"><?php echo $t["bNombre"]; ?></span></center>
                </div>
                </div>
                <div class="card-content">
                  <center><p style="opacity: 0.5;" class="desc"><?php echo $anio; ?>/<?php echo $t["bvezporanio"]; ?> usados x <strong>año</strong></p>
              <p style="opacity: 0.5;" class="descr">Veces canjeable por <strong>mes</strong>: <?php echo $t["bvezpormes"]; ?></p></center>
                  <div class="puntos">
              <center><h5 style="opacity: 0.5;" class="puntos"><?php echo $t["bValorBeneficio"]; ?> pts</h5></center>
              </div>
                </div>
                </div>
                <div class="card-action" style="opacity: 0.5;">
                <div class="col-xs-12 downn" >
                  <center><button align="center"  class="btn btn-success beneficios btn-disabled">Solicitar</button></center>
                </div>
                </div>
            </div>
        </div>
        <?php } ?>
      <?php

        } ?>