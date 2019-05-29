<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Testing PowerShell</title>
</head>
<body>
<?php
 
// If there was no submit variable passed to the script (i.e. user has visited the page without clicking submit), display the form:
if(!isset($_POST["submit"]))
{
    ?>
    <form name="testForm" id="testForm" action="text.php" method="post" />
        Your name: <input type="text" name="username" id="username" maxlength="20" /><br />
        <input type="submit" name="submit" id="submit" value="Do stuff" />
    </form>
    <?php    
}
// Else if submit was pressed, check if all of the required variables have a value:
elseif((isset($_POST["submit"])) && (!empty($_POST["username"])))
{
    // Get the variables submitted by POST in order to pass them to the PowerShell script:
    $username = $_POST["username"];
    // Best practice tip: We run out POST data through a custom regex function to clean any unwanted characters, e.g.:
    // $username = cleanData($_POST["username"]);
         
    // Path to the PowerShell script. Remember double backslashes:
    $psScriptPath = "F:\\get-process.ps1";
 
    // Execute the PowerShell script, passing the parameters:
    $query = shell_exec("powershell -command $psScriptPath -username '$username'< NUL");
    echo $query;    
}
// Else the user hit submit without all required fields being filled out:
else
{
    echo "Sorry, you did not complete all required fields. Please go back and try again.";
}
?>
</body>
</html>