$(".carousel-button-right").live('click',function(){ 
   right_carusel_click();
});
   
$(".carousel-button-left").live('click',function(){ 
   left_carusel();
});
function left_carusel(){
   var block_width = $('.carousel-block').width() + 20;
   $(".carousel-items .carousel-block").eq(-1).clone().prependTo(".carousel-items"); 
   $(".carousel-items").css({"left":"-"+block_width+"px"}); 
   $(".carousel-items").animate({left: "0px"}, 200); 
   $(".carousel-items .carousel-block").eq(-1).remove(); 
}
setInterval(function right_carusel(){
   var block_width = $('.carousel-block').width() + 20;
   $(".carousel-items").animate({left: "-"+ block_width +"px"}, 200); 
   setTimeout(function () { 
      $(".carousel-items .carousel-block").eq(0).clone().appendTo(".carousel-items"); 
      $(".carousel-items .carousel-block").eq(0).remove(); 
      $(".carousel-items").css({"left":"0px"}); 
   }, 300);
},3000);
function right_carusel_click(){
   var block_width = $('.carousel-block').width() + 20;
   $(".carousel-items").animate({left: "-"+ block_width +"px"}, 200); 
   setTimeout(function () { 
      $(".carousel-items .carousel-block").eq(0).clone().appendTo(".carousel-items"); 
      $(".carousel-items .carousel-block").eq(0).remove();
      $(".carousel-items").css({"left":"0px"}); 
   }, 300);
}



$(".carousel-button-right2").live('click',function(){ 
   right_carusel_click2();
});
   
$(".carousel-button-left2").live('click',function(){ 
   left_carusel2();
});
function left_carusel2(){
   var block_width = $('.carousel-block2').width() + 20;
   $(".carousel-items2 .carousel-block2").eq(-1).clone().prependTo(".carousel-items2"); 
   $(".carousel-items2").css({"left":"-"+block_width+"px"}); 
   $(".carousel-items2").animate({left: "0px"}, 200); 
   $(".carousel-items2 .carousel-block2").eq(-1).remove(); 
}
setInterval(function right_carusel2(){
   var block_width = $('.carousel-block2').width() + 20;
   $(".carousel-items2").animate({left: "-"+ block_width +"px"}, 200); 
   setTimeout(function () { 
      $(".carousel-items2 .carousel-block2").eq(0).clone().appendTo(".carousel-items2"); 
      $(".carousel-items2 .carousel-block2").eq(0).remove(); 
      $(".carousel-items2").css({"left":"0px"}); 
   }, 300);
}, 3000);
function right_carusel_click2(){
   var block_width = $('.carousel-block2').width() + 20;
   $(".carousel-items2").animate({left: "-"+ block_width +"px"}, 200); 
   setTimeout(function () { 
      $(".carousel-items2 .carousel-block2").eq(0).clone().appendTo(".carousel-items2"); 
      $(".carousel-items2 .carousel-block2").eq(0).remove(); 
      $(".carousel-items2").css({"left":"0px"}); 
   }, 300);
}