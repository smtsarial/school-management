<?php


function nameSurname($username)
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
    }
    mysqli_close($conn);
}

function registerCourse($student_id, $course_id)
{
    include('../config.php');
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = 'INSERT INTO register_course (course_id, student_id, gpa) VALUES ('.$course_id.','.$student_id.', NULL)';
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success col-md-2" role="alert">Account created successfully !!</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">'. $conn->error .'</div>';
        }
    }
}
?>
