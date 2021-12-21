<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP PERTAMA</title>
</head>
<body>

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
            while ($counter <= 10):
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
</body>
</html>