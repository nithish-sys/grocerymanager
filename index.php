<?php

include 'connect.php';

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="aSerialnymous">
    <title>Grocery Manager</title>
</head>

<body>
    <h1 class="bg-dark text-light text-center py-2">Grocery Manager</h1>
    <div class="container">
        <button class="btn btn-primary my-5 ">
            <a href="add.php" class="text-white " style="text-decoration:Serialne;">add Grocery</a>
        </button>
        <!-- table -->

        <table class="table" id="groceryTable">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">quantity(gms)</th>
                    <th scope="col">pieces</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `groceryData`";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $SerialNo = $row['SerialNo'];
                        $Name =  $row['Name'];
                        $quantity = $row['quantity'];
                        $pieces = $row['pieces'];

                        echo '
            <tr>
                    <td>'.$Name.'</td>
                    <td>'.$quantity.'</td>
                    <td>'.$pieces.'</td>
                <td>
                    <a href="update.php?updateSerialNo='.$SerialNo.'" class="mr-3 text-info editTask" title="edit" data-target="#taskmodal"
                        data-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="eveSerialdd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg></a>
                    <a href="delete.php?deleteSerialNo='.$SerialNo.'" class="mr-3 text-danger deleteTask" title="delete"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="eveSerialdd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></a>
                </td>
            </tr>';
                    }
                    
                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>