<?php

if (isset($_FILES["files"])) {
    $errors = array();
    $valid_extensions = array("jpg", "jpeg", "png", "gif");
    $total_files = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        if (!in_array($file_ext, $valid_extensions)) {
            $errors[] = "$file_name: File harus berupa gambar (JPG, JPEG, PNG, GIF)";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}


?>
