<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
    <!-- bootstrap v4 -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- my css -->
    <link rel="stylesheet" href="main.css">
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <!-- my script -->
    <script src="script.js"></script>
    <title>PHP</title>
</head>
                                                <!-- Pagina con la lista delle stanze,
                                                un click porta al dettaglio della
                                                stanza -->
<body>
    <<div id="app" class="container text-center">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>DB</h1>
                <?php
                    require_once "data.php";

                    $conn = getConnection();
                    $query = 'SELECT room_number, id FROM stanze';
                    $stmt = $connection -> prepare($query);
                    $stmt -> execute();
                    $stmt -> bind_result($roomNumber, $roomId);
                    while ($stmt -> fetch()) {
                        echo '<li>
                            <a href="room.php/?roomId=' . $roomId . '">Room: #' . $roomNumber . '
                        </li>'; 
                    }
                    closeConn($conn, $stmt);
                ?>
            </div>
        </div>
    </div>
</body>
</html>