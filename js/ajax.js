$(document).ready(function() {

	$("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "Controller.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Пользователь добавлен в базу");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});