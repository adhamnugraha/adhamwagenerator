<?php 
session_start() 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />

     <!-- aos -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

     <!-- Bootstrap Icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

     <!-- my css -->
    <link href="style.css" rel="stylesheet" />

    <title>ADHAM NUGRAHA</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#home">Adham Nugraha</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i>Menu</button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=wame"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../AD-WEB/portfolio/index.php">Portfolio</a>
            </li>
           
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <?php 
	if(isset($_GET['page'])){
		$page=$_GET['page'];
			switch($page){
				case 'wame';
				include "wame.php";
				break;
        case 'home';
				include "home.php";
				break;
				default:
				include "wame.php";
				break;
        }
				}else{
          include "wame.php";
		}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>