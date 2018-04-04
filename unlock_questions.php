<html>
    <head>
        <title>Unlock Question</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">   
    </head>
<body class="body-style-9">
    <h1>Unlock Account</h1>
    <h2>Please answer the question:</h2>
    <form class="form-style-9" name="Unlock" action="unlock_complete.php" method="post">
        <ul>
            <li>
                <div class="field-style field-full align-none">
                <?php include("dbopen.php");?>
                <?php
                if (isset($_POST['CN'])) {
                        //check Query Sting for Value
                        if ($_POST['CN']==""){
                                //no value exit
                                $ANS = "No Company Number Enterd";
                        }else{
                                $user = md5(strtoupper($_POST['User']));
                                $CN = md5($_POST['CN']);				
                                $sql = "SELECT * FROM UserData WHERE UserName='$user' and CompanyNumber ='$CN';";
                                $result=odbc_exec($conn, $sql);	
                                if ($result > 0) {
                                        $QNum = rand(1, 6);
                                        $AN=(odbc_result($result, "Q".$QNum));
                                        //echo $AN;
                                        $ANS = "Unlock ".$_POST['User']."'s Account";
                                }	
                          }
                   }else{
                        echo "ERROR No Data submited, please restart the unlock process";
                }
                echo ($ANS); 
                if ($AN == ""){
                    echo ('<script>alert("ERROR: \n'.$_POST['User'].' is not registerd !\nPlease register first."); </script>');
                    }else{                
                    //echo ("<br>".$AN."--FOR DEV ONLY");
                    }
                ?>
                </div>
            </li>
            <li>
                <div class="field-style field-full align-none">
		<?php 
		$Q1 = "   What was the make and model of your first car?";
		$Q2 = "   What was the name of the company where you had your first job?";		
		$Q3 = "   The name of your first boyfriend / girlfriend ?";		
		$Q4 = "   Where did you attend primary school?";		
		$Q5 = "   What are the last four digits of your friends telephone number ?";		
		$Q6 = "   Where were you New Year's 2000?";	
		

		if ($QNum == 1) {echo("	".$Q1);}
		if ($QNum == 2) {echo("	".$Q2);}
		if ($QNum == 3) {echo("	".$Q3);}
		if ($QNum == 4) {echo("	".$Q4);}
		if ($QNum == 5) {echo("	".$Q5);}
		if ($QNum == 6) {echo("	".$Q6);}
		?>
                </div>
            </li>
            <li>
		<input name="ANS" type="text" class="field-style field-full align-none" placeholder="Answer" />
            </li>
            <li>
		<input type="submit" value="UNLOCK"  class="field-style field-split align-left" />
		<input type="button" value="CANCEL"  class="field-style field-split align-right" onclick="location.href = 'index.php';" />
		<input type="hidden" value="<?php echo($AN) ?>" name="DBANS" />
		<input type="hidden" value="<?php echo($_POST['User']) ?>" name="User" />
            </li>
        </ul>
    </form>
    <?php include("dbclose.php");?>
</body>

</html>
