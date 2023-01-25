<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah </h1>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" />
                </p>
                <p>
                    <label for="nama_jurusan">Nama Jurusan :</label>
                    <input type="text" name="nama_jurusan" />
                </p>
                <p>
                    <label for="tahun">Tahun :</label>
                    <input type="date" name="tahun" />
                </p>
                <p>
                    <label for="nominal">Nominal :</label>
                    <input type="number" name="nominal" />
                </p>
                <p>
                    <input type="submit" value="tambah_siswa" name="tambah" />
                </P>
</fieldset>
</form>
</body>
</html>