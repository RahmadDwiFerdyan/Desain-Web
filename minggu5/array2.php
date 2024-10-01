<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta namespace="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            th, td {
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php 
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan',
        ]; 
        ?>
        
         <table border=1>
            <tr>
                <th>Keterangan</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
    </table>
    </body>
</html>