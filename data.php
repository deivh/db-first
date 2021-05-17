<?php
    function getConnection( $servername = "localhost",
                            $username = "root",
                            $password = "root",
                            $dbname = "dbhotel") {

                                $connection = new mysqli($servername, $user, $password, $dbname);

                                if($connection && $connection -> connect_error){
                                    echo 'Conncetion failed: ' . $connection -> connect_error;
                                }
                        
                                return $connection;
                            }
                        
                            function closeConn($stmt, $conn) {
                                $stmt -> close();
                                $conn -> close();
                            }
?>