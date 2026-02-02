<?php
include_once "header.php"
?>
<div class="container">
            <div id="login_form">
                <form action="login_process.php" method="post">
                    <div>
                        <label>Username</label>
                            <input type="text" name="username" id="username">
                    </div>
                    <br>
                    <div>
                        <label>Password</label>
                            <input type="password" name="password" id="password">
                    </div>
                    <br>
                    <div id="login_btn">
                        <input type="submit" value="login">
                    </div>
                </form>
            </div>
</div>
<?php
include_once "footer.php";
?>