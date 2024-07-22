<?php 
    include "layouts/nav_sidebar.php";
    include "../dbconnect.php";

    $sql = "SELECT * FROM categories";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $categories_data = $stmt -> fetchAll();
?>
                <main>  
                    <div class="container-fluid px-4">
                        <div class="mt-3">
                            <h1 class="mt-4 d-inline">Categories</h1>
                            <a href="create_category.php" class=" btn btn-primary float-end">Create Categories</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                            foreach($categories_data as $value){
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
