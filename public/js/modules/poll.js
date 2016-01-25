Modules.poll = {
	start: function() {
		//Listener dos botões
		$('.poll .button-level').on('tap click', function(event) {
			event.preventDefault();

			var poll = $(this).closest('.poll');

			if (!$(poll).hasClass('votado')) {
				ratchet.emit('poll', {number: $(poll).attr('data-number'), value: $(this).attr('data-value')});

				if($(poll).attr('data-change') != "true"){
					$(poll).addClass('votado');
				}

				Modules.sound.horn();
			}
		});

		$('.poll .button-level span').on('tap click', function(event) {
			event.preventDefault();
		});

		//Listener do socket
		ratchet.on(1, this.callback);
	},

	callback: function(data) {
		if (data.type == 'poll-result') {
			var poll = $('.poll[data-number="' + data.number + '"]');

			poll.find('.button-level').find('span b').html('0');
			poll.find('.button-level').find('.level').height('0%');

			$.each(data.votes, function(index, quantity) {
				poll.find('.button-level[data-value="' + index + '"]').find('span b').html(quantity);
			});

			$.each(data.percentages, function(index, quantity) {
				poll.find('.button-level[data-value="' + index + '"]').find('.level').height(quantity + '%');
				text = poll.find('.button-level[data-value="' + index + '"]').find('span b').text();
				poll.find('.button-level[data-value="' + index + '"]').find('span b').html(text + ' - ' + quantity + '%');
			});

			//if(data.number == 'pannel'){
			//	if(data.percentages.change >= 50){
			//		Modules.sound.end();
			//	}
			//}
		}
	},
}