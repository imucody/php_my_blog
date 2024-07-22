<?php 
    include "layouts/nav_sidebar.php";
    include "../dbconnect.php";
?>
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-3">
                            <h1 class="mt-4 d-inline">Create Categories</h1>
                            <a href="create_category.php" class=" btn btn-danger float-end">Cancel</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Create Categories
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php 
    include "layouts/footer.php";
?>
