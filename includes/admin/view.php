<?php
echo'<a href="?folder=admin&file=adminadd" class="btn btn-primary" style="margin-left: 30px;">ADD Admin</a>';

$r=$db->get_results("SELECT * FROM admin WHERE ad_status!='2'");
							if($r)
						{	
							?>
							<section class="content">
							 <div class="col-md-6">
							 <div class="box box-primary">
							<div class="box-body">
							<?php
							echo"<table class='table table-bordered'><tr><th>Id</th><th>Name</th><th>Type</th><th>Actions</th></tr>";
								
							foreach($r as $rw)
							{
							
							echo"
								<tr>
								<td>".$rw->ad_id."</td>
								";
								echo"
								<td>".$rw->ad_name."</td>
								";


								
								
								echo"
								<td>".$rw->ad_usertype."</td>
								";




								

								echo '<td>
								  <a href ="?folder=admin&file=adminadd&ed_id='.$rw->ad_id.'"> <span class="glyphicon glyphicon-edit"> </span></a>
								  ';

								  echo '
								  <a href ="index.php?includes/admin/folder=query&file=querycontroller&row_id='.$rw->ad_id.'"> <span class="glyphicon glyphicon-trash"> </span></a>
								  </td></tr>';
								
								
								 
								 
								
							}
						}
else
{
	echo"Records Not Available";
}						
							echo"</table>";
							
						?>
					</div>
				</div>
			</div>
		</section>
						<?php	
							
	?>