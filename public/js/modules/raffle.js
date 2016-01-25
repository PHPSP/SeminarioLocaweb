Modules.poll = {
	start: function() {
		//Listener dos botões
		$('.raffle .button-level').on('tap click', function(event) {
			event.preventDefault();

			ratchet.emit('raffle', {});

			Modules.sound.horn();
		});

		$('.poll .button-level span').on('tap click', function(event) {
			event.preventDefault();
		});

		//Listener do socket
		ratchet.on(1, this.callback);
	},

	callback: function(data) {
		if (data.type == 'raffle-result') {
			$(".winner-message").html('');

			if(data.winner == true){
				$(".winner-message").html('Parabens Você é O Vencedor');
			}

			$(".winner-nickname").html(data.nickname);
		}
	}
};