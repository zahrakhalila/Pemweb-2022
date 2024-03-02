<!-- Header -->
<?php
    $page = "user";
    include 'header.php';
?>

<!-- Content -->
<div class="container mt-5 pt-5">
    <table class="table table-hover">
        <tr class="bg-danger text-light">
            <th>ID Mahasiswa</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Username</th>
            <th>Password</th>
            <th>Waktu Pembuatan</th>
        </tr>

        <?php
            include "koneksi.php";
            $query = "SELECT user.id_mahasiswa, mahasiswa.nama, mahasiswa.nim, user.username, user.password, user.created_at FROM (user INNER JOIN mahasiswa ON user.id_mahasiswa = mahasiswa.id_mahasiswa) order by id_mahasiswa desc";
            $data = $koneksi->query($query);
            $i = 1;
            foreach($data as $row) {
                echo '
                <tr>
                <td>'.$row['id_mahasiswa'].'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['nim'].'</td>
                <td>'.$row['username'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['created_at'].'</td>
                ';
            }
        ?>
    </table>
</div>

<!-- Footer -->
<?php
    include 'footer.php';
?>