<html> 
    
<head> 
    <title>Form Input Data Siswa</title> 
</head> 

<body bgcolor="blue"> 
    <center> 
        <?php //echo validation_errors(); 
        ?> 
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post"> 
            <table> 
                <tr > 
                    <th colspan="3" style="font-size:20px;"> 
                        Form Data Siswa D-Lemas
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr align="left" > 
                    <th >Nama siswa</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama" placeholder="Input Nama Siswa"> 
                            <?= form_error('nama', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>NIS</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Input NIS"> 
                            <?= form_error('nis', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Kelas</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Input Kelas"> 
                            <?= form_error('kelas', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tanggal lahir</th> 
                    <th>:</th> 
                    <td>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"placeholder="Input Tanggal Lahir"> 
                            <?= form_error('tanggal_lahir', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tempat lahir</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Tempat Lahir"> 
                            <?= form_error('tempat_lahir', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Input Alamat"> 
                            <?= form_error('alamat', '<small style="color:red">','</small>'); ?>
                    </td> 
                </tr>
                <tr align="left">
                <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br>
                </tr> 
                <tr align="left"> 
                    <th>Agama</th> 
                    <th>:</th> 
                    <td> 
                        <select name="agama" id="agama"> 
                            <option value="#">Pilih Agama</option> 
                            <option value="islam">Islam</option> 
                            <option value="kristem">Kristen</option> 
                            <option value="katolik">Katolik</option> 
                            <option value="budha">Budha</option> 
                            <option value="hindu">Hindu</option> 
                            <option value="protestan">Protestan</option> 
                            <option value="khonghucu">Khonghucu</option> 
                        </select> 
                    </td>
                </tr> 
                <tr> 
                    <td colspan="3" align="center"><input type="submit" value="SUBMIT"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</body>
</html>