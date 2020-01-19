<!DOCTYPE html>
<html lang="en">
<head>
  <title>Railway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-white">
  <a class="navbar-brand" href="navber1.php">Home</a>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">User Profile</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index.php?logout='1'">Sign out</a>
      </li> 
      <li>
        <?php  if (isset($_SESSION['username'])) : ?>
        <p style="color: red;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
       <?php endif ?>
      </li>
  </form>
</nav>
</ul>
</div>  
</nav>
<br>
</body>
</html>
