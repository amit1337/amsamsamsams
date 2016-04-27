


http://www.freezecoders.com/2012/11/add-list-edit-delete-record-in-database-using-php.html


s1 php


/////////////////////////////////////////////////////////////////S1//////////////////////////////////////////


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    function insert()
{


var name = $("#name").val();
var email = $("#email").val();
var address = $("#address").val();
var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&address='+ address + '&contact='+ contact;






$.ajax({
   
   type:'POST',
	url:'ajax.php',
	data:dataString,
	success:function(reply)
	{
		//$('#result').html(reply);
		$('#tbl').append(reply);
	}
})
}

</script>






<!-- Button trigger modal -->
&nbsp<br><br><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Add INFO
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>


      <div class="modal-body">


        <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>


<div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="contact" id="contact">
                </div>


<div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
                </div>

<div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control"  name="address" id="address">
                </div>

<input type="submit" class="btn btn-primary" onclick="insert();"   data-dismiss="modal">




<div id="result"></div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



<?php


	$query=mysql_connect("localhost","root","");
mysql_select_db("student",$query);

$query1=mysql_query("select * from info");
?>


<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
             


<table class="table table-bordered" id="tbl">


<tr>
	<th>Name</th>
	<th>Phone</th>
	<th>E-mail</th>
	<th>Address</th>
</tr>
<?php
while($query2=mysql_fetch_array($query1))
{
	
	?>
<tr>
	<td> <?php echo $query2['stud_name']; ?></td>
	<td> <?php echo $query2['stud_phone']; ?></td>
	<td> <?php echo $query2['stud_email']; ?></td>
	<td> <?php echo $query2['stud_address']; ?></td>
</tr>
	<?php
}
?>
</table>

                
               
              </div>
              <!-- /.box-body -->

             
           
          </div>

      </div>
 


/////////////////////////////////////////////////////////////////S1 Xxxxxxxx//////////////////////////////////////////






////////////////////////////////////////////////////////ajax////////////////////////////////////////
<?php



	$query=mysql_connect("localhost","root","");
mysql_select_db("student",$query);

if($_POST)
{


print_r($_POST);





 $name=$_POST['name'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $address=$_POST['address'];

$query1=mysql_query("insert into info values('','$name','$contact','$email','$address')");

if($query1)
{
	echo "Successfuly Inserted";

	$str='';

	$str.='<tr>
	<td>'.$name.'</td>
	<td>'.$contact.'</td>
	<td>'.$email.'</td>
	<td>'.$address.'</td>

</tr>';
echo $str;
}


}

?>

////////////////////////////////////////////////////////ajaxxxxxxxxxxxxx////////////////////////////////////////
