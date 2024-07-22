<?php 
session_start();
if(isset($_SESSION['user_id'])){
 include "layouts/nav_sidebar.php";
 include "../dbconnect.php";
    $sql = "SELECT * FROM categories ";
    $stmt = $conn->query($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //var_dump($stmt);
    $categories = $stmt->fetchAll();
   
?>
 <main>
        <div class="container-fluid px-4">
            
            <div class="mt-3">
                <h1 class="mt-4 d-inline">Categories</h1>
                <a href="catrgory.php" class="btn btn-lg btn-primary float-end">Create Post</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
           
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Categories
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                
                                
                                
                                
                            </tr>
                        </thead>
                        
                      <tbody>
                      <?php 
                            foreach($categories as $category){

                                    

                                

                            
                          ?>
                        <tr>
                          <th><?=$category['name']?></th>
                            
                                
                            
                           
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
                    }else{
                        header('location:../index.php');
                    }
 ?>               