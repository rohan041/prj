<?php 
include("./dbconnection.php");
include("./mainInclude/header.php");



 ?>

<!--Start most populer course-->
<div class="container mt-5">
    <h1 class="text-center" >populer Article</h1>
</div>
<!--Start most populer course card 1-->

<div class="card-deck mt-4">
    <div class="row mt-4">
    <?php   
        $sql = "SELECT * FROM article LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while ($row =$result->fetch_assoc()) {
                $Aid = $row['Id'];
                echo '
                    <a href="fullarticle.php?id='.$Aid.'" class="btn" style="text-align: left;padding: 0px;margin: 0px;">
    <div class="card">
        <img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"class="card-img-top"/>
        <div class="card-body">
            <h5 class="card-title">'.$row['Title'].'</h5>
            <p class="card-text">'.$row['article_desc'].'</p>
        </div>
           <div class="card-footer">
            <p class="card-text d-inline"><i class="fas fa-user"></i><small class="ml-3" style="font-size: 100%; margin-left:90px;">By Admin</small
                ></br>
                <p class="card-text d-inline">Date:<small style="font-size: 100%;">'.$row['Date'].'</small
                ></br>
                 <p class="card-text d-inline" >Views:<small style="font-size: 100%; ">'.$row['Views'].'</small></br>
                </p><a  href="fullarticle.php?id='.$Aid.'"  class="btn btn-primary text-white font-weight-bolder float-right">Lean More</a>
            </div>
    </div>
</a>';
            }
        }
    ?>
<!--End most populer course-->

<!-- Start Footer -->

<?php include("./mainInclude/footer.php"); ?>

<!-- End Footer -->