$(".track-click ").click(function (event) {
    var offset = $(this).offset();
    console.log(Math.round((event.pageX - offset.left) / $(this).width() * 100) + "% - " + Math.round((event.pageY - offset.top) / $(this).height() * 100) + "%");
    $("#add_trauma #id_image").val($(this).attr('target-img'));
    $("#add_trauma #x").val(Math.round((event.pageX - offset.left) / $(this).width() * 100));
    $("#add_trauma #y").val(Math.round((event.pageY - offset.top) / $(this).height() * 100));
    $("#add_trauma").submit();
});