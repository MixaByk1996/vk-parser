$(function(){
    'use strict';
 
	var triggerBookmark = $(".js-bookmark");  
	
	triggerBookmark.click(function(e) {
		e.preventDefault();
		if (window.sidebar && window.sidebar.addPanel) { 
            window.sidebar.addPanel(document.title,window.location.href,'');
		} else if(window.external && ('AddFavorite' in window.external)) { 
			window.external.AddFavorite(location.href,document.title); 
		} else if(window.opera && window.print || window.sidebar && ! (window.sidebar instanceof Node)) {
			triggerBookmark.attr('rel', 'sidebar').attr('title', document.title);
			return true;
        } else { 
			alert('Вы можете добавить эту страницу в закладки, нажав ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D на клавиатуре.');
     
		}
	});

	$('.search_input').on('input', function(){
		if ( $(this).val() != '' ){
			$(this).next('.btn_clear').addClass('active');
			$(this).addClass('notempty');
		} else {
			$(this).next('.btn_clear').removeClass('active');
			$(this).removeClass('notempty');
		}
	});
	$('.btn_clear').on('click', function(){
		let $si = $(this).parent().find('.search_input');
		if ( $si.val() != '' ){
			$si.val('');
			$(this).removeClass('active');
			$si.removeClass('notempty');
		}
	});


	if ( screen.width > 991) {
		let str='';
		for (let i = 1; i < 19; i++) { 
  
			if (i<10) str = '0'+i; else str = i;
			
			jQuery(".about_section").buoyant({
				numberOfItems: 1,
				elementClass: 'note',
				imgSrc: 'img/bg-elements/bg-element-'+str+'.svg',
				colliding: true
			});
		}
	}
	
	catRandom();
	musresize();
	playerFixed();
	
	$(window).resize(function(){
		musresize();
		playerFixed();
	});
	
	$('.user_block_header').on('click', function(){
		$(this).parent().toggleClass('active');
	});
	
	$('.music_friends').on('click', function(){
		if ( $('.toolbar_block').hasClass('owl-carousel') && screen.width < 992) {
			$('.toolbar_block').trigger('to.owl.carousel',[2, 500]);
		}
		$(this).parent().toggleClass('active');
		$('#scrollbar').tinyscrollbar({ thumbSize: true });
	});
	$('.friends_list_item ').on('click', function(){
		$('.btn_toolbar').removeClass('active');
		$('.music_friends').addClass('active');
		$('.music_friends_block ').removeClass('active');
	});

	$('.btn_toolbar:not(".music_friends")').on('click', function(){
		$('.btn_toolbar').removeClass('active');
		$(this).addClass('active');
	});
	
	if ( screen.width < 992) {
		touchplayer();
	}
	
	$('.friends_list_item').on('click', function(){
		let frnd = $(this).find('.user_name').text();
		$('#music_friends').text(frnd);
	});
	
});
function playerFixed(){
	if ( screen.width < 992) {
		$(window).scroll(function(){
			var sh = screen.height;
			var ft = $('.footer').offset().top;
			var st = sh + $(document).scrollTop();
			
			if ( ft <= st ) {
				$('#player_block').addClass('absolute');
			} else {
				$('#player_block').removeClass('absolute');
			}

		});
	}	
}
function catRandom(){
	const cat = ['she', 'he'];
	let randomNumber = Math.floor(Math.random() * (3 - 1) + 1);
	
	$('.top_section').removeClass('she, he').addClass(cat[randomNumber-1]);
	
}
function musresize() {
	if ( $('div').is('.toolbar_block') && screen.width < 992) {
		$('.toolbar_block').find('.btn_toolbar ').each(function(){
			$(this).parent().width($(this).outerWidth(true));
		});
		$('.toolbar_block').addClass('owl-carousel owl-theme');
		$('.toolbar_block').owlCarousel({
			loop:false,
			nav: false,
			dots:false,
			autoWidth:true,
			margin:10,
			items:1
		});

	} else if ( $('div').is('.toolbar_block') && screen.width > 991 && $('.toolbar_block').hasClass('owl-carousel') ) {
		$('.toolbar_block').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-theme');
		
	}
}

function touchplayer() {
	var prev_btn = document.getElementById('prev_btn');
	var next_btn = document.getElementById('next_btn');

	prev_btn.addEventListener('touchstart', function(event) {
		prev_btn.classList.add('active');
	}, false);
	prev_btn.addEventListener('touchend', function(event) {
		prev_btn.classList.remove('active');

	}, false); 
	next_btn.addEventListener('touchstart', function(event) {
		next_btn.classList.add('active');
	}, false);
	next_btn.addEventListener('touchend', function(event) {
		next_btn.classList.remove('active');
	}, false); 
}























































