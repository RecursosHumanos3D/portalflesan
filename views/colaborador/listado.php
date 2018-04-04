<?php 
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;

$session = Yii::$app->session;
$rutColaborador = $session['rut'];
?>
<style type="text/css">
	.panel.panel-default.convenios {
    box-shadow: 1px 4px 16px 3px rgba(199, 197, 199, 0.49);
    background-color: #1d1d1d;
}

h3.convenios {
    margin-left: 3%;
    color: #fff;
    margin-top: 2%;
}
tbody {
    font-size: 12px!important;
}


</style>




            <h3>Colaboradores:</h3>
            <p>Accede a los perfiles de los colaboradores de Grupo Flesan. Puedes buscar a tu contacto rellenando los campos de búsqueda.  </p>

      <p class="convenios"><strong>Busqueda: 
      
         



       </strong> </p>
       <div class="row">
         <div class="col-md-4">
        <input id="nombreColaborador" placeholder="Nombre:" class="form-control" onkeyup='idCombo = this.id;$.post("index.php?r=buscar/nombrep&nombreColaborador="+$(this).val(), function(data){carga(idCombo,data,1);});' type="text">

         </div>
         <div class="col-md-4">
        <input id="apellidosColaborador" placeholder="apellido:" class="form-control" onkeyup='idCombo = this.id;$.post("index.php?r=buscar/apellidop&apellidosColaborador="+$(this).val(), function(data){carga(idCombo,data,1);});' type="text">

         </div>
               <div class="col-md-4">
        <?php

        echo Select2::widget([
          'name' => 'kv_theme_select2',
          'data' => ArrayHelper::map(app\models\Cargos::find()->all(), 'idCargo', 'nombreCargo'),
          'theme' => Select2::THEME_BOOTSTRAP,
          'options' => [
            'placeholder' => 'Cargo:',
            'onchange' => 'idCombo = this.id;$.post("index.php?r=buscar/cargop&idCargo="+$(this).val(), function(data){carga(idCombo,data,2);});',

        ],
          'pluginOptions' => [
              'allowClear' => false
          ],
      ]);

       ?>
         </div>
     </div>
     <br>
     <div class="row">
             <div class="col-md-4">



             <?php

        echo Select2::widget([
          'name' => 'kv_theme_select2',
          'data' => ArrayHelper::map(app\models\Area::find()->all(), 'idArea', 'nombreArea'),
          'theme' => Select2::THEME_BOOTSTRAP,
          'options' => [
            'placeholder' => 'Area:',
            'onchange' => 'idCombo = this.id;$.post("index.php?r=buscar/areap&idArea="+$(this).val(), function(data){carga(idCombo,data,3);});',

        ],
          'pluginOptions' => [
              'allowClear' => false
          ],
      ]);

       ?>
         </div>
             <div class="col-md-4">
           <?php

        echo Select2::widget([
          'name' => 'kv_theme_select2',
          'data' => ArrayHelper::map(app\models\Empresas::find()->all(), 'rutEmpresa', 'nombreEmpresa'),
          'theme' => Select2::THEME_BOOTSTRAP,
          'options' => [
            'placeholder' => 'Empresa:',
            'onchange' => 'idCombo = this.id;$.post("index.php?r=buscar/empresap&rutEmpresa="+$(this).val(), function(data){carga(idCombo,data,4);});',

        ],
          'pluginOptions' => [
              'allowClear' => false
          ],
      ]);

       ?>
         </div>
              <div class="col-md-4">
              <button align="center" class="btn btn-block  btn-raised btn-primary"  onclick="filtro()">Buscar</button>

         </div>
             

       </div>
    <hr>

    <div id="conveniof">
                      

                                        <table class="table table-responsive table-striped">
                                            
                                             <tbody id="cuerpo">
                                                 <?php foreach($listado as $l) {
                                                    ?>      
                                                    <tr>
                                                        <td><a href="index.php?r=colaborador/compadre&rutAmigo=<?php echo $l["rutColaborador"]; ?>"><?php echo $l["nombreColaborador"]; ?></a></td>
                                                        <td><?php echo $l["apellidosColaborador"]; ?></td>
                                                        <td><?php echo $l["correo"]; ?></td>
                                                    </tr>
                                                    <?php
                                                } ?>
                                             </tbody>
                                            
                                        </table>





    </div>	

<script>


      function filtro(){

          var cargo = document.getElementById("select2-w0-container").innerHTML;
          var area = document.getElementById("select2-w1-container").innerHTML;
          var empresa = document.getElementById("select2-w2-container").innerHTML;
          var nombreColaborador = document.getElementById("nombreColaborador").innerHTML;
          var apellidosColaborador = document.getElementById("apellidosColaborador").innerHTML;


          if(cargo==null){
            cargo = null;
          }
           if(area==null){
            area = null;
          }
           if(empresa==null){
            empresa = null;
          }
           if(nombreColaborador==null){
            nombreColaborador = null;
          }
           if(apellidosColaborador==null){
            apellidosColaborador = null;
          }







            $.post("index.php?r=buscar/filtro&nombreColaborador="+nombreColaborador+"&apellidosColaborador="+apellidosColaborador+"&empresa="+empresa+"&area="+area+"&cargo="+cargo+"", function(data){
 
          document.getElementById("cuerpo").innerHTML = data;

        });
      }


      





			function todo(){

				$.post("index.php?r=buscar/todoc", function(data){
					document.getElementById("select2-w0-container").innerHTML = "Cargo:";
					document.getElementById("select2-w1-container").innerHTML = "Area:";
					document.getElementById("select2-w2-container").innerHTML = "Empresa:";
					document.getElementById("cuerpo").innerHTML = data;

				});
			}



            function carga(id, data, num)
            { 

              if(num==11)
              {
                document.getElementById("select2-w0-container").innerHTML = "Cargo:";
                document.getElementById("select2-w1-container").innerHTML = "Area:";
                document.getElementById("select2-w2-container").innerHTML = "Empresa:";
              }

               if(num==12)
              {
                document.getElementById("select2-w1-container").innerHTML = "Area:";
                document.getElementById("select2-w2-container").innerHTML = "Empresa:";
              }

               if(num==13)
              {
                document.getElementById("select2-w0-container").innerHTML = "Cargo:";
                document.getElementById("select2-w2-container").innerHTML = "Empresa:";
              }

               if(num==14)
              {
                document.getElementById("select2-w0-container").innerHTML = "Cargo:";
                document.getElementById("select2-w1-container").innerHTML = "Area:";
              }
          

              document.getElementById("cuerpo").innerHTML = data;


             console.log(data);

               

            }
        </script>