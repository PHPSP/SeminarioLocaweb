Modules.sound = {
	start: function() {
		 createjs.Sound.alternateExtensions = ['mp3'];
		 createjs.Sound.registerSound('sounds/horn.ogg', 'horn');
		 createjs.Sound.registerSound('sounds/comecar.ogg', 'comecar');
		 createjs.Sound.registerSound('sounds/qualresposta.ogg', 'qualresposta');
		 createjs.Sound.registerSound('sounds/suspense02.ogg', 'suspense02');
		 createjs.Sound.registerSound('sounds/tchau.ogg', 'tchau');

		 Reveal.addEventListener('slidechanged', function( event ) {
			Modules.sound.checkCurrentSlide(event.currentSlide);
		});

		Modules.sound.checkCurrentSlide(Reveal.getCurrentSlide());
	},

	horn: function() {
		var instance = createjs.Sound.play('horn');
	    instance.volume = 0.5;
	},

	end: function() {
		var instance = createjs.Sound.play('tchau');
		instance.volume = 0.5;
	},

	checkCurrentSlide: function(currentSlide) {
		var instance;
		if ($(currentSlide).hasClass('sound-comecar')) {
			instance = createjs.Sound.play('comecar');
	    	instance.volume = 0.5;
		}  else if ($(currentSlide).hasClass('sound-qualresposta')) {
			instance = createjs.Sound.play('qualresposta');
	    	instance.volume = 0.5;
		}  else if ($(currentSlide).hasClass('sound-suspense02')) {
			instance = createjs.Sound.play('suspense02');
	    	instance.volume = 0.5;
		}  else if ($(currentSlide).hasClass('sound-tchau')) {
			instance = createjs.Sound.play('tchau');
	    	instance.volume = 0.5;
		}
	}
};