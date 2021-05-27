<?php


function offeredCourses()
{
    require_once('../config.php');
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($username == $row['username']) {
                    echo (strtoupper($row['name']) . ' ' . strtoupper($row['surname']));
                }
            }
        } else {
            echo "No results";
        }

        mysqli_close($conn);
    }
}

?>