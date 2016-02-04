// Define the overlay, derived from google.maps.OverlayView
function Label(opt_options) {
 // Initialization
 this.setValues(opt_options);

 // Label specific
 var span = this.span_ = document.createElement('span');
 
 span.style.cssText = 'background-image: linear-gradient(bottom, rgb(255,255,255) 14%, rgb(240,240,240) 57%);' + 
		'background-image: -o-linear-gradient(bottom, rgb(255,255,255) 14%, rgb(240,240,240) 57%);' + 
		'background-image: -moz-linear-gradient(bottom, rgb(255,255,255) 14%, rgb(240,240,240) 57%);' + 
		'background-image: -webkit-linear-gradient(bottom, rgb(255,255,255) 14%, rgb(240,240,240) 57%);' + 
		'background-image: -ms-linear-gradient(bottom, rgb(255,255,255) 14%, rgb(240,240,240) 57%);' +
		'background-image: -webkit-gradient(' + 
		'	linear,' + 
		'	left bottom,' + 
		'	left top,' + 
		'	color-stop(0.14, rgb(255,255,255)),' + 
		'	color-stop(0.57, rgb(240,240,240))' + 
		');' + 
		
		'border-radius: 6px;'+
		'-moz-border-radius: 6px;'+
		'-webkit-border-radius: 6px;'+
 					  'position: relative; left: -50%; top: 10px; ' +
                      'white-space: nowrap; border: 1px solid blue; font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:10px; ' +
                      'padding: 4px;  ';

 var div = this.div_ = document.createElement('div');
 div.appendChild(span);
 div.style.cssText = 'position: absolute; display: none';
};
Label.prototype = new google.maps.OverlayView;

// Implement onAdd
Label.prototype.onAdd = function() {
 var pane = this.getPanes().overlayLayer;
 pane.appendChild(this.div_);

 // Ensures the label is redrawn if the text or position is changed.
 var me = this;
 this.listeners_ = [
   google.maps.event.addListener(this, 'position_changed',
       function() { me.draw(); }),
   google.maps.event.addListener(this, 'text_changed',
       function() { me.draw(); })
 ];
};

// Implement onRemove
Label.prototype.onRemove = function() {
 this.div_.parentNode.removeChild(this.div_);

 // Label is removed from the map, stop updating its position/text.
 for (var i = 0, I = this.listeners_.length; i < I; ++i) {
   google.maps.event.removeListener(this.listeners_[i]);
 }
};

// Implement draw
Label.prototype.draw = function() {
 var projection = this.getProjection();
 var position = projection.fromLatLngToDivPixel(this.get('position'));

 var div = this.div_;
 div.style.left = position.x + 'px';
 div.style.top = position.y + 'px';
 div.style.display = 'block';

 this.span_.innerHTML = this.get('title').toString();
};
