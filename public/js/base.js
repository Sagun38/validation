$(document).ready(function(){

  $('.imgProduit').on('click', function(){
    $(this).toggleClass('imgProduitZoom');
  });

  $("#map").mouseenter(function(){
    alert("Vous êtes notre 1000000000000 visiteur, envoyez nous un message pour gagner votre super weekend en corse pour deux personnes !");
  });

  $(".blockProduit").mouseenter(function(){
       $(this).css("background-color", "lightgrey");
   });
   $(".blockProduit").mouseleave(function(){
       $(this).css("background-color", "#f5f8fa");
   });
});
