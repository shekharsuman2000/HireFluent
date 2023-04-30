<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">List of Applicant's   </h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th>Applicant</th>
									
									<th>Company</th>
									<th>Address</th> 
									<th>Date of Birth</th>
									<th width="14%" >View Resume</th> 
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		
							  		$mydb->setQuery("SELECT * FROM `application`");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  
							  		echo '<td>'. $result->fname.'</td>';
							  		echo '<td>' . $result->company_name.'</a></td>';
							  		echo '<td>' . $result->address.'</a></td>'; 
							  		echo '<td>'. $result->dob.'</td>';
									  echo '<td align="center" >    
									  <a title="View" href="../../resume/'.$result->applicant_resume.'"  class="btn btn-info btn-xs  ">
									  <span class="fa fa-info fw-fa"></span> View Resume</a>';
					  			
					  		            
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>
 
							 
							</form>
       
                 
 