$(document).ready(function () 
{
    // $('#btn-send').click(function () 
    // {
        $("payment-form").on( "submit", function( event ) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                event.preventDefault();
  
                var data    = $( this ).serialize();
                var headers = $('meta[name="csrf-token"]').attr('content');

                alert('fsdfsdfsdfsd');

                $.ajax({
                    type: 'POST',
                    url : $(this).attr('action'),

                    data : data + headers,
                    dataType: 'json',
                    cache:false,

                    success  : function(data) {
                        console.log(data);
                    }

                });

            });

        // });

            return false;

    });