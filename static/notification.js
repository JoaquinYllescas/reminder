var notifications = {
  defaults: { 
  	usuarioCreado: 'Su usuario se ha creado correctamente' 
  },
  usuarioCreado: function () {
  	document.getElementById('notify').innerHTML = this.defaults.usuarioCreado;
  	// document.getElementById('notify').className -= " bounceOutUp";
    

    console.log(this.defaults.usuarioCreado);
    notifications.show();
  },
  show: function(){
  	document.getElementById('notify').className += " bounceInDown";
  	notifications.hide();
  },
  hide: function(){
  	setTimeout(function(){
  		 
  		document.getElementById('notify').className += "  bounceOutUp";
	}, 2500);

  	notifications.reset();
  	
  },
  reset: function(){
  		setTimeout(function(){
  			console.log("Si");
		  	document.getElementById('notify').className -= "  ";
			document.getElementById('notify').className += "  animated";		
  		},4000);
  	
  }
};
