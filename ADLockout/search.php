<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="./skeleton.css" />
         <link href="./font-awesome.min.css" rel="stylesheet">
         <link rel="stylesheet" href="./style.css" />
        <title>AD Lockout</title>
    </head>
    <body>
        <form action="dc.php" method="get">
        <!-- SHOWCASE -->
        <section class="section showcase">
          <div class="container">
            <div class="row">
              <div class="column">
                <h4 class="showcase-heading">Select User</h4>
			<?php
				$usr = $_GET['search'];
        exec("powershell.exe .\get_user.ps1 " .$usr. " 2>&1",$output ,$result);
				foreach($output as $line){
				if ($line != ""){
					$itemised = explode(":",$line);
					$thisitem = trim($itemised[0]); 
						if ($thisitem === "name") {
						echo trim($itemised[1])."<br>"; 
						}
						if ($thisitem != "name") {
						echo '<input type="radio" name="user" value="'. trim($itemised[1]) .'">'; 
						}
					}
				}
				?>
                <input type="submit" class="button button-primary" value="Next">
              </div>  
            </div>
          </div>
        </section>
        </form>
    </body>
</html>