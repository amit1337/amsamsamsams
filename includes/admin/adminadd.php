
<html>
<form method="POST">
<section class="content">
          <div class="row">
            <!-- left column -->
            
            
            <div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <?php
if(isset($msg))

{
  echo $msg;
}
                  ?>
                </div><!-- /.box-header -->
             <div class="box-body">


              <?php
if(isset($_GET['ed_id']))
{
  $id=$_GET['ed_id'];
  $r=$db->get_row("SELECT * FROM admin WHERE ad_id='$id'");
}
  ?>

  

<div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1"  name="ad_name" value="<?php if(isset($r)){echo $r->ad_name;}?>">
                      </div>

                      <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1"  name="ad_username" value="<?php if(isset($r)){echo $r->ad_username;}?>">
                      </div>

                       <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1"  name="ad_password">
                      </div>
                     

                     

       <div class="form-group" >
<label for="exampleInputEmail1">Usertpe</label>

<?php

$usertype=$db->get_results("SELECT * FROM user_type");
 ?>
<select name="ad_usertype" class="form-control">
<option value="000">Select </option>
<?php

if($usertype)
{
 foreach($usertype as $usertype)
  {
    $vd=$r->ad_usertype;


    
                  if($vd == $usertype->ut_id)
                  {
                    $selected = 'selected'; 
                  } 
                  else
                  {
                    $selected = ''; 
                  }
                  ?>

<option <?php echo $selected; ?> value="<?php echo $usertype->ut_id; ?>"><?php echo $usertype->ut_type; ?> </option>
<?php }
?>
</select>
<?php
 }else
{
  echo '<span class="label label-danger">Data Not available<span>';
}
?>
</div>




<div class="form-group">
                      <label for="exampleInputEmail1">Status </label>
                                     <select name="ad_status" class="form-control">
                                      <option value="000">Select Status</option>
  <?php
                                     
                                   if(isset($r))
                                   {  
                                      if($r->ad_status=='1')
                                      {
                                        ?>
  <option value="1" selected>Active</option>
  <option value="0" >Inactive</option>
  

  <?php
}
else
{
?>
<option value="1">Active</option>
  <option value="0" selected>Inactive</option>
 
<?php

}

}

else
{

  ?>
  <option value="1">Active</option>
  <option value="0">Inactive</option>
  <?php
}

?>
 </select>
                  </div> 



         
                     
                  <input type="submit" class="btn btn-primary" name="ad_submit">
          
             
             </div>
                  </div>


            </div>

            </section>

        </form>
        </html>