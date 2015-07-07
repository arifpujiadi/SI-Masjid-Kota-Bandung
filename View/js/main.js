
$(document).ready(function() {
    $(".tab-cont").find("a").on("click",function(){
        var ambil = $(this).attr("href");
        
        $(".isiTab").find("div"+ambil).fadeIn(400).siblings().fadeOut(0);
    });
    
});