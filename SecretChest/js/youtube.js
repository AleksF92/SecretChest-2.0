//var apiKey = "AIzaSyByzTffAPDBRASXJbvSVuqw6u1AIdFbjos";
var apiKey = "AIzaSyALRD1n1KURCLqUIu_64ij5_KetssbkNbo";

$(document).ready(function() {
	//Get video id
	var vId = getParameter();
	console.log("Video id: " + vId);

	//Get youtube video data
	$.get("https://www.googleapis.com/youtube/v3/videos/", {
			id: vId,
			part: "snippet",
			key: apiKey
		},
		function(data) {
			var vFound = false;

			$.each(data.items, function(i, item) {
				vFound = true;

				//Grab data
				console.log(item);
				var vTitle = item.snippet.title;
				var vOwner = item.snippet.channelTitle;

				if (vOwner.indexOf("SecretChest") > -1) {
					//Add title
					$(".title").append("<h1>" + vTitle + "</h1>");

					//Add video
					$(".video").append(
						"<div class='embed-responsive embed-responsive-16by9'>" +
							"<iframe class='embed-responsive-item' src='https://www.youtube.com/embed/" + vId + "'></iframe>" +
						"</div>"
					);
				}
				else {
					//Add error
					$(".title").append("<h1>Feil</h1>");
					$(".video").append("<p>Denne videoen er ikke laget av Secret Chest!</p>");
				}
			});

			//Check if no videos was found
			if (vFound === false) {
				//Add error
				$(".title").append("<h1>Feil</h1>");
				$(".video").append("<p>Denne videoen finnes ikke eller er ikke tilgjengelig!</p>");
			}
		}
	);
});

function getParameter() {
	var url = window.location.href;
	var extra = url.substring(url.lastIndexOf("/") + 1);
	return extra;
}