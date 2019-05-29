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
        <form action="unlock.php" method="get">
        <!-- SHOWCASE -->
        <section class="section showcase">
          <div class="container">
            <div class="row">
              <div class="column">
                <h4 class="showcase-heading">Lockout Source !</h4>
			<?php
				$usr = $_GET['user'];
				$srv = $_GET['dc'];
				echo "<input type='hidden' name='user' value='$usr'>";
				exec("powershell.exe .\Get_LockoutSource.ps1 " .$usr." ". $srv ." 2>&1",$output ,$result);
				foreach($output as $line){
				if ($line != ""){
					$itemised = explode(":",$line);
					$thisitem = trim($itemised[0]); 
						if ($thisitem == "TimeCreated") {
						echo " Last Lockout: ".$itemised[1].":".$itemised[2].":".$itemised[3]."<br>"; 
						}
						if ($thisitem == "User Name") {
						echo "User: ".trim($itemised[1])."<br>"; 
						}
						if ($thisitem == "Source Host") {
						echo "Device: ". trim($itemised[1]). "<br>". "<br>"; 
						}
					}
				}
				?>
                <input type="submit" class="button button-primary" value="Unlock">
              </div>  
            </div>
          </div>
        </section>
        </form>
    </body>
</html>