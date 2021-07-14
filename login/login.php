           <?php require_once('header.php');  ?>
 
 <h1 class="title-agile text-center">login Now</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
           <form action="../codes/login_exe.php" method="post">
                <div class="field-group">
                   
                    <div class="wthree-field">
                        <input name="uname" id="uname" type="text" value="" placeholder="username" required>
                    </div>
                </div>
                <div class="field-group">
                    
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="password" required>
                    </div>
                </div>
                <div class="field-group">
                    
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="sign in" />
                </div>
                <ul class="list-login">
                     
                    <li>
                        <a href="forgotpassword.php" class="text-right" style="color: white;">Forgot Password?</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li>
                        <a href="../index.php" class="text-right" style="color: white;">Home Page</a>
                    </li>

                    
                    <li class="clearfix"></li>
                </ul>
            </form>
           <?php require_once('footer.php');  ?>