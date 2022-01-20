
$(function(){
    $('.cards .single-card').hover(function(){
        $(this).addClass('anmaite');
    },
        function(){
            $(this).removeClass('anmaite');
        }
    );// end hover
    $('.inputs input').focus(function(){
        $(this).addClass('effet');
    });
    $('.inputs input').blur(function(){
        $(this).removeClass('effet');
    });
});// end ready function
