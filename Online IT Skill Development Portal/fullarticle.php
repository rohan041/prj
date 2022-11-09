<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");

$sql = "SELECT * FROM article WHERE id = '$_GET[id]'";
$result = $conn->query($sql);
while ($row =$result->fetch_assoc()) {
    $view = $row['Views'];
}
$Aid = $_GET['id'];
$view = $view + 1;
$sql = "UPDATE article SET Views = '$view' WHERE Id = '$Aid' ";
$conn->query($sql);


 $sql = "SELECT * FROM article WHERE id = '$Aid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
 ?>


<div class="container jumbotron mt-5">
    <h1 class="text-center text-white" style="background-color: #383838;"><?php echo $row['Title']; ?></h1>
    <div class="row mt-4">
        <img style="height: 50%; width: 50%; margin-left:28%;" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['Image']).'';?>"class="card-img-top"/>
        <h6 style="margin-top: 40px;"><?php echo $row['article_desc']; ?></h6>
        <p style="margin-top: 20px;"><?php echo $row['article_details'] ?></p>

    </div>     
    </div>
</div>

 <?php
#include("./mainInclude/footer.php");

?>