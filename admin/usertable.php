<?php
session_start();
if(isset($_SESSION['user_id'])){
require "../dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  var_dump($_POST);
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password=$_POST['password'];
//   $profile=$_POST['profile']

  $sql = "INSERT INTO users (name,email,password) VALUES(:name,:email,:password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
//   $stmt->bindParam(':profile', $profile);
  $stmt->execute();
  header("location:post.php");
}else{  
    include "layouts/nav_sidebar.php";
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    // var_dump($categories);
  
  }

?>
<main>
        <div class="container-fluid px-4">
            
            <div class="mt-3">
                <h1 class="mt-4 d-inline">Users</h1>
                <a href="create_post.php" class="btn btn-lg btn-danger float-end">Cancel</a>
            </div>
            
           
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Createpost
                </div>
                <div class="card-body">
                  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
                

                
                          
                  
                    <div class="mb-3">
                      <label for="category">Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                      
                        <!-- <?php 
                          foreach($users as $user){
                        ?>
                        <option value="<?= $user['id']?>"><?=$user['name']?></option>
                        <?php 
                        
                         }                        ?> -->
                      </select>
          
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="">Profile</label>
                        <input type="choosefile" name="profile" id="profile" class="form-control">

                    </div>
                    
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-secondary">Create</button>
                      
                    </div>
                        </form>
                </div>
                
                
               
                
            </div>
        </div>
    </main>

<?php 
    include "layouts/footer.php";
                        }else{
                          header('location:../index.php');
                        }
?>