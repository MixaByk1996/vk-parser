$(function () {

	audio = $('#audio_player');
	nvol = 1;
	audio.prop("volume", nvol);
	var barWidth = $('.progress_bar').width();
	var ct = 0;
	progress_update_interval = 0;

	$(document).on('click', '.player_btn_lnk ', function (event) {
		let wnext = $(this);

		event.preventDefault();
		if ($(this).parents('.tracklist_item').hasClass('isPlay')) {

			if ($(this).hasClass('pause_btn')) {
				$('#player_block .pause_btn').click();
			} else {
				$('#player_block .play_btn').click();
			}
		} else {
			audio.trigger('pause');

			$('.isPlay .player_btn_lnk').removeClass('pause_btn').addClass('play_btn');
			$('.isPlay').removeClass('isPlay');

			onChangeVideo(wnext);

			$("#play_list").empty()
			$(this).parents('main').find('.tracklist_item').each(function () {
				$("#play_list").append($(this).eq(0).clone());
			})
		}
	});

	$(document).on('click', '#player_block .play_btn', function (event) {
		audio.trigger('play');
		$('.isPlay .player_btn_lnk').removeClass('play_btn').removeClass('pause_btn');
		$('#player_block .play_btn').removeClass('play_btn').addClass('pause_btn');
	});

	$(document).on('click', '#player_block .pause_btn', function (event) {
		audio.trigger('pause');
		$('.isPlay .player_btn_lnk').removeClass('pause_btn').addClass('play_btn');
		$('#player_block .pause_btn').removeClass('pause_btn').addClass('play_btn');
	});

	$(document).on('click', '.next_btn', function (event) {
		onNextPrevVideo('next');
	})

	$(document).on('click', '.prev_btn', function (event) {
		onNextPrevVideo('prev');
	})

	$(document).on('mousedown', '.progress_bar, .progressbar_thumb', function (e) {
		$(this).on('mousemove', function (e) {
			var pos = $(this).offset();
			var x = e.pageX - pos.left;
			var d = audio.prop('duration');
			var p = (100 / barWidth) * x;
			ct = (d / 100) * p;
			clearInterval(progress_update_interval);
			$('.progressbar_slug').css('width', p + '%');

		})
	}).mouseup(function (e) {
		if (event.target.className == 'progress_bar' || event.target.className == 'progressbar_thumb') {
			$(this).off('mousemove');
			audio.trigger('pause');
			audio.prop('currentTime', ct);
			audio.trigger('play');

			progress_update_interval = setInterval(function () {
				updateProgressBar();
			}, 1000);
		}
	});




	audio.on('ended', function () {
		console.log("Audio ended");
		onNextPrevVideo('next');
	});
	audio.on('play', function () {
		$('.isPlay .player_btn_lnk').removeClass('play_btn').addClass('pause_btn');
		$('#player_block .cover_block ').removeClass('play_btn').addClass('pause_btn');
	});
	audio.on('pause', function () {
		$('.isPlay .player_btn_lnk').removeClass('pause_btn').addClass('play_btn');
		$('#player_block .cover_block ').removeClass('pause_btn').addClass('play_btn');
	});

	$(window).resize(function () {
		barWidth = $('.progress_bar').width();
	})

});

function onChangeVideo(wnext) {

	var t_name = wnext.data('track-name');
	var a_name = wnext.data('artist-name');
	var a_url = wnext.data('artist-url');
	var d_url = wnext.data('download-url');
	var vid = wnext.attr('href');
	var cover = wnext.find('.album_cover').attr('src');
	console.log(1);
	console.log(cover);
	audio.attr('src', vid);

	wnext.parents('.tracklist_item').addClass('isPlay');
	$('.tracklist_block').find('.player_btn_lnk[href*="' + wnext.attr('href') + '"]').each(function () { $(this).parents('.tracklist_item').addClass('isPlay') });

	$('#player_block .track_name').removeClass('animated');
	$('#player_block .artist_name').removeClass('animated');
	$('#player_block .track_name').html(t_name);
	$('#player_block .artist_name').html(a_name);
	$('#player_block .artist_name').attr('href', a_url);
	$('#player_block .download_btn').attr('href', d_url);
	$('#player_block .album_cover').attr('src', cover);

	onPlayerReady();

	let bw = $('#player_block .track_info_block').width();
	let tw = $('#player_block .track_name').width();
	let aw = $('#player_block .artist_name').width();

	if (bw < tw) {
		$('#player_block .track_name').addClass('animated');
	}
	if (bw < aw) {
		$('#player_block .artist_name').addClass('animated');
	}


}

function onNextPrevVideo(pnbtn) {
	let wnext;

	if (pnbtn == 'next') {
		wnext = $('#play_list .isPlay').next('div.tracklist_item').find('.player_btn_lnk');
	} else {
		wnext = $('#play_list .isPlay').prev('div.tracklist_item').find('.player_btn_lnk');
	}

	if (wnext.length != 0) {
		$('.isPlay .player_btn_lnk').removeClass('pause_btn').addClass('play_btn');
		$('.isPlay').removeClass('isPlay');
		onChangeVideo(wnext);
	} else {
		audio.trigger('pause');
	}
}
function onPlayerReady(event) {
	updateTimerDisplay();
	updateProgressBar();

	clearInterval(time_update_interval);
	clearInterval(progress_update_interval);

	var time_update_interval = setInterval(function () {
		updateTimerDisplay();
	}, 1000);

	progress_update_interval = setInterval(function () {
		updateProgressBar();
	}, 1000);
}

function updateProgressBar() {
	currentTime = audio.prop('currentTime');
	duration = audio.prop('duration');
	$('.progressbar_slug').css('width', ((currentTime / duration) * 100) + '%');
}
function updateTimerDisplay() {
	currentTime = audio.prop('currentTime');
	duration = audio.prop('duration');

	$('#player_block .progressbar_remaining, .isPlay .progressbar_remaining').text(formatTime(currentTime));
}
function formatTime(time) {
	time = Math.round(time);

	var minutes = Math.floor(time / 60),
		seconds = time - minutes * 60;

	seconds = seconds < 10 ? '0' + seconds : seconds;

	return minutes + ":" + seconds;
}
