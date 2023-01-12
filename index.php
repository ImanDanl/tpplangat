<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPP LANGAT</title>
    
</head>
<body>
<div class="container my-5">
        <h2>Senarai Pelajar</h2>
        <a class="btn btn-primary" href="/tpplangat/tambahpelajar.php" role="button">Tambah Pelajar</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No Ndp</th>
                    <th>Nama Pelajar</th>
                    <th>No Kp</th>
                    <th>Jantina</th>
                    <th>No Hp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost" ;
                $username = "root" ;
                $password = "";
                $database = "datapelajar" ;

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM info_pelajar";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid querry: " . $connection->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    
                    <td>$row[id]</td>
                    <td>$row[no_ndp]</td>
                    <td>$row[nama_pelajar]</td>
                    <td>$row[no_kp]</td>
                    <td>$row[jantina]</td>
                    <td>$row[no_hp]</td>
                    <td>
                        <a class='btn btn-danger btn-sm' href='/tpplangat/padam.php?id=$row[id]'>Padam</a>
                    </td>
                </tr>
                    " ;
                    
                }
                ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>