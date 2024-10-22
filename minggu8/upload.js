$(document).ready(function(){
    $('#file').change(function(){
        if (this.files.length > 0) {
            // Mengaktifkan tombol upload jika file terpilih
            $('#upload-button').prop('disabled', false).css({
                'opacity': 1,
                'cursor': 'pointer'
            });
        } else {
            // Menonaktifkan tombol jika tidak ada file
            $('#upload-button').prop('disabled', true).css({
                'opacity': 0.5,
                'cursor': 'not-allowed'
            });
        }
});
    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file');
            }
        });
    });
});