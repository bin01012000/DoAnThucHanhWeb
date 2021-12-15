<?php include './pages/headerinadmin.php' ?>

<section id="form">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Login to account admin</h2>
                    <form name="login">
                        <input type="hidden" name="controller" value="loginadmin" />
                        <input type="hidden" name="action" value="signin" />
                        <input type="text" placeholder="Account" name="username_admin" id="username" value="admin"/>
                        <input type="password" placeholder="Password" name="password_admin" id="password" value="admin"/>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

