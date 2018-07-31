

<div class="row">
<div class="col-lg-12">

</hr>
<div class="well">
<!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->
<p>
  <?php
                $message=$this->session->userdata('message');
                if($message){
                    echo "<span>$message<span>";
                    $this->session->unset_userdata('message');
                }
                
                
                
                ?>
    </p>
<form action="<?php echo base_url()?>update/student" method="post">
  <div class="form-group">
<label for="" class="col-sm-2 control-label">Student Name</label>
<div class="col-sm-10">
    <input type="text" value="<?php echo $allInfoById->student_name ?>" class="form-control" name="student_name">
<input type="hidden" value="<?php echo $allInfoById->id ?>" class="form-control" name="Id">

</div>
</div>
<div class="form-group">
<label for="" class="col-sm-2 control-label">Student Roll</label>
<div class="col-sm-10">
<input type="text" value="<?php echo $allInfoById->student_roll ?>" class="form-control" name="student_roll">
 
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Student phone</label>
<div class="col-sm-10">
<input type="text" value="<?php echo $allInfoById->student_phone ?>" class="form-control" name="student_phone">
 
</div>
</div>


<div class="form-group">

<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="btn" class="btn btn-success btn-block">Update</button>
</div>
</div>
    </form>


  
</div>
</div>
</div>

