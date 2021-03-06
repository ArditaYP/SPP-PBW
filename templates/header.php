<?php
require_once '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Smk Ti Bali Global</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../templates/css/style.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-clinic-medical"></span> <span>Smk Ti Bali Global</span></h2>
        </div>
        <!--sidebar-->
        <div class="sidebar-menu">
            <ul>
                <?php if (isset($_SESSION['leveluser'])) : ?>
                    <li>
                        <a href="../pembayaraan/pembayaraan.php" class="active"><span class="las la-home"></span>
                            <span>Pembayaraan</span></a>
                    </li>
                <?php endif; ?>

                <?php if (isset($_SESSION['leveluser'])) : ?>
                    <?php if ($_SESSION['leveluser'] == 'admin') : ?>

                        <li>
                            <a href="../kelas/index.php"><span class="las la-stethoscope"></span>
                                <span>Kelas</span></a>
                        </li>
                        <li>
                            <a href="../siswa/index.php"><span class="las la-user"></span>
                                <span>Siswa</span></a>
                        </li>
                        <li>
                            <a href="../spp/index.php"><span class="las la-user-injured"></span>
                                <span>SPP</span></a>
                        </li>
                        <li>
                            <a href="../petugas/index.php"><span class="las la-book-medical"></span>
                                <span>Petugas</span></a>
                        </li>
                        <hr style="margin: 1rem 0;">
                    <?php endif; ?>
                <?php endif; ?>
                <li>
                    <a href="../History/index.php"><span class="las la-history"></span>
                        <span>History</span></a>
                </li>
                <li>
                    <a href="../Login/logout.php"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>