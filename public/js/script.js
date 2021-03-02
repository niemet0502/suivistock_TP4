
$(document).ready(function () {
  console.log('test');
  $('#input-search').keyup(function(){
    var name = $(this).val();
    if(name != ""){
      $.ajax({
        type: 'POST',
        url: '/suivistock/src/fonctions/recherche_produit.php',
        data: {user: name},
        success: function(data){
          $('.search-result').css('display', 'block');
          $('.search-result').html(data);
        }
      });
    }else{
      $('.search-result').css('display', 'none');
    }
  })
})