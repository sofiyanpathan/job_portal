<?php include 'header.php'?>
<?php include 'config.php'?>
<style>
    .sidebar{
        margin-top:10px;
    }
</style>

<div class="content">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT `name`,`apply`,`year` FROM `candidate`";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
    

    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['apply'].'</td>
      <td>'.$rows['year'].'</td>
    </tr>';}}
    else{
      echo"";
    }
    ?>
    
  </tbody>
</table>
</div>

