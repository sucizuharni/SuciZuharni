<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<style>
    fieldset {
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }
    select{
        width: 100%;
    }
</style>
<body>
    <fieldset>
        <legend>Input Data Siswa</legend>

        <form method="POST">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <Input type="text" name="nis" id="nis">
                        <?= form_error('nis', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tl" id="tl">
                    </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tlr" id="tlr">
                    </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
                    </td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option>--- PILIH ---</option>
                            <?php foreach ($agama as $a) : ?>
                                <option value="<?= $a; ?>"><?= $a; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>