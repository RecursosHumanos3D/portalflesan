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
<<<<<<< HEAD
$formatter = \Yii::$app->formatter;
date_default_timezone_set("America/Santiago");

=======
date_default_timezone_set("America/Santiago");

$lugar = 1;
$rut2 = 1;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
?>

<?php
Modal::begin([
    "id" => "modal",
<<<<<<< HEAD
    "size" => "large",
    "footer" => "", // always need it for jquery plugin
    ])
    ?>
    <?php
    echo "<div id='modalContent'></div>";
    Modal::end();
    ?>

    <?php
    Modal::begin([
        "id" => "modal1",
        "size" => "large",
    "footer" => "", // always need it for jquery plugin
    ])
    ?>
    <?php
    echo "<div id='modalContent'>
    <img id='my_image' />
</div>";
Modal::end();
?>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<script type="text/javascript">
    function contarCaracteres(campo, campo_conteo, limite_maximo) {
    if(campo.value.length > limite_maximo){ // Si es muy largo, lo cortamos!
                         campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
    } else { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
                var limite = limite_maximo - campo.value.length;
                $('#contador').text("");
                $('#contador').append(limite);
                console.log(limite);
            }
}

function rotate(idPost) {

    $.get("index.php?r=rpost/rotate&idPost=" + idPost + "",
        function (dato) {
            $('#rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
            $('.rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
        }).fail(function () {
            swal("No existe conexion a internet");
            // Handle error here
        });
}
                
function rotates(rutColaborador) {

    $.get("index.php?r=colaborador/rotate&rutColaborador=" + rutColaborador + "",
        function (dato) {
        //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
        //$('#busniessmenu').css('background-color', '#323232');
        // $("#rotate-" + idPost).rotate(dato);
        $('#colaborador-' + rutColaborador).css('transform', 'rotate(' + dato + 'deg)');

        }).fail(function () {
            swal("No existe conexion a internet");
            // Handle error here
        });
}




window.onload = input;
function input(){
	document.getElementById('rpost-file').onchange = function() {
    $("#public").css("display" , "none");

    document.getElementById('rpost-file').onchange = function()
   {
	$("#public").css("display" , "block");

	document.getElementById('rpost-file').onchange = function() {
    $("#public").css("display" , "none");
		};
   };
};
}

function contarCaracteress(campo, limite_maximo, id) {
    if(campo.value.length > limite_maximo){ // Si es muy largo, lo cortamos!
        campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
    } else { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
        var limite = limite_maximo - campo.value.length;
        $('#contadorc-comentario-'+id).text("");
        $('#contadorc-comentario-'+id).append(limite);

    }
}

function enviar(post, rut) {

    var comentario = $("#comentario-" + post + "").val();

    var valid;  
        if(/^\s*$/.test(comentario))
            valid = 1;
        else
            valid = 2;

    var dato = Boolean(comentario);

    var ca = $('#b').text();
    var c = document.getElementById('b');
        
        if(c!=null){
            c.innerHTML = parseInt(ca)+1;
        }

        if (dato == true && valid == 2) {

            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
                function (dato) {
                    
                    var data = JSON.parse(dato);
                    $('#' + post).html('<img class="img-circle img-sm"  style="-ms-transform: rotate(' + data.rotate + 'deg);-webkit-transform: rotate(' + data.rotate + 'deg);transform: rotate(' + data.rotate + 'deg);" alt="User Image"   src="../web/img/perfil/t/' + data.foto + '"><div class="comment-text"><span class="username">' + data.nombre + ' ' + data.apellidos + '<span class="text-muted pull-right">Ahora</span></span>' + comentario + '</div>');
                    $("#comentario-" + post + "").val('');
                    var comentarioc = document.getElementById("#comentarioc-" + post + "");
                    comentarioc.innerHTML = parseInt(comentarioc)+1;

                    $("#post-" + post).css("display", "block");

                }).fail(function () {
                    swal("No existe conexion a internet");
                // Handle error here
                });

        } else {

            swal("Debe añadir un comentario");
        }

}

function reveal(idPost) {
    $("#post-" + idPost).css("display", "block");
}

function checkform(){
    var regex = "^\\s+$";
    cuca = document.cuca.rdescripcionPost.value;
    archivo = document.getElementById('rpost-file').value;


    if (cuca.match(/^\s*$/g) && archivo.length == ""){
        // something is wrong
        swal("Debes ingresar algún contenido");
        return false;
    }
    // If the script gets this far through all of your fields
    // without problems, it's ok and you can submit the form

    return true;
}
=======
    "footer" => "", // always need it for jquery plugin
])
?>
<?php
echo "<div id='modalContent'></div>";
Modal::end();
?>

