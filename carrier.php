<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body{
        margin:0px;
        padding:0;
      }
        .navbar{
    position: fixed;
    width: 100%;
    top:0;
    overflow: hidden;
    background-color: #333;
}


    
    .img{
      text-align:center;
      background-color:aqua;
      margin-top:5px;
      margin-right:0px;
      margin-left:0px;
      padding-bottom:10px;
      padding-top:10px;


    }
    .img h1{
      color:Green;
    }
    .img h3{
      color:red;
    }
    .jobs{
      border: 3px solid black; 
      margin-top:10px;
      margin-bottom:10px;
      padding-left:10px;
      box-shadow:5px 5px gray;
    }
    
    </style>
    <title>Carrier</title>
</head>
<body>
    <div class="container-fluid">
        
<div class="img" >
  
  <h1>Job Portal</h1>
  <br>
  <h3>
    Best available jobs matching  your skills!
  </h3>

</div>
  <div class="row">
    <?php
        $sql="SELECT `company_name`,`Position`,`job_desc`,`CTC`,`Skills` FROM `user_info`";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
          while($row = $result->fetch_assoc()){
        
        echo'
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align:center;">'.$row['Position'].'</h3>
        <h4 style="text-align:center;">'.$row['company_name'].'</h4>
        <p style="color:black; text-align:justify;">'.$row['job_desc'].'</p>
        <p style="color:black;"><b>SKills Required:</b>'.$row['Skills'].'</p>
        <p style="color:black;"><b>CTC:</b>'.$row['CTC'].'</p>
        <p>
  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModal" role="button" aria-expanded="false" aria-controls="collapseExample">
    Apply Now
  </a>
        </div>
      </div>';
          }
        }

    ?><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="carrier.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="sub" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>