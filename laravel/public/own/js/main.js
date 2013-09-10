;(function() {

//**************************** objeto begin! ****************************
	(function($){
		var msgDialog = function(el, options) {

			//create!!!
			var element = $(el);
			var obj = this;
			var settings = $.extend({
				msg: 'chega de saudade!',
				button: 'Submit'
			}, options || {});

			//***********
			function createBknd() {
				return $('<div class="bknd-dlg" />')
					.width('100%')
					.height('100%')
					.css({
						'background': 'black',
						'position': 'absolute',
						'top': 0,
						'left': 0,
						'opacity': .5
					});
			}

			function createContainer() {
				return $('<div class="message-dialog bg-color-green fg-color-white" />')
			}

			function createLabel() {
				return $('<p />');
			}

			function createButtons() {
				var buttonOk = $('<button class="place-right" />');
				buttonOk.click(function(e){

					// animate and destroy!
					$(this).offsetParent('div.message-dialog')
						.hide(150, function(){
							$(this).remove();
							element.data('msgdialog_force_submit', true);
							element.submit();
						});

					// just destroy!
					$('div.bknd-dlg').remove();
				});

				return buttonOk;
			}

			this.msg = function() {

				var label = createLabel();
				var button = createButtons();

				label.text(settings.msg);
				button.text(settings.button);

				var bknd = createBknd();
				var container = createContainer();
				container.append(label);
				container.append(button);
				container.hide();

				$('body').append(bknd);
				$('body').append(container);
				container.show(200);

			}
		}

		$.fn.msgdialog = function(options) {
			
			return this.each(function(){
				var element = $(this);

				if (element.data('msgdialog')) return;

				var msgdialog = new msgDialog(this, options);
				element.data('msgdialog', msgdialog);
			})
		}
	})(jQuery);
//**************************** objeto end! ****************************

	$(document).ready(function() {

		$('form#a').msgdialog({
			msg: 'Cause theres something about her.. long and shady eyes!',
			button: 'Of course!'
		});

		$('form#b').msgdialog({
			msg: 'Ontem aconteceu alguma coisa!',
			button: 'O que vc acha?'
		});

		$('form').submit(function(e) {

			if ($(this).data('msgdialog_force_submit')) return true;
			$(this).data('msgdialog_force_submit', false);

			var msg = $(this).data('msgdialog');
			msg.msg();
			
			return false;
		});
	});

})();
