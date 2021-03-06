document.addEventListener('contextmenu', event => event.preventDefault());
	
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
			 e.keyCode === 83 || 
             e.keyCode === 85 || 
			 e.keyCode === 80 || 
			 e.keyCode === 123 || 
			 e.keyCode === 73 || 
             e.keyCode === 74 ||  
             e.keyCode === 117)) {
            alert('PROIBIDO');
            return false;
        } else {
            return true;
        }
};
	
$(document).bind('keydown', function(e) {
  if(e.ctrlKey && (e.which == 83)) {
    e.preventDefault();
    alert('PROIBIDO');
    return false;
  }
});
$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
$(document).on("contextmenu", function (e) {        
    e.preventDefault();
});s