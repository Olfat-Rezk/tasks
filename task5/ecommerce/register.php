<?php
$title ="Register";

include"layouts/header.php";
include"layouts/nav.php";
include"layouts/Breadcrumb.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    // [
    //     'first_name'=>['required','string','between:2,10'],
    //     'last_name'=>['required','string','between:2,10'],
    //     'email'=>['required','regular exep','unique:users.email'],
    //     'phone'=>['required','regular exep','unique:users,phone'],
    //     'password'=>['required','regular exep','confirmed:pass_confirm'],
    //     'pass_confirm'=>['required'];
    //     'gender'=>['required','in:"f","m"']
    // ]



}
?>


<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="register-wrapper">
                    <div class="register-tab-list nav">

                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>

                    <div id="lg2" class="tab-pane">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form method="post">
                                    <input type="text" name="first-name" placeholder="First name">
                                    <input type="text" name="last-name" placeholder="Last name">
                                    <input name="user-email" placeholder="Email" type="email">
                                    <input name="phone" placeholder="Phone" type="number">
                                    <input type="password" name="password" placeholder="Password">
                                    <input type="password" name="pass_confirm" placeholder="Password confirmed">
                                    <select name="gender" class="form-control" >
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                   
                                    <div class="button-box mt-5">
                                        <button type="submit"><span>Register</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include"layouts/footer.php";
include"layouts/scripts.php";
?>