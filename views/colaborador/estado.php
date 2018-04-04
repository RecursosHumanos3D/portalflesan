<<<<<<< HEAD
<style type="text/css">
  .p-text-area {
    border: none !important;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
    resize: vertical;
    background: #fff !important;
}

.box-widget {
    border: none;
    position: relative;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #ffffff;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
.user-block img {
    width: 40px;
    height: 40px;
    float: left;
}
.user-block .username {
    font-size: 16px;
    font-weight: 600;
}
.user-block .description {
    color: #999;
    font-size: 13px;
}
.user-block .username, 
.user-block .description, 
.user-block .comment {
    display: block;
    margin-left: 50px;
}
.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px;
}
.btn-box-tool {
    padding: 5px;
    font-size: 12px;
    background: transparent;
    color: #97a0b3;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.pad {
    padding: 10px;
}
.box .btn-default {
    background-color: #f4f4f4;
    color: #444;
    border-color: #ddd;
}
.box-comments {
    background: #f7f7f7 !important;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}
.box-comments .box-comment:first-of-type {
    padding-top: 0;
}
.box-comments .box-comment {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}
.img-sm, 
.box-comments .box-comment img, 
.user-block.user-block-sm img {
    width: 30px !important;
    height: 30px !important;
}
.img-sm, .img-md, 
.img-lg, .box-comments .box-comment img, 
.user-block.user-block-sm img {
    float: left;
}
.box-comments .comment-text {
    margin-left: 40px;
    color: #555;
}
.box-comments .username {
    color: #444;
    display: block;
    font-weight: 600;
}
.box-comments .text-muted {
    font-weight: 400;
    font-size: 12px;
}
.img-sm+.img-push {
    margin-left: 40px;
}
.box .form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de;
}

.attachment-block {
    border: 1px solid #f4f4f4;
    padding: 5px;
    margin-bottom: 10px;
    background: #f7f7f7;
}
.attachment-block .attachment-img {
    max-width: 100px;
    max-height: 100px;
    height: auto;
    float: left;
}
.attachment-block .attachment-pushed {
    margin-left: 110px;
}
.attachment-block .attachment-heading {
    margin: 0;
}
.attachment-block .attachment-heading .h4, .attachment-block .attachment-heading h4 {
    font-size: 18px;
}
.attachment-block .attachment-text {
    color: #555;
}

.box-form {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.n-border-top{
    border-top: none !important;
}

</style>

<div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?> " style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " alt="User Image">
                        <span class="username"><a id="nombre" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a></span>
                        <span class="description">Fecha: <?php echo $post["rfecha"]; ?></span>
                      </div>
                    </div>
                    <div class="box-body">
                      <p><?php
                                $cadena_resultante = preg_replace("/((http|https|www)[^\s]+)/", '<a target="_blank" href="$1">$0</a>', $post['rdescripcionPost']);
                                echo $cadena_resultante;
                                ?></p>


                                               <?php if($megusta==true){?>
                      
                 <a style="    color: #2fc3e8;"  data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="fa fa-heart"></i></a><?php echo $modelac[0]["cuenta"]; ?>

                      <?php } else{ ?>

            <a id="like-<?php echo $post["ridPost"]; ?>" onclick="like(<?php echo $post["ridPost"]; ?>,<?php
                                        $session = Yii::$app->session;
                                        echo $session['rutColaborador'];
                                        ?>);" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="fa fa-heart"></i> </a><?php echo $modelac[0]["cuenta"]; ?>


                     <?php } ?>


                                       <?php
=======
<?php

