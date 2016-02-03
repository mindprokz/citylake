$(document).ready(function() {
$("#form-contact").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "/php/sendcontact.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
	result = noty({ layout: 'bottomRight',
    			theme: 'defaultTheme',
    			text: 'Сообщение успешно отправлено',
                type: 'success',
                timeout: 2000,
    			animation: {
        			open: {height: 'toggle'},
        			close: {height: 'toggle'},
        			easing: 'swing',
        			speed: 500 // opening & closing animation speed
    			},
                killer: true,
    		});
} else {
result = noty({ layout: 'bottomRight',
    			theme: 'defaultTheme',
    			text: msg,
                timeout: 2000,
                type: 'error',
    			animation: {
        open: {height: 'toggle'},
        close: {height: 'toggle'},
        easing: 'swing',
        speed: 500 // opening & closing animation speed
    },
    killer: true,
    		});
}

$("#send-contact").on( "click", function() {

$.when( effect() ).done(function() {

});
});
}
});
return false;
});
});