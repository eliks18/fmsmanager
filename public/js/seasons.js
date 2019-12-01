function getNextSeason()
{
	var pais = $('#country_id').val();
	$.ajax({
		type: 'POST',
		url: 'getNextSeason',
		data: {pais_id: pais},
	})
	.done(function(data) {
		var pais = $('#season_no').val(parseInt(data)+1);
		// console.log(data);
	})
	.fail(function(data) {
		console.log("error"+data);
	});
}