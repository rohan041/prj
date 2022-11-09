<div class="feedback" id="Feedback">
  <h1 class="text-center p-5">Feedback</h1>
  <ul class="sub-feedback  jumbotron">
    <?php

        $sql = "SELECT * FROM feedback ORDER BY f_id DESC LIMIT 5";
        $result = $conn->query($sql);
        while($f_row = $result->fetch_assoc()){
          $s_sql = "SELECT stu_name,stu_img FROM student WHERE stu_id = '$f_row[stu_id]' ";
          $s_result = $conn->query($s_sql);
          while($S_row = $s_result->fetch_assoc()){
              echo '<li>
                      <div class="feedback-item">
                        <img src="data:image/jpeg;base64,'.base64_encode($S_row['stu_img']).'">
                        <h2>'.$S_row["stu_name"].'</h2>
                        <p>'.$f_row["f_content"].'</p>
                      </div>
                    </li>';
          }
        }
    ?>
  </ul>
</div>
<style type="text/css">
  .feedback{
    width: 100%;
  }
  .sub-feedback{
    display: flex;
    list-style: none;
    width: 100%;
    justify-content: space-evenly;
  }
  .feedback-item{
    border: 1px solid #b6b6b6;
    padding: 10px;
    border-radius: 4px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    width: 200px;
    align-items: center;
  }
  .feedback-item img{
    width: 120px;
    height: 120px;
    border-radius: 100%;
  }
</style>