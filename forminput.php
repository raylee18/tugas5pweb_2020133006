<html>
    <head>
       <style>
           body {background-color: green;}
           </style>
    </head>

    <body>
        <form action="tampilmahasiswa.php" method="POST">
            <b>Pengelolaan Data Mahasiswa</b><br>
            <pre>
                Nama: <input type="text" name="nama" size="30" maxlength="60">
                Alamat: <input type="text" name="alamat" size="30" maxlength="60">
            </pre>
            Jenis kelamin: <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
                           <input type="radio" name="gender" value="Perempuan">Perempuan
            <p>
                Pekerjaan:
                <select name="pekerjaan">
                    <option value="=Pilih=">
                    <option value="Pelajar">Pelajar
                    <option value="Karyawan">Karyawan
                    <option value="Wirausaha">Wirausaha
                    <option value="Lainnya">Lainnya
                </select>
            <p>
                Hobi:
                <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
                <input type="checkbox" name="hobi2" value="Musik">Musik
                <input type="checkbox" name="hobi3" value="Travelling">Travelling
            <p>
                <input type="submit" value="Kirim"><input type="reset" value="Batal">
          </form>
    </body>
</html>