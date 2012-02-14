(function($) {

$.fn.ForcePriceOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
			var currentText = $(this).val();

			// detect if there is already a decimal
			// and the user is trying to add another decimal
			var dotIndex = currentText.indexOf('.');
			if ( dotIndex != -1){
				
				if (key == 190 || key == 110){
					return false;
				}
				
				
				// detect if there is already a decimal with two numbers after it.
				// if there is text selected, skip this and detect for allowable keys below.
				
				var caret = $(this).caret();
				var has2cents = (currentText.split('.')[1].length == 2);
				var hasSelection = (caret.start != caret.end);
				
				// debug.log('key : '+key);
				// debug.log('caret ', caret)
				if (key == 8 || key == 9 || key == 46 || (key >= 37 && key <= 40) ){
					return true;
				}
				
				if ( !hasSelection && has2cents && caret.end > dotIndex ){
						return false;
				}
			}
			
			//if this is a customItemPriceTextInput allow the enter key
			if($(this).hasClass('customItemPriceTextInput') && key == 13){
				return true;
			}
			
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            return (
                key == 8 ||
                key == 9 ||
                key == 46 ||
                key == 190 ||   // normal .
                key == 110 ||   // keypad .
                (key >= 37 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        })
    })
};
}(jQuery));