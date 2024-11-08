<?php
include("../config.php");
include(HEADER_TEMPLATE);
?>
<section class="d-flex justify-content-center">
        <div class="cardlo">
            <a class="login">Log in</a>
			<form action="valida.php" method="post">
				<div class="inputBox mb-4">
					<input id="log" name="login" required>
					<span class="user">Username</span>
				</div>

				<div class="inputBox mb-4">
					<input id="pass" name="senha" type="password" required>
					<span>Password</span>
				</div>

				<button type="submit" class="enter">Enter</button>
			</form>
        </div>
</section>
<?php include(FOOTER_TEMPLATE); ?>