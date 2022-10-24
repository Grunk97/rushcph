<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Winner</title>
</head>
<body>

<div class="container my-5">
    <h1>Congrats!</h1>
<?php
            $sql="SELECT * FROM `crud`
            WHERE id >= (SELECT FLOOR( MAX(id) * RAND()) FROM `crud` )
            ORDER BY id LIMIT 1;";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)) {
                    $name=$row['name'];
                    echo '<tr>
                    <td>'.$name.'</td>
                    <td>
                    </td>
                </tr>';
                }
            }
            ?>

<br>
<br>
<button class="btn btn-primary"><a href="winner.php" class="text-light">Pick another winner</a></button>
<button class="btn btn-primary"><a href="display.php" class="text-light">Go back</a></button>

</div>
</body>
</html>
