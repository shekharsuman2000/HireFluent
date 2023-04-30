
  <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/back1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply Now</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Now</h1>
          </div>
        </div>
      </div>
    </div>

 <?php
if (isset($_GET['search'])) {

$jobid = $_GET['job'];
}
else
{
$jobid = $_GET['job'];

}
$sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID LIKE '%" . $jobid ."%' ORDER BY DATEPOSTED DESC" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();

?> 
<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">


        <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
            <h2 class="page-header" >Job Details</h2>
            <?php
                                              }
                                              ?>
           
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
              <form class="form-horizontal span6  wow fadeInDown" action="application_submit.php?job_id=<?php echo $result->JOBID; ?>&&company_name=<?php echo $result->COMPANYNAME; ?>" enctype="multipart/form-data"  method="POST" autocomplete="off">

               <?php 
               
              
               if (isset($_SESSION['user_id'])==true)
               {
                require_once('applicantform.php');
               }
              else
              echo "<button><a href='plugins/jobportal/login.php'</a>You need to login to apply for Job</button>";
               
               
               
               ?>  

            </form>
          </div>
          <div class="col-md-6 d-flex">
                     <div class="panel">
                         <div class="panel-header">
                         <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->JOBID;?>"><?php echo $result->OCCUPATIONTITLE ;?></a> 
                             <?php
                                              }
                                              ?>

                            </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-md-6">
                                          <?php

              


                                   ?>
                                           
                                              <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                                                 <ul>
                                                <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                                <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->SALARIES,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                            </ul>
                                           <?php
                                              }
                                              ?>
                                        </div>
                                        <div class="col-md-6">
                                        <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->PREFEREDSEX; ?></li>
                                                <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->SECTOR_VACANCY; ?></li>
                                            </ul>
                                              
                                              <?php
                                              }
                                              ?>
                                        </div>
                                        <div class="col-md-12">
                                        
                                           <?php
                                           if (isset($_SESSION['user_id'])==true)
                                           {
                                             ?>
                                            <p>Qualification/Work Experience :</p> 
                                             <ul style="list-style: none;"> 
                                                <li><?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?></li> 
                                            </ul> 
                                            <?php
                                           }
                                           ?>
                                        </div>
                                        <div class="col-md-12"> 
                                        <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                                            <p>Job Description:</p>
                                            <ul style="list-style: none;"> 
                                                 <li><?php echo $result->JOBDESCRIPTION ;?></li> 
                                            </ul> 
                                            <?php
                                              }
                                              ?>
                                         </div>
                                        <div class="col-md-12">
                                        <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                                            <p>Employer :  <?php echo  $result->COMPANYNAME; ?></p> 
                                            <p>Location :  <?php echo  $result->COMPANYADDRESS; ?></p>
                                            <?php
                                              }
                                              ?>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                         <?php
                                              if (isset($_SESSION['user_id'])==true)
                                              {
                                                ?>
                              Date Posted : 21-09-2021 <!-- <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?> -->
                              <?php
                                              }
                                              ?>
                            </div>
                     </div> 

          </div>
        </div>
      </div>
    </section>
    
