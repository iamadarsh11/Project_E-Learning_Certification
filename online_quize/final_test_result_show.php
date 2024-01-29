<?php 

include ("includes/bootstrap_cdn_inc.php");
include ("class/users.php");
$res=new users;
//print_r($_POST);
$answers=$res->show_result($_POST);  
 ?>


<div class="container mt-5">
	<center><div class="col-md-6">
 <!-- <center>
 	<h2>right answer : <?php echo $answers['right'];?></h2>
 	<h2>wrong answer : <?php echo $answers['wrong'];?></h2>
 	<h2>not attempted : <?php echo $answers['not_attempted'];?></h2>

 </center> -->
 <?php 
 		$total_ques=$answers['right']+$answers['wrong']+$answers['not_attempted'];
 		$attempted_ques=$total_ques-$answers['not_attempted'];
 		$percentage=($answers['right']*100)/$total_ques;
 		$message="";
 		if ($percentage<=100 and $percentage>=70) 
 		{
 			$message="Congratulations, You have scored : ";
 		}
 		elseif ($percentage<=69 and $percentage>=50) 
 		{
 			$message="Satisfactory, You scored : ";
 		}
 		elseif ($percentage<=49 and $percentage>=35) 
    {
      $message="You can do better, You scored : ";
    }
    else
    {
      $message="Sorry, You failed, You scored : ";
    }



  ?>
<h2>Your Final test Result</h2><br>
 <table class="table table-bordered table-active">
 	
  <thead>
    <tr>
      <th scope="col">Total No.of questions</th>
      <th scope="col"><?php echo $total_ques; ?></th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Attempted Questions</th>
      <td><?php echo $attempted_ques; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Correct answers</th>
      <td> <?php echo $answers['right'];?></td>
      
    </tr>
    <tr>
      <th scope="row">Incorrect Answers</th>
      <td><?php echo $answers['wrong'];?></td>
  
    </tr>

      <tr>
      <th scope="row">Not Attempted</th>
      <td><?php echo $answers['not_attempted'];?></td>
  
    </tr>
  </tbody>

 

</table>
 <div class="card-header mt-5 bg-danger text-light">
  	<?php echo $message; ?> <b><?php echo $percentage.' %'; ?></b>
  </div>


      
      <?php

      if ($percentage<39)
      {
        echo '<button type="button" class="btn btn-primary mt-3"><a href="../welcome.php" style="text-decoration: none; color: white;">Back</a></button>';
      }
      else
      {
         echo '<button type="button" class="btn btn-primary mt-3"><a href="../welcome.php" style="text-decoration: none; color: white;">Back</a></button>';
         echo " ";
         echo '<button type="button" action="" class="btn btn-primary mt-3"><a href="generate_certificate.html" style="text-decoration: none; color: white;">Want a Certificate? </a></button>';
      }
      
      ?>
</div></center>
</div>