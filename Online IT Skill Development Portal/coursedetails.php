<!-- Start Header --->
<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");
error_reporting(0);
 ?>
<!-- End Header-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/book.jpg" alt="courses" style="height: 500px;width: 100%; \object-fit: cover;box-shadow: 10px;">
    </div>
</div>


<!-- Start main Courses Page -->
<div class="container mt-5">
    <?php 

    if(isset($_GET['course_id'])){
        $course_id = $_GET['course_id'];
        $_SESSION['course_id'] = $course_id;
        $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    ?>
    <div class="row">
        <div class="col-md-4">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['course_img']).'"class="card-img-top" alt="Guiter"  />'; ?>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: <?php echo $row['course_name']; ?></h5>
                <p class="card-text"><?php echo $row['course_desc']; ?></p>
                <p class="card-text">Duration: <?php echo $row['course_duration']; ?></p>
                <form action="checkout.php" method="POST">
                    <p class="card-text d-inline">Price:<small><del>&#8377 <?php echo $row['course_original_price']; ?></del></small
                ><span class="font-wetght-bolder">&#8377 <?php echo $row['course_price']; ?></span></p>
                <input type="hidden"  name="id" value="<?php echo $row['course_price']; ?>">
                <input type="hidden"  name="data" value="<?php echo $_GET['course_id']; ?>">
                <?php 
                $sql = "SELECT * From courseorder WHERE stu_email = '$_SESSION[stuLogEmail]' and course_id = '$course_id'";
$sql = mysqli_query($conn, $sql);
if(mysqli_num_rows($sql) == 0){ ?>
                <button type="submit" name="buy" class="btn btn-primary text-white font-weight-bolder float-right">Buy Now</button>
            <?php } ?>
                </form>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Lesson No.</th>
                <th scope="col">Lesson Name.</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    $sql = "SELECT * FROM lesson";
     $result = $conn->query($sql); 
     if($result->num_rows > 0){
        $num = 0;
        while($row = $result->fetch_assoc()){
            if($course_id == $row['course_id']){
                $num++;
         echo ' <tr>
                <th scope="row">'.$num.'</th>
                <td>'.$row['lesson_name'].'</td>
            </tr>';
        }
        }
     }
    ?>
            </tbody>
        </table>
    </div>
</div>

<!-- End main Courses Page -->

<!-- Start Footer-->
<?php include("./mainInclude/footer.php"); ?>
<!-- End  Footer-->