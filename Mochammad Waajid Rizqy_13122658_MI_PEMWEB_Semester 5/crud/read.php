
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
     <table border="1" cellpadding="10">
        <tr>
            <td><label for="nip">nip</label></td>
            <td><input type="text" name="nip" require></td>
        </tr>
        <tr>
            <td><label for="name">name</label></td>
            <td><input type="text" name="name" require></td>
        </tr>
        <tr>
            <td><label for="jabatan">jabatan</label></td>
            <td><input type="text" name="jabatan" require></td>
        </tr>
        <tr>
            <td><label for="email">email</label></td>
            <td><input type="email" name="email" require></td>
        </tr>
        <tr>
            <td><button type="create">create</button></td>
            <td><button type="submit" name="submit">create</button></td>
        </tr>
        <tr>
            <td><button type="update">update</button></td>
            <td><button type="submit" name="submit">update</button></td>
        </tr>
        <tr>
            <td><button type="delete">delete</button></td>
            <td><button type="submit" name="submit">delete</button></td>
        </tr>
      
     </table>
</form>

    <table border="1" cellpanding="10">
        <tr>
            <th>nip</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>email</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $row ['nim']; ?></td>
            <td><?= $row ['nama']; ?></td>
            <td><?= $row ['jabatan']; ?></td>
            <td><?= $row ['email']; ?></td>
            <td>
                <a href="create.php">create</a>
                <a href="delete.php">delete</a>            
                <a href="update.php">update</a>

            </td>
        </tr>
    <?php endwhile; ?>

    </table>
    
</body>
</html>