use yii\helpers\Html;
?>



 <section id="blog-section" class="col-md-12" >
        <div class="container-fluid cc">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-8 imagen">
                            <aside>
                            <div class="content-title" id="m<?php echo $post["ridPost"]; ?>">
                            <div class="post-description text-left">

                                <h3><p style="margin-top: 24px;" id="estado"><?php
                                $cadena_resultante = preg_replace("/((http|https|www)[^\s]+)/", '<a target="_blank" href="$1">$0</a>', $post['rdescripcionPost']);
                                echo $cadena_resultante;
                                ?></p>
                                </h3>
                                    </div>
                                </div>

                                <div class="content-footer">

                                 <?php if ($posteador2[0]["rutColaborador"] != 1 ) { ?>
                                    <img class="user-small-img" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=" . $posteador[0]["rutColaborador"]; ?>" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>">
                                    <span>
                                   <a id="letra" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a> <i class="fa fa-caret-right" aria-hidden="true" style="color: white"></i> <a id="letra" href="<?php  echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador2[0]["rutColaborador"]; ?>"><?php echo $posteador2[0]['nombreColaborador'] . " " . $posteador2[0]['apellidosColaborador']; ?>
                                
                        </a>
                                      <a href="
                                            <?php 
                                            Yii::$app->session; 

                                            if($posteador[0]["rutColaborador"] == 'rutColaborador'){
                                                echo "index.php?r=colaborador/compadre&rutAmigo=".'rutcolaborador';
                                            }else{
                                                echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"];
                                            }
                                            ?>">
                                              
                                                </a>
                                                 
                         <?php } else { ?>
                                        <img class="user-small-img" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>">
                                        <a id="letra" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a>
                                         <?php } ?>
                                    </span>
                                    <span class="pull-right">

                                        <?php
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                                        $connection = Yii::$app->db;
                                        $jefe = "select count(*) as cuenta from rcomentarios where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
                                        $modela = $dataReader->readAll();
                                        ?>

<<<<<<< HEAD
                                        <a  onclick="reveal(<?php echo $post["ridPost"]; ?>);" data-toggle="tooltip" data-placement="left" title="Comentarios"><i class="fa fa-comments" ></i><span id="comentarioc-<?php echo $post["ridPost"]; ?>"><?php echo $modela[0]["cuenta"]; ?></span></a>
=======
                                        <a  onclick="reveal(<?php echo $post["ridPost"]; ?>);" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> <?php echo $modela[0]["cuenta"]; ?></a>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                                        <?php
                                        $connection = Yii::$app->db;
                                        $jefe = "select rlikes as cuenta from rpost where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
<<<<<<< HEAD
                                        $modelac = $dataReader->readAll();
                                        ?>

           
                    <a onclick="compartir(<?php echo $post["ridPost"]; ?>,<?php echo $rutColaborador; ?>)"> <i class="fas fa-share-square"></i></a>
                    <?php  if ($post["rutColaborador1"] == $rutColaborador) { ?>

                                        <a id="like-<?php echo $post["ridPost"]; ?>" onclick="eliminar(<?php echo $post["ridPost"]; ?>,<?php
                                           $session = Yii::$app->session;
                                           echo $session['rutColaborador'];
                                               ?>);"   title="Eliminar"><i class="fas fa-trash-alt"></i> </a>


                    <?php } ?>  


                   
                    </div>
                    <div id="post-<?php echo $post["ridPost"]; ?>" style="display: none;" class="box-footer box-comments">
                      



                      <?php
                    foreach ($comentarios as $c) {
                        ?>
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="../web/img/perfil/t/<?php echo $c['rfoto']; ?>" style="-ms-transform: rotate(<?php echo $c['rrotador']; ?>deg);-webkit-transform: rotate(<?php echo $c['rrotador']; ?>deg);transform: rotate(<?php echo $c['rrotador']; ?>deg);" alt="User Image">
                        <div class="comment-text">
                          <span class="username">
                          <?php echo $c["nombreColaborador"] . " " . $c["apellidosColaborador"]; ?>
                          <span class="text-muted pull-right"><?php echo $c["fecha"]; ?></span>
                          </span>
                          <?php echo $c["rcontenido"]; ?>
                        </div>
                      </div>
                      <?php } ?>
                      <div id="<?php echo $post["ridPost"]; ?>" class="box-comment">
                      </div>
                    </div>
                    <div class="box-footer">
                      
                        <img class="img-responsive img-circle img-sm" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?> " style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " alt="Alt Text">
                        <div class="img-push">
                          <input id="comentario-<?php echo $post["ridPost"]; ?>" name="comentario-<?php echo $post["ridPost"]; ?>" type="text" onkeydown = "if (event.keyCode == 13) {
