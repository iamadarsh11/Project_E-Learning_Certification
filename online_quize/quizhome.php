<?php 
  
include 'class/users.php';       
$profile=new users;               
extract($_POST);

 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1{
     float: right !important;
  }
 



</style>


<body style="">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top position-relative">  
  
  <a class="navbar-brand text-white">JustASSK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

      
  <div class="container mt-4 col-md-10 position-relative">
    <h3 align='center' style="font-family: 'Catamaran', sans-serif;">Welcome ,Lets start Test</h3>
  
    <ul class="nav nav-tabs">
    <li class="nav-item">
      
    </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#menu2" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item li1">
      <a class="nav-link justify-content-end" href="#menu3" data-toggle="tab">Logout</a>
    </li> -->
   
  </ul>

   <div class="tab-content">
     <div class="tab-pane active " id="menu1" >
   <?php $quize_course_name=$_GET['course_name']; ?>
     <center><a  class="btn btn-success mt-5" href="question_show.php?course_name=<?php echo $quize_course_name ;?>" >Start Test</a></center>


    
     <center><div class="col-sm-6 mt-3">
       <div class="collapse" id="myid">
      <div class="form-group">
    <label>Select Course</label>
   <!--  <form method="POST" action="question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
       $profile->show_courses();                                 //calling show_courses() method of users class
       foreach ($profile->cat_data as $key => $course) 
       {
         
 ?>

      <option value="<?php echo $course['id'] ;?>"><?php echo $course['cat_name']; ?></option> 
      

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-success mt-3">Start Quiz</button>
  </form> -->
  </div>
</div>
</div>
</center>



      </div>
      <div class="tab-pane fade" id="menu2">  
        <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    foreach ($profile->data as $key => $prof) 
    {
      
   ?>
    <tr >
      <th scope="row"><?php echo $prof['id']; ?></th>
      <td><?php echo $prof['name']; ?></td>
      <td><?php echo $prof['email']; ?></td>
      <td><img src="img/<?php echo $prof['img']; ?>" class="img-fluid" width="35px" height="30px"></td>
    </tr>
   
  </tbody>
<?php } ?>
</table>


       </div>
       <div class="tab-pane fade" id="menu3">this is menu 3</div>
       
     
   </div>
             
  </div>            

</body>
</html>






