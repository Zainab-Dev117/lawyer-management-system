
<?php
ob_start();
ob_flush();

include("../connection.php");
include("header.php"); 
?>

<?php 

$ID = $_GET['id'];
$query = " SELECT * FROM `services` WHERE service_id = '$ID' ";
$rowData = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($rowData);


if($data['is_update']== "No"){

 if(isset($_POST['btnAdd'])){

    $name = $_POST['s-name'];

    $query = "UPDATE services set service_name = '$name', is_update = 'Yes' where service_id= '$ID'";
    $update = mysqli_query($conn,$query);

    header("Location: show-services.php");

 }


}else{
    
    echo '<script>
        alert("You cannot edit twice")
        window.location.href= "show-services.php"
    </script>';
    

}


// if(isset($_POST['btnAdd'])){
//     $name = $_POST['s-name'];

//     $query = "UPDATE services set service_name = '$name', is_update = 'Yes' where service_id= '$ID'";
//     $update = mysqli_query($conn,$query);

//     header("Location: show-services.php");
// }


?>


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Service!</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Service Name" name="s-name" value="<?php echo $data['service_name'] ?>">
                                    </div>
                                </div>
                                <input type="submit" value="Update Service" class="btn btn-primary btn-user btn-block" name="btnAdd">
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