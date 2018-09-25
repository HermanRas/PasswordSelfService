<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
          <meta charset="UTF-8">
    </head>
<body class="body-style-9">
    <h1>Register New User</h1>
    <form name="RegNew" action="register_save.php" method="post" class="form-style-9">
        <ul>
            <li>
                <div class="field-style field-full align-none">Your company number:</div>
                <input name="CN" pattern=".{8,8}" required title="company number has to be 8 characters long." type="text" class="field-style field-full align-none" placeholder="Company Number" />
            </li>
            <li>
                <div class="field-style field-full align-none">What was the make and model of your first car?</div>
                <input name="Q1" type="text" required class="field-style field-full align-none" placeholder="Answer" />
            </li>
            <li>
                <div class="field-style field-full align-none">What was the name of the company where you had your first job?</div>
                <input name="Q2" type="text" required class="field-style field-full align-none" placeholder="Answer" />
            </li>
            <li>
                <div class="field-style field-full align-none">which primary school did you attend ?</div>
                <input name="Q3" type="text" required class="field-style field-full align-none" placeholder="Answer" />
            </li>
            <li>
                <div class="field-style field-full align-none">What are the last four digits of your friends telephone number ?</div>
                <input name="Q4" type="text" required class="field-style field-full align-none" placeholder="Answer" />
            </li>
            <li>
            <input type="submit" value="SUBMIT" class="field-style field-split align-left"/>
            <input type="button" value="CANCEL" class="field-style field-split align-right" onclick="location.href = 'index.php';" />
            </li>
        <ul>
    </form>
</body>
</html>
