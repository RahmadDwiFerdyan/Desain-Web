<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Gambar</title>
    </head>
    <body>
        <h2>Unggah File Gambar</h2>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="file" multiple accept="image/*">
            <input type="submit" name="submit" value="Unggah">
        </form>

        <div id="status"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>