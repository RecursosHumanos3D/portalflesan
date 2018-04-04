<style type="text/css">
  .row > .column {
  padding: 0 8px;
}
a.next {
    background-color: black;
}

a.prev {
    background-color: black;
}

span.close.cursor {
    background-color: black;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}



/* Modal Content */
.modal-contentJP {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 75%;
    padding: 25px;


    }

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 20%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.cerrarbtn{
      margin-top: 60px;
    float: right;
    margin-bottom: 0px;
}
</style>
<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
/* carousel */
.media-carousel {
    width: 95%!important;
    margin-left: 2%!important;
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
    margin-top: 14px!important;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 250px;
  height: 100px
}
.modal-contentJP {
    margin-top: 0%!important;
    margin-left: 27%!important;
}
/* End carousel */
</style>


<?php foreach($fotos as $post){   
?>



        <div class="modal fade fullscreen-modal " id="m<?php echo $post["ridPost"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content modal-contentJP" style="max-width: 60%!important;">
              <div class="modal-body">
                <button style="    margin-top: 30px!important;
    float: right;
    margin-left: 2%!important;
    margin-bottom: 4px!important;" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button><br>
                <br><br><br>
                <img class="img-responsive fondo rotate-<?php echo $post["ridPost"]; ?>" style="
                display: block;
                margin: 0 auto 0 auto;

                max-height: 800px;
                max-width: -webkit-fill-available;
                -ms-transform: rotate(<?php echo $post['rrotador']; ?>deg);
                -webkit-transform: rotate(<?php echo $post['rrotador']; ?>deg);
                transform: rotate(<?php echo $post['rrotador']; ?>deg);

                " src="../web/img/post/<?php echo $post['rfoto']; ?>" alt="...">
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div>

<?php
} ?> 




        <?php
        if(empty($fotos)){
          ?>

          <?php
        }else{
          $i = 1;
          ?>
          <h3 style="font-weight: bold; color: #736a6a;     font-size: 21px!important;">Mis Fotos:</h3>
          <div class="container">
            <div class="row">
            </div>
            <div class='row'>
              <div class='col-md-8'>
                <div class="carousel slide media-carousel" id="media">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="row">
                        <?php 
                        foreach($top as $t)
                        {
                          
                          ?>
                          <div class="col-md-4">
                            <a onclick="openModal();currentSlide(<?php echo $i; ?>)" class="thumbnail" style="cursor: pointer;    overflow: hidden;">
                            <img style=" -ms-transform: rotate(<?php echo $t['rrotador']; ?>deg);
                -webkit-transform: rotate(<?php echo $t['rrotador']; ?>deg);
                transform: rotate(<?php echo $t['rrotador']; ?>deg);" class="img-responsive show-in-modal"  src="../web/img/post/<?php echo $t['rfoto']; ?>" alt="Photo"></a>
                          </div> 

                          <?php
                          $i++;
                        } 
                        ?> 


                      </div>
                    </div>

                    <div class="item">
                      <div class="row">

                        <?php


                        if(empty($others)){
                          ?>
                          <?php 
                          foreach($top as $t)
                          {
                           

                            ?>
                            <div class="col-md-4">
                              <a onclick="openModal();currentSlide(<?php echo $i; ?>)" class="thumbnail" style="cursor: pointer"><img alt="" src="../web/img/post/<?php echo $t['rfoto']; ?>"></a>
                            </div> 

                            <?php
                             $i++;
                          } 
                          ?> 
                          <?php
                        }else{

                          ?>
                          <?php 
                          foreach($others as $otras)
                          {
                           
                            ?>
                            <div class="col-md-4">
                              <a onclick="openModal();currentSlide(<?php echo $i; ?>)"  class="thumbnail" style="cursor: pointer" ><img alt="" src="../web/img/post/<?php echo $otras['rfoto']; ?>"></a>
                            </div>  

                            <?php
                             $i++;
                          } 
                          ?> 

                          <?php

                        } ?>

                      </div>
                    </div>    

                    <div class="item">
                      <div class="row">
                       <?php
                       if(empty($last)){
                        ?>
                        <?php 
                        foreach($top as $t)
                        {
                          ?>
                          <div class="col-md-4">
                            <a class="thumbnail" onclick="openModal();currentSlide(<?php echo $i; ?>)" style="cursor: pointer"><img alt="" src="../web/img/post/<?php echo $t['rfoto']; ?>"></a>
                          </div> 

                          <?php
                           $i++;
                        } 
                        ?> 
                        <?php
                      }else{

                        ?>
                        <?php 
                        foreach($last as $ult)
                        {
                          ?>
                          <div class="col-md-4">
                            <a class="thumbnail" onclick="openModal();currentSlide(<?php echo $i; ?>)" style="cursor: pointer"><img alt="" src="../web/img/post/<?php echo $ult['rfoto']; ?>"></a>
                          </div>  

                          <?php
                           $i++;
                        } 
                        ?> 
                        <?php

                      } ?>

                    </div>
                  </div>            
                </div>
                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                <a data-slide="next" href="#media" class="right carousel-control">›</a>
              </div>                          
            </div>
          </div>
        </div>

        <?php

      } ?>



<!-- The Modal/Lightbox -->
<div id="myModal" class="modal" style="    overflow: auto;" >
  <div class="modal-header">
  </div>
  <div class="modal-content modal-contentJP" style="max-width: 60%!important;">
  
    <?php
      $a = 1;

     foreach ($fotos as $post) {
      # code...
    ?>
    <div class="mySlides">
      <button style="float: right;"  type="button" class="btn btn-danger" onclick="closeModal()">Cerrar</button>

      <div class="numbertext"><?php echo $a; ?></div>
      <img align="middle " class="img-responsive fondo rotate-<?php echo $post["ridPost"]; ?>" style="-ms-transform: rotate(<?php echo $post['rrotador']; ?>deg);
                                                                                      -webkit-transform: rotate(<?php echo $post['rrotador']; ?>deg);
                                                                                      transform: rotate(<?php echo $post['rrotador']; ?>deg);     margin: auto;max-height: 50%;" src="../web/img/post/<?php echo $post['rfoto']; ?>" alt="...">
    </div>
    <?php 
    $a++;
  } ?>




    <!-- Next/previous controls -->
    

    <!-- Caption text -->
   

    <!-- Thumbnail image controls -->
    <div class="column">
    </div>

  
  </div>
</div>