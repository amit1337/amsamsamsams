  
<?php

function DeleteModal1($Id,$link)
{
?>
<a href='#' data-toggle="modal" class="btn btn-primary" data-target="#myModal<?php echo'PopUpSend'.$Id;?>" Title='Delete'>
  <i class="glyphicon glyphicon-trash"></i></span></a>

          <div class="modal fade" id="myModal<?php echo'PopUpSend'.$Id;?>" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
              <div class="modal-dialog">
              
              
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="purchaseLabel">Delete</h4>
                      </div>
                      <div class="modal-body">
                
            
        
                  
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type='hidden' name='userid' value='<?php echo $id;?>'>
                <!--<input type='submit' name='sendEmail' class="btn btn-primary" value='Send Email'>!-->
                         <?php  echo $link;?>
                      </div>
                  </div>
                  
                 
              </div>
          </div>
<?php

}
?>


<?php  


       
   

function dashboard_search()
{
  ?>

<script>

 function GetFeetype()
 {
if(window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp= new ActiveXObject('Micosoft.XMLHTTP');
}
xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("member").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open('GET','includes/members/ajax.php?mem_id='+document.getElementById('search').value,true);
xmlhttp.send();
  
 }







 
</script>
<section class="content">
          <div class="row">
            <!-- left column -->
            
            
            <div class="col-md-12">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
             <div class="box-body">



                    <div class="form-group">
                      <label for="exampleInputEmail1">Search Member</label>

                      <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" id="search" placeholder="Search Member" name="member" onkeyup="GetFeetype();">
                  </div>



                     
                                        </div>
                      <div id="member">

                      </div>
   
             
             </div>
                  </div>

<div id="memberdetails">

                      </div>
            </div>

            </section>

        
        
  <?php
}
  
function dashboard()
{
global $db;

?>
  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">

<section class="col-lg-12 connectedSortable ui-sortable">


	         
               <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
    dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true,
       yearRange: "1950:2015"
    });
  });
  </script>




            <input type="text" id="datepicker" name="hr_date" value="<?php 
                        echo date('d-m-Y') ?>">


              
              
              
</section>

                </div>
          
        </section>
      </div>
                 

<?php
}




function welcome_msg()
  {
    ?>


        <script src="bootstrap/js/jquery.min.js"></script>
    
<style>


.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px; 
  color:#fff;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(./dist/img/482.GIF) center no-repeat black;
}

.se-pre-con h1{
  text-align: center;
  margin-top: 240px;
  font-size: 45px;
}
</style>
<script>

    //paste this code under head tag or in a seperate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    setTimeout(
  function() 
  {
    //do something special
    $(".se-pre-con").fadeOut("slow");;
      }, 1400);
  });

 
    </script>
  
<div class="se-pre-con"> 

<h1>WELCOME TO Vehicle-Soft</h1></div>
<?php

  }


?>



