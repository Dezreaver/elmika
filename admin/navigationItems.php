<!-- Header -->

<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <!-- Navigation -->

    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Elmika Admin
                    </h1>

                    <div class="col-xs-6">

                        <?php
                            if(isset($_POST['submit'])) {
                                $nav_title = $_POST['nav_title'];

                                if ($nav_title == "" || empty($nav_title)) {
                                    echo "This field should not be empty";
                                } else {
                                    $query = "INSERT INTO navigation(nav_title) VALUE('{$nav_title}')";
                                    $createNav = mysqli_query($connection, $query);

                                    if (!$createNav) {
                                        die('QUERY FAILED' . mysqli_error($connection));
                                    }
                                }
                            }
                        ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nav_title">Add Nav Item</label>
                                <input class="form-control" type="text" name="nav_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-6">



                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nav Title</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            //Find all Nav Items
                                $query = "SELECT * FROM navigation";
                                $getNavItems = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($getNavItems)) {
                                    $nav_id = $row['nav_id'];
                                    $nav_title = $row['nav_title'];

                                    echo "<tr>";
                                    echo "<td>{$nav_id}</td>";
                                    echo "<td>{$nav_title}</td>";
                                    echo "<td>
                                            <form method='post'>
                                                <button name='delete' formmethod='post' value='{$nav_id}'>Delete</button>
                                           </form>
                                          </td>";
                                    echo "</tr>";
                                }
                            ?>

<!--                            --><?php
                            //Delete Nav Items
                                if(isset($_POST['delete'])) {
                                    $getNavId = $_POST['delete'];

                                    $query = "DELETE FROM navigation WHERE nav_id = {$getNavId}";
                                    $deleteNavItem = mysqli_query($connection, $query);
                                    header("Location: navigationItems.php");
                                }
                            ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Footer -->

<?php include "includes/admin_footer.php"; ?>
