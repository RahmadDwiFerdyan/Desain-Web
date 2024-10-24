<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="POST">
        <label for="nama">Nama:  </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <label for="password">Password:</label> 
        <input type="password" id="password" name="password"> 
        <span id="password-error" style="color: red;"></span> 
        <br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function () {
            $("#myForm").on("submit", function (event) { 
                event.preventDefault(); 

                var nama = $('#nama').val();
                var email = $('#email').val();
                var password = $('#password').val(); 
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama Harus Diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email Harus Diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password.length < 8) { 
                    $("#password-error").text("Password minimal 8 karakter"); 
                    valid = false; 
                } else {
                    $("#password-error").text(""); 
                }

                if (valid) {
                    $.ajax({ 
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            alert("Data berhasil dikirim: " + response);
                        }, 
                        error: function() { 
                            alert("Terjadi kesalahan saat mengirim data."); 
                        } 
                    });
                }
            });
        });
    </script>
</body>
</html>
