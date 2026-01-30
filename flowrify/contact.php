<?php
include_once "header.php";
?>
<div class="container">
            <div id="form">
                <h2>Contact Us</h2>
                <br>
                <form action="process_contact.php" method="post">
                    <div>
                        <label>Name :</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <br>
                    <div>
                        <label>Email :</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <br>
                    <div class="detail">
                        <label>Message :</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Send Message" id="contact_btn">
                    </div>
                </form>
            </div>
</div>
<?php
include_once "footer.php";
?>