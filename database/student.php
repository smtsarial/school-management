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
            echo '<div class="alert alert-success col-md-2" role="alert">Course id ='.$course_id.' added successfully !!</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">'. $conn->error .'</div>';
        }
    }
}

function dropCourse($student_id, $course_id)
{
    include('../config.php');
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = "DELETE FROM register_course WHERE register_course.course_id = ".$course_id." AND register_course.student_id =".$student_id;
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success col-md-2" role="alert">Course ID='.$course_id.' Dropped successfully !!</div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">'. $conn->error .'</div>';
        }
    }
}
function getCourseFiles($course_id){
    include('../config.php');

    
    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Connection failed " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM courses INNER JOIN course_files ON courses.id=course_files.courseFiles_id WHERE courseFiles_id=".$course_id;
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="materials1"><li><a href="uploads/'.$row['file_name'].'" target="_blank" download>'.$row['file_name'].'</a>
            </li></div>';
            }
        } else {
            echo "THERE IS NO FILE IN THIS COURSE";
        }
    }
    mysqli_close($conn);


}

?>