<?php
Modal::begin([
    "id" => "modal1",
    "size" => "large",
    "footer" => "", // always need it for jquery plugin
])
?>
<?php
echo "<div id='modalContent'>
<img id='my_image' />
</div>";
Modal::end();
?>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<script type="text/javascript">

                    function contarCaracteres(campo, campo_conteo, limite_maximo) {

                            if(campo.value.length > limite_maximo)
                         { // Si es muy largo, lo cortamos!
                         campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
                        }
                         else
                        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
                        var limite = limite_maximo - campo.value.length;
                        $('#contador').text("");
                        $('#contador').append(limite);
                        console.log(limite);
                        }
                    }



    function rotate(idPost) {

        $.get("index.php?r=rpost/rotate&idPost=" + idPost + "",
                function (dato) {
                     //alert(dato);
                    $('#rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
                     $('.rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
                }).fail(function () {
            alert("No existe conexion a internet");
            // Handle error here
        });


    }

     function rotates(rutColaborador) {

        $.get("index.php?r=colaborador/rotate&rutColaborador=" + rutColaborador + "",
                function (dato) {
                   
                    //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
                    //$('#busniessmenu').css('background-color', '#323232');
                    // $("#rotate-" + idPost).rotate(dato);
                    $('#colaborador-' + rutColaborador).css('transform', 'rotate(' + dato + 'deg)');


                }).fail(function () {
            alert("No existe conexion a internet");
            // Handle error here
        });


    }
</script>
<script>
      function contarCaracteress(campo, limite_maximo, id) {
                            if(campo.value.length > limite_maximo)
                         { // Si es muy largo, lo cortamos!
                         campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
                        }
                         else
                        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
                        var limite = limite_maximo - campo.value.length;
                        $('#contadorc-comentario-'+id).text("");
                        $('#contadorc-comentario-'+id).append(limite);
                        
                        }
                    }


    
    function enviar(post, rut) {


        var comentario = $("#comentario-" + post + "").val();

         var valid;  
          if(/^\s*$/.test(comentario))
            valid = 1;
          else
            valid = 2;

        var dato = Boolean(comentario);



        var ca = $('#b').text();
        var c = document.getElementById('b');
        c.innerHTML = parseInt(ca)+1;

        if (dato == true && valid == 2) {



            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
                function (dato) {
                 
                    var data = JSON.parse(dato);
                    $('#' + post).html('<a class="pull-left" href="#"><img style="-ms-transform: rotate('+ data.rotate + 'deg);-webkit-transform: rotate('+ data.rotate + 'deg);transform: rotate('+ data.rotate + 'deg);"class="avatar" alt="Avatar" src="../web/img/perfil/' + data.foto + '"></a><div class="comment-body"><div class="comment-heading"><h4 class="comment-user-name"><a href="#">' + data.nombre + ' ' + data.apellidos + '</a></h4><h5 class="time">Ahora</h5></div><p style="text-transform: capitalize;">' + comentario + '</p></div>');
                    $("#comentario-" + post + "").val('');

                    


                }).fail(function () {
                    alert("No existe conexion a internet");
                // Handle error here
            });


            } else {

                alert("Debe añadir un comentario");
            }


        }

    function reveal(idPost) {


        $("#post-" + idPost).css("display", "block");


    }
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d


    function like(idPost, rut) {

<<<<<<< HEAD
    $.get("index.php?r=rpost/like&rutPersona=" + rut + "&idPost=" + idPost + "",
        function (dato) {
            $("#like-" + idPost).css("color" , "#e8000a");
            $("#like-" + idPost).attr('onclick', " ");
            $("#like-" + idPost).html('<i class="fa fa-heart"></i>' + dato);
            var ca = $('#d').text();
            var c = document.getElementById('d');
            if(c!=null){
                c.innerHTML = parseInt(ca)+1;
            }



        }).fail(function () {
            swal("No existe conexion a internet");
=======
        $.get("index.php?r=rpost/like&rutPersona=" + rut + "&idPost=" + idPost + "",
                function (dato) {

                   
                    $("#like-" + idPost).attr('onclick', " ");
                    $("#like-" + idPost).html('<i class="fa fa-heart"></i>' + dato);
                    var ca = $('#d').text();
                    var c = document.getElementById('d');

                   c.innerHTML = parseInt(ca)+1;



                }).fail(function () {
            alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            // Handle error here
        });


<<<<<<< HEAD
}   

    function eliminar(idPost) {

        $.get("index.php?r=rpost/eliminar&idPost=" + idPost + "",
            function (dato) {
                if(dato==true){
                    swal("Su post ha sido eliminado")
                    .then(function(value){
                        location.reload();
                    });
                }
                else{
                    swal("No ha sido eliminado");
                }

            }).fail(function () {
                swal("No existe conexion a internet");
            // Handle error here
            });


}

function compartir(idPost, rutColaborador) {

    $.get("index.php?r=rpost/compartir&idPost=" + idPost + "&rutColaborador="+rutColaborador+"",
        function (dato) {

            if(dato==true){

                swal("La publicacion se ha compartido").then(function(value) {
                location.reload();
                });

            }else{

                swal("Ha ocurrido un problema intentelo nuevamente");

            }

            }).fail(function () {
                swal("No existe conexion a internet");
            // Handle error here
            });


}

</script>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style type="text/css">
.modal-body {
    overflow: hidden;
}
    .perfilll{
        -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg)!important;
        -webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg)!important;
        transform: rotate(<?php echo $perfil->rrotador; ?>deg)!important;


    }
    .perfill{
        -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
        -webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
        transform: rotate(<?php echo $perfil->rrotador; ?>deg);


    }
    .mySlides {
    overflow: hidden;
}
</style>


