<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use yii\web\Controller;
use app\Controllers\BuscarController;
use app\models\Colaborador;
use app\models\RAmigos;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

date_default_timezone_set("America/Santiago");


$lugar = 1;
$rut2 = 1;

<<<<<<< HEAD
$session = Yii::$app->session;

if ($session->isActive) {
    $rutColaborador = $session['rut'];
    $nombre = $session['nombreColaborador'];
    $apellidos = $session['apellidosColaborador'];
    $foto = $session['foto'];
}
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
?>

<?php
Modal::begin([
    "id" => "modal",
    "footer" => "", // always need it for jquery plugin
])
?>
<?php
echo "<div id='modalContent'></div>";
Modal::end();
?>
<<<<<<< HEAD
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

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


function like(idPost, rut) {

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
            // Handle error here
        });


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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <style type="text/css">
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
    
        @media (max-width: 768px){
            .panel.panel-default.publicador {
                width: 108%!important;
                margin-left: -17px!important;
            }

            .panel.panel-default.publicador.amigo {
    margin-left: 6%!important;
    width: 100.4%!important;
    margin-right: -1%!important;
    margin-top: 6%!important;
}
            button.btn.btn-primary {
                margin-right: -1%!important;
            }

        }


        @media only screen and (max-width: 320px){
            aside {
                width: 290px!important;
                max-width: 286px!important;
                margin-left: 5%!important;
            }

            .container-fluid.coment {
                margin-left: -2%!important;
                margin-right: -22%!important;
                width: 129%!important;
                max-width: 200%!important;
            }

            .panel.panel-default.publicador {
                max-width: 118%!important;
                margin-left: -6%!important;
            }
        }

        /* The side navigation menu */
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

        /* The navigation menu links */



    </style>
    <script type="text/javascript">
        /* Set the width of the side navigation to 250px */




        function contarCaracteres(campo, campo_conteo, limite_maximo) {

            if (campo.value.length > limite_maximo)
=======


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<script type="text/javascript">

    function contarCaracteres(campo, campo_conteo, limite_maximo) {

        if (campo.value.length > limite_maximo)
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        { // Si es muy largo, lo cortamos!
            campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
        } else
        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
<<<<<<< HEAD
        var limite = limite_maximo - campo.value.length;
        $('#contador').text("");
        $('#contador').append(limite);
        console.log(limite);
    }
}
function contarCaracteress(campo, limite_maximo, id) {
    if (campo.value.length > limite_maximo)
=======
            var limite = limite_maximo - campo.value.length;
            $('#contador').text("");
            $('#contador').append(limite);
            console.log(limite);
        }
    }
    function contarCaracteress(campo, limite_maximo, id) {
        if (campo.value.length > limite_maximo)
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        { // Si es muy largo, lo cortamos!
            campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
        } else
        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
<<<<<<< HEAD
        var limite = limite_maximo - campo.value.length;
        $('#contadorc-comentario-' + id).text("");
        $('#contadorc-comentario-' + id).append(limite);

    }
}


$("#archivo1").click(function () {
    $("#archivo1").addClass('btn-success');
});
=======
            var limite = limite_maximo - campo.value.length;
            $('#contadorc-comentario-' + id).text("");
            $('#contadorc-comentario-' + id).append(limite);

        }
    }


    $("#archivo1").click(function () {
        $("#archivo1").addClass('btn-success');
    });
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
</script>
<script>

    function enviar(post, rut) {


        var comentario = $("#comentario-" + post + "").val();
        var valid;
        if (/^\s*$/.test(comentario))
            valid = 1;
        else
            valid = 2;

        var dato = Boolean(comentario);
<<<<<<< HEAD
=======
        var ca = $('#a').text();
        var c = document.getElementById('a');
        c.innerHTML = parseInt(ca) + 1;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        if (dato == true && valid == 2) {


<<<<<<< HEAD
            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
                function (dato) {
                    var data = JSON.parse(dato);
                    $('#' + post).html('<img class="img-circle img-sm"  style="-ms-transform: rotate(' + data.rotate + 'deg);-webkit-transform: rotate(' + data.rotate + 'deg);transform: rotate(' + data.rotate + 'deg);" alt="User Image"   src="../web/img/perfil/t/' + data.foto + '"><div class="comment-text"><span class="username">' + data.nombre + ' ' + data.apellidos + '<span class="text-muted pull-right">Ahora</span></span>' + comentario + '</div>');
                    $("#comentario-" + post + "").val('');

                }).fail(function () {
                   swal("No existe conexion a internet");
=======

            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
                    function (dato) {
                        var data = JSON.parse(dato);
                        $('#' + post).html('<a class="pull-left" href="#"><img style="-ms-transform: rotate(' + data.rotate + 'deg);-webkit-transform: rotate(' + data.rotate + 'deg);transform: rotate(' + data.rotate + 'deg);" class="avatar perfill" alt="Avatar" src="../web/img/perfil/t/' + data.foto + '"></a><div class="comment-body"><div class="comment-heading"><h4 class="comment-user-name"><a href="#">' + data.nombre + ' ' + data.apellidos + '</a></h4><h5 class="time">Ahora</h5></div><p style="text-transform: initial;">' + comentario + '</p></div>');
                        $("#comentario-" + post + "").val('');

                    }).fail(function () {
                alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                // Handle error here
            });


<<<<<<< HEAD
            } else {


               swal("Debe añadir un comentario");
           }


       }

       function reveal(idPost) {
=======
        } else {

            alert("Debe añadir un comentario");
        }


    }

    function reveal(idPost) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d


        $("#post-" + idPost).css("display", "block");


    }

<<<<<<< HEAD
    function checkform()
    {
        var regex = "^\\s+$";
        cuca = document.cuca.rdescripcionPost.value;
        archivo = document.getElementById('rpost-file').value;


        if (cuca.match(/^\s*$/g) && archivo.length == "")
        {
        // something is wrong
        swal("Debes ingresar algún contenido");
        return false;
    }


    // If the script gets this far through all of your fields
    // without problems, it's ok and you can submit the form

    return true;
}



function like(idPost, rut) {

    $.get("index.php?r=rpost/like&rutPersona=" + rut + "&idPost=" + idPost + "",
        function (dato) {
            $("#like-" + idPost).css("color", "#2fc3e8");
            $("#like-" + idPost).attr('onclick', " ");
            $("#like-" + idPost).html('<i class="fa fa-heart"></i>' + dato);
            var ca = $('#c').text();
            var c = document.getElementById('c');
            c.innerHTML = parseInt(ca) + 1;


        }).fail(function () {
           swal("No existe conexion a internet");
=======
    function like(idPost, rut) {

        $.get("index.php?r=rpost/like&rutPersona=" + rut + "&idPost=" + idPost + "",
                function (dato) {

                    $("#like-" + idPost).attr('onclick', " ");
                    $("#like-" + idPost).html('<i class="fa fa-heart"></i>' + dato);
                    var ca = $('#c').text();
                    var c = document.getElementById('c');
                    c.innerHTML = parseInt(ca) + 1;


                }).fail(function () {
            alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            // Handle error here
        });


    }

    function rotate(idPost) {

        $.get("index.php?r=rpost/rotate&idPost=" + idPost + "",
<<<<<<< HEAD
            function (dato) {
=======
                function (dato) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                    // alert(dato);
                    //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
                    //$('#busniessmenu').css('background-color', '#323232');
                    // $("#rotate-" + idPost).rotate(dato);
                    $('#rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');
                    $('.rotate-' + idPost).css('transform', 'rotate(' + dato + 'deg)');


                }).fail(function () {
<<<<<<< HEAD
                   swal("No existe conexion a internet");
=======
            alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            // Handle error here
        });


<<<<<<< HEAD
            }
            function rotates(rutColaborador) {

                $.get("index.php?r=colaborador/rotate&rutColaborador=" + rutColaborador + "",
                    function (dato) {
=======
    }
    function rotates(rutColaborador) {

        $.get("index.php?r=colaborador/rotate&rutColaborador=" + rutColaborador + "",
                function (dato) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                    // alert(dato);
                    //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
                    //$('#busniessmenu').css('background-color', '#323232');
                    // $("#rotate-" + idPost).rotate(dato);
                    $('#colaborador-' + rutColaborador).css('transform', 'rotate(' + dato + 'deg)');


                }).fail(function () {
<<<<<<< HEAD

                   swal("No existe conexion a internet");
=======
            alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            // Handle error here
        });


<<<<<<< HEAD
            }
            function eliminar(idPost) {

                $.get("index.php?r=rpost/eliminar&idPost=" + idPost + "",
                    function (dato) {
                        if (dato == true) {
                         swal("Su post ha sido eliminado")
                         .then((value) => {
                            location.reload();
                        });
                     } else {

                        swal("No ha sido eliminado");

                    }

                }).fail(function () {
                   swal("No existe conexion a internet");
=======
    }
    function eliminar(idPost) {

        $.get("index.php?r=rpost/eliminar&idPost=" + idPost + "",
                function (dato) {
                    if (dato == true) {
                        alert("Su post ha sido eliminado");
                        location.reload();
                    } else {
                        alert("No ha sido eliminado");
                    }

                }).fail(function () {
            alert("No existe conexion a internet");
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            // Handle error here
        });


<<<<<<< HEAD
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

        </script>

        <?php

        echo $this->render('sidel',[
            'model' => $model,
            'rutColaborador' => $rutColaborador,
        ]);

        ?>   




<input id="amigo" type="hidden" name="amigo" value="<?php echo $rutColaborador; ?>">





<div class="container">
    <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm">
         
             <?php

                               echo $this->render('sider',[
                                'model' => $model,
                                'rutColaborador' => $rutColaborador,
                                ]);

                                ?>   
            
        </div>
        <!--/span-->
        <div class="col-md-6">
                                           

                                <!-- activities -->
                                
                                    <div class="container-fluid" >
                                        <div class="row">
                                                    <div class="panel panel-default publicador amigo">
                          <div class="panel-body">
                        
                             <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'name' => 'cuca', 'onSubmit' => 'return checkform()'], 'action' => ['colaborador/post']]); ?>

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
                                            <div class="col-md-12 col-xs-12">
                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea onKeyUp="contarCaracteres(this.form.rdescripcionPost, this.form.remLen, 180);" placeholder="¿Qué estás pensando hoy?" maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="¿Qué estás pensando hoy?" rows="2" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                   
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
                                                    'showPreview' => true,
                                                    'showUpload' => true,
                                                    'uploadLabel' => 'Publicar',
                                                    'browseClass' => 'btn btn-primary',
                                                    'browseIcon' => '<i class="fas fa-paperclip"></i>',
                                                    'browseLabel' => '',
                                                    'mainClass' => 'input-group-lg',
                                                    'removeLabel' => '']
                                            ])->label(false);
                                            ?>

                                </li>

                              <li role="presentation" class="active">
                                <button id="public" class="btn btn-primary"  type="submit"  ><span class=" glyphicon glyphicon-pencil">
                                </span> <strong>Publicar</strong></button>
                              </li>
                            
                            </ul>
                          </div>
            <?php ActiveForm::end(); ?>



                   
                        </div>
                                            <div class="col-md-12 col-lg-12 col-xs-12 results"></div>
                                        </div>
                                        <div class="text-center" id="loading">
                                            <img src="ajax-loader.gif" id="ani_img"/>
                                        </div>
                                        <button class="btn btn-block btn-primary hidden-lg hidden-md" onclick="myContent2();">Cargar mas!</button>

                                    </div>

                                    <script>
                                        var mypage = 1;
                                        mycontent(mypage);
                                        $(window).scroll(function () {
                                            if ($(window).scrollTop() >= $(document).height() - $(window).height() - 4) {
                                                mypage++;
                                                mycontent(mypage);
                                            }
                                        })


                                        function mycontent(mypage) {

                                            $('#ani_img').show();
                                            $.get('index.php?r=colaborador/reload&page=' + mypage + '&rutColaborador=<?php echo $rutColaborador; ?>', function (data) {
                                                if (data.trim().length == 0) {
                                                    $('#loading').append('<button class="btn btn-primary">No existen más post disponibles<br></button>');
                                                    var e = document.getElementById("loading");
                                                    e.id = "loadings";
                                                    document.getElementById('ani_img').style.display = 'none';
                                                    document.getElementById('ani_img').style.visibility = 'none';
                                                    var s = document.getElementById("ani_img");
                                                    s.id = "ani_imgs"
                                                }
                                                $('.results').append(data);

                                                $('.well').animate({scrollTop: $('#loading').offset().top}, 5000, 'easeOutBounce');
                                                setInterval(function () { }, 3000);

                                            })
                                        }

                                        function myContent2() {
                                            mypage++;
                                            mycontent(mypage);
                                        }
                                    </script>

                                
                                <!-- end activities -->
                                <!-- followers -->
                                <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
                                    <div class="modal-dialog">
                                        <button type="button" class="close hidden"  aria-hidden="true">×</button>
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
           
        </div>
        <!--/span-->
        <div class="col-md-3 hidden-xs hidden-sm">
            <div class="sidebar-nav-fixed pull-right affix">
                                            <div class="widget right">
                                    <div class="widget-header">
                                      <h3 class="widget-caption"><strong>Cumpleaños hoy:</strong></h3>
                                  </div>
                                  <div class="widget-body bordered-top bordered-sky">
                                      <div>
                                        <div class="content">
                                          <ul class="list-unstyled team-members">
                                          <?php


 if(empty($colaboradores)){
  ?>
<li>
                                                  <div class="row">

                                                      <div class="col-md-12 col-lg-12 col-xs-12">
                                                        <p class="nohay" align="left">No hay cumpleaños hoy.</p>
                                                    </div>

                                                    
                                               </div>
                                           </li>
  <?php
}else{

?>
                                             <?php 
                                             foreach ($colaboradores as $c) { 
                                                $cumple = $c['nombre'];
                                                  $model2 = BuscarController::findColaboradorRut($c['rutColaborador']);
                $perfil2 = BuscarController::findPerfil($model2->idperfilRed);
                                                ?> 

                                                <li>
                                                  <div class="row">

                                                      <div class="col-md-9 col-lg-9 col-xs-9">
                                                        <p class="cumple" align="left"><img class=" img-circle img-sm" src="../web/img/perfil/t/<?php echo $c["rfoto"];?>" 
                                                        style="-ms-transform: rotate(0deg);-webkit-transform: rotate(0deg);transform: rotate(0deg);margin-right: 5px;    margin-top: -4px;" alt="Alt Text"><a  style=" color: #628cc0!important;" class="nombreCumple" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$model2["rutColaborador"]; ?>"><?php echo $cumple; ?></p></a>
                                                    </div>

                                                    <div class="col-md-2 col-lg-2 col-xs-2 text-right">
                                                       <i class="fas fa-birthday-cake"></i>
                                                   </div>
                                               </div>
                                               <br>
                                           </li>
                                           <?php   } ?>

<?php } ?>

                                           <p class="prox" ><a style="color: #5a86bd;    font-size: 11px;" href="index.php?r=colaborador/cumpleanios">VER TODOS</a></p>
                                           <?php foreach ($proximos as $p) { 
                                            $prox = $p['nombre'];
                                            $dia = $p['dia'];
                                            $mes = $p['mes'];
                                            ?> 

                                            <li>
                                              <div class="row">

                                                  <div class="col-xs-8">
                                     
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xs-4 text-right">
                                             
                                                       </div>
                                                   </li>
                                                   <?php   } ?>
                                               </ul>
                                           </div>
                                       </div>  
                                   </div>
                               </div>
                               
                                                      <div class="widget right">
                                <div class="widget-header">

                                  <h3 class="widget-caption"><strong>Comunicaciones</strong> </h3>
                              </div>

                              <div class="widget-body bordered-top bordered-sky comunic" style="height: 134px!important;">
                                  <div>
                                    <div class="content">
                                      <ul class="list-unstyled team-members">
                                        <div class="row">
                                        <div class="comu">
                                            <?php foreach ($comunicaciones as $c) {
                                               ?><p  style="
    text-align: initial;
    margin-left: 5%; font-size: 13px;"  align="center">


                                                 <?php
                                                  if($c["rdescripcionPost"]=='0' || $c["rtipoPost"] == 5 || $c["rtipoPost"] == 6 || $c["rtipoPost"] == 3)
                                                    {
                                                     echo 'Comunicaciones ha realizado una nueva publicacion.';
                                                 }else{
                                                    echo  $c["rdescripcionPost"];
                                                } ?>
                                                <a  style="text-transform: capitalize;   color: blue;" href="index.php?r=colaborador/compadre&rutAmigo=101010">&nbsp;&nbsp;<i class="fas fa-external-link-alt"></i>

</a></p>
<hr style="border-top: 1px solid white;"><?php
                                            } ?>
                                            
                                        </div>


                                    </div>
                                </ul>
                            </div>
                        </div>  
                 
                </div>
                    </div>
                    
                       <div class="widget right">
                <?php foreach ($publicidad as $p) {
                    ?>                         
                    <a href="<?php echo $p["rlink"];?> " target="_blank"><img class="imgpublicidad" title="¡Click Aquí!" src="../web/img/publicidad/<?php echo $p["rfoto"]; ?>" ><br>    
                    </a>
                    <?php
                } ?>
            </div>

                <!--/.well -->
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
        <!--/span-->
    </div>
    <!--/row-->

 
</div>





<style>
img.img-circle.img-sm {
    width: 15%;
}
.modal-body {
    background-color: white!important;
}
.modal {
    position: fixed;
    top: 55px;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
</style>













=======
    }

</script>
   

<div class="container-fluid" style="margin-top:150px;">
    <div class="row-fluid">
        <div class="col-md-10 col-xs-12 col-sm-12  animated fadeInLeft">

            <div class="row">
                <div class="col-md-4 hidden-xs">
                    <div class="profile-info-left">
                        <div class="text-center">


                            <?= Html::img('@web/img/perfil/' . $perfil->rfoto, ['alt' => 'Avatar', 'width' => 200, 'class' => 'avatar img-circle perfilll', 'id' => 'colaborador-' . $model->rutColaborador]); ?>
                            <h2><?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?></h2>
                        </div>
                        <div style="text-align: center!important;" class="action-buttons">
                            <div class="row">
                                <div class="col-xs-12">

                                    <?= Html::button('Actualiza tus datos', ['value' => Url::to('index.php?r=colaborador/foto&rutColaborador=' . $model->rutColaborador . ''), 'class' => 'act btn btn-lg btn-raised btn-success actualiza', 'id' => 'modalButton']) ?>
                                    <button  onclick="rotates(<?php echo $model->rutColaborador; ?>);" class="btn btn-lg btn-raised btn-success rota">
                                        Rotar foto
                 
                                    </button>
                                </div>

                            </div>
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
                                               
                                                    <img style="-ms-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                         -webkit-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                         transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);

                                                         " src="../web/img/perfil/t/<?php echo $perfilamigo[0]["rfoto"]; ?>" title="<?php echo $modell3["nombreColaborador"] . " " . $modell3['apellidosColaborador']; ?>" class="img-responsive tip">

                                                </a>

                                            </li>

                                        <?php } ?>

                                    </ul>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="profile-info-right">

                        <div class="tab-content">
                            <style>
                                .fb-status-update-entry textarea {
                                    resize: none;
                                    /* Needs to be !important, since Bootstrap sets this elsewhere. */
                                    box-shadow: none !important;
                                    border: none;
                                }
                                .fb-status-update-entry .media {
                                    border-top: 1px solid lightgrey;
                                    border-bottom: 1px solid lightgrey;
                                    /* Adds whitespace between bottom border and buttons */
                                    margin-bottom: 10px;
                                    /* Adds whitespace between top of media object and top border. */
                                    padding-top: 5px;
                                }
                            </style>
                            <!--- misiones

                    <h2><p class="misiones">Misiones de la Semana</p></h2>
                        <div class="col-md-12 miss">                                 
                            <div class="bs-example">
                                
                                <div class="panel-group" id="accordion">
                                <?php
                                $i=0;
                                 foreach ($mision as $m) {
                                                        ?> 
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <?php echo $m["wiconografia"]; ?>



                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $m["widMision"]; ?>"><?php echo $m["wnombre"]; ?></a>
                                            
                                            </h4>   
                                        </div>
                                        <div id="collapse<?php echo $m["widMision"]; ?>" class=" panel-collapse collapse <?php if($i==0){echo "in"; $i++;}else{} ?>">
                                            <div class="panel-body">
                                                <img style="margin-right:10px" class="imgmision" src="../web/img/mision/<?php echo $m["wfoto"]; ?>" align="left"> 
                                                <br><p class="misiontext"><?php echo $m["wdescripcion"] ?> <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Leer Más</a><br>  </p><p class="misiontextestado" > <i class="fas fa-check-circle"></i> Completada <button class="button-mision btn-lg btn-raised misiones">
                                        Publicar </button></p>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>

                                      <?php
                                        } ?>

                                    </div>
                                </div>          
                            </div>   
                                <br>
-->
<!---
                                        <div class="col-sm-10 col-md-12 tare">   
                                         <h2 tarea><p class="tareas">Mis Tareas</p></h2>
                                        <table class="table table-responsive table-striped carla">
                                            <thead>
                                             <tr>
                                              <th>Actividad</th>
                                               <th>Fecha de Vencimiento</th> 
                                               <th>Estado</th> 
                                               <th> </th>
                                             </tr>
                                             </thead>
                                             <tbody>
                                                 <?php foreach ($tarea as $t) {
                                                    ?>      
                                                    <tr>
                                                        <td><?php echo $t["wnombreTarea"]; ?></td>
                                                        <td><?php echo $t["wfechafin"]; ?></td>
                                                        <td><?php echo $t["westado"]; ?></td>
                                                        <td></td>
                                                    </tr>
                                                    <?php
                                                } ?>
                                             </tbody>
                                            
                                        </table>
                                         
                                          </div>   
                                        <br>
                                    -->
                                    <div class="col-md-12 col-sm-12">    
                            <h2><p class="act">Actividades en la Red</p></h2>
                            <div class="panel panel-default publicador">
                                <div class="panel-body publicador" >

                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => ['colaborador/post']]); ?>

                                    <div class="row">


                                        <input type="hidden" name="rutColaborador" value="<?php echo $rutColaborador; ?>">
                                        <input type="hidden" name="rut2" value="<?php echo $rut2; ?>">
                                        <input type="hidden" name="lugar" value="<?php echo $lugar; ?>">
                                    </div>

                                    <div class="media">
                                        <div class="media-left media-top">

                                        </div>
                                        <div class="media-body">
                                            <div class="form-group">
                                                <!-- rows="2" means "display the textarea as 2 rows high". The user can
                                                     enter more than 2 rows of text. -->
                                                <div class="col-md-2 col-xs-4">


                                                    <img alt="Avatar" style="-ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                         -webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                         transform: rotate(<?php echo $perfil->rrotador; ?>deg);" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>" title="<?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?>" class="media-object avatar">
                                                    <br>
                                                </div>

                                                <div class="col-md-10 col-xs-7">
                                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea onKeyDown="contarCaracteres(this.form.rdescripcionPost, this.form.remLen, 180);" placeholder="Que estas pensando hoy??? " maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="Que estas pensando hoy??? " rows="5" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                    <p>Contador: <font id="contador">180</font></p>
                                                    <br>
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
                                                    'showUpload' => false,
                                                    'browseClass' => 'btn btn-primary',
                                                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                                                    'browseLabel' => 'Selecciona un archivo']
                                            ])->label(false);
                                            ?>

                                        </li>

                                        <li role="presentation" class="active">
                                            <button class="btn btn-primary"  type="submit" data-toggle="collapse" data-target="#demo1" ><span class=" glyphicon glyphicon-pencil">
                                                </span> <strong>Publicar</strong></button>
                                        </li>

                                    </ul>
                                </div>


                                <?php ActiveForm::end(); ?>




                            </div>



                            <!-- activities -->
                            <div class="tab-pane fade in active" id="activities">


                                <div class="conatiner" style="margin:35px auto;">
                                    <div class="row">
                                        <div class="col-md-12 results"></div>
                                    </div>
                                    <div class="text-center" id="loading">
                                        <img src="ajax-loader.gif" id="ani_img"/>
                                    </div>
                                    <button class="btn btn-block btn-primary hidden-lg hidden-md" onclick="myContent2();">Cargar mas!</button>

                                </div>
                                <script>
                                    var mypage = 1;
                                    mycontent(mypage);
                                    $(window).scroll(function () {
                                        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 4) {
                                            mypage++;
                                            mycontent(mypage);
                                        }
                                    })
                                    function mycontent(mypage) {

                                        $('#ani_img').show();
                                        $.get('index.php?r=colaborador/reload&page=' + mypage + '&rutColaborador=<?php echo $rutColaborador; ?>', function (data) {
                                            if (data.trim().length == 0) {
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
                                            setInterval(function () { }, 3000);

                                        })
                                    }


                                    function myContent2() {
                                        mypage++;
                                        mycontent(mypage);
                                    }
                                </script>



                            </div>
                            <!-- end activities -->
                            <!-- followers -->
                            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
                                <div class="modal-dialog">
                                    <button type="button" class="close hidden"  aria-hidden="true">×</button>
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
</div>

<div class="col-md-2 hidden-xs">

                       <div class="profile-info-publicidad ">
                   <div class="text-center">
                            <?php foreach ($publicidad as $p) {
                  ?>   
                                                       
                               <a href="<?php echo $p["rlink"];?> " target="_blank"><img style="margin-right:10px" class="imgpublicidad" src="../web/img/publicidad/<?php echo $p["rfoto"]; ?>" ><br>    
                            </a>
                                                    <?php
                                                } ?>
                                    
                                                           
                          
                            
                        
                        </div>
                        </div>
                        </div>


                  
                </div>
</div>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
