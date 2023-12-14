<?php
require "settings/init.php";

$sql = "select Name, Interests from brugere";
$users = $db->sql($sql);
?>

<?php include "includes/head.php"
?>

<body>


<div class="container">
    <div class="row">
        <div class="col text-center mt-5">
            <img class="justify-content-center" style="width: 100px;" src="images/logo_HeartlyHello.png" alt="HeartlyHello Logo" >
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col mt-1">
            <h4 class="fst-italic ">Diversitet</h4>
            <h4 class="fst-italic ">Venskaber</h4>
            <h4 class="fst-italic ">Dybe forbindelser</h4>
            <h4 class="fw-bold ">- Start din søgen nu</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col mt-5 search-bar">
            <input type="text" class="search-input form-control" placeholder="Søg på interesser">
            <i class="search-icon fas fa-search fa-xl text-darklilla"></i>
        </div>
    </div>
</div>


<div class="container">
    <div class="row my-5">
    <?php
    foreach ($users as $user){
    ?>
        <div class="col-6 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user->Name ?></h5>
                    <p class="card-text">Mine interesser er: <?php echo $user->Interests ?></p>
                    <a href="#" class="btn btn-orange">Besøg Profil</a>
                </div>
            </div>
        </div>
<?php
}
?>
    </div>
</div>


<div class="footer-padding"></div>

<footer class="container fixed-bottom" style="border-top: 1px solid #ccc">
    <div class="row">
        <div class="col d-flex justify-content-evenly align-items-center mt-2">
                <a href="#"><i class="fas fa-home fa-2xl" style="color: #C6C6C6;" alt="Hjem"></i></a>
                <a href="#"><i class="fas fa-user fa-2xl" style="color: #C6C6C6;" alt="Din profil"></i></a>
                <img style="width: 40px;" src="images/logo_HeartlyHello.png" alt="Profiler">
                <a href="#"><i class="fas fa-message fa-2xl" style="color: #C6C6C6;" alt="Beskeder"></i></a>
                <a href="#"><i class="fas fa-bars fa-2xl" style="color: #C6C6C6;" alt="Menu"></i></a>
        </div>
    </div>
</footer>


<?php include "includes/scripts.php"
?>
</body>
</html>