=======
                                        $modela = $dataReader->readAll();
                                        ?>

                                        <a id="like-<?php echo $post["ridPost"]; ?>" onclick="like(<?php echo $post["ridPost"]; ?>,<?php
                                        $session = Yii::$app->session;
                                        echo $session['rutColaborador'];
                                        ?>);" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?php echo $modela[0]["cuenta"]; ?></a>

    <?php if ($post["rutColaborador1"] == $rutColaborador) { ?>

                                            <a id="like-<?php echo $post["ridPost"]; ?>" onclick="rotate(<?php echo $post["ridPost"]; ?>,<?php
                                               $session = Yii::$app->session;
                                               echo $session['rutColaborador'];
                                               ?>);"  data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-undo"></i> </a>

                                            <a id="like-<?php echo $post["ridPost"]; ?>" onclick="eliminar(<?php echo $post["ridPost"]; ?>,<?php
                                           $session = Yii::$app->session;
                                           echo $session['rutColaborador'];
                                               ?>);"  data-toggle="tooltip" data-placement="right" title="Loved"><i class="fas fa-trash-alt"></i> </a>


    <?php } ?>


                                    </span>
                                 

                                    <div class="user-ditels">
                                        <div class="user-img"> <a href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=" . $posteador[0]["rutColaborador"]; ?>" class="pull-left"><img src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>" alt="Avatar" class="fotoavatar" style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " class="media-object avatar fotoavatar <?php echo $post["rutColaborador1"]; ?>"> </a>     
                                        </div>
                                        <span class="user-full-ditels">
                                             <p href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=" . $posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a> </p>
                                            <p> Fecha: <?php echo $post["rfecha"]; ?></p>
                                        </span>

                                    </div>
                                    

                                </div>
                                </div>
                                </div>

                            </aside>
                        </div>
                    </div>

                </div>

            </div>
        </div>

<div class="container-fluid coment">
    <div style="display:none;" id="post-<?php echo $post["ridPost"]; ?>" class="post-footer">
        <div class="input-group">
            <textarea maxlength="180" id="comentario-<?php echo $post["ridPost"]; ?>" name="comentario-<?php echo $post["ridPost"]; ?>" class="form-control" placeholder="Agrega un comentario" type="text" onkeydown = "if (event.keyCode == 13) {
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                                enviar(<?php echo $post["ridPost"]; ?>,<?php
                      $session = Yii::$app->session;
                      echo $session['rutColaborador'];
    ?>);
<<<<<<< HEAD
                            }" class="form-control input-sm" placeholder="Comenta....">
                        </div>
                      
                    </div>

                  </div>
=======
                            }" onKeyUp="contarCaracteress(this, 180,<?php echo $post["ridPost"]; ?>);"></textarea>
            <span class="input-group-addon">
                <button  onclick="enviar(<?php echo $post["ridPost"]; ?>,<?php
                         $session = Yii::$app->session;
                         echo $session['rutColaborador'];
    ?>);"><i class="fa fa-edit"></i></button>
            </span>

        </div>
        <br>
        <p>Contador: <font id="contadorc-comentario-<?php echo $post["ridPost"]; ?>" >180</font></p>
        <ul class="comments-list" style="  list-style-type: none;">
    <?php
    foreach ($comentarios as $c) {
        ?>
                 <li  class="comment">
                     <a class="pull-left" href="#">
                     <div class="user-img img-circle"><p><img src="../web/img/perfil/t/<?php echo $c['rfoto']; ?>" alt="avatar" class="fotocomentario" style="-ms-transform: rotate(<?php echo $c['rrotador']; ?>deg);-webkit-transform: rotate(<?php echo $c['rrotador']; ?>deg);transform: rotate(<?php echo $c['rrotador']; ?>deg);"
                      <?php echo $post["rutColaborador1"]; ?>
                     ></p>
                     </div>
                     </a>
                       <div class="comment-body">
                        <div class="comment-heading">
                            <p><h4 class="nombre"><?php echo $c["nombreColaborador"] . " " . $c["apellidosColaborador"]; ?></h4>
                            <h5 class="fecha"><?php echo $c["fecha"]; ?></h5></p>
                        </div>
                        
                        <p style="text-transform: initial;" id="elComentario"><?php echo $c["rcontenido"]; ?></p>
                        <br>
                    </div>
                    
                    </li>

    <?php } ?>
            <li id="<?php echo $post["ridPost"]; ?>" class="comment"></li>
        </ul>

    </div>
    </section>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
