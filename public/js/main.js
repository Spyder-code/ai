$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('#form').submit(function(event) {
        event.preventDefault();
        var nama = $('#nama').val();
        $.ajax({
            url:"search",
            type:"POST",
            data:{nama:nama},
            success:function (data) {
                console.log("success");
                console.log(data);
                $('#nama').val("");
                $('#japan').html("<h1>"+data.success[0].ja+"</h1>");
                $('#indonesia').html("<p>"+data.success[0].ia+"</p>");
            }
        })
        // end of ajax call
    });

});
