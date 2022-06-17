<?php include 'header.php'?>
<?php include 'config.php'?>
<!-- Page content -->
<div class="content" style="position:fixed;">
    <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="post">
  <div class="mb-3">
    <label for="Companyname" class="form-label">Company Name </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="company_name">
  </div>
  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="position">
  </div>
  <div class="mb-3">
    <label for="jobdesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="job_desc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="skills">
  </div>
  <div class="mb-3">
    <label for="ctc" class="form-label">CTC</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="ctc">
  </div>
  
  <button type="submit" class="btn btn-primary"name="job">Submit</button>
</form>
  </div>
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT `company_name`,`Position`,`CTC` FROM `user_info`";
        $result=mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
        
        echo"
        <tbody>
        <tr>
              <td>".++$i."</td>
              <td>".$row['company_name']."</td>
              <td>".$row['Position']."</td>
              <td>".$row['CTC']."</td>
        </tr>";

        }}   
        else{
          echo"";
        } 
    ?>
  </tbody>
</table>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>