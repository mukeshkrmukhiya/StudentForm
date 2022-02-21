<?Php 
$stu_id = $_GET['id'];

   
include 'config.php';
$sql = "DELETE FROM student where sid = '{$stu_id}' ";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful!");

header("Location: http://localhost/revphp/crud/index.php");
    

 mysqli_close($conn);        

?>