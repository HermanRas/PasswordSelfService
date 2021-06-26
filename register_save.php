<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body class="body-style-9">
    <h1>Register New User</h1>
    <h2>Registration Completed:</h2>
    <form class="form-style-9">
        <ul>
            <li>
                <div class="field-style field-full align-none"><?php echo($_SERVER['LOGON_USER']); ?></div>
            </li>
            <li>
                <div class="field-style field-full align-none">
                    <?php
            include("dbopen.php");	
            if (isset($_POST['CN'])) {
                    //check Query Sting for Value
                    if ($_POST['CN']==""){
                            //no value exit
                            echo "No Company Number Entered, please restart registration";
                    }else{
                            $UN = md5(strtoupper($_SERVER['LOGON_USER']));
                            $CN = md5($_POST['CN']);		
                            $Q1 = md5($_POST['Q1']);		
                            $Q2 = md5($_POST['Q2']);		
                            $Q3 = md5($_POST['Q3']);		
                            $Q4 = md5($_POST['Q4']);				
                            $sql = "INSERT INTO UserData (UserName, CompanyNumber, Q1,Q2,Q3,Q4) VALUES ('$UN', '$CN', '$Q1', '$Q2', '$Q3', '$Q4');";
                           

                        try {
                            error_reporting(E_ERROR | E_PARSE);
                            $result=odbc_exec($conn, $sql);	
                            if ($result > 0) {
                                    echo "You have been registered";
                            }else{
                                echo "You are already registered, <br> if you need to reset your details please contact ICT !";
                            }	
                            } catch (Exception $e) {
                                    
                        }
                      }
               }else{
                    echo "ERROR No Data submitted, Please restart your registration";
            }
            include("./dbclose.php");
            ?>
                </div>
            </li>
            <li>
                <input type="button" value="HOME" class="field-style field-full align-none"
                    onclick="location.href = 'index.php';" />
            </li>
        </ul>
    </form>
</body>

</html>