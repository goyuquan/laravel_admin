$(function(){

    $("#img_upload").click(function(){

        $('#myform').submit(function(e) {
            e.preventDefault();

            var fd = new FormData(this); // Neex AJAX2
            // You could show a loading image for example...
            $.ajax({
                url: "/admin/article/fileupload",
                xhr: function() { // custom xhr (is the best)
                    var xhr = new XMLHttpRequest();
                    var total = 0;
                    // Get the total size of files
                    $.each(document.getElementById('photo').files, function(i, file) {
                        total += file.size;
                    });
                    // Called when upload progress changes. xhr2
                    xhr.upload.addEventListener("progress", function(evt) {
                        // show progress like example
                        var loaded = (evt.loaded / total).toFixed(2)*100; // percent
                        $('#progress').text('Uploading... ' + loaded + '%' );
                    }, false);
                    return xhr;
                },
                type: 'post',
                headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                processData: false,
                contentType: false,
                data: fd,
                success: function(data) {
                    // do something...
                    console.log(data);
                }
            });
        });

        $('#myform').submit();
    });

});
