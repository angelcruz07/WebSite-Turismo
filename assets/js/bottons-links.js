$(document).ready(function(){ 
  $('.links').click(function(){   
      var valor = $(this).attr('data-nombre'); 
      if(valor == 'all'){ 
          $('.filter').show('1000');
      }else{ 
          $('.filter').not('.' + valor).hide('1000'); 
          $('.filter').filter('.' + valor).show('1000');
      } 
       
      $('ul .links').click(function(){ 
          $(this).addClass('active').siblings().removeClass('active');
      });
  });
});
