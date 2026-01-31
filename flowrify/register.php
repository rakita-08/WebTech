<?php
include_once "header.php"
?>
<div class="container">
         <div id="register_form">
            <form action="process_register.php" method="post" onclick="return validate()">
                <div>
                        <label>First Name</label>
                        <input type="text" name="first_name" id="first_name">
                        <span id="first_name_error"></span>
                </div>
                <br>
                <div>
                        <label>Last Name</label>
                        <input type="text" name="last_name" id="last_name">
                        <span id="last_name_error"></span>
                </div>
                <br>
                <div>
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="please enter valid email">
                        <span id="email_error"></span>
                </div>
                <br>
                <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password">
                        <span id="password_error"></span>
                </div>
                <br>
                <div>
                        <input type="checkbox" value="1" id="checkbox">
                        <span id="check_error"></span>
                        Terms and Condition
                </div>
                <br>
                <div  id="register_btn">
                    <input type="submit" value="Register" onclick="validate()">
                </div>
            </form> 
        </div>
</div>
<?php
include_once "footer.php";
?>