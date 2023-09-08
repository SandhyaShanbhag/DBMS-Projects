<?php 
 include("connection.php");
session_start()

 ?>
<!DOCTYPE html>
<html>
<head>
<title>ADD NEW MOVIE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  
table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
        .button {
  background-color:#008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}




</style>

</head>
<body>

<nav>
                         <ul>
                            <li><a class="nav-link" href="add.php">Add Movie</a></li> 
                            <li><a class="nav-link" href="project1.php">Logout</a></li>
                            
                        </ul> 
                </nav>
  

<section>
  <h1>ADD NEW MOVIE </h1>
<form action="newi.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="title" required>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="img"  class="form-control" placeholder="img" required>
                        </div>
                        <div class="form-group">
                        <label for="text">Content</label><br>
                       <textarea name="text" class="container" placeholder="Write " style="height:200px"></textarea>
                    </div>
                    <div class="modal-footer">
       
        <button type="submit" name="save" class="btn btn-primary">SUBMIT</button>
      </div>
</form>
</section>


        <h1>POST DETAILS</h1>
<table border="1">
  <tr>
    <th>Sl.no</th>
    <th>Movie Title</th>
    <th>Images</th>
    <th align-text="center">Content</th>
  </tr>
  <?php
  include("connection.php");
  error_reporting(0);
  $query = "select * from content";
  $data = mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);

  if($total!=0)
  {
    while($result=mysqli_fetch_assoc($data))
    {
      ?>
      
      <tr>
      <input type="hidden" class="delete_val" value="<?php echo $result['id']; ?>">
      <td><?php echo $result['id']; ?></td>
      <td><?php echo $result['title']; ?></td>
      <td> <?php echo $result['img']; ?></td>
      <td> <?php echo $result['txt']; ?></td>
      
     
      
      </tr>
      
      <?php
    }
  }
  else{
    echo "No records found";
  }
  ?>
  

  </table>
   


  </body>
</html>
