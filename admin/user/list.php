<?php
	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
       	 <div class="col-lg-12">
            <h1 class="page-header">List of Users  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add User</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 --> 
   		 	<div class="col-lg-12"> 
				<table id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0"> 
				  <thead>
				  	<tr>
				  		<th>Account ID</th>
				  		<th> Account Name</th>
				  		<th>Email</th>
				  		<th>Register as</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `login`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->user_id.'</a></td>';
				  		echo '<td>' . $result->fullname.'</a></td>';
				  		echo '<td>'. $result->email.'</td>';
				  		echo '<td>'. $result->signup_as.'</td>';
				  	

				  		echo '<td align="center" >
				  					 <a title="Delete" href="delete.php?id='.$result->user_id.'" class="btn btn-danger btn-xs"><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>  
			</div> 
 