<input id="amigo" type="hidden" name="amigo" value="<?php echo $rutAmigo; ?>">
<div class="container" style="margin-top:84px;">

    <div class="row-fluid">
        <div class="col-md-12 col-xs-12 col-sm-12  animated fadeInLeft">

=======
    }
    
        

     
    function eliminar(idPost) {

        $.get("index.php?r=rpost/eliminar&idPost=" + idPost + "",
                function (dato) {
                  if(dato==true){
                      alert("Su post ha sido eliminado");
                      location.reload();

                  }
                  else{
                      alert("No ha sido eliminado");
                  }

                }).fail(function () {
            alert("No existe conexion a internet");
            // Handle error here
        });


    }

</script>
   



<?php //var_dump($model[0]['foto']);die();   ?>
<div class="container" style="margin-top:84px;">
    <div class="row-fluid">
        <div class="col-md-12 col-xs-12 col-sm-12  animated fadeInLeft">
            <div class="profile-header-background">
                <?= Html::img('@web/img/portada/' . $perfil->rportada , ['alt' => 'Profile Header Background']); ?>
            </div>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-info-left amigo">
                        <div class="text-center">
<<<<<<< HEAD
                            <?= Html::img('@web/img/perfil/' . $perfil->rfoto, ['alt' => 'Avatar', 'width' => 200, 'class' => 'avatar img-circle perfill', 'id' => 'colaborador-' . $model->rutColaborador]); ?>
                            <h2><?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?></h2>
                            <hr>
                            <br>
