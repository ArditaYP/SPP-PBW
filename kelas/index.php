<?php
require_once '../koneksi.php';
$query = "select * from kelas";
$result = mysqli_query($conn, $query);

require_once '../templates/header.php';
?>
<section class="home">
    <div class="main-content">
        <h1>
            Kelas
        </h1>
        <a href="tambah.php">>Tambah Data Kelas</a>
        <table>
            <thead>
                <th>idkelas</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><?php echo $row['id_kelas'] ?></td>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['kompentensi_keahlian'] ?></td>
                        <td style="display: flex; justify-content: center;">
                            <a href="edit.php?id=<?= $row['id_kelas'] ?>">Edit</a>
                            <a href="delete.php?id=<?= $row['id_kelas'] ?>">Hapus</a>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>
<?php
require_once '../templates/footer.php';
?>