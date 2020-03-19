<div class="loginblock" id="shad1">
		<div class="ramka_login" id="shad">
			<div class="head_login" id="message">
				РЕГИСТРАЦИЯ
				<form id="form">
					<div class="box_log_input">
						ЛОГИН
						<input type="text" name="login">
					</div>
					<div class="box_log_input">
						ПАРОЛЬ
						<input type="password" name="password">
					</div>
					<div class="box_log_input">
						ПОВТОРИТЕ ПАРОЛЬ
						<input type="password" name="password2">
					</div>
					<div class="box_log_input">
						ПОЧТА
						<input type="text" name="mail">
					</div>
					<input type="submit" name="send" value="АВТОРИЗОВАТЬСЯ" id="shad2">
				</form>
			</div>
		</div>
	</div>


	<script>
$("#form").on("submit", function(e){
	e.preventDefault();

	$.ajax({
		url: '/inc/registr.php',
		method: 'POST',
		data: $(this).serialize(),
		success: function(data){
			$('#shad').html(data);

		}
	});
});
</script>