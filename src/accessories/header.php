<!-- Navigation bar at the top of all user interactive pages -->
<?php session_start(); ?>
<nav class="navbar fixed-top">

<div class="dropdown ms-auto dropstart">
    <a class="btn" data-bs-toggle="dropdown" id="navigationMenu">
        <img src="mediafiles/fullogo.jpg" alt="">
    </a>
    <ul class="dropdown-menu dropdown-menu-lg-end" id="pleaseWork">
        <li><a class="dropdown-item" href="index.php">Home</a></li>
        <li><a class="dropdown-item" href="about.php">About SEATBELTS</a></li>
        <li><a class="dropdown-item" href="songs.php">Songs</a></li>
        <li><a class="dropdown-item" href="cookiepolicy.php">Cookie Policy</a></li>
        <?php
            if(isset($_SESSION["Userid"])){
                echo "<li><a class='dropdown-item' href='profil.php'>Profile</a></li>";
                echo "<li><a class='dropdown-item' href='account/logout.php'>Log Out</a></li>";
                echo "<li><a class='dropdown-item' href='account/remove.php'>Delete User</a></li>";
            }
            else{
                echo "<li><a class='dropdown-item' href='login.php'>Log In or Register</a></li>";
            }
        ?>
    </ul>
</div>
</nav>