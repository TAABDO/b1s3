
<?php
include __DIR__.'/../../../../database/connection.php';
// $db = new database();
// var_dump($db->conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="../../../../asset/css/Dashboard.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<style>

a {
  text-decoration: none;
  color: black;
}
	
</style>
	</head>

<body>
<header class="container-fluid first-section">
		<nav class="container d-flex justify-content-between flex-nowrap ">
			<span class="d-flex justify-content-center">
				<a class="navbar-brand " href="#"><img src="../images/logo3.png" alt="" srcset=""></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-user"></i></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-bell"></i></a>
				<a href="#" class="nav-linkfloat-end "><i class="fa-sharp fa-solid fa-sun"></i></a>
			</span>
			<span>
				<i data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
					aria-controls="offcanvasWithBothOptions" class="fa-solid fa-bars"></i>
			</span>
		</nav>
	</header>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
		aria-labelledby="offcanvasWithBothOptionsLabel">
		<div class="offcanvas-header">
			<img src="..//images/logo3.png" alt="logo">
			<i class="fa-solid fa-xmark " data-bs-dismiss="offcanvas" aria-label="Close"></i>
		</div>
		<div class="offcanvas-body mt-5">
			<ul>
			<li><i class="fa fa-dashboard me-3"></i><a style="color: with;text-decoration: none;" href="../dashboard/dashboard.php">Dashboard</a></li>
				<li><i class="fa fa-store me-3"></i><a style="color:gainsboro; text-decoration: none;" href="../reservation/reservation.php">Reservation</a></li>
				<li><i class="fa fa-message me-3"></i><a style="color: with;text-decoration: none;" href="../orders/orders.php">Orders</a></li>
				<li><i class="fa-solid fa-check me-3"></i><a style="color: with;text-decoration: none;" href="../users/users.php">Users</a> </li>
				<li><i class="fa fa-phone me-3"></i><a style="color: with;text-decoration: none;" href="#">log out</a></li>
			</ul>
		</div>
	</div>
  <div class="container ajouter">
	<div class="container second-section ">
		<div class=" row px-4">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<h1>Good Morning!</h1>
				<p>Here's what's happening with your store today.</p>
			</div>
			<div class=" offset-lg-3 col-lg-3 col-md-6 col-sm-12 btns">
				<button type="submit"> <i class="fa-solid fa-circle-plus"></i><a href="ajouter.php">ajouter clients</a></button>
				
			</div>
		</div>
	</div>
</div>
    
<div class="container">
  <form method="post" class="users" style="width=100px" action="">
    <table class="table">
    <thead>
      <tr>		
        <th scope="col"class="User_id">User_id</th>
        <th scope="col"class="Nom">Nom</th>
        <th scope="col"class="email">Email</th>
        <th scope="col"class="role">role</th>
		<th scope="col"class="role">adresse</th>

      </tr>
    </thead>
    <tbody>

	<?php
	 $requet="SELECT * FROM users";
	 $result= mysqli_query($conn,$requet);
	 while ($row = mysqli_fetch_assoc($result)){
	?>
        <tr>		
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nom'] ?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['role']?></td>
		<td><?php echo $row['adresse']?></td>
        <td>
			<button type="submit" class="btn btn-warning"><a href="update.php?id=<?php echo $row["id"] ?>">UpDate</a></button>
            <button type="submit" class="btn btn-danger"><a href="delete.php?id=<?php echo $row["id"] ?>">delete</a></button>
        </td>
      </tr>
	  <?php
	  }
	  ?>

    </tbody>
  </table>

    </form>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="Dashboard.js"></script>

  
</body>
</html>

