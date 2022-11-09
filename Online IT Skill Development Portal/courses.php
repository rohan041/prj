<!-- Start Header --->
<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");
 ?>
<!-- End Header-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/book.jpg" alt="courses" style="height: 500px;width: 100%; \object-fit: cover;box-shadow: 10px;">
    </div>
</div>


<!--Start most populer course-->
<div class="container mt-5">
    <h1 class="text-center">All Course</h1>
    <div class="row mt-4">
    <?php 
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while ($row =$result->fetch_assoc()) {
                $course_id = $row['course_id'];
                echo '<div class="col-sm-4 mb-4">
                    <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left;padding: 0px;margin: 0px;">
    <div class="card">
    <img src="data:image/jpeg;base64,'.base64_encode($row['course_img']).'"class="card-img-top" alt="Guiter" />
        
        <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <p class="card-text">'.$row['course_desc'].'</p>
        </div>
            <div class="card-footer">
                <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del></small
                ><span class="font-wetght-bolder">&#8377 '.$row['course_price'].'</span></p><a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
    </div>
</a>
</div>';
            }
        }
    ?>

    </div>
</div>
<!--Start most populer course card 1-->

<!-- Start Footer-->

<?php include("./mainInclude/footer.php"); ?>

<!-- End  Footer-->