
</hr>

<h3 class="text-center text-success"></h3>
</hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables
            </div>
            <p>
                <?php
                $message=$this->session->userdata('message');
                if($message){
                    echo "<span>$message<span>";
                    $this->session->unset_userdata('message');
                }
                
                
                
                ?>
    </p>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th>Student Name</th>
                            <th>Student Roll</th>
                            <th>Mobile No</th>
                           
                            <th>Actions</th>

                        </tr> 
                    </thead>
                    <tbody>

                          <?php foreach($allInfo as $info){
                              ?>
                        <tr>


                            <td><?php echo $info->id ?></td>


                            <td> <?php echo $info->student_name?></td>
                            <td><?php echo $info->student_roll?></td>
                            <td><?php echo $info->student_phone ?></td>
                            

                            <td><a href="<?php echo base_url()?>edit-student/<?php echo $info->id ?>" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url()?>delete-student/<?php echo $info->id ?>" class="btn btn-danger" onclick="return confirm('Are You sure to delete this');">

                                    <span class="glyphicon glyphicon-trash"></span></a>

                            </td>



                        </tr>

                        <?php 
                          }
                        ?>
                      

                    </tbody>
                </table>
                </hr>

            </div>
            <div class="panel-footer">
                <div class="row">


                </div>
            </div>
        </div>

    </div></div></div>
