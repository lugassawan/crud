<?php
    session_start();
    include('inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan CRUD</title>
    </head>
    <body>
        <h1>Data Tampil</h1>
        <a href="tambah.php">Tambah</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $tampil = mysqli_query($db, "SELECT*FROM tb_info ORDER BY id ASC");
                while($row = mysqli_fetch_array($tampil)){

            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Ubah</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>