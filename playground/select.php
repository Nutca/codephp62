<?php
include 'template/header.html';
require_once 'connectdb.php';

$strSQL = "SELECT `id_user`, `username`, `status` FROM `user`";
$result = $myconn->query($strSQL);
?>

<body>
        <table class="table">
        <thead class="thead-dark">  
        <tr>
            <th> No.</th>
            <th> Username</th>
            <th> Status</th>
            <th> Edit</th>
            <th> Delete</th>          
        </tr>

        <thead>
        </tbody>
        <?php
        while ($row = $result->fetch_array()) {
            //echo $row["username"] . "<br>";
        ?>
            <tr>
                <td><?php echo $row["id_user"] ?></td>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["status"] ?></td>
                <td><a href="update.php?id_user=<?= $row["id_user"]?>&username=<?= $row["username"]?>&status=<?= $row["status"] ?>"><i class="fas fa-edit"></i></a></a></td>
                <td><a href="delete.php?id_user=<?php $row["id_user"] ?>"><i class="fas fa-trash-alt"></i></a></a></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <a href="insert.php">Add new user</a>

    <?php
    include 'template/footer.html';
    ?>
</body>

</html>