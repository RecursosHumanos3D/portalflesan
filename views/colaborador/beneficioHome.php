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

$lugar = 1;
$rut2 = 1;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style type="text/css">
a.centradorss {
    color: #777777!important;
}
    .profile-header-background img {
            background-color: #e8000a!important;
        width: 100%;

    }

    @media only screen and (max-width : 320px) {
    aside{
        
    }
    .container-fluid.coment {
    
    }

    .well{
        width: 143%!important;
    margin-left: -19%!important;
    }

    aside {
    margin-left: -7%!important;
}
}

     @media (max-width:768px){
        section#blog-section {
    max-width: 118%!important;
    padding-right: 0%!important;
    padding-left: 0%!important;
    margin-left: -19%!important;
}
     }

     @media only screen and (max-width: 320px){
     	.profile-header-background {
    margin-top: 25%!important;
}

	.panel.panel-default.publicador.amigo.ben {
    max-width: 142%!important;
    margin-left: -19%!important;
}
	aside {
    margin-left: -7%!important;
    max-width: 155%!important;
    width: 136%!important;
}

.container-fluid.coment {
    margin-left: 0%!important;
    margin-right: -26%!important;
    width: 119%!important;
    max-width: 118%!important;
}
     }
    
@media (max-width: 768px){
p.pje {
    margin-top: 13%!important;}
    h3.tituloBen{    margin-left: -11%;
    margin-top: 28%!important;}

}


  h3.miau {margin-left: -21%;font-weight: bold;}


</style>

              <?php //var_dump($model[0]['foto']);die();   ?>
              <div class="container-fluid" style="margin-top:84px;">
                <div class="row-fluid">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12  animated fadeInLeft">
                      
                        <div class="row">
                            <div class="col-md-4 col-lg-4 hidden-xs">
                            <?php

                                   echo $this->render('../colaborador/sider',[
                                    'model' => $model,
                                    'rutColaborador' => $rutColaborador,
                                   ]);

                                   ?>  
                   
                            </div>
            <div class="col-md-8 col-lg-8 col-xs-12">
                <div class="profile-info-right amigo">
                    <div class="tab-content">
                    <h3 class="tituloBen" style="margin-left: -11%; margin-top: -1%;"><strong>Mis Puntos</strong> Flesan</h3>
                        <!-- activities -->
                    
                            
                            <div class="col-md-8 col-lg-8 col-xs-12 ">

                                 <?php

                                   echo $this->render('cardpuntos',[
                                        'puntaje' => $puntaje,
                                        'suma' => $suma,
                                   ]);

                                   ?>   
                                           
                            <h3 class="miau" align="left" style="margin-left: -21%;font-weight: bold;">¡Revisa los beneficios que puedes canjear!</h3>
                            <div style="width: 163%!important; margin-left: -27%;" >
                             
                        
                              
                              <div class="panel-body">
                                <?php

                                   echo $this->render('beneficios', [
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
                            <div class="col-md-8 col-lg-8 col-xs-12 ">
                          
                            </div>
                        </div>
                           <div class="conatiner" style="margin:35px auto;">
                            <div class="row">
                                
                           </div>
                           <br>


                    </div>

                </div>
            </div>

            </div>
    </div>
    


</div>
<!-- end activities -->
<!-- followers -->


</div>

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