=======



                                <?= Html::img('@web/img/perfil/' . $perfil->rfoto, ['alt' => 'Avatar', 'width' => 200, 'class' => 'avatar perfilll', 'id' => 'colaborador-' . $model->rutColaborador]); ?>

                            <h2><?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?></h2></h2>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                        </div>
                        <div class="action-buttons">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $global = $rutColaborador;


                                    if ($rutColaborador == $model->rutColaborador) {
                                        ?> 

<<<<<<< HEAD

                                        <?= Html::button('<span class=" glyphicon glyphicon-pencil">', ['value' => Url::to('index.php?r=colaborador/foto&rutColaborador=' . $model->rutColaborador . ''), 'class' => 'btn btn-lg btn-raised btn-success', 'id' => 'modalButton']) ?>
                                        <button  onclick="rotates(<?php echo $model->rutColaborador; ?>);" class="btn btn-lg btn-raised btn-success rota">


                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
           
                            <div align="pull-left" style="margin-top: -8%!important;">
                                <h3 class="info"><i class="fas fa-bullseye"></i> Biografía</h3>
                                <p><?php echo $perfil->rbio; ?></p>
                            </div>
                            <hr>
                            <div align="pull-left">
                                <h3 class="info"><i class="fas fa-bullseye"></i> Cargo</h3>
                                <p><?php echo $cargo->nombreCargo; ?></p>
                            </div>
                            <hr>
                            <div align="pull-left">
                                <h3 class="info"><i class="far fa-clock"></i> Tiempo en flesan</h3>
                                <?php if($decimal2==0 && $entero==0){ ?>
                                <p>Fecha no definida</p>
                                <?php }else{ ?>
                                <?php if($entero==1){?>
                                <p><?php echo $entero; ?> Año y <?php echo $decimal2; ?> meses </p>
                                <?php }else if($entero==0){ ?>
                                <p><?php echo $decimal2; ?> meses </p>
                                <?php }else if($decimal2==0)  { ?>
                                <p><?php echo $entero; ?> Años</p>
                                
                                <?php }else{?>
                                <p><?php echo $entero; ?> Años y <?php echo $decimal2; ?> meses </p>
                                <?php } }?>
                            </div>
                            <hr>
                            <div align="pull-left">
                                <h3 class="info"><i class="fas fa-birthday-cake"></i> Cumpleaños</h3>
                                <p><?php echo $formatter->asDate($model->fechanacimiento); ?></p>
                            </div>
                            <hr>
                            <div align="pull-left">
                                <h3 class="info"><i class="fas fa-ellipsis-h"></i> Hobbies</h3>
                                <p><?php echo $perfil->rhobbie; ?></p>
                                </div>
                                <hr>
                                <div align="pull-left">
                                    <h3 class="info"><i class="fas fa-bullseye"></i> Música</h3>
                                    <p><?php echo $perfil->rmusica; ?></p>
                                </div>
                                <hr>
                                <br>
                                <div align="pull-left">
                                    <a href="index.php?r=site/preguntas" class="info"><i class="far fa-ellipsis-h"></i> Preguntas Frecuentes</a>
                                    <br><br><br>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-xs-12">
                            <div class="profile-info-right amigo">
                                <div class="col-md-12 col-lg-12 col-xs-12 hidden-xs">
                                 <div class="profile-header-background">
                                    <?= Html::img('@web/img/portada/' . $perfil->rportada , ['alt' => 'Profile Header Background']); ?>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xs-12">
                                <?php

                                echo $this->render('valoracion',[
                                    'model' => $model,
                                    'estadistica' => $estadistica,
                                    'rutColaborador' => $rutColaborador,
                                    ]);

                                    ?>   
                                </div>

                                <div class="col-md-12 col-lg-8 hidden-xs">
                                 
                                    <?php

                                    echo $this->render('carrusel',[

                                        'fotos' => $fotos,
                                        'top' => $top,
                                        'others' => $others,
                                        'last' => $last,
                                        
                                        ]);

                                        ?>   

                                    </div>


                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                <div class="col-md-8 col-lg-12 col-sm-8">
                                       
                            <?php if ($global == $model->rutColaborador) { ?> 
                            <div class="panel panel-default publicador amigo">
                          <div class="panel-body">
                        
                             <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'name' => 'cuca', 'onSubmit' => 'return checkform()'], 'action' => ['colaborador/post']]); ?>
