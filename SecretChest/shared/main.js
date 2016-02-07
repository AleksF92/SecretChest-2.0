var apiKey = "AIzaSyByzTffAPDBRASXJbvSVuqw6u1AIdFbjos";

$(document).ready(function() {
	//Start the carousel slide
	$('.carousel').carousel({
		interval: 6000
	});

	//Get youtube playlist
	$.get("https://www.googleapis.com/youtube/v3/channels", {
			part: "contentDetails",
			forUsername: "ChestSecret",
			key: apiKey
		},
		function(data) {
			$.each(data.items, function(i, item) {
				//Grab data
				console.log(item);
				var pId = item.contentDetails.relatedPlaylists.uploads;
				loadPlaylistVideos(pId);
			});
		}
	);

	function loadPlaylistVideos(pId) {
		console.log("Loading playlist id: " + pId);

		//Get youtube videos
		$.get("https://www.googleapis.com/youtube/v3/playlistItems", {
				part: "snippet",
				maxResults: 6,
				playlistId: pId,
				key: apiKey
			},
			function(data) {
				$.each(data.items, function(i, item) {
					//Grab data
					console.log(item);
					var vLink = "https://www.youtube.com/watch?v=" + item.snippet.resourceId.videoId;
					var vThumbnail = item.snippet.thumbnails.medium.url;
					var vTitle = item.snippet.title;

					var videoHtml = "<div class='col-md-2'>" +
										"<a href='" + vLink + "'>" +
											"<img src='" + vThumbnail + "' width='100%'>" +
											"<p>" + vTitle + "</p>" +
										"</a>" +
									"</div>";

					$(".featuredVideos").append(videoHtml);
				});
			}
		);
	}
});