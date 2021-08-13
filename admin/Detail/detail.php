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
    <link href="../../css/styleIndex.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width:70px; height: 70px;" src="../../images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin.php"> <span class="glyphicon glyphicon-user"></span>Admin</a>
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

    <div class="example">
        <div class="container">
            <form class="row" method="post" enctype="multipart/form-data">
                <h2>Edit Product</h2>
                <table class="table">
                    <?php
                    include("connect.php");
                    $idSP = "-1";
                    $tenSP = "";
                    $giaSP = "";
                    $anhSP = "";
                    $moTaSP = "";
                    if (isset($_GET["idSP"])) {
                        $SongID = intval($_GET['idSP']);
                        $sql = " select* from song where idSP = $idSP";
                        $result = mysqli_query($connect, $sql);
                        while ($sanpham =  mysqli_fetch_array($result)) {
                            $idSP = $sanpham['idSP'];
                            $tenSP = $sanpham['tenSP'];
                            $giaSP = $sanpham['giaSP'];
                            $anhSP = $sanpham['anhSP'];
                            $moTaSP = $sanpham['moTaSP'];
                        }
                    }
                    echo "
                        <tr>
                            <td>ID</td>
                            <td colspan='2'><input type='text' name='SidSP' value='$idSP'></td>
                        </tr>
                        <tr>
                            <td>Name of the product</td>
                            <td colspan='2'><input type='text' name='tenSP' value='$tenSP'></td>
                        </tr>
                        <tr>
                        <td>Price</td>
                            <td colspan='2'><input type='text' name='giaSP' value='$giaSP'></td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td colspan='2'><input type='text' name='tenSP' value='$anhSP'></td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td colspan='2'><input type='text' name='moTaSP' value='$moTaSP'></td>
                        </tr>
                        
                    ";
                    ?>


                    <tr>
                        <td><input style="background-color:#3b5998;color:#111111" type="submit" class="btn btn-outline-success" name="add" value="Add Song"></td>
                        <td><input style="background-color:#3b5998;color:#111111" type="submit" class="btn btn-outline-success" name="edit" value="Edit Song"></td>
                        <td><input style="background-color:#3b5998;color:#111111" type="submit" class="btn btn-outline-success" name="delete" value="Delete Song"></td>
                    </tr>
                </table>
            </form>
            
        </div>
    </div>



    <div class="example">
        <div class="container">
            <div class="row">
                <h2>View Product</h2>
                <table class="table table-bordered" ; style="text-align: center;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name of the product</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Mô tả</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>


                    <?php
                    include("connect.php");
                    $sql = "select * from sanpham";
                    $result = mysqli_query($connect, $sql);
                    while ($sanpham = mysqli_fetch_array($result)) {
                        $idSP = $sanpham['idSP'];
                        $tenSP = $sanpham['tenSP'];
                        $giaSP = $sanpham['giaSP'];
                        $anhSP = $sanpham['anhSP'];
                        $moTaSP = $sanpham['moTaSP'];

                        echo "
            
                            <tr style='text-decoration: none'>
                             <td>$idSP</td>
                             <td>$tenSP</td>
                             <td>$giaSP</td>
                             <td><img src='../../images/$anhSP' width='150' height='150' alt='Hinh Anh'/></td>
                             <td>$moTaSP</td>
               
                             <td><a href='detail.php?idSP=$idSP' class='btn btn-outline-secondary'>Delete</a></td>
                             <td><a href='detail.php?idSP=$idSP' class='btn btn-outline-secondary'>Update</a></td>
                            </tr>
                            ";
                    }
                    ?>

                </table>
            </div>
        </div>

    </div>
</body>

</html>