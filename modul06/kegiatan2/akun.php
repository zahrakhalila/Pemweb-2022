<!-- Header -->
<?php
    $page = "akun";
    include 'header.php';
?>

<!-- Content -->
<div class="container mt-5 pt-5">
    <table class="table table-hover">
        <tr class="bg-danger text-light">
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Waktu Pembuatan</th>
        </tr>

        <?php
            include "koneksi.php";
            $query = "select * from user order by id_user desc";
            $data = $koneksi->query($query);
            $i = 1;
            foreach($data as $row) {
                echo '
                <tr>
                <td>'.$i++.'</td>
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