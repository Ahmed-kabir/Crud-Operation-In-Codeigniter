
<form action="<?php echo base_url() ?>save/data" method="post">
    <h3 class="text-success text-center">
        <?php
                $message=$this->session->userdata('message');
                if($message){
                    echo "<span>$message<span>";
                    $this->session->unset_userdata('message');
                }
                
                
                
                ?>
    </h3>
        <div class="form-group">
            <label for="name">Student Name</label>
            <input id="student_name" name="student_name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="Roll">Student Roll</label>
            <input id="student_roll" name="student_roll" class="form-control" rows="3">
        </div>
        <div class="form-group">
            <label for="phone">Student Phone</label>
            <input id="student_phone" name="student_phone" class="form-control" rows="3">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>