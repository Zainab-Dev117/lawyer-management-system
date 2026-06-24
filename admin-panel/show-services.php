<?php
include("../connection.php");
include("header.php"); 

$query= "SELECT * FROM `services`";
$result= mysqli_query($conn,$query);
$allResult = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Services</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTable</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Service ID</th>
                                            <th>Service Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php foreach( $allResult as $record){ 
                                         ?>
                                        <tr>

                                            <td>
                                                <?php 
                                                echo $record['service_id']
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                echo $record['service_name'] 
                                                ?>
                                            </td>
                                            <td>
                                             <?php 
                                              if( $record['is_update'] == "Yes"){                                            
                                             ?>
                                                <a href="delete-service.php?id= <?php echo $record['service_id'] ?>">
                                                    <button class="btn btn-primary" >
                                                         <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                             <?php }else{ ?>
                                                <a href="edit-services.php?id= <?php echo $record['service_id'] ?>">
                                                    <button class="btn btn-warning">
                                                         <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                        
                                                <a href="delete-service.php?id= <?php echo $record['service_id'] ?>">
                                                    <button class="btn btn-primary" >
                                                         <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                             <?php } ?>    
                                                
                                            </td>
                                         <?php 
                                            } 
                                         ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->   


<?php
include("footer.php"); 
?>

<!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>