<?php 
    include "layouts/nav_sidebar.php";
    include "../dbconnect.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $profile = 'abcd.png';

        $sql = "INSERT INTO users(name,email,password,image) VALUES(:name,:email,:password,:image)";

        $stmt = $conn -> prepare($sql);
        $stmt -> bindParam(':name',$name);
        $stmt -> bindParam(':email',$email);
        $stmt -> bindParam(':password',$password);
        $stmt -> bindParam(':image',$profile);
        $stmt -> execute();
        header("Location: users.php");
        $users = $stmt -> fetchAll();
    }
?>
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-3">
                            <h1 class="mt-4 d-inline">Create Users</h1>
                            <a href="create_user.php" class=" btn btn-danger float-end">Cancel</a>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Create Users
                            </div>
                            <div class="card-body">
                                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Images</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Create</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php 
    include "layouts/footer.php";
?>
