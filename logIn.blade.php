<?php include("layout/header.php"); ?>

<div class="signup_wrapper login">
	<div class="headerPicture">
		<img src="../img/d3logosite-01.png">
	</div>
	<div class="accountManagement">
		<form class="input_form">
			<div class="input">
				<input type="text" placeholder="Username" name="">
				<div class="svg personCreate"></div>
			</div>
			<div class="input">
				<input type="password" placeholder="password" name="">
				<div class="svg lockCreate"></div>
			</div>

			<button class="acc-btn" type="submit">Log In</button>
		</form>
		<div class="oth_links">
			<a href="signUp.html">New here? Sign up</a>
			<a href="forgetPassword.html">Forget Password?</a>
		</div>
	</div>


	<div class="createSocial">
		<a class="svg facebook" href="" target="_blank"></a>
		<a class="svg youtube" href="" target="_blank"></a>
		<a class="svg instagram" href="" target="_blank"></a>
		<a class="svg twitter" href="" target="_blank"></a>
		<a class="svg linkedin" href="" target="_blank"></a>
	</div>
</div>

<?php include("layout/footerVisitor.php"); ?>

</body>
</html>