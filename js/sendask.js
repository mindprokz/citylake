$(document).ready(function() {
$("#form-ask").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "/php/sendask.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
	result = noty({ layout: 'center',
    			theme: 'defaultTheme',
                type: 'success',
                timeout: 2000,
    			text: 'Сообщение успешно отправлено',
    			animation: {
        			open: {height: 'toggle'},
        			close: {height: 'toggle'},
        			easing: 'swing',
        			speed: 500 // opening & closing animation speed
    			},
                killer: true,
    		});
} 
$("#send-ask").on( "click", function() {

$.when( effect() ).done(function() {

});
});
}
});
return false;
});
});