=======
                    
                      <?= Html::button('Actualiza tus datos', ['value' => Url::to('index.php?r=colaborador/foto&rutColaborador=' . $model->rutColaborador . ''), 'class' => 'btn btn-lg btn-raised btn-success', 'id' => 'modalButton']) ?>
                                    <button  onclick="rotates(<?php echo $model->rutColaborador; ?>);" class="btn btn-lg btn-raised btn-success rota">
                        
                        Rotar foto
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        </button>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                        <div class="section" align="center">
                            <h3>Sobre Mi</h3>
                            <p><?php echo $perfil->rbio; ?></p>
                        </div>
                        <div class="section" align="center">
                            <h3>Mi Valoracion</h3>
                            <p> <span id="a" class="badge"><?php echo $estadistica->rcomentarios; ?></span><br>Comentarios Realizados</p>
                            <p><span id="b" class="badge"><?php echo $estadistica->rcomentariosr; ?></span><br>Comentarios Recibidos</p>
                            <p><span id="c" class="badge"><?php echo $estadistica->rlikes; ?></span> <br>Me gusta Realizados</p>
                            <p><span id="d" class="badge"><?php echo $estadistica->rlikesr; ?></span> <br>Me gusta Recibidos</p>
                        </div>

                        <div class="section" align="center">
                            <h3>Mis Procesos </h3>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Clima
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Desempeño
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Inducción
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Performance
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Wellness
                            </button>       
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Beneficios
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fab fa-telegram-plane" aria-hidden="true"></i> Aprendizaje
                            </button>
                        </div>

                        <div class="section" align="center">
                            <h3>Mis Compañeros</h3>
                            <div class="widget panel-friends">

                                <div class="widget-body bordered-top bordered-red text-center">

                                    <ul class="friends">


                                        <?php
                                        $rutColaborador = $model['rutColaborador'];
                                        $model2 = BuscarController::encuentraAmigos($model['rutColaborador']);

                                        foreach ($model2 as $amigo) {
                                            $modell3 = BuscarController::findColaboradorRut($amigo["rut2"]);
                                            
                                            $perfilamigo = BuscarController::findPerfiles($modell3["idperfilRed"]);
                                            
                                            ?>


                                            <li>

                                                  <a href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$modell3["rutColaborador"]; ?>">


                                                    <img   style="

                                                    -ms-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                     -webkit-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                     transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);


                                                    " src="../web/img/perfil/t/<?php echo $perfilamigo[0]["rfoto"]; ?>" title="<?php echo $modell3['nombreColaborador'] . " " . $modell3['apellidosColaborador']; ?>" class="img-responsive tip perfill">

                                                </a>

                                            </li>

                                        <?php } ?>

                                    </ul>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-info-right">
                        <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                            <li class="active"><a href="#activities" data-toggle="tab">Mi Muro</a></li>
                          
                        </ul>
                        <div class="tab-content">
                            <?php if ($global == $model->rutColaborador) { ?> 
                            <div class="panel panel-default publicador">
                          <div class="panel-body">
                        
                             <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => ['colaborador/post']]); ?>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                            <div class="row">
                                
                            
                                            <input type="hidden" name="rutColaborador" value="<?php echo $rutColaborador; ?>">
                                            <input type="hidden" name="rut2" value="<?php echo $rut2; ?>">
                                            
                            </div>
                        
                            <div class="media">
                                  <div class="media-left media-top">
                                    
                                  </div>
                                  <div class="media-body">
                                    <div class="form-group">
                                      <!-- rows="2" means "display the textarea as 2 rows high". The user can
                                           enter more than 2 rows of text. -->
<<<<<<< HEAD
                                            <div class="col-md-12 col-xs-12">
                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea onKeyUp="contarCaracteres(this.form.rdescripcionPost, this.form.remLen, 180);" placeholder="¿Qué estás pensando hoy?" maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="¿Qué estás pensando hoy?" rows="2" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                   
=======
                                            <div class="col-md-10 col-xs-7">
                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea onKeyDown="contarCaracteres(this.form.rdescripcionPost, this.form.remLen, 180);" placeholder="Que estas pensando hoy??? " maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="Que estas pensando hoy??? " rows="5" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                    <p>Contador: <font id="contador">180</font></p>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                                                    </div>

                                    </div>
                                  </div>
                                </div>
                            <ul class="nav nav-pills">
                              <li role="presentation" class="active">

                                <?= $form->errorSummary($model); ?>
                             <?=
                                            $form->field($model3, 'file')->widget(FileInput::classname(), [
                                                'pluginOptions' => [
                                                    'showCaption' => false,
                                                    'showRemove' => false,
                                                    'ShowLabel' => false,
<<<<<<< HEAD
                                                    'showPreview' => true,
                                                    'showUpload' => true,
                                                    'uploadLabel' => 'Publicar',
                                                    'browseClass' => 'btn btn-primary',
                                                    'browseIcon' => '<i class="fas fa-paperclip"></i>',
                                                    'browseLabel' => '',
                                                    'mainClass' => 'input-group-lg',
                                                    'removeLabel' => '']
=======
                                                    'showUpload' => false,
                                                    'browseClass' => 'btn btn-primary',
                                                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                                                    'browseLabel' => 'Selecciona tu archivo a subir']
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                                            ])->label(false);
                                            ?>

                                </li>

                              <li role="presentation" class="active">
