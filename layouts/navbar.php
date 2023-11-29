
<nav class="navbar navbar-expand-lg navbar-dark bg-orange">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="#">Recipe Book</a>

        <!-- Responsive Toggle Button for Small Screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php"><?php echo $GLOBALS['hh'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="profile.html">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="add-recipe.php">Add New Recipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="login.php">Login/Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>