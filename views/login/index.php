<?php include './pages/headerin.php' ?>
<!--/header-->

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Login to your account</h2>
                    <form name="login">
                        <input type="hidden" name="controller" value="login" />
                        <input type="hidden" name="action" value="signin" />
                        <input type="text" placeholder="Account" name="username" id="username" value="bin"/>
                        <input type="password" placeholder="Password" name="password" id="password" value="bin"/>
                         
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>New User Signup!</h2>
                    <form action="#">
                        <input type="hidden" name="controller" value="login" />
                        <input type="hidden" name="action" value="signup" />
                        <input type="text" placeholder="Account" name="usernamesu" />
                        <input type="password" placeholder="Password" name="passwordsu" />
                        <input type="text" placeholder="YourName" name="hoten" />
                        <input type="number" placeholder="Phone" name="sdt" />
                        <input type="email" placeholder="Email Address" name="email" />
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/form-->


<?php include './pages/footerin.php' ?>