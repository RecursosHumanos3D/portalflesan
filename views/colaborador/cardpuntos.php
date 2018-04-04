 <style type="text/css">
     .block {
    text-align: center;
    vertical-align: middle;
}

.circle {
    background: linear-gradient(135deg, #e800a 60% , #e80037 60.5%);
    border-radius: 200px;
    color: white;
    height: 125px;
    font-weight: bold;
    width: 125px;
    display: table;
    margin: 10px auto;
}
.circle.a{
 background: linear-gradient(-90deg, #e8000a, #e80037);

}
.circle.b{
background: linear-gradient(-90deg, #6439de , #6c6ff4);
}
.circle p {
    vertical-align: middle;
    display: table-cell;
}
p.estadistica {
        font-size: 21px;
    font-weight: bold;
    color: #fff;
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
p.puntos {
       text-transform: uppercase;
    font-size: 12px;

}
p.pje {
    margin-top: 50%!important;
    margin-left: 12%!important;
    font-weight: bold;
    font-size: 17px;
}


@media (max-width: 768px){
p.pje {
    margin-top: 13%!important;}
}
    
 </style>

<div class="col-md-6 col-sm-6 col-lg-6 col-xs-5 block">
    <p class="puntos">Mis Puntos Flesan</p>
    <div class="circle a">
        <p class="estadistica"><?php echo $puntaje->puntaje; ?></p>

    </div>
</div>
<div class="col-xs-2 hidden-lg hidden-md hidden-sm"></div>
<div class="col-md-6 col-sm-6 col-lg-6 col-xs-5 block">
    <p class="puntos">Puntos Canjeados</p>
    <div class="circle b">
        <p class="estadistica"><?php echo $suma; ?></p>

    </div>
</div>

                  
                    


