$(function(){

    $("#img_upload").click(function(){

        $('#file_form').submit(function(e) {
            e.preventDefault();

            var fd = new FormData(this); // Neex AJAX2
            // You could show a loading image for example...
            $.ajax({
                url: "/article/fileupload",
                xhr: function() { // custom xhr (is the best)
                    var xhr = new XMLHttpRequest();
                    var total = 0;
                    // Get the total size of files
                    $.each(document.getElementById('file').files, function(i, file) {
                        total += file.size;
                    });
                    // Called when upload progress changes. xhr2
                    xhr.upload.addEventListener("progress", function(evt) {
                        // show progress like example
                        var loaded = (evt.loaded / total).toFixed(2)*100; // percent
                        $('#progress').width(loaded + '%');
                    }, false);
                    return xhr;
                },
                type: 'post',
                headers: { 'X-CSRF-TOKEN': $('input[name="_token"]').val() },
                processData: false,
                contentType: false,
                data: fd,
                success: function(data) {
                    $("input[name='thumbnail']").val(data);
                    $('#img_upload').addClass('disabled');
                    $('#file').closest('.input-file').addClass('state-disabled');
                    $('#progress').removeClass('bg-color-primary').addClass('progress-bar-success');
                    $('#progress').parent().removeClass('active');
                    alert('上传成功');
                }
            });
        });

        $('#file_form').submit();
    });

    $("#upload_bt").click(function(){
        $('.ui.modal').modal('show');
    });
});
