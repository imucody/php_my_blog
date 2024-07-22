<?php 
    include "layouts/nav_sidebar.php";
    include "../dbconnect.php";

    $sql = "SELECT * FROM users";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $users_data = $stmt -> fetchAll();
?>
                <main>  
                    <div class="container-fluid px-4">
                        <div class="mt-3">
                            <h1 class="mt-4 d-inline">Users</h1>
                            <a href="create_user.php" class=" btn btn-primary float-end">Create Users</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>

                                    </tfoot>
                                    <tbody>
                                        <?php
                                            foreach($users_data as $value){
                                        ?>    
                                            <tr>
                                                <th><?= $value['id'] ?></th>
                                                <th><?= $value['name'] ?></th>
                                                <th>
                                                    <div class="btn btn-outline-primary">Detail</div>
                                                    <div class="btn btn-outline-warning">Edit</div>
                                                    <div class="btn btn-outline-danger">Delete</div>
                                                </th>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php 
    include "layouts/footer.php";
?>
