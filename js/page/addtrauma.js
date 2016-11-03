$('#x,#y,#size,#rotation').bind("change keydown mousemove", function(){
    $('.trauma-link').css({left: $('#x').val()+'%', top: $('#y').val()+'%',transform: "scale("+($('#size').val()*0.05/100)+") rotate("+$('#rotation').val()+"deg) translateZ(0px)" });
});


