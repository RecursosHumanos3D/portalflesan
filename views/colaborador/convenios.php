<?php 
use app\controllers\BuscarBeneficiosController;
?>
<style type="text/css">
	.panel.panel-default.convenios {
    box-shadow: 1px 4px 16px 3px rgba(199, 197, 199, 0.49);
    background-color: #e8030d;
}

h3.convenios {
        color: #fff;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
}
.card {
    height: 115px;
}
.panel.panel-default.mundoDesc {
    background-color: #e8000a;
    color: white;
}

.modal-dialog {
  top: calc(100% - 300px); 
}

span.iconografia {
    font-size: 42px;
    color: #777777;
}
span.card-title {
    font-weight: bolder;
    color: #777777;
}

span.iconografia:hover {
    font-size: 42px;
    color: white;
}
span.card-title:hover {
    font-weight: bolder;
    color: white;
}
.card:hover {
    background-color: black;
}
div#conveniof {
    width: 50%;
    margin: 0 auto;
}
</style>


   	 <div class="panel panel-default mundoDesc">

      <h3 class="mundoDesc">&nbsp;&nbsp;&nbsp;Beneficios y Convenios Flesan
</h3>
      </div>

      <p>En grupo FLESAN tenemos varios beneficios y convenios para tí. Revisa las categorías y conoce mas de nuestra oferta.</p>
   		
   		<?php foreach ($categorias as $c) {  ?>
      <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
        <a onclick="mostrar(<?php echo $c["idtipo"]; ?>);" aria-expanded="true" aria-controls="footer">
                      
                    
        <div class="card">
          <div class="card-image">
          
              <br><center><span class="iconografia" ><?php echo $c["iconografia"]; ?></span></center>
              
         
             </div>
            <div class="name">
              <center><span class="card-title"><?php echo $c["nombre"]; ?></span></center>
            </div>
         
        </div>
        </a>
      </div>
     <?php } ?>

<script type="text/javascript">
  
  function mostrar(id){

         $.get("index.php?r=buscar/convenios&idtipo=" + id +"" ,
                function (dato) {

                    document.getElementById("conveniof").innerHTML = dato;
                   document.getElementById('footer').style.display = 'block';


                });

  }



</script>


