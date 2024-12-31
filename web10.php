<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <table>
    <?php echo'
    <table class="table table-striped mt-5 mb-5">
        <tr>
            <td>ROLLNO</td>
            <td>PRESENT</td>
            <td>ABSENT</td>
            <td>OD</td>
            <td>DATE</td>
        </tr>';
        {
            $conn=mysqlu_connect("localhost","root","","dcsa");
            if($conn->connect_error){
                die("connection failed:".$conn->connect-error);
            }
            $sql="SELECT rolno,present,absent,onduty,date from attendance";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".$row["rollno"]."</td></td>".$row["present"]."</td><td>".$row["absent"]."</td><td>".$row["onduty"]."</td><td>".$row["date"]."</td></tr>";
                }
                echo"</table>";
            }
            else{
                echo"0 result";
            }
            $conn->close();
        }
        ?>
    <a class="link" class="btn btn-primary" href="admin.php">Logout</a>
    </table>
</body>
</html>