// JavaScript Document

$(document).ready(function() {

$.ajax({
type: "GET",
url: "xml/race-schedule.xml",
dataType: "xml",
success: parseXml
});

function parseXml(xml) {
	
	$(xml).find("race").each(function() {
		//Loops through each state & find's respective instance of city & id in the xml file
		//$('#bikeModel,  .popup_block #bikeModel').append($(this).find("model").text() );
	
		$("#XMLDataTable").append('<tr class="alternate">'+
			'<td>'+ $(this).find("Date").text() +'</td>' +
			'<td>'+$(this).find("Event").text()+'</td>' +
			'<td>'+$(this).find("Venue").text()+'</td>' +
			'<td>'+$(this).find("Ctry").text()+'</td>' +
			'<td>'+$(this).find("Class").text()+'</td>' +
			'</tr>');
			});
	}
});
