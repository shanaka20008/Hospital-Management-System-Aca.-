<!DOCTYPE html>
<html lanf="en">
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="signup.css">
        <script src="./signup.js"></script>

    </head>
    <body>
        <div class="signup-box">
            <h1>Sign Up</h1>
            <form id="form" action="inserthandler.php" method="POST">
                <label>Username</label>
                <input type="text"id="usN"name="useN" placeholder="Enter username" required>
                <div class="error"></div>
                <label>Password</label>
                <input type="password"id="pa1" name="pa1" placeholder="Enter user password" required>
                <div class="error"></div>
                <label>Confirm Password</label>
                <input type="password" id="pa2" name="pa2"  placeholder="Re-enter the password" required>
                <div class="error"></div>

        

                
                <input class="button" name="log" type="submit" value="submit"> 
            </form>
            

             
        </div>
         <p class="para-2"> Already have an account?<a href="login.php"> login here</a></p>
    </body>
    
</html>