<?php include 'header.php'; 
 ?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input  onclick = "fun()"  class = "submit" type="submit" name="deletebtn" value="Delete" />
        <?php
         include 'config.php';
         if(isset($_POST['deletebtn'])){
         $stu_id = $_POST['sid'];
           
         $sql = "DELETE FROM student where sid = '{$stu_id}' ";
         
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful!");
         

header("Location: http://localhost/revphp/crud/index.php");
       
         
       

        

 mysqli_close($conn);
            
         }
         ?>
    </form>
</div>
</div>
</body>

</html>
