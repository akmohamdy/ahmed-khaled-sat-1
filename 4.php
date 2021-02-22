
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <!-- Ass 4 -->
    <table border="1">
        <?php for($i=1;$i<=12;$i++){ ?>
            <tr>
                <?php for($j=1;$j<=12;$j++){ ?>
                    <td><?php echo "$i * $j = ".$i*$j;?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

  </body>
</html>