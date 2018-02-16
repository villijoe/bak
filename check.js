

$("#search").keydown(function(e){
    if (e.which == 13) {
        $("#send").click();
    }
});

$('#send').click(function(){
    var search = $('#search').val();
    $.ajax({
        method: "POST",
        url: "handle.php",
        data: { search : search }
    }).done(function(msg){
        $("#result").html(msg);
        console.log(msg);
    });
});
