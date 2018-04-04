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
  ?>
<style type="text/css">
  .title {
    font-size: 12px!important;
}
body {
    min-height: 100%!important;
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

        <div class="container-fluid">
          <img src="../web/img/biblioteca/miniatura/portada.png">
        </div>
        <br>
        <div class="container-fluid">
         <h4>Busqueda:</h4>
         <div class="col-md-8 col-xs-12">
          <input id="nombreColaborador" placeholder="Nombre del contenido:" class="form-control" onkeyup='idCombo = this.id;$.post("index.php?r=buscar/encuentrab&nombreContenido="+$(this).val(), function(data){carga(idCombo,data,1);});' type="text">

        </div>

        <div id="biblioteca">

<br>
<br>
<br>
<br>

          <table class="table table-responsive table-striped">

           <div  id="cuerpo">
             <?php foreach($contenidos as $contenido) {
              ?> 
              <div class="col-md-3"> 
                
                <div class="social-share-wrap">
                  <a href="/web/index.php?r=colaborador/contenidos&bibIdContenido=<?php echo $contenido["bibIdContenido"];  ?>">
                  <div class="cover">
                    <img class="image" src="../web/img/biblioteca/miniatura/<?php  echo $contenido["bibFoto"]; ?>">
                  </div>
                  <div class="content">
                    <div class="title"><b><?php echo $contenido["bibNombreContenido"]; ?></b></div>
                    <div style="float: left;" class="price"><?php echo $contenido["bibVisita"]; ?> visitas</div><div style="float: right;" class="price"><?php echo $contenido["bibFecha"]; ?></div>
                  </div>
                </a>
                </div>
             
              </div>
              <?php
            } ?>
          </div>

        </table>

      </div>  
    </div>
  </div>
</div>
</div>




</div>
<!-- end activities -->
<!-- followers -->


</div>

<?php

echo $this->render('sidel',[
    'model' => $model,
    'rutColaborador' => $rutColaborador,
]);

?>  
<script type="text/javascript">
   function carga(id, data, num)
            { 

 

              document.getElementById("cuerpo").innerHTML = data;


             console.log(data);

               

            }

</script>
<style class="cp-pen-styles">
.cover {
    height: 100%!important;
}
*,:after,:before{box-sizing:border-box}
.pull-left{float:left}
.pull-right{float:right}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

.toggle{
  display:none;
}
.social-share-wrap{
  overflow:hidden;
  min-height:270px;
  position:relative;
}
.social-share-wrap .cover{
  width:100%;
height: 110px;
  opacity:1;
  -webkit-transform:translateY(0);
          transform:translateY(0);
  -webkit-transition:all .6s ease-in-out .4s;
  transition:all .6s ease-in-out .4s;
}
.social-share-wrap .cover .image{
  width:100%;
  opacity:.8;
}
.social-share-wrap .content{
  padding:15px;
  position:relative;
}
.social-share-wrap .content .title,
.social-share-wrap .content .text,
.social-share-wrap .content .price{
  opacity:1;
  -webkit-transform:translateY(0);
          transform:translateY(0);
  -webkit-transition:all .6s ease-in-out .4s;
  transition:all .6s ease-in-out .4s;
}
.social-share-wrap .content .label{
  top:-15px;
  right:15px;
  width:40px;
  height:40px;
  color:#eee;
  cursor:pointer;
  font-size:18px;
  line-height:40px;
  text-align:center;
  border-radius:50%;
  position:absolute;
  font-weight:normal;
  background:#34a3be;
  -webkit-transform:scale(1);
          transform:scale(1);
  -webkit-transition:all .3s ease-in-out .6s;
  transition:all .3s ease-in-out .6s;
}
.social-share-wrap .content .title{
  margin-bottom:15px;
  text-transform:uppercase;
  -webkit-transition-duration:.4s;
          transition-duration:.4s;
}
.social-share-wrap .content .text{
  display:block;
  line-height:24px;
  -webkit-transition-duration:.6s;
          transition-duration:.6s;
}
.social-share-wrap .content .price{
  font-size:12px;
  font-weight:500;
  line-height:36px;
  -webkit-transition-duration:.8s;
          transition-duration:.8s;
}
.social-share-wrap .content .buy{
  right:15px;
  bottom:30px;
  padding:8px;
  color:inherit;
  font-weight:400;
  font-size:18px;
  position:absolute;
  text-decoration:none;
  text-transform:uppercase;
  -webkit-transition:all .2s ease-in-out 0s;
  transition:all .2s ease-in-out 0s;
}
.social-share-wrap .content .buy:hover{
  background:#ddd;
}

.social-share-wrap .social-share-overlay{
  top:0;
  left:0;
  right:0;
  bottom:0;
  padding:15px;
  position:absolute;
  -webkit-transform:scale(0);
          transform:scale(0);
  -webkit-transition:all .3s ease-in-out 0s;
  transition:all .3s ease-in-out 0s;
}
.social-share-wrap .social-share-overlay:before{
  top:50%;
  left:50%;
  content:'';
  width:30em;
  height:30em;
  margin-top:-15em;
  border-radius:50%;
  margin-left:-15em;
  position:absolute;
  background:#77bef7;
  -webkit-transform:inherit;
          transform:inherit;
  -webkit-transition:inherit;
  transition:inherit;
}
.social-share-wrap .social-share-overlay .close{
  top:0;
  right:0;
  color:#eee;
  width:40px;
  height:40px;
  cursor:pointer;
  font-size:28px;
  font-weight:400;
  line-height:40px;
  text-align:center;
  position:absolute;
}
.social-share-wrap .social-share-overlay .social-share-links{
  position:relative;
}
.social-share-wrap .social-share-overlay .social-share-links a{
  opacity:0;
  color:#eee;
  margin:auto;
  max-width:75%;
  display:block;
  font-size:18px;
  margin-top:30px;
  line-height:24px;
  margin-bottom:30px;
  padding:10px 15px;
  border:2px solid;
  border-radius:25px;
  text-decoration:none;
  -webkit-transition:all .4s ease-in-out 0s;
  transition:all .4s ease-in-out 0s;
  -webkit-transition-delay:.5s;
          transition-delay:.5s;
}
.social-share-wrap .social-share-overlay .social-share-links a:nth-child(1){
  -webkit-transform:translateY(2em);
          transform:translateY(2em);
  -webkit-transition-duration:.4s;
          transition-duration:.4s;
}
.social-share-wrap .social-share-overlay .social-share-links a:nth-child(2){
  -webkit-transform:translateY(3em);
          transform:translateY(3em);
  -webkit-transition-duration:.6s;
          transition-duration:.6s;
}
.social-share-wrap .social-share-overlay .social-share-links a:nth-child(3){
  -webkit-transform:translateY(4em);
          transform:translateY(4em);
  -webkit-transition-duration:.8s;
          transition-duration:.8s;
}
.social-share-wrap .social-share-overlay .social-share-links .fa{
  min-width:30px;
  font-size:24px;
}

.toggle:checked + .social-share-wrap .social-share-overlay{
  -webkit-transform:scale(1);
          transform:scale(1);
}
.toggle:checked + .social-share-wrap .cover{
  opacity:0;
  -webkit-transform:translateY(-100%);
          transform:translateY(-100%);
}
.toggle:checked + .social-share-wrap .content .title,
.toggle:checked + .social-share-wrap .content .text,
.toggle:checked + .social-share-wrap .content .price{
  opacity:0;
  -webkit-transform:translateY(100%);
          transform:translateY(100%);
}
.toggle:checked + .social-share-wrap .content .label{
  -webkit-transform:scale(0);
          transform:scale(0);
}
.toggle:checked + .social-share-wrap .social-share-overlay a{
  opacity:1;
  -webkit-transform:translateY(0);
          transform:translateY(0);
}</style>