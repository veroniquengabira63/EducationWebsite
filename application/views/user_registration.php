<?php include 'common/header.php'; ?>
<style type="text/css">

    .login-right {
            background: #dbd9da
        }

        #login_form {
            margin-top: 20px
        }
        .loginpannel {
    width: 100%;
}
.login-left {
    background: linear-gradient(
125deg
,#140C64 0,#140C64 100%);
    border-right: 1px solid rgba(188,188,188,.2);
}
.loginform {
    width: 49.8%;
    display: inline-block;
    vertical-align: top;
    text-align: center;
}
.login-left .data-wrap {
    top: 50%;
    transform: translateY(-50%);
    box-shadow: 0 0 2px #ccc;
    border-radius: 4px;
    border: 1px solid #dadada;
    background: #f6f6f6;
    padding: 15px 15px 30px;
}
.login-left .data-wrap, .login-right .login-form .inline-mobileno, .login-right .login-form form, .loginpannel {
    position: relative;
}
.data-wrap {
    text-align: left;
    margin: auto;
    display: inline-block;
}
.data-wrap h4 {
    font-weight: 600;
    font-size: 20px;
    color: #3b5998;
    margin-bottom: 15px;
}
.login-left ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.login-left ul li {
    background: #d5dadc;
    margin-bottom: 5px;
    font-size: 13px;
    border: 1px solid #eee;
    font-weight: 600;
    border-radius: 2px;
    list-style: inside;
    min-width: 360px;
    color: #000;
    padding: 10px;
}
.login-right {
    background: #dbd9da;
}
.login-right .login-form {
    display: inline-block;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}
.login-right .login-form .login-div {
    border: 1px solid #dadada;
    box-shadow: 0 0 2px #ccc;
    border-radius: 4px;
    background: #f6f6f6;
    padding: 10px 20px 30px;
    width: 430px;
}
.login-validation-errors {
    font-size: 1.2rem;
    left: 5px;
    top: 0;
    color: red;
    margin: 0;
    text-align: center;
}
.login-right .login-form h4 {
    text-align: center;
}
.data-wrap h4 {
    font-weight: 600;
    font-size: 20px;
    color: #3b5998;
    margin-bottom: 15px;
}
#success-regis {
    text-align: center;
    color: #41b212;
    font-weight: bolder;
    font-size: 18px;
    }
    #login_form {
    margin-top: 20px;
}
.login-container {
    white-space: nowrap;
    position: relative;
}
.login-right .login-form form input[type=password], .login-right .login-form form input[type=text], .login-right .login-form form input[type=email], .login-right .login-form form input[type=date], .login-right .login-form form select, .login-right .login-form form textarea {
    height: 35px;
    border-radius: 3px;
    width: 100%;
    border: 1px solid #eee;
    margin: 5px;
    font-size: 14px;
    box-shadow: none;
    padding: 4px 8px;
}
.login-right .login-form .btnlogin {
    width: 100%;
    margin: 10px 5px 5px;
    height: 40px;
    font-size: 16px;
    background-color: #F8961E;
    color: #fff;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.login-right .login-form .forgot {
    display: inline-block;
    font-size: 12px;
    text-align: right;
    text-decoration: none;
    color: #aaa;
    outline: 0;
    float: right;
    margin: 5px 0;
}

.left{
    height: 737px;
}


@media only screen and (max-width: 480px) {
.login-left {
    background: linear-gradient(125deg,#2997bf00 0,#5370a900 100%);
    border-right: 1px solid rgba(188,188,188,.2);
}
.login-right .login-form {
    display: inline-block;
    position: relative;
    top: 24%;
    transform: translateY(-50%);
}
.login-right .login-form .login-div {
    border: 1px solid #dadada;
    box-shadow: 0 0 2px #ccc;
    border-radius: 4px;
    background: #f6f6f6;
    padding: 10px 20px 30px;
    width: 373px;
}
.left{
    height: 537px;
}
}
label.error {
    font-size: 12px;
    margin: 0 10px;
    color: #e00;
}
label.error:before {
    content:'x';
    background:#e00;
    padding:0 5px 1px;
    color:#fff;
    margin:0 2px;
}
</style>
<div class="loginpannel" style="background:#dbd9da;">
   
    <div class="login-left loginform font-set left">
        <div class="data-wrap">
            <h4> Why Sign Up?</h4>
            <ul>
                <li>View College Brochures</li>
                <li>Check Detailed Fees</li>
                <li>Shortlist and Apply to colleges</li>
                <li>Ask Questions to senior Counselors</li>
                <li>Never miss Important deadlines</li>
            </ul>
        </div>
    </div>
    <div class="login-right loginform font-set left">
        <div class="main-form login-form data-wrap">
            <div class="login-div">               
                <h4> User Registration</h4>
                
                <form method="post" id="register_form" action="<?php echo base_url() ?>/home/userRegister">
                    					
                    <input placeholder="Enter your name" class="form-control validate" type="text" id="name" name="full_name" required="">

                    <input placeholder="Enter your email" class="form-control validate" type="email" id="user_email" name="email" required="">
                 
					<input required="" placeholder="Enter your Password" class="nonull lpassword validate"  type="password" id="password" name="password">
                    <input required="" placeholder="Confirm your Password" class="nonull lpassword validate"  type="password" id="confirm_password" name="confirm_password">
                    
					<button class="btn btnlogin" type="submit">Register</button>
					<a class="forgot to-forgot link-change" href="">Forgot my Password ?</a></form>
            </div>
            <p class="next-link">Already A Member?  <a class="link-change to-registration" href="<?php echo base_url() ?>/login" title="Sign In">Login here </a> it's Easy.</p>
        </div>
		
        
		
       
    </div>
</div>
<?php include 'common/footer.php'; ?>