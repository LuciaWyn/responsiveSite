<?php
require 'head.php';
if(isset($_POST["Message"])){
    
    if(strlen(isset($_POST["name"])) != 0){
        echo '<p>Hi'.$_POST["name"].',</p>';
    }
    else{
        echo '<p>Hi,</p>';
    }
    echo '<p>Thank you for the message. Get back to you soon!</p>';
}
else{
?>
<h1>Contact Us</h1>
<form method="POST">
    <div class="grp">
        <label for="name">Name:</label>
        <input name="name" type="text" />
    </div>
    <div class="grp">
        <label for="email">* E-mail:</label>
        <input name="email" type="text" required/>
    </div>
    <div class="grp">
        <label for="msg">* message:</label>
        <textarea name="msg" cols="20" rows="10" required/>
        </textarea>
    </div>
    <input type="submit" name="Message" Value="Message"/>
</form>
<?php
}
require 'foot.php';
?>
