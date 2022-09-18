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
     <!-- Bootstrap Icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

     <!-- my css -->
    <link href="../AD-WEB/style.css" rel="stylesheet" />
    
    <link href="../portfolio/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../portfolio/css/bootstrap.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

		<section id="input" >
      <h4 class="text-center" style="padding-top: 2rem;">Generate API Whatsapp</h4>
      <div class="generate position-absolute top-50 start-50 translate-middle">
        <div class="container">
          <form action="" method="post">
            <div class="row">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input class="form-control" type="text" name="nomor" placeholder="Masukan Nomor" aria-label="default input example" aria-describedby="basic-addon1" value="<?=isset($_POST['nomor']) ? $_POST['nomor'] : ''?>">
                </div>
              </div>
              <div class="col-sm-4 ">
                
              <button type="submit"  class="btn btn-sm btn-primary">Generate</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
              </div>
            <div class="row">
              <div class="col-sm-12">              
                <a href="https://wa.me/62<?php echo ($_POST['nomor']) ?>"><button type="button" class="btn btn-outline-success">GO TO WA.ME</button></a>
              </div>
            </div>   
          </form>
            
          </div>
        </div>
      </div>
		</section>
    <footer> <?php include "footer.php" ?></footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
	