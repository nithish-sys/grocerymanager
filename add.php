<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $task = $_POST['Name'];
    $qty = $_POST['quantity'];
    $pieces = $_POST['pieces'];

    $sql = "insert into `groceryData` (Name,quantity,pieces)
    values('$task','$qty','$pieces')";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location:index.php");
    }else{
        die(mysqli_error($con));
    }
    
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>grocery Manager</title>
</head>

<body>
    <h1 class="bg-dark text-light text-center py-2">grocery Manager</h1>


    <!-- form to enter items -->

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="Name">grocery name</label>
                <input type="text" class="form-control" id="Name" aria-describedby="Name"
                    placeholder="enter groceryData" name="Name" required>
            </div>
            <div class="form-group">
                <label for="quantity">grocery quantity(gms)</label>
                <input type="number" class="form-control" id="quantity" aria-describedby="quantity"
                    placeholder="enter quantity(gms)" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="pieces">grocery pieces</label>
                <input type="number" class="form-control" id="pieces" aria-describedby="pieces"
                    placeholder="enter pieces" name="pieces" required>
            </div>

            <button type="submit" class="btn btn-info my-4" name="submit" id="submit">Submit</button>
        </form>
    </div>





    <!-- jquery cdn links -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- bootstrap and js popper cdn links -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>