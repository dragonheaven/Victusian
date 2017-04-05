$(function () {
    $('#btnUpload').on("click", function() {
        file = $('#image-upload')[0].files[0];
        var formdata = new FormData();
        var reader = new FileReader();
        reader.onloadend = function(e) {
            $('#btnUpload').val('Wait...');
            formdata.append("_token", $('meta[name="csrf-token"]').attr("content"));
            formdata.append("image", file);

            $.ajax({
                url: $("#image_upload_url").val(),
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data == 'fail') {
                        alert("Failed to upload image.");
                        $('#btnUpload').val('Failed Upload!');
                    } else {
                        $('input[name="image"]').val(data);
                        $('#btnUpload').val('Success!');
                        $('#btnUpload').addClass('btn-success');
                    }
                }
            });
        };
        reader.readAsDataURL(file);
    });

    $('table input[type="checkbox"]').on('click', function () {

        //when click day of week, put click effect for the item
        if($(this). prop("checked") == true){
            $(this).parent().css({
                "background-color" : "#9ad3f1",
                "box-shadow" : "inset 2px 1px 8px 2px black"
            });
        }
        else {
            $(this).parent().css({
                "background-color" : "#ffffff",
                "box-shadow" : "none"
            });
        }

    });

    $('input[type="checkbox"]').on('click', function() {
        //when choose travel/trip of category, show "What I need to bring along"
        if($('#travel-checkbox').prop("checked") == true || $('#trip-checkbox').prop("checked") == true)
        {
            $('#bringalong').show();
            $('.category input[type="checkbox"]').parent().css('display', 'none');
            $('#travel-checkbox').parent().show();
            $('#trip-checkbox').parent().show();
        }

        //when choose others, hide "what I need to bring along"
        if($('#travel-checkbox').prop("checked") == false && $('#trip-checkbox').prop("checked") == false)
        {
            $('#bringalong').hide();
            $('.category input[type="checkbox"]').parent().css('display', 'inline-block');
        }
    })

    $('body').on('change', '#type', function() {
        switch($('#type').val()) {
            case '0':
                $('input[name=available_to]').hide();
                $('span[name=date-to]').hide();
                $('#weekday-check-group').hide();
                $('#monthweek-check-group').hide();
                break;
            case '1':
                $('input[name=available_to]').show();
                $('span[name=date-to]').show();
                $('#weekday-check-group').hide();
                $('#monthweek-check-group').hide();
                break;
            case '2':
                $('input[name=available_to]').show();
                $('span[name=date-to]').show();
                $('#weekday-check-group').show();
                $('#monthweek-check-group').show();
            default:
                break;

        }
    });


});