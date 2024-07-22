<?php
    include "layouts/navbar.php";
    include "dbconnect.php";

    if(isset($_GET['category_id'])){
        $feature_post = null;
        $category_id = $_GET['category_id'];
        $sql  = "SELECT * FROM posts WHERE category_id = :category_id ORDER BY id DESC"; 
        $stmt = $conn -> prepare($sql); 
        $stmt -> bindParam(":category_id",$category_id);
        $stmt -> execute(); 
        $posts = $stmt -> fetchAll(); 
    }else{
        $sql  = "SELECT * FROM posts ORDER BY id DESC"; //just a text
        $stmt = $conn -> prepare($sql); //query ko a loat loat kie tr
        $stmt -> execute(); //output data object
        $posts = $stmt -> fetchAll(); //show data as associative array
    
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $feature_post = $stmt -> fetch(PDO::FETCH_ASSOC);
        // var_dump($feature_posts);
    }

?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <?php 
                        if(isset($feature_post)){
                    ?>
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="admin/<?= $feature_post['image'] ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= date('M d,y',strtotime($feature_post['created_at'])) ?></div>
                            <h2 class="card-title"><?= $feature_post['title'] ?></h2>
                            <p class="card-text"><?= substr(strip_tags($feature_post['description']),0,150) ?></p>
                            <a class="btn btn-primary" href="detail.php?id=<?= $feature_post['id'] ?>">Read more →</a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <?php 
                            foreach ($posts as $post) {
                        ?>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="admin/<?= $feature_post['image'] ?>" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo date('M d,Y',strtotime($post['created_at'])) ?></div>
                                    <h2 class="card-title h4"><?php echo $post['title'] ?></h2>
                                    <p class="card-text"><?php echo substr(strip_tags($post['description']),0,150) ?>.....</p>
                                    <a class="btn btn-primary" href="detail.php?id=<?= $post['id'] ?>">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>

<?php
    include "layouts/footer.php";
?>