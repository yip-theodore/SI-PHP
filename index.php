<?php
/**
 * Created by PhpStorm.
 * User: TomTom
 * Date: 12/02/2018
 * Time: 16:30
 */

require_once "connexion.php";


$sql = "
SELECT
id,
Title
FROM
Gifs
;";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table>
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><img src="gif/<?=$row["id"]?>.gif" alt=""></td>
            <td><?=$row["Title"]?></td>
        </tr>

    <?php endwhile;?>
</table>