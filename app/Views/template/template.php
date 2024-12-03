<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Mengambil font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            letter-spacing: 3px;
        }

        .nav {
            flex-grow: 1;
            justify-content: center;
            /* Ensure items in nav are centered */
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Wrapper for logo and navbar items -->
            <div class="d-flex w-100 align-items-center">
                <!-- Navbar brand (logo + TEMANI) -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="/img/TEMANI.png" alt="logo temani" width="50" height="50" class="d-inline-block align-text-top me-2">
                    <span>TEMANI</span>
                </a>
                <!-- Navigation links centered -->
                <ul class="nav  align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">PESAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <?= $this->renderSection('content'); ?>
</body>

</html>