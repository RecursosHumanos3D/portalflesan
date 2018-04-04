<?php use yii\helpers\Url;
?>
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

a:hover, a:focus {
    color: #000;
    text-decoration: underline;
}
a.megusta.dd:hover, a.megusta.dd:focus {
        color: #e8000a!important;
}


</style>

<script type="text/javascript">
    $(function() {  
$('a').click(function(){
    $(this).css('color', 'black');

  });
});
</script>

<div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                       <?php if ($posteador2[0]["rutColaborador"] != 1 ) { ?>
                         <img class="img-circle" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?> " style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " alt="User Image">
                        <p><span class="username"><a id="nombre" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a> <i class="fas fa-caret-right" aria-hidden="true" style="color: #777777"></i> <a id="nombre" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador2[0]["rutColaborador"]; ?>"><?php echo $posteador2[0]['nombreColaborador'] . " " . $posteador2[0]['apellidosColaborador']; ?></a></span>

                        <span class="username"></span></p>
                        

                        <span class="description">Fecha: <?php echo $post["rfecha"]; ?></span>


                        
                        <?php } else { ?>
                        <img class="img-circle" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?> " style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " alt="User Image">
                        <span class="username"><a id="nombre" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a></span>
                        <span class="description">Fecha: <?php echo $post["rfecha"]; ?></span>
                           <?php } ?>
                      </div>
                    </div>
                    <div class="box-body">
                      <p><?php
                                $cadena_resultante = preg_replace("/((http|https|www)[^\s]+)/", '<a target="_blank" href="$1">$0</a>', $post['rdescripcionPost']);
                                echo $cadena_resultante;
                                ?></p>

                                          <?php
                                        $connection = Yii::$app->db;
                                        $jefe = "select rlikes as cuenta from rpost where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
                                        $modelac = $dataReader->readAll();
                                        ?>

                      <?php if($megusta==true){?>
                      
                 <a class="megusta dd" style="color: #e8000a;"  data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="fa fa-heart"></i><?php echo $modelac[0]["cuenta"]; ?></a>

                      <?php } else{ ?>

                <a class="megusta dd" id="like-<?php echo $post["ridPost"]; ?>" onclick="like(<?php echo $post["ridPost"]; ?>,<?php
                                        $session = Yii::$app->session;
                                        echo $session['rutColaborador'];
                                        ?>);" data-toggle="tooltip" data-placement="right" title="Me gusta"><i class="fa fa-heart"></i> <?php echo $modelac[0]["cuenta"]; ?></a>


                     <?php } ?>
                                       <?php
                                        $connection = Yii::$app->db;
                                        $jefe = "select count(*) as cuenta from rcomentarios where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
                                        $modela = $dataReader->readAll();
                                        ?>

                                        <a class="megusta"  onclick="reveal(<?php echo $post["ridPost"]; ?>);" data-toggle="tooltip" data-placement="left" title="Comentarios"><i class="fa fa-comments" ></i><span id="comentarioc-<?php echo $post["ridPost"]; ?>"><?php echo $modela[0]["cuenta"]; ?></span></a>

                                      
                    <a class="megusta" onclick="compartir(<?php echo $post["ridPost"]; ?>,<?php echo $rutColaborador; ?>)" title="Compartir"> <i class="fas fa-share-square"></i></a>
                    <?php  if ($post["rutColaborador1"] == $rutColaborador) { ?>

                                        <a class="megusta" id="like-<?php echo $post["ridPost"]; ?>" onclick="eliminar(<?php echo $post["ridPost"]; ?>,<?php
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
                                enviar(<?php echo $post["ridPost"]; ?>,<?php
                      $session = Yii::$app->session;
                      echo $session['rutColaborador'];
    ?>);
                            }" class="form-control input-sm" placeholder="Comenta....">
                        </div>
                      
                    </div>

                  </div>