$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(function(){
    $('.formNama').hide();
    $('.section2').hide();
    var t;

    var a = document.getElementById("myAudio");
            var t = setInterval(function(){
                $('.salam').hide();
                $('.formNama').show();
                play();
                }, 5000);

                var b = setInterval(function(){
                    $('.salam').hide();
                    $('.perkenalan').hide();
                    $('.section2').show();
                    clear();
                    }, 10000);

    function play(){
            a.play();
            clearInterval(t);
    };
    function clear(){
        clearInterval(b);
    }
    $('.close').on('click',function(){
        $('.alert').hide();
    });

    $('#form').submit(function(event) {
        event.preventDefault();
        var nama = $('#nama').val();
        $.ajax({
            url:"nama",
            type:"POST",
            data:{nama:nama},
            success:function (data) {
                $('#nama').hide();
                $('#japan').html("<h1>こちらこそ、どうぞよろしく</h1>");
                $('#indonesia').html("<p>Senang berkenalan dengan Anda.</p>");
                setInterval(function(){
                    window.location.href = "main";
                },4000);
            }
        })
        // end of ajax call
    });
});