<<<<<<< HEAD
                                <button id="public" class="btn btn-primary"  type="submit" ><span class=" glyphicon glyphicon-pencil">
=======
                                <button class="btn btn-primary"  type="submit" data-toggle="collapse" data-target="#demo1" ><span class=" glyphicon glyphicon-pencil">
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                                </span> <strong>Publicar</strong></button>
                              </li>
                            
                            </ul>
                          </div>
            <?php ActiveForm::end(); ?>



                   
                        </div>
                                <?php
                            }





                            if ($global != $model->rutColaborador) {
                                ?>
                                <div class="panel am">

                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => ['rpost/creates']]); ?>

<<<<<<< HEAD
                                    <textarea name="rdescripcionPost" required="true" placeholder="¡Saluda a <?php echo $model['nombreColaborador']; ?> de seguro quiere recibir tu Mensaje!" rows="2" class="form-control input-lg p-text-area"></textarea>
=======
                                    <textarea name="rdescripcionPost" required="true" placeholder="Saluda a <?php echo $model['nombreColaborador']; ?> de seguro quiere recibir tu saludo!!  :D" rows="2" class="form-control input-lg p-text-area"></textarea>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d


                                    <div class="panel-footer">

                                        <button class="btn btn-danger pull-right">Publicar</button>

                                        <ul class="nav nav-pills">



                                            <li>

                                            
                                                <input type="hidden" name="rutColaborador" value="<?php echo $global; ?>" />
                                                <input type="hidden" name="rutColaborador2" value="<?php echo $model['rutColaborador']; ?>" />
                                               
                                            </li>


                                        </ul>

                                    </div>
                                    <?php ActiveForm::end(); ?>

                                </div>
                            <?php } ?>    
<<<<<<< HEAD
                            </div>
                            
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <script type="text/javascript">



    $("#archivo1").click(function () {
<<<<<<< HEAD
        $("#archivo1").addClass('btn-block');
    });
                            </script>
                                           

                                    <!-- activities -->
                                    <div class="tab-pane fade in active container" id="activities" >

                                     <div class="conatiner" style="margin:35px auto; ">
                                        <div class="row">
                                         
                                           </div>
                                            <div class="col-md-12 col-lg-12">
                                                <h3 class="hidden-xs" style="font-weight: bold; color: #736a6a;    font-size: 21px!important;    margin-left: -0.7%;"> Últimos Post:</h3>
                                                <hr>
                                                <div class="col-md-8 col-lg-8 col-xs-12 results" ></div>

                                            </div>
                                            <div class="text-center" id="loading">
                                                <img src="ajax-loader.gif" id="ani_img"/>
                                            </div>
                                        <button class="btn btn-block btn-primary hidden-lg hidden-md" onclick="myContent2();">Cargar mas!</button>
                                            <script>
                                                var mypage = 1;
                                                mycontent(mypage);
                                                $(window).scroll(function(){
                                                    if($(window).scrollTop() >= $(document).height() - $(window).height() - 4){
                                                        mypage++;
                                                        mycontent(mypage);
                                                    }
                                                })
                                                function mycontent(mypage){

                                                    $('#ani_img').show();
                                                    $.get('index.php?r=colaborador/reloadr&page='+mypage+'&rutColaborador=<?php echo $rutColaborador; ?>&rutAmigo=<?php echo $rutAmigo; ?>', function(data){
                                                        if(data.trim().length == 0){
                                                         $('#loading').append('<button style="margin-right:35%;margin-bottom:10%;" class="btn btn-primary btn btn-primary hidden-md hidden-lg ">No existen más post disponibles</button>');
                                                         var e = document.getElementById("loading");
                                                         e.id = "loadings";
                                                         document.getElementById('ani_img').style.display = 'none';
                                                         document.getElementById('ani_img').style.visibility = 'none';
                                                         var s = document.getElementById("ani_img");
                                                         s.id = "ani_imgs"
                                                     }
                                                     $('.results').append(data);

                                                     $('.well').animate({scrollTop: $('#loading').offset().top}, 5000, 'easeOutBounce');
                                                     document.getElementById("ani_img").style.display = "none";
                                                     setInterval(function(){ },3000);

                                                 })
                                                }


                                                function myContent2(){
                                                 mypage++;
                                                 mycontent(mypage);
                                             }
                                         </script>
                                     </div>
                                     


                                 </div>
                                 <!-- end activities -->
                                 <!-- followers -->


                             </div>
                             <!-- end followers -->

                             <!-- Aula Virtual -->

                             <!-- end following -->
                         </div>
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

    <style type="text/css">
    .panel.panel-default.publicador.amigo {
   margin-left: 0%!important;
    width: 96.5%!important;
    box-shadow: none;
    margin-right: 0.5%!important;
}
.panel.am {
    max-width: 96.5%!important;
    margin-left: 3%!important;
}
        @media (max-width: 768px){
            button.btn.btn-block.btn-primary.hidden-lg.hidden-md {
    width: 84%!important;
    margin-right: -2%!important;
    margin-top: -5%!important;
    margin-left: 7%!important;
}
            .panel.am {
    max-width: 94.5%!important;
    margin-left: 3%!important;
}
.panel.panel-default.publicador.amigo {
    margin-left: 0%!important;
    width: 96.4%!important;
    margin-right: 2%!important;
    margin-top: 30%!important;
}

.profile-info-left.amigo {
    width: 82%;
    padding: 10px;
    overflow: unset!important;
    position: relative;
    margin-top: -32%!important;
}
}

.modal-content {
    width: 100%!important;
   
}

.modal-header .close {
    margin-top: -12px!important;
}

.close {
  color: black!important;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

button.btn.btn-danger {
    margin-top: 5px!important;
}
    </style>
=======
        $("#archivo1").addClass('btn-success');
    });
                            </script>


                            <!-- activities -->
                            <div class="tab-pane fade in active container" id="activities">

                                 <div class="conatiner" style="margin:35px auto;">
                                    <div class="row">
                                        <div class="col-md-8 results"></div>
                                    </div>
                                    <div class="text-center" id="loading">
                                        <img src="ajax-loader.gif" id="ani_img"/>
                                    </div>
                                    <button class="btn btn-block btn-primary hidden-lg hidden-md" onclick="myContent2();">Cargar mas!</button>
                                </div>
                                <script>
                                var mypage = 1;
                                mycontent(mypage);
                                $(window).scroll(function(){
                                    if($(window).scrollTop() >= $(document).height() - $(window).height() - 4){
                                        mypage++;
                                        mycontent(mypage);
                                    }
                                })
                                function mycontent(mypage){
                                        
                                    $('#ani_img').show();
                                    $.get('index.php?r=colaborador/reloadr&page='+mypage+'&rutColaborador=<?php echo $rutColaborador; ?>&rutAmigo=<?php echo $rutAmigo; ?>', function(data){
                                        if(data.trim().length == 0){
                                             $('#loading').append('<button style="margin-right:35%;" class="btn btn-primary">No existen mas post disponibles</button>');
                                            var e = document.getElementById("loading");
                                            e.id = "loadings";
                                            document.getElementById('ani_img').style.display = 'none';
                                            document.getElementById('ani_img').style.visibility = 'none';
                                            var s = document.getElementById("ani_img");
                                            s.id = "ani_imgs"
                                        }
                                        $('.results').append(data);
                                        
                                        $('.well').animate({scrollTop: $('#loading').offset().top}, 5000, 'easeOutBounce');
                                        document.getElementById("ani_img").style.display = "none";
                                        setInterval(function(){ },3000);

                                    })
                                }


                                function myContent2(){
                                     mypage++;
                                     mycontent(mypage);
                                }
                                </script>


                            </div>
                            <!-- end activities -->
                            <!-- followers -->
                      

                            </div>
                            <!-- end followers -->

                            <!-- Aula Virtual -->
                 
                            <!-- end following -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
