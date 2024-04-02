 <?php 
 session_start();
 ?>

 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">Eye+ Eyewear</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>

 <?php
 if(isset($_SESSION['loginstatus'])&&$_SESSION['loginstatus']){
 ?>
 <a href="logout.php" class="nav-item nav-link">Logout</a>

 <?php
 }
 else{
    ?>
    <a href="login.php" class="nav-item nav-link">Login</a>
 <?php
 }
 ?>
                <a href="product.php" class="nav-item nav-link">Products</a>
                
                </div>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>