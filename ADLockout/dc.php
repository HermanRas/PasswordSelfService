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
        <form action="source.php" method="get">
        <!-- SHOWCASE -->
        <section class="section showcase">
          <div class="container">
            <div class="row">
              <div class="column">
                <h4 class="showcase-heading">Select DC last locked @</h4>
			<?php
				$usr = $_GET['user'];
				echo "<input type='hidden' name='user' value='$usr'>";
				exec("powershell.exe .\get_dc.ps1 " .$usr. " 2>&1",$output ,$result);
				foreach($output as $line){
				if ($line != ""){
					$itemised = explode(":",$line);
					$thisitem = trim($itemised[0]); 
						if ($thisitem == "DC") {
						echo '<input type="radio" name="dc" value="'. trim($itemised[1]) .'">';
						echo trim($itemised[1]); 
						}
						if ($thisitem == "LastBadPasswordAttempt") {
						echo " Last Lockout: ".$itemised[1].":".$itemised[2].":".$itemised[3]."<br>"; 
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