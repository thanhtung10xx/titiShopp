<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TITI SHOP</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="../css/styleIndex.css" rel="stylesheet">
    <link href="../css/styleadmin.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width:70px; height: 70px;" src="../images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"> <span class="glyphicon glyphicon-user"></span>Stream</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="../logout.php" id="navbarDropdown">
                            Log Out
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="baoNgoai">
        <h1 class="tieuDe">Xin chào ADMIN</h1>
        <div class="khung">
            <a href="Detail/detail.php"> Product Management </a>
            <hr class="light-100">
            <a href="User/user.php"> User Management </a>
            <hr class="light-100">
            <a href="#"> Slide Management </a>

        </div>
    </div>
</body>

</html>