<?php
include('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
body{
    background-image: url('https://media.istockphoto.com/photos/books-picture-id949118068?k=20&m=949118068&s=612x612&w=0&h=e8tiaCdluEA9IS_I7ytStcx--toLbovf3U74v-LfNAk=');
    background-repeat: no-repeat;
    background-attachment:fixed ;
    background-size: 100% 100%;
    
  backdrop-filter: blur(2px);

}


.table{
    border: 2px;
    border-color: red;
    padding: 12px;
    color: white;
    background-color: #696969;
    
}



</style>
  </head>
  <body>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <h3 class="navbar-brand">Elibrary</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="students.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="books.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Courses</a>
        </li>
        
      </ul>
      <ul class="navbar-nav navbar-right ">
        <li class="nav-item">
          <a class="nav-link " href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editprofile.php">Edit Profile</a>
        </li>
        <li><a href="logout.php" class="btn btn-info ">
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
       
        
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div id="std1">
        <div class="row">
            <div class="col-lg-4">
            <a class="btn btn-primary btn-success " href="/elibrary/addcourse.php" role="button">Add New Course</a>
            </div>
            <div class="col-lg-3">
            <a class="btn btn-primary btn-success " href="#" role="button">Edit Course</a>
            </div>
            <div class="col-lg-5">
            <a class="btn btn-primary btn-success " href="#" role="button">Show status</a>
            </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<br>
<div class="container" >
<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">Course Number</th>
      <th scope="col">Name</th>
      <th scope="col">Instructors</th>
      <th scope="col">Year</th>
      <th scope="col">Language</th>
      <th scope="col">Skills</th>
      <th scope="col">Link</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
$query="select * from courses";
$table=mysqli_query($conn,$query);
$num=mysqli_num_rows($table);

while($res=mysqli_fetch_array($table))
{

    ?>
    <tr>
      <td><?php echo $res['courseid']; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['instructors']; ?></td>
      <td><?php echo $res['year']; ?></td>
      <td><?php echo $res['language']; ?></td>
      <td><?php echo $res['skills']; ?></td>
      <td><?php echo $res['link']; ?></td>
      <td><a href="courseedit.php?cid=<?php echo $res['courseid']; ?>" class="btn btn-info">Edit</a></td>
      <td><a href="coursedelete.php?cid=<?php echo $res['courseid']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php   } ?>
  </tbody>
</table>
</div>

</body>

</html>