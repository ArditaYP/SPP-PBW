<!DOCTYPE html>
<html lang="en">

<head>
    <title>EditData</title>
</head>

<body>s
    <center>
        <?php

        include("../koneksi.php");
        $id = $_GET['id'];

        $query = "SELECT * FROM siswa where nisn=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        $queryy = "SELECT * FROM kelas";
        $resultt = mysqli_query($conn, $queryy);
        $read = readdata($resultt);
        ?>
        <form method="POST" action="prosesedit.php">
            <input type="text" placeholder="nisn" hidden name="nisn" value="<?php echo $data['nisn']; ?>"><br><br>
            <select name="idkelas" id="">
                <?php foreach ($read as $r) : ?>
                    <option value="<?= $r['id_kelas'] ?>"><?= $r['nama_kelas'] ?></option>
                <?php endforeach; ?>
            </select><br><br>
            <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
            <input type="submit" value="edit">
        </form>

    </center>

</body>

</html>