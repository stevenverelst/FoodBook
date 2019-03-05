<?php
namespace app\view\user;

use app\library\Util;
?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create an account</h2>
            <p>Please fill out this for to register</p>
            <form action="<?php echo Util::getAppRoot(); ?>/users/register" methode="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty(Register::getData('name_err'))) ? 'is-invalid' : ''; ?>" value="<?php echo Register::getData('name'); ?>">
                    <span class="invalid-feedback">
                        <?php echo Register::getData('name_err'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty(Register::getData('email_err'))) ? 'is-invalid' : ''; ?>" value="<?php echo Register::getData('email'); ?>">
                    <span class="invalid-feedback">
                        <?php echo Register::getData('email_err'); ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty(Register::getData('password_err'))) ? 'is-invalid' : ''; ?>" value="<?php echo Register::getData('email'); ?>">
                    <span class="invalid-feedback">
                        <?php echo Register::getData('password_err'); ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Name: <sup>*</sup></label>
                    <input type="password" name="name" class="form-control form-control-lg <?php echo (!empty(Register::getData('confirm_password_err'))) ? 'is-invalid' : ''; ?>" value="<?php echo Register::getData('confirm_password'); ?>">
                    <span class="invalid-feedback">
                        <?php echo Register::getData('confirm_password_err'); ?></span>
                </div>
        </div>
    </div>
</div>' 