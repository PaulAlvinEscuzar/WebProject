<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<div class="bg-dark">
    <nav class="navbar navbar-expand-md navbar-light ">
            <a href="" class="navbar-brand">
                <span class="fw-bold text-light ms-3" style="font-family: 'Montserrat', sans-serif;
font-family: 'Titillium Web', sans-serif;">The 17 Goals Admin</span>
            </a>
            <!-- Toggle button for mobile-->
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon bg-white"></span>
            </button>

            <!--nav-bar links-->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-link">
                        <a href="../../admin/sdg3/formsdg3.php" class="nav-link text-light">Add Data</a>
                    </li>
                    <li class="nav-link">
                        <a href="../../admin/sdg3/up_delsdg3.php" class="nav-link text-light">Update and Delete Data</a>
                    </li>
                    <li class="nav-link">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle text-dark fw-bold" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:darkorange">SDG
                                Goals</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="">SDG 1</a></li>
                                <li><a class="dropdown-item" href="#">SDG 2</a></li>
                                <li><a class="dropdown-item" href="../../admin/sdg3/formsdg3.php">SDG 3</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>