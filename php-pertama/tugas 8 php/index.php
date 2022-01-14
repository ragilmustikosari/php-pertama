<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas 8 PHP</title>
</head>
<body>

<?php
    echo
    '<p class="font">'.
    '<b>'.'HALO!'.'<br>'.
    '<i>'.'SELAMAT DATANG'.'</i>'.'<br>'.'<br>'.
    '<u>'.'TUGAS 8 PEMROGRAMAN WEB'.'</u>'.'</b>'.
    '</p>'
?>

<table>
    <tbody>
        <tr>
            <th class="no">No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>

        <?php        
            $nama = 'Ragil Mustikosari';
            $tempatlahir = 'Makassar';
            $tgllahir = '6 Agustus 2001';
            $alamat = 'BTP Blok H';
            $counter = 1;        
            while ($counter <= 3):
        ?>
        
        <tr>
            <td class="no"><?= $counter; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $tempatlahir; ?></td>
            <td><?= $tgllahir; ?></td>
            <td><?= $alamat; ?></td>
        </tr>
        
        <?php        
            $counter++;
            endwhile;
        ?>
    </tbody>
</table>

<form class="myForm" action="">
    <p>LOGIN</p>
    <table>
        <tr>
            <label for="">Username</label>&nbsp;
            <input type="text" placeholder="username">
        </tr>
        <br>
        <tr>
            <label for="">Password</label>&nbsp;&nbsp;
            <input type="password" placeholder="password">
        </tr>
    </table>
</form>

</body>
</html>