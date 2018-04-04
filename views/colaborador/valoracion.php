 <style type="text/css">
     .block {
    text-align: center;
    vertical-align: middle;
}
h3.val {
    font-size: 21px!important;
}
.circle {
    background: #656363;
    border-radius: 200px;
    color: white;
    height: 70px;
    font-weight: bold;
    width: 70px;
    display: table;
    margin: 20px auto;
}
.circle p {
    vertical-align: middle;
    display: table-cell;
}
p.estadistica {
    font-size: 36px;
    font-weight: 56;
    color: #dedede;
    font-family: sans-serif;
}
.col-md-2 {
    width: 19.666667%;
}
p.estad {
    font-size: 13px;
}
h3.val {
    font-weight: bold;
    color: #736a6a;
}
@media (max-width:768px){
    h3.val {
    margin-left: 10%;
}

    }
 </style>

 <div class="row">
    <div class="col-md-12 col-xs-12 hidden-xs">
		<div class="section" align="left">
                            <h3 class="val">Mi Valoración:</h3>
                            <div class="col-md-12 val">
                            <div class="col-md-2 block">
                            <div class="circle">
                                <p class="estadistica"><?php echo $estadistica->rcontadorP; ?></p>

                            </div>
                            <P class="estad">Post Realizados</P>
                            </div>
                            <div class="col-md-2 block">
                                <div class="circle">
                                    <p id="b" class="estadistica"><?php echo $estadistica->rcomentarios; ?></p>

                                </div>
                                <P class="estad">Comentarios Realizados</P>
                                </div>
                                <div class="col-md-2 block">
                                <div class="circle">
                                    <p  class="estadistica"><?php echo $estadistica->rcomentariosr; ?></p>

                                </div>
                                <P class="estad">Comentarios Recibidos</P>
                                </div>
                                <div class="col-md-2 block">
                                <div class="circle">
                                    <p id="d" class="estadistica"><?php echo $estadistica->rlikes; ?></p>
                                </div>
                                <P class="estad">Me gusta Realizados</P>
                                </div>
                                <div class="col-md-2 block">
                                <div class="circle">
                                    <p class="estadistica"><?php echo $estadistica->rlikesr; ?></p>

                                </div>
                                <P class="estad">Me gusta Recibidos</P>
                                </div>
                   
                          </div>

                        </div>

    </div>
</div>	