<?php 
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;


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
th {
    background-color: transparent!important;
    color: grey!important;
}
.YourCustomTableClass table thead {
        color: grey!important;
}

</style>




            <h3>Colaboradores:</h3>
            <p>Accede a los perfiles de los colaboradores de Grupo Flesan. Puedes buscar a tu contacto rellenando los campos de búsqueda.  </p>

      <p class="convenios"><strong>Busqueda: </strong> </p>
      <div class="table-responsive">

    <?php Pjax::begin([ 'enablePushState' => false]) ?> 

   <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'YourCustomTableClass',
         ],
        'summary' =>false,
        'columns' => [

            //'rutColaborador',
            //'dvColaborador',
            //'pass',
            //'nombreColaborador',
            //'apellidosColaborador',
            //'idSucursal',
            [
                'attribute' => 'idperfilRed0.rfoto',
                'format' => 'image',
               
                'value' => function ($data) {
                
                  return '/web/img/perfil/t/'.$data->idperfilRed0->rfoto;
                    
                },
            ],
            [
              'label' => 'Buscar por nombre',
              'attribute' => 'nombreColaborador',
              'value' => 'nombreColaborador'
            ],
            [
              'label' => 'Buscar por apellido',
              'attribute' => 'apellidosColaborador',
              'value' => 'apellidosColaborador'
            ],
            [
              'label' => 'Buscar por area',
              'attribute' => 'idArea',
              'value' => 'idArea0.nombreArea'
            ],
            [
              'label' => 'Buscar por cargo:',
              'attribute' => 'idCargo',
              'value' => 'idCargo0.nombreCargo'
            ],
            [
              'label' => 'Buscar por empresa',
              'attribute' => 'idSucursal',
              'value' => 'idSucursal0.rutEmpresa0.nombreEmpresa'
            ],

                    //'idArea0.nombreArea',
            //'idCargo0.nombreCargo',
            //'idSucursal0.rutEmpresa0.nombreEmpresa',
            //'idRol',
            //'idGerencia',
            //'westadoJefe',
            //'idperfil',
            //'idperfilRed',
            //'idestadisticas',
            //'idestado',
            //'idCC',
            //'correo',
            //'telefono',
            //'direccion',
            //'pais',
            //'fechanacimiento',
            //'fechaingreso',

        ],
    ]);


     ?>
    <?php Pjax::end() ?>
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