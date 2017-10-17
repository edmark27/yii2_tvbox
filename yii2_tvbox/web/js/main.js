new WOW().init();

$('.add-to-specs').on('click', function(e){
   e.preventDefault();
    $(this).addClass( "color-link" );
    $('.color-change').addClass( "color-link" );
   var id = $(this).data('id');
   $.ajax({
       url: 'site/add',
       data: {id: id},
       type: 'GET',
       success: function(res){
           if(!res) alert('Ошибка!');
          console.log(res);
       },
       error: function(){
          alert('Error!');
       }
   });
});

$(function () {
    $('.navbar-nav a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });

});