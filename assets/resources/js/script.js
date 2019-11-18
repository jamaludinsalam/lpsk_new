



  // Open the full screen search box
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}


  var mod = function(){
  if (Modernizr.mq('(max-width: 767px)')) {
    $("#listBerita").removeClass("berita-desktop").addClass("berita-mobile");
  } else {
    // Clear the settings etc
    $("#listBerita").addClass("tes");
  }

  $(function() {
    // Call on every window resize
    $(window).resize(mod);
    // Call once on initial load
    mod();
    console.log(mod);
    });
}

$(document).ready(function () {
  if($(window).width() < 768) {
     $("#listBerita").replaceWith("<div id="listBerita"  class="listberita col-lg-8 berita-mobile">
     <div class="row no-gutters">
       <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
         <ol class="carousel-indicators" >
           <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
           <li data-target="#multi-item-example" data-slide-to="1"></li>
           <li data-target="#multi-item-example" data-slide-to="2"></li>
           <li data-target="#multi-item-example" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
           <div class="carousel-item active">
             <div class="col-md-12 col-berita-card">
               <div class="card  berita-card">
                 <img src="resources/img/news1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h3>22 September 2019</h3>
                   <h2 class="card-title"><strong> Card title for example</strong></h2>
                   <p  class="card-text">Lorem ipsum dolor sit amet, consectetur 
                       adipiscing elit. Mauris consequat consequat 
                       enim, non auctor massa  ultrices non. </p>
                 </div>	
               </div>
             </div>
           </div>
           <div class="carousel-item">
             <div class="col-md-12 col-berita-card">
               <div class="card berita-card">
                 <img src="resources/img/news1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h3>22 September 2019</h3>
                   <h2 class="card-title"><strong> Card title for example</strong></h2>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                       adipiscing elit. Mauris consequat consequat 
                       enim, non auctor massa  ultrices non. </p>
                 </div>	
               </div>
             </div>
           </div>
           <div class="carousel-item ">
             <div class="col-md-12 col-berita-card">
               <div class="card berita-card">
                 <img src="resources/img/news1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h3>22 September 2019</h3>
                   <h2 class="card-title"><strong> Card title for example</strong></h2>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                       adipiscing elit. Mauris consequat consequat 
                       enim, non auctor massa  ultrices non. </p>
                 </div>	
               </div>
             </div>
           </div>
           <div class="carousel-item ">
             <div class="col-md-12 col-berita-card">
               <div class="card berita-card">
                 <img src="resources/img/news1.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                   <h3>22 September 2019</h3>
                   <h2 class="card-title"><strong> Card title for example</strong></h2>
                   <p class="card-text">Lorem ipsum dolor sit amet, consectetur 
                       adipiscing elit. Mauris consequat consequat 
                       enim, non auctor massa  ultrices non. </p>
                 </div>	
               </div>
             </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#multi-item-example" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#multi-item-example" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
     </div>
   </div>");
  }    
});




