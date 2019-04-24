<?php
namespace app\view\user;

use app\library\Util;
?>
<div class="container-fluid">
    <form action="<?php echo Util::getAppRoot(); ?>/user/login" methode="post">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card text-white card-body bg-success mt-2">
                    <div class="card-header mx-auto">
                        <h2 class="text-center">Login</h2>
                        <div class="text-center">Vul je gegevens in om in te loggen</div>
                    </div>
                    <div class="form-group">
                        <label for="userId">UserId: <sup>*</sup></label>
                        <input type="text" name="userId" id="userId" class="form-control form-control-sm" value="<?php echo Register::getData('userId'); ?>">
                        <span class="invalid-feedback" id="userIdErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" id="password" class="form-control form-control-sm" value="<?php echo Register::getData('password'); ?>">
                        <span class="invalid-feedback" id="passwordErr"></span>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <input type="submit" value="Login" class="btn btn-dark btn-block mx-auto">
                        </div>
                        <div class="col-sm-3">
                            <a href=" <?php echo Util::getUrlRoot(); ?>/user/register" class="btn btn-light btn-block">Registreer</a>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
</div>
</div>