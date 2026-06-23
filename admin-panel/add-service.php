<?php
ob_start();
ob_flush();
include("../connection.php");
include("header.php"); 

if(isset($_POST['btnAdd'])){
    $name= $_POST['s-name'];
    $query= "INSERT INTO `services`(`service_name`) VALUES ('$name')";
    $result= mysqli_query($conn,$query);

    header("Location: show-services.php");
}
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
                                <h1 class="h4 text-gray-900 mb-4">Add New Service!</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Service Name" name="s-name">
                                    </div>
                                </div>
                                <input type="submit" value="Add Service" class="btn btn-primary btn-user btn-block" name="btnAdd">
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