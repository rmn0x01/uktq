<form action="<?php echo site_url('c_login/aksi_login_admin'); ?>" method="post">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" name="username" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
					<?php
	echo "<div class='message'>";
	if (isset($message)) {
    echo $message;
    echo "</div>";
	echo "<br><br>";
}

?>
                </div>
	</form>