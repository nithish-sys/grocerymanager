<?php

include 'connect.php';

    $SerialNo = $_GET['updateSerialNo'];
    $sql = "select * from `groceryData` where SerialNo=$SerialNo"; 
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $SerialNo = $row['SerialNo'];
    $Name =  $row['Name'];
    $quantity = $row['quantity'];
    $pieces = $row['pieces'];
    
if(isset($_POST['Update'])){
    $Name = $_POST['Name'];
    $quantity = $_POST['quantity'];
    $pieces = $_POST['pieces'];

    $sql = "update `groceryData` set Name='$Name', quantity=$quantity, pieces=$pieces where SerialNo=$SerialNo"; 
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <h1 class="bg-dark text-light text-center py-2">Grocery Manager</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wSerialNoth=device-wSerialNoth, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Grocery Manager</title>
</head>

<body>
</body>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="Name">enter task</label>
            <input type="text" class="form-control" SerialNo="Name" aria-describedby="Name" placeholder="enter Name"
                name="Name" value=<?php echo $Name; ?> required>
        </div>
        <div class="form-group">
            <label for="quantity">grocery quantity(gms)</label>
            <input type="number" class="form-control" SerialNo="quantity" aria-describedby="quantity"
                placeholder="enter quantity(gms)" name="quantity" value=<?php echo $quantity; ?> required>
        </div>
        <div class="form-group">
            <label for="pieces">grocery pieces</label>
            <input type="number" class="form-control" SerialNo="pieces" aria-describedby="pieces"
                placeholder="enter pieces" name="pieces" value=<?php echo $pieces; ?> required>
        </div>
        <button type="submit" class="btn btn-info my-4" name="Update" SerialNo="submit">Update</button>
    </form>
</div>

</html>