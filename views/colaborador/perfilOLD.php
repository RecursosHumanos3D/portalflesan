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

$session = Yii::$app->session;

if ($session->isActive) {
    $rutColaborador = $session['rut'];
    $nombre = $session['nombreColaborador'];
    $apellidos = $session['apellidosColaborador'];
    $foto = $session['foto'];
}
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
            $("#like-" + idPost).css("color" , "blue");
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
        { // Si es muy largo, lo cortamos!
            campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
        } else
        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
        var limite = limite_maximo - campo.value.length;
        $('#contador').text("");
        $('#contador').append(limite);
        console.log(limite);
    }
}
function contarCaracteress(campo, limite_maximo, id) {
    if (campo.value.length > limite_maximo)
        { // Si es muy largo, lo cortamos!
            campo.value = campo.value.substring(0, limite_maximo); // Substring toma del principio, osea 0, hasta el limite máximo de caracteres.  
        } else
        { // Si no es más largo del máximo, actualizamos el contador de 'caracteres quedan'
        var limite = limite_maximo - campo.value.length;
        $('#contadorc-comentario-' + id).text("");
        $('#contadorc-comentario-' + id).append(limite);

    }
}


$("#archivo1").click(function () {
    $("#archivo1").addClass('btn-success');
});
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

        if (dato == true && valid == 2) {


            $.get("index.php?r=rpost/comentario&rutPersona=" + rut + "&idPost=" + post + "&comentario=" + comentario + "",
                function (dato) {
                    var data = JSON.parse(dato);
                    $('#' + post).html('<img class="img-circle img-sm"  style="-ms-transform: rotate(' + data.rotate + 'deg);-webkit-transform: rotate(' + data.rotate + 'deg);transform: rotate(' + data.rotate + 'deg);" alt="User Image"   src="../web/img/perfil/t/' + data.foto + '"><div class="comment-text"><span class="username">' + data.nombre + ' ' + data.apellidos + '<span class="text-muted pull-right">Ahora</span></span>' + comentario + '</div>');
                    $("#comentario-" + post + "").val('');

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
            // Handle error here
        });


    }

    function rotate(idPost) {

        $.get("index.php?r=rpost/rotate&idPost=" + idPost + "",
            function (dato) {
                    // alert(dato);
                    //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
                    //$('#busniessmenu').css('background-color', '#323232');
                    // $("#rotate-" + idPost).rotate(dato);
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
                    // alert(dato);
                    //$("#rotate-" + idPost).css('transform', "deg(" + dato + ")");
                    //$('#busniessmenu').css('background-color', '#323232');
                    // $("#rotate-" + idPost).rotate(dato);
                    $('#colaborador-' + rutColaborador).css('transform', 'rotate(' + dato + 'deg)');


                }).fail(function () {

                 swal("No existe conexion a internet");
            // Handle error here
        });


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
            // Handle error here
        });


            }

        </script>

        <?php

        echo $this->render('sidel',[
            'model' => $model,
            'rutColaborador' => $rutColaborador,
            ]);

            ?>   


            <div id="main" class="container-fluid" style="margin-top:40px;">
                <div class="row-fluid">
                    <div class="col-md-10 col-xs-12 col-sm-12  animated zoomInDown">

                        <div class="row">
                            <div class="col-md-3 hidden-xs">
                               <?php

                               echo $this->render('sider',[
                                'model' => $model,
                                'rutColaborador' => $rutColaborador,
                                ]);

                                ?>   
                            </div>
                            <div class="col-md-8 col-lg-8 col-xs-12 animated zoomInDown">


                                <!-- Use any element to open the sidenav -->

                                <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

                                <div class="profile-info-right">
                                    <div class="tab-content">
                                        <style>

                                        </style>
                                        <div class="col-md-12 col-sm-12">    
                                            <div class="panel panel-default publicador">
                                             <div class="panel-body publicador" >
                                                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'name' => 'cuca', 'onSubmit' => 'return checkform()'], 'action' => ['colaborador/post']]); ?>

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
                                                    <img alt="Avatar" style="width: 50%;-ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                    -webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                    transform: rotate(<?php echo $perfil->rrotador; ?>deg);" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>" title="<?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?>" class="img-circle">
                                                    <br>
                                                </div>
                                                <div class="col-md-10 col-xs-7">
                                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea  placeholder="¿Qué estás pensando hoy?" maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="Qué estás pensando hoy?" rows="1" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                    
                                                    <br>
                                                </div>       
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-pills publicador">
                                        <li role="presentation" class="active">
                                            <?= $form->errorSummary($model); ?>
                                            <?=
                                            $form->field($model3, 'file')->widget(FileInput::classname(), [
                                                'options'=>[
                                                'multiple'=>false
                                                ],
                                                'pluginOptions' => [
                                                'showCaption' => false,
                                                'showRemove' => false,
                                                'ShowLabel' => false,
                                                'showUpload' => false,
                                                'browseClass' => 'btn btn-primary btn-block archivo',
                                                'browseIcon' => '<i class="fas fa-paperclip"></i> ',
                                                'mainClass' => 'input-group-lg',
                                                'browseLabel' => ''],

                                                ])->label(false);
                                                ?>
                                                  
                                            </li>
                                          
                                                <li role="presentation" class="active">
                                                <button class="btn btn-primary"  type="submit"><span class="glyphicon glyphicon-pencil">
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
                                                    $('#loading').append('<button style="margin-right:35%;" class="btn btn-primary">No existen más post disponibles<br></button>');
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
                    <div class="col-md-2 hidden-xs animated zoomInDown">
                        <div class="profile-info-derecho">
                            <div class="text-center">
                                <style type="text/css">
                                    .widget {
                                        padding: 0;
                                        -webkit-box-shadow: none;
                                        -moz-box-shadow: none;
                                        box-shadow: none;
                                        margin: 0 0 30px 0
                                    }

                                    .widget.collapsed .widget-body {
                                        display: none
                                    }

                                    .widget.collapsed.radius-bordered .widget-header {
                                        -webkit-border-radius: 3px 3px 3px 3px;
                                        -webkit-background-clip: padding-box;
                                        -moz-border-radius: 3px 3px 3px 3px;
                                        -moz-background-clip: padding;
                                        border-radius: 3px 3px 3px 3px;
                                        background-clip: padding-box
                                    }

                                    .widget.no-header .widget-header {
                                        display: none
                                    }

                                    .widget.no-header.radius-bordered .widget-body {
                                        -webkit-border-radius: 3px 3px 3px 3px;
                                        -webkit-background-clip: padding-box;
                                        -moz-border-radius: 3px 3px 3px 3px;
                                        -moz-background-clip: padding;
                                        border-radius: 3px 3px 3px 3px;
                                        background-clip: padding-box
                                    }

                                    .widget.maximized {
                                        width: 100%;
                                        height: 100%;
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        z-index: 99999;
                                        margin: 0;
                                        overflow: auto
                                    }

                                    .widget.maximized .widget-body {
                                        padding: 12px 0
                                    }

                                    .widget.transparent .widget-header,
                                    .widget.transparent .widget-body {
                                        background-color: rgba(0, 0, 0, 0);
                                        -webkit-box-shadow: none;
                                        -moz-box-shadow: none;
                                        box-shadow: none
                                    }

                                    .widget.transparent .widget-header {
                                        border-bottom: 1px solid #ccc
                                    }

                                    .widget.bordered-top {
                                        border-top: 3px solid #fff
                                    }

                                    .widget.bordered-bottom {
                                        border-bottom: 3px solid #fff
                                    }

                                    .widget.bordered-left {
                                        border-left: 3px solid #fff
                                    }

                                    .widget.bordered-right {
                                        border-right: 3px solid #fff
                                    }

                                    .widget.radius-bordered .widget-header {
                                        -webkit-border-radius: 3px 3px 0 0;
                                        -webkit-background-clip: padding-box;
                                        -moz-border-radius: 3px 3px 0 0;
                                        -moz-background-clip: padding;
                                        border-radius: 3px 3px 0 0;
                                        background-clip: padding-box
                                    }

                                    .widget.radius-bordered .widget-body {
                                        -webkit-border-radius: 0 0 3px 3px;
                                        -webkit-background-clip: padding-box;
                                        -moz-border-radius: 0 0 3px 3px;
                                        -moz-background-clip: padding;
                                        border-radius: 0 0 3px 3px;
                                        background-clip: padding-box
                                    }

                                    .widget.flat .widget-body,
                                    .widget.flat .widget-header {
                                        -webkit-box-shadow: none;
                                        -moz-box-shadow: none;
                                        box-shadow: none
                                    }

                                    .widget.lightshadow .widget-body,
                                    .widget.lightshadow .widget-header {
                                        -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .2);
                                        -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .2);
                                        box-shadow: 0 1px 4px rgba(0, 0, 0, .2)
                                    }

                                    .widget:hover .compact {
                                        -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                                        -moz-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                                        box-shadow: 0 0 20px rgba(0, 0, 0, .2)
                                    }

                                    .widget:hover .compact i {
                                        color: #2dc3e8
                                    }

                                    .widget-header {
                                        position: relative;
                                        min-height: 35px;
                                        background: #fff;
                                        color: #555;
                                        padding-left: 12px;
                                        text-align: right
                                    }

                                    .widget-header .widget-icon {
                                        display: block;
                                        width: 30px;
                                        height: 32px;
                                        position: relative;
                                        float: left;
                                        font-size: 111%;
                                        line-height: 32px;
                                        text-align: center;
                                        margin-left: -10px
                                    }

                                    .widget-header>.widget-caption {
                                        line-height: 34px;
                                        padding: 0;
                                        margin: 0;
                                        float: left;
                                        text-align: left;
                                        font-weight: 400 !important;
                                        font-size: 15px
                                    }

                                    .widget-header.lined {
                                        border: 0;
                                        -webkit-box-shadow: none !important;
                                        -moz-box-shadow: none !important;
                                        box-shadow: none !important;
                                        padding-left: 2%
                                    }

                                    .widget-header.lined:before {
                                        content: "";
                                        position: absolute;
                                        display: block;
                                        width: 96%;
                                        bottom: 0;
                                        top: 35px;
                                        height: 1px;
                                        left: 2%;
                                        z-index: 1;
                                        border-bottom: 1px solid #e5e5e5
                                    }

                                    .widget-header.lined .widget-buttons {
                                        padding-right: 2%
                                    }

                                    .widget-header.lined+.widget-body {
                                        padding-left: 2%;
                                        padding-right: 2%
                                    }

                                    .widget-header.separated {
                                        margin-bottom: 5px
                                    }

                                    .widget-header[class*="bg-"] {
                                        border: 0
                                    }

                                    .widget-header[class*="bg-"] .widget-caption,
                                    .widget-header[class*="bg-"] i {
                                        color: #fff
                                    }

                                    .widget-header.bordered-left {
                                        border-left: 3px solid #fff
                                    }

                                    .widget-header.bordered-right {
                                        border-right: 3px solid #fff
                                    }

                                    .widget-header.bordered-top {
                                        border-top: 3px solid #fff
                                    }

                                    .widget-header.bordered-bottom {
                                        border-bottom: 3px solid #fff
                                    }

                                    .widget-header.header-large {
                                        min-height: 49px;
                                        padding-left: 18px
                                    }

                                    .widget-header.header-large h5 {
                                        line-height: 48px;
                                        font-size: 16px
                                    }

                                    .widget-header.header-large>.widget-buttons {
                                        line-height: 48px;
                                        height: 48px
                                    }

                                    .widget-header.header-large>.widget-buttons a {
                                        min-width: 26px
                                    }

                                    .widget-header.header-large>.widget-buttons a i {
                                        font-size: 20px
                                    }

                                    .widget-header.header-small {
                                        min-height: 29px;
                                        padding-left: 10px
                                    }

                                    .widget-header.header-small h5 {
                                        line-height: 28px;
                                        font-size: 12px
                                    }

                                    .widget-header.header-small>.widget-buttons {
                                        line-height: 29px;
                                        height: 29px
                                    }

                                    .widget-header.header-small>.widget-buttons a {
                                        min-width: 16px;
                                        height: 16px
                                    }

                                    .widget-header.header-small>.widget-buttons a i {
                                        font-size: 14px
                                    }

                                    .widget-buttons {
                                        display: inline-block;
                                        padding: 0 5px;
                                        line-height: 34px;
                                        position: relative;
                                        text-align: left;
                                        height: 36px
                                    }

                                    .widget-buttons.buttons-bordered {
                                        border-left: 1px solid #e5e5e5
                                    }

                                    .widget-buttons.compact {
                                        margin-top: 4px;
                                        background-color: #f5f5f5;
                                        line-height: 27px;
                                        -webkit-transition: background-color .218s ease;
                                        -moz-transition: background-color .218s ease;
                                        -o-transition: background-color .218s ease;
                                        transition: background-color .218s ease;
                                        -webkit-transition: -webkit-box-shadow .218s ease;
                                        -moz-transition: -moz-box-shadow .218s ease;
                                        -o-transition: box-shadow .218s ease;
                                        transition: box-shadow .218s ease;
                                        -webkit-transition: color .318s ease;
                                        -moz-transition: color .318s ease;
                                        -o-transition: color .318s ease;
                                        transition: color .318s ease;
                                        height: 27px
                                    }

                                    .widget-buttons.compact:hover {
                                        background-color: #2dc3e8;
                                        -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                                        -moz-box-shadow: 0 0 20px rgba(0, 0, 0, .2);
                                        box-shadow: 0 0 20px rgba(0, 0, 0, .2)
                                    }

                                    .widget-buttons.compact:hover i {
                                        color: #fff
                                    }

                                    .widget-buttons.compact:before {
                                        display: block;
                                        content: "";
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        right: -4px;
                                        width: 4px;
                                        max-width: 4px;
                                        overflow: hidden;
                                        background-color: #2dc3e8
                                    }

                                    .widget-buttons.compact a {
                                        min-width: 14px;
                                        line-height: 14px
                                    }

                                    .widget-buttons.compact i {
                                        color: #ccc;
                                        font-size: 14px
                                    }

                                    .widget-buttons.no-padding {
                                        padding: 0
                                    }

                                    .widget-buttons.padding-5 {
                                        padding: 0 5px
                                    }

                                    .widget-buttons.no-border:before {
                                        display: none
                                    }

                                    .widget-buttons label {
                                        display: inline-block;
                                        vertical-align: middle;
                                        margin-bottom: 0;
                                        line-height: 6px
                                    }

                                    .widget-buttons>a {
                                        font-size: 14px;
                                        margin: 0 1px;
                                        display: inline-block;
                                        padding: 0;
                                        line-height: 24px;
                                        min-width: 20px;
                                        text-align: center
                                    }

                                    .widget-buttons>a:hover {
                                        text-decoration: none
                                    }

                                    .widget-buttons>a i {
                                        vertical-align: middle
                                    }

                                    .widget-buttons>[data-toggle]>.fa {
                                        margin-right: 0
                                    }

                                    .widget-buttons>[data-toggle]:hover {
                                        zoom: 1;
                                        filter: alpha(opacity=50);
                                        -webkit-opacity: .5;
                                        -moz-opacity: .5;
                                        opacity: .5
                                    }

                                    .widget-buttons>[data-toggle]:focus {
                                        text-decoration: none
                                    }

                                    .widget-buttons>[data-toggle="dispose"] {
                                        color: #777;
                                        font-size: 14px
                                    }

                                    .widget-buttons>[data-toggle="maximize"] {
                                        color: #777;
                                        font-size: 14px
                                    }

                                    .widget-buttons>[data-toggle="collapse"] {
                                        color: #777;
                                        font-size: 14px
                                    }

                                    .widget-buttons>[data-toggle="refresh"] {
                                        color: #777;
                                        font-size: 14px
                                    }

                                    .widget-buttons>[data-toggle="config"] {
                                        color: #777;
                                        font-size: 14px
                                    }

                                    .widget-buttons .progress {
                                        vertical-align: middle;
                                        display: inline-block;
                                        margin: 0;
                                        min-width: 100px;
                                        margin-top: -3px
                                    }

                                    .widget-buttons .btn-group {
                                        margin-top: -2px
                                    }

                                    .widget-buttons .btn-group .dropdown-menu {
                                        right: 0;
                                        left: auto
                                    }

                                    .widget-buttons .badge {
                                        margin-top: -2px
                                    }

                                    .widget-buttons .label {
                                        padding: 5px 6px 5px 6px
                                    }

                                    .widget-buttons .pagination,
                                    .widget-buttons .pager {
                                        float: right;
                                        margin: 5px 2px 1px
                                    }

                                    .widget-buttons .btn {
                                        margin-top: -2px
                                    }

                                    .widget-body {
                                        background-color: #fbfbfb;
                                        padding: 12px
                                    }

                                    .widget-body.bordered-left {
                                        border-left: 3px solid #fff
                                    }

                                    .widget-body.bordered-right {
                                        border-right: 3px solid #fff
                                    }

                                    .widget-body.bordered-bottom {
                                        border-bottom: 3px solid #fff
                                    }

                                    .widget-body.bordered-top {
                                        border-top: 3px solid #fff
                                    }

                                    .widget-body[class*="bg-"] {
                                        color: #fff
                                    }

                                    .widget-body.no-padding {
                                        padding: 0
                                    }

                                    .widget-body.no-padding .accordion {
                                        border: 0
                                    }

                                    .widget-body.no-padding .dataTables_filter label {
                                        margin: 10px
                                    }

                                    .widget-body.no-padding .dataTables_length {
                                        top: 10px;
                                        right: 10px
                                    }

                                    .widget-body.no-padding .DTTT.btn-group {
                                        right: 80px;
                                        top: 10px
                                    }

                                    .widget-body .accordion.panel-group {
                                        border-top-width: 1px !important
                                    }

                                    .widget-body>table {
                                        margin-bottom: 0
                                    }

                                    .widget-body hr.wide {
                                        margin-left: -12px;
                                        margin-right: -12px
                                    }
                                    .bordered-pink {
                                        border-color: #e75b8d !important;
                                    }
                                    .bordered-palegreen {
                                        border-color: #a0d468 !important;
                                    }
                                    .bordered-darkorange {
                                        border-color: #ed4e2a !important;
                                    }
                                    .bordered-sky {
                                        border-color: #e4e4e4 !important;
                                        border-width: 1px!important;
                                    }
                                    .bordered-yellow {
                                        border-color: #ffce55 !important;
                                    }
                                    .bordered-success {
                                        border-color: #53a93f !important;
                                    }
                                    .bordered-info {
                                        border-color: #57b5e3 !important;
                                    }
                                    .bordered-red {
                                        border-color: #df5138 !important;
                                    }
                                    .darkorange {
                                        color: #ed4e2a !important;
                                    }
                                    .bordered-blue {
                                        border-color: #5db2ff !important;
                                    }
                                    .bg-blue {
                                        background-color: #5db2ff !important;
                                    }
                                    .bordered-gold {
                                        border-color: #f9b256 !important;
                                    }
                                    h1.row-title, h2.row-title, h3.row-title, h4.row-title, h5.row-title, h6.row-title {
                                        line-height: 17px;
                                        margin: 10px 0;
                                        padding: 9px 10px 9px 8px;
                                        display: inline-block;
                                        color: #646464;
                                        font-weight: 400;
                                        background-color: #fff;
                                        position: relative;
                                        -webkit-border-radius: 0 2px 2px 0;
                                        -webkit-background-clip: padding-box;
                                        -moz-border-radius: 0 2px 2px 0;
                                        -moz-background-clip: padding;
                                        border-radius: 0 2px 2px 0;
                                        background-clip: padding-box;
                                        -webkit-box-shadow: 0 0 3px rgba(0,0,0,.3);
                                        -moz-box-shadow: 0 0 3px rgba(0,0,0,.3);
                                        box-shadow: 0 0 3px rgba(0,0,0,.3);
                                    }
                                    a.com {
                                        font-size: 10px;
                                        text-transform: capitalize;
                                        color: blue;
                                        font-weight: bold;

                                    }
                                    p.cumple {
                                        text-transform: capitalize;
                                        font-weight: bold;

                                    }
                                    p.proximos {
                                        text-transform: capitalize;
                                    }
                                    .widget-body.bordered-top.bordered-sky {
                                        overflow-y: scroll;
                                        height: 119px;
                                        overflow-x: hidden;
                                    }
                                    p.prox {
                                        font-size: 12px;
                                        font-weight: bold;
                                        margin-top: 12%;
                                    }
                                    .widget.right {
    width: 118%!important;
    margin-left: -10%;
}
p.nohay {
    text-transform: initial;
}
                                </style>
                                 <div class="col-md-12 col-sm-12 col-lg-12">
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
                                                ?> 

                                                <li>
                                                  <div class="row">

                                                      <div class="col-md-9 col-lg-9 col-xs-9">
                                                        <p class="cumple" align="left"><?php echo $cumple; ?></p>
                                                    </div>

                                                    <div class="col-md-2 col-lg-2 col-xs-2 text-right">
                                                       <i class="fas fa-birthday-cake"></i>
                                                   </div>
                                               </div>
                                           </li>
                                           <?php   } ?>

<?php } ?>

                                           <p class="prox" align="center">Próximos en la semana:</p>
                                           <?php foreach ($proximos as $p) { 
                                            $prox = $p['nombre'];
                                            $dia = $p['dia'];
                                            $mes = $p['mes'];
                                            ?> 

                                            <li>
                                              <div class="row">

                                                  <div class="col-xs-8">
                                                    <p class="proximos" align="left"><?php echo $prox; ?>: </p>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xs-4 text-right">
                                                       <p class="proximos"><?php echo $dia; ?>/<?php echo $mes; ?></p>
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

                                  <h3 class="widget-caption"><strong>Comunicaciones</strong> <a href="index.php?r=colaborador/compadre&rutAmigo=101010" style="text-transform: capitalize;   color: blue;">Ver</a></h3>
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
<hr><?php
                                            } ?>
                                            
                                        </div>


                                    </div>
                                </ul>
                            </div>
                        </div>  
                 <br>
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
        </div>
</div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>