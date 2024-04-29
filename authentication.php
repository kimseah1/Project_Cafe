<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <?php
        $connect = new mysqli("localhost", "root", "", "cafe");
	
		if($connect->connect_errno)
		{
			die('Could not connect: ' .$connect->connect_errno);
		}
        $query = "SELECT * FROM login_tab WHERE userid = '".$_POST["id"]."' AND password='".$_POST["pw"]."'";
        $sql_result = $connect->query($query);
        if ($sql_result->num_rows == 0) {
            header("Location: cafelogin.php");
            # no user in db
        }
        while($row = $sql_result->fetch_assoc()) {
            echo 'we have db results';
            if ($row["sid"]=='1')
            {
                header("Location: menu.php");
            }

            else if ($row["sid"]=='2')
            {
                header("Location: cofadmin.html");
            }
            
        }
    ?>
</body>