<?php
// Include the database connection file
include '../../db.connection/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blue Crest - Staff Images</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h2 mb-0 text-info mx-2">Staff Images</h2>
                        <a href="staff_new.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-upload fa-sm text-white-50"></i> Upload Staff Image
                        </a>
                    </div>

                    <div class="row row-custom no-gutters">
                        <?php
                        // Updated query with correct table name
                        $staff_sql = "SELECT id, name, role, staff_type, image FROM staff_image_uploads ORDER BY id DESC";
                        $staff_result = $conn->query($staff_sql);

                        if ($staff_result === false) {
                            // Query error
                            echo "<p class='mx-3 text-danger'>Error executing query: " . htmlspecialchars($conn->error) . "</p>";
                        } elseif ($staff_result->num_rows > 0) {
                            while ($staff = $staff_result->fetch_assoc()) {
                                echo "
                                <div class='col-12 col-md-4 col-custom mb-4'>
                                    <div class='card card-custom shadow'>
                                        <img src='uploads/staff/" . htmlspecialchars($staff['image']) . "' class='card-img-top' alt='" . htmlspecialchars($staff['name']) . "' style='height: 220px; object-fit: cover;'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>" . htmlspecialchars($staff['name']) . "</h5>
                                            <p class='card-text'>
                                                <strong>Role:</strong> " . htmlspecialchars($staff['role']) . "<br>
                                                <strong>Type:</strong> " . htmlspecialchars($staff['staff_type']) . "
                                            </p>
                                            <div class='row'>
                                                <a href='edit_staff_image.php?id=" . intval($staff['id']) . "' class='btn btn-warning col-xl-4 mx-3 my-2'>Edit</a>
                                                <a href='delete_staff_image.php?id=" . intval($staff['id']) . "' class='btn btn-danger col-xl-4 mx-3 my-2'>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        } else {
                            echo "<p class='mx-3'>No staff images found.</p>";
                        }

                        $conn->close();
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="text-center my-auto">
                        <p class="mini_text" style="color:black">©2025 Blue Crest. Designed by 
                            <a href="https://bhavicreations.com/" style="text-decoration: none; color:black" target="_blank">
                                Bhavi Creations
                            </a>
                        </p>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
