<?php
namespace app\view\user;

use app\library\Util;
?>
<div class="container-fluid">
    <div class="card text-white card-body bg-success mt-2">
        <div class="card-header mx-auto">
            <h2 class="text-center">Maak een account aan</h2>
            <div class="text-center">Vul in om te registreren</div>
        </div>
        <form action="<?php echo Util::getAppRoot(); ?>/users/register" methode="post">
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <div class="form-group">
                        <label for="userId">UserId: <sup>*</sup></label>
                        <input type="text" name="userId" id="userId" class="form-control form-control-sm" value="<?php echo Register::getData('_userId'); ?>">
                        <span class="invalid-feedback" id="userIdErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" name="name" id="name" class="form-control form-control-sm" value="<?php echo Register::getData('_name'); ?>">
                        <span class="invalid-feedback" id="nameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="firstName">First name: <sup>*</sup></label>
                        <input type="text" name="firstName" id="firstNAme" class="form-control form-control-sm" value="<?php echo Register::getData('_name'); ?>">
                        <span class="invalid-feedback" id="firstNameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm" value="<?php echo Register::getData('_email'); ?>">
                        <span class="invalid-feedback" id="emailErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" id="password" class="form-control form-control-sm" value="<?php echo Register::getData('_password'); ?>">
                        <span class="invalid-feedback" id="passwordErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm password: <sup>*</sup></label>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control form-control-sm" value="<?php echo Register::getData('_confirmPassword'); ?>">
                        <span class="invalid-feedback" id="confirmPasswordErr"></span>
                    </div>
                </div>
                <div class="col-sm-6 mx-auto">
                    <div class="row">
                        <div class="col-sm-9 mx-auto">
                            <div class=" form-group">
                                <label for="street">Street: </label>
                                <input type="text" name="street" id="street" class="form-control form-control-sm" value="<?php echo Register::getSubData('_address', '_street'); ?>">
                                <span class="invalid-feedback" id="streetErr"></span>
                            </div>
                        </div>
                        <div class="col-sm-3 mx-auto">
                            <div class=" form-group">
                                <label for="houseNumber">Number: </label>
                                <input type="text" name="houseNumber" id="houseNumber" class="form-control form-control-sm" value="<?php echo Register::getData('_userId'); ?>">
                                <span class="invalid-feedback" id="houseNumberErr"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mx-auto">
                            <div class="form-group">
                                <label for="zipcode">Zip code: </label>
                                <input type="text" name="zipcode" id="zipcode" class=" form-control form-control-sm" value="<?php echo Register::getData('_name'); ?>">
                                <span class="invalid-feedback" id="zipcodeErr"></span>
                            </div>
                        </div>
                        <div class="col-sm-8 mx-auto">
                            <div class="form-group">
                                <label for="city">City: </label>
                                <input type="text" name="city" id="city" class=" form-control form-control-sm" value="<?php echo Register::getData('_name'); ?>">
                                <span class="invalid-feedback" id="cityErr"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <select class="form-control" id="country">
                            <option>Belgie</option>
                            <option>Nederland</option>
                        </select>
                        <span class="invalid-feedback"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <input type="submit" value="Registreer" class="btn btn-dark btn-block mx-auto">
                </div>
                <div class="col-sm-3">
                    <a href=" <?php echo Util::getUrlRoot();?>/user/login" class="btn btn-light btn-block">Je hebt een account</a>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
</div>