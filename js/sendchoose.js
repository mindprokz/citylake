$(document).ready(function() {
$("#form-choose").submit(function() {
var str = $(this).serialize();

$.ajax({
type: "POST",
url: "/php/sendchoose.php",
data: str,
success: function(msg) {

if(msg == 'OK') {
result = noty({ layout: 'center',
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
} 

$("#send-choose").on( "click", function() {

$.when( effect() ).done(function() {

});
});
}
});
return false;
});
});