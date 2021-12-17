<?php include './pages/headerin.php' ?>
<!--/header-->

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Nhập mã xác nhận</h2>
                    <form action="#">
                        <input type="hidden" name="controller" value="login" />
                        <input type="hidden" name="action" value="confirm" />
                        <input type="hidden" placeholder="Account" name="usernamesu" value="<?php echo $u?>"/>
                        <input type="hidden" placeholder="Password" name="passwordsu" value="<?php echo $p?>"/>
                        <input type="hidden" placeholder="YourName" name="hoten" value="<?php echo $ht?>"/>
                        <input type="hidden" placeholder="Phone" name="sdt" value="<?php echo $sdt?>"/>
                        <input type="hidden" placeholder="Email Address" name="email" value="<?php echo $email?>"/>
                        <input type="hidden" placeholder="Code" name="token" value="<?php echo $token?>"/> 
                        <input type="number" placeholder="Code" name="code" /> 
                        <p style="color:red"><?php echo $msg?></p>
                        <button type="submit" class="btn btn-default">Xác nhận</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/form-->


<?php include './pages/footerin.php' ?>