<?php 
if(!isset($_SESSION)){
    session_start();
}
include("admininclude/header.php");
include("../dbconnection.php");

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminlogemail'];
}else{
    echo "<script> location.href='../index.php'; </script>";
}

if(isset($_REQUEST['article'])){
    if(($_REQUEST['title'] == "") && ($_REQUEST['desc'] == "") && ($_REQUEST['detail']) && ($_FILES['artimg'] ['name'] == "" )){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All the Fields</div>'; 
    }
   elseif(($_REQUEST['title'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill the Title</div>';
    }elseif($_REQUEST['desc'] == ""){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill the Desc</div>'; 
    }
    elseif ($_REQUEST['detail'] == "") {
         $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill the Detail</div>'; 
    }
    elseif($_FILES['artimg'] ['name'] == ""){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill the image</div>'; 
    }
    else{
        $articletitle = $_REQUEST['title'];
        $articledesc = $_REQUEST['desc'];
        $articledetail = $_REQUEST['detail'];
        $article_img = addslashes(file_get_contents($_FILES['artimg']['tmp_name']));

        $sql = "INSERT INTO `article`(`Title`, `article_desc`, `article_details`, `Image`) VALUES('$articletitle', '$articledesc', '$articledetail','$article_img')";
        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Article Added Successfully</div>';
        }else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add Course</div>';
        }

    }
}
if(isset($_FILES['artimg'])){
    $file_name = $_FILES['artimg']['name'];
    $file_size = $_FILES['artimg']['size'];
    $file_tmp = $_FILES['artimg']['tmp_name'];
    $file_type = $_FILES['artimg']['type'];
    move_uploaded_file($file_tmp,"../image/Article/".$file_name);
}

?>
    <div class="col-sm-6 mt-5 jumbotron">
    <form class="mx-5" method="POST" enctype="multipart/form-data" class="mt-5">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea  type="text" class="form-control" placeholder="Description" rows="5" cols="50" id="desc" name="desc"></textarea>
        </div>
        <div class="form-group">
            <label for="detail">More Details</label>
            <textarea  type="text" class="form-control" placeholder="More Details" rows="7" cols="50" id="detail" name="detail"></textarea>
        </div>
        <div class="form-group">
            <label for="artimg">Upload image</label>
            <input type="file" class="form-control"  id="artimg" name="artimg" onchange="readURL(this);"> 
        </div>
        <button type="submit" class="btn btn-success" name="article">Upload Article</button>
        <a href="article.php" class="btn btn-secondary">Close</a>
             <?php if(isset($msg)) {echo $msg;} ?>
    </form>
    </div>



<?php 
include("admininclude/footer.php");
?>

