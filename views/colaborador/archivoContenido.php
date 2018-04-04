<div id="chistes">
 <img  src="../web/img/biblioteca/miniatura/<?php  echo $model[0]["bibFoto"]; ?>" hspace="16"  vspace="16" />
    <a target="_blank" href="../web/img/biblioteca/archivos/<?php  echo $model[0]["bibNombreArchivo"]; ?>"><img class="sobre"  src="../web/img/biblioteca/miniatura/<?php

if($tipo==1){echo 'excel.png';}if($tipo==2){echo 'word.png';}if($tipo==3){ echo 'ppt.png';}if($tipo==4){echo 'pdf.png';}

     ?>" hspace="16"  vspace="16" /></a>
</div>
<style type="text/css">
img {
    max-width: 87%;
}
#chistes{
 position: relative;
}
.sobre {
 position:absolute;
 top:0px;
 left:0px;
 border:none;
}
</style>