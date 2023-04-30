<?php



  
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "db_jobportal";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }

  if (isset($_SESSION['user_id'])==true)
  {
$id = $_SESSION['user_id'];
$query = "SELECT * FROM login WHERE user_id ='$id'";
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result))
{  

   $signup_as=$row['signup_as'];
   $username=$row['fullname'];
   $user_id=$row['user_id'];
   $sender_id=$id;

       
}
  }
 
  
  ?>










  <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/back1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Freelancer</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Freelancer Panel</h1>
          </div>
        </div>
      </div>
    </div>

<style type="text/css">
  
  .table
  {
    color: black;
    font-weight: bold;
  }
</style>
        


<?php

if (isset($_SESSION['user_id'])==false)
{
echo "<p style='text-align:center'>Please Login to check freelancer portal";
}
else
{


if ( $signup_as == 0 && $_SESSION['user_id'])
{
 echo "<p style='text-align:center'>You are login as client hire a freelancer from given below list";
 ?>
 <table class="table table-striped table-advance table-hover">
 <h1 style="text-align: center;"  >Registered Freelancer with us</h1>

  <hr>
  <thead>
  <tr>
    <div class="table">

    <th style="color: black">Serial No.</th>
      <th>Freelancer Name</th>
      <th>Freelancer  user_id</th>
      <th>Freelancer Skill</th>
      <th>Freelancer Experience</th>
      <th>Client Profile</th>
     <!--  <th>Contact Him/Her</th> -->


                                        
  </tr>
  </thead>
  <tbody>
                       <?php 
                       
                       
                       $con= mysqli_connect('localhost','root','');
                       mysqli_select_db($con,'db_jobportal');
                      
                       
  $fname=1;
  $query2="SELECT * FROM login WHERE signup_as ='$fname'";
  $ret=mysqli_query($con,$query2);
$cnt=1;
while($row=mysqli_fetch_array($ret))
{
 $r_id=$row['user_id'];
 ?> 
  <tr>
  <td><?php echo $cnt;?></td>
      <td><?php echo $row['fullname']?></td>
           <td><?php echo $row['user_id'];?></td>
             <td><?php echo $row['skill'];?></td>
              <td><?php echo $row['experience'];?></td>
              <td><botton> <?php echo "<a href='plugins/jobportal/profile.php?profile_id=".$r_id." '</a>"?></button>Freelancer Profile</td>"
              <!-- <td><botton> <?php echo "<a href='plugins/jobportal/messages.php?r_id=".$r_id."&&sender_id=".$sender_id." '</a>"?></button>Private Message through Jobshop</td>" -->
            
     
      <td>
         
      </td>
  </tr>
  <?php $cnt=$cnt+1; }?>

      </td>
  </tr>
 
 
  </tbody>
</table>
<?php
}

else if($signup_as == 1 && $_SESSION['user_id'])
   {
     
    echo "<p style='text-align:center'>You are login as freelancer(worker) please contact the clients below to send them proposal";
    
     ?>
      <table class="table table-striped table-advance table-hover">
     
      <h1 style="text-align: center;"  >Registered Client With Us</h1>

<hr>
<thead>
<tr>

  <th>Serial No.</th>
    <th>Freelancer Name</th>
    <th>Client id</th>
    <th>Client Profile</th>
 
    <!-- <th>Contact Him/Her</th> -->


                                      
</tr>
</thead>
<tbody>
                     <?php 
                     
                     
                     $con= mysqli_connect('localhost','root','');
                     mysqli_select_db($con,'db_jobportal');
                    
                     
$fname = 0;
$query2="SELECT * FROM login WHERE signup_as ='$fname'";
$ret=mysqli_query($con,$query2);
$cnt=1;
while($row=mysqli_fetch_array($ret))
{
$id=$row['user_id'];
?> 
<tr>
<td><?php echo $cnt;?></td>
    <td><?php echo $row['fullname']?></td>
         <td><?php echo $row['user_id'];?></td>
         <td><botton> <?php echo "<a href='plugins/jobportal/profile.php?profile_id=".$id." '</a>"?></button>Client Profile</td>"
      
           <!--  <td><botton> <?php echo "<a href='plugins/jobportal/messages.php?r_id=".$id."&&sender_id=".$sender_id." '</a>"?></button>Private Message through Jobshop</td>" -->
          
   
    <td>
       
    </td>
</tr>
<?php $cnt=$cnt+1; }?>

    </td>
</tr>


</tbody>
</table>

  



<?php

   }

}
?>





           








          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  
              
              </div>
            </div>
          </div><!-- end -->

         
         </div>
<!--                 
            </div>
        </section>




 