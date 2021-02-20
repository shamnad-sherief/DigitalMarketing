 <?php require_once('header.php');  ?>
 
    <h1 class="title-agile text-center"> forgot Password</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
            <form action="../codes/forgotpassword_exe.php" method="post">
                <div class="field-group">
                   
                    <div class="wthree-field">
                        <input name="username" id="username" type="email" value="" placeholder="Enter Email Id" required>
                    </div>
                </div>
                
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="Next" />
                </div>
             
            </form>
           <ul class="list-login">
                     
                    <li>
                        <a href="login.php" class="text-right" style="color: white;">Back to Login</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li>
                        <a href="../index.php" class="text-right" style="color: white;">Home Page</a>
                    </li>

                    
                    <li class="clearfix"></li>
                </ul>
         <?php require_once('footer.php');  ?>