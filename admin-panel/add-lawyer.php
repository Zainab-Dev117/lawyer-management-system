<?php
include("../connection.php");
include("header.php");

$query= "SELECT * FROM `services`";
$result= mysqli_query($conn,$query);
$allResult = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New Lawyer!</h1>
                            </div>
                            <form class="user" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Name" name="l-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Email" name="l-email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Phone Number" name="l-num">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <select name="" id="" class="form-control " >
                                            <?php
                                            foreach($allResult as $record){ 
                                            ?>
                                              <option value=""><?php echo $record['service_name'] ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Experiance" name="l-experiance">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="file" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Image" name="l-img">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Lawyer Status" name="l-status">
                                    </div>
                                </div>
                        
                                <input type="submit" value="Add Lawyer" class="btn btn-primary btn-user btn-block" name="btnAdd">
                                <hr>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
include("footer.php"); 
?>