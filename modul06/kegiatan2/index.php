<!-- Header -->
<?php
    $page = "index";
    include 'header.php';
?>

<!-- Content -->
<div class="container mt-5 pt-5">
    <table class="table table-hover">
        <tr class="bg-danger text-light">
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
        </tr>

        <?php
            include "koneksi.php";
            $query = "select * from mahasiswa order by id_mahasiswa desc";
            $data = $koneksi->query($query);
            $i = 1;
            foreach($data as $row) {
                echo '
                <tr>
                <td>'.$i++.'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['nim'].'</td>
                <td>'.$row['email'].'</td>
                ';
            }
        ?>
    </table>
</div>

<!-- Footer -->
<?php
  include 'footer.php';
?>