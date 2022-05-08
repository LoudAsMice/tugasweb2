<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
<center>
    <?= form_open('input')?>
        <table>
            <tr>
                <th colspan="3.5" align="right">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <tr>
                <th align="right">Nama</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('nama');?></b></p></td>
            </tr>
            <tr>
                <th align="right">NIS</th>
                <th>:</th>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('nis');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Kelas</th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('kelas');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tanggal" id="tanggal">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('tanggal');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tempat" id="tempat">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('tempat');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Alamat</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('alamat');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <input type="radio" name="jkel" id="pria" value="Pria" checked>Pria
                    <input type="radio" name="jkel" id="wanita" value="Wanita">Wanita
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('jkel');?></b></p></td>
            </tr>
            <tr>
                <th align="right">Agama</th>
                <th>:</th>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
                <td><p style="font-size:14px;color:red;"><b><?= $validation->getError('agama');?></b></p></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>    
    

    </center>
</body>
</html>