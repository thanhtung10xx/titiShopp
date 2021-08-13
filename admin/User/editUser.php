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
                <h2>Edit Users</h2>
                <table class="table">
                    <?php
                    include("connect.php");
                     $idUser = "-1";
                     $userName = "";
                     $PassWord = "";
                     $img = "";
                     $phanQuyen = "";
                     $firstName = "";
                     $lastName = "";

                    if (isset($_GET["idUser"])) {
                        $UserID = intval($_GET['idUser']);
                        $sql = " select * from titishop where idUser = $idUser";
                        $result = mysqli_query($connect, $sql);
                        while ($titishop =  mysqli_fetch_array($result)) {
                            $idUser = $titishop['idUser'];
                            $userName = $titishop['userName'];
                            $PassWord = $titishop['passWord'];
                            $img = $titishop['img'];
                            $phanQuyen = $titishop['phanQuyen'];
                            $firstName = $titishop['firstName'];
                            $lastName = $titishop['lastName'];
                        }
                    }
                    echo "
                        <tr>
                            <td>ID</td>
                            <td colspan='2'><input type='text' name='UserID' value='$idUser'></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td colspan='2'><input type='text' name='UserName' value='$userName'></td>
                        </tr>
                        <td>Password</td>
                            <td colspan='2'><input type='text' name='Password' value='$PassWord'></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td colspan='2'><input type='text' name='PhoneNumber' value='$phanQuyen'></td>
                        </tr>
                        <td>Full Name</td>
                            <td colspan='2'><input type='text' name='FullName' value='$firstName'></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td colspan='2'><input type='text' name='Email' value='$lastName '></td>
                        </tr>  
                        <tr>
                            <td>File</td>
                         <td colspan='2'><input type='file' name='Email' value='$img '></td>
                        </tr>  
                    ";
                    ?>


                    <tr>
                        <td><input type="submit" class="btn btn-outline-success" name="add" value="Add User"></td>
                        <td><input type="submit" class="btn btn-outline-success" name="edit" value="Edit User"></td>
                        <td><input type="submit" class="btn btn-outline-warning" name="delete" value="Delete User"></td>
                    </tr>
                </table>
            </form>
            <?php
            include("connect.php");
            if (isset($_POST['add'])) {
                $UserID = $_POST['UserID'];
                $UserName = $_POST['UserName'];
                $Password = $_POST['Password'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $FullName = $_POST['FullName'];
                $Email = $_POST['Email'];
                $sql = "insert into users values ('$UserID','$UserName','$Password','$PhoneNumber','$FullName','$Email')";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    echo "<script>alert('User has been added successfull!')</script>";
                    echo "<script>window.open('user.php','_self')</script>";
                } else {
                    echo "<script>alert('error')</script>";
                }
            }




            if (isset($_POST['edit'])) {
                $UserID = $_POST['UserID'];
                $UserName = $_POST['UserName'];
                $Password = $_POST['Password'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $FullName = $_POST['FullName'];
                $Email = $_POST['Email'];
                $check_exist = mysqli_query($connect, "select * from users");
                $row_cat = mysqli_fetch_array($check_exist);
                $sql = "update users set UserName='$UserName' where UserID=$UserID";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    echo "<script>alert('User has been edited successfull!')</script>";
                    echo "<script>window.open('view_user.php','_self')</script>";
                } else {
                    echo "<script>alert('Error')</script>";
                }
            }



            if (isset($_POST['delete'])) {
                $UserID = $_POST['UserID'];
                $sql = "delete from users where UserID=$UserID";
                $result = mysqli_query($connect, $sql);
                $check_exist = mysqli_query($connect, "select * from users");
                $row_cat = mysqli_fetch_array($check_exist);
                if ($result) {
                    echo "<script>alert('User has been deleted successfull!')</script>";
                    echo "<script>window.open('view_user.php','_self')</script>";
                } else {
                    echo "<script>alert('Error')</script>";
                }
            }


            ?>

        </div>
    </div>
</body>

</html>