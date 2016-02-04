// JavaScript Document
// MAP Library using Google Maps API 3
// Develop by Diego Silveira Mota
// NameSpace to work with Google Maps
// Last revision : 2012-08-17
// GNU
//

Map = {
	
	
	
	
	
	// ------------------------------------------------------------------------------------
	//
	// Private vars 
	//
	// ------------------------------------------------------------------------------------
	map             : '',
	latlng          : '',
	path            : '',
	markers         : [],  // marcadores
	markersCometa   : [],  // marcadores
	markersCount    :  0,
	polys           : '',  // cercas
	kmls            : '',
	kmlCount        :  0,
	
	
	
	// ------------------------------------------------------------------------------------
	//
	// Settings and Gettings 
	//
	// ------------------------------------------------------------------------------------
	
	
	// MAP    -----------------------------------------------------------------------------
	setMap:  function ( _i) { 
		Map.map = _i;
	},
	
	getMap : function() { 
		return Map.map;
	},


	// latLng  -----------------------------------------------------------------------------
	setLatLng : function (_i) { 
		Map.latlng = _i;
	},
	
	getLatLng : function ( ) { 
		return Map.latlng;
	},
	
	
	// Path    -----------------------------------------------------------------------------
	setPath : function (_i) { 
		Map.path = _i;
	},
	
	getPath : function ( ) { 
		return Map.path;
	},
	
	
	
	
	
	
	// Markers  -----------------------------------------------------------------------------	
	setMarkers : function (_i) { 
		Map.markers = _i;
	},
	
	getMarkers : function ( ) { 
		return Map.markers;
	},	
	
	
	setMarkersCount : function (_i) { 
		Map.markersCount = _i;
	},
	
	getMarkersCount : function ( ) { 
		return Map.markersCount;
	},	
	

	
		
	// Poly  -----------------------------------------------------------------------------	
	setPolys : function (_i) { 
		Map.polys = _i;
	},
	
	getPolys : function ( ) { 
		return Map.polys;
	},	
			
	 
	
	
		
	// KML  -----------------------------------------------------------------------------	
	setKML : function (_i) { 
		Map.kmls = _i;
	},
	
	getKML : function ( ) { 
		
		//console.log("Entrou no getKML: " + Map.kmls);
		return Map.kmls;
	},	
	
	
	setKMLCount : function (_i) { 
		Map.kmlCount = _i;
		//console.log('setKMLCount: '+ _i);
	},
	
	getKMLCount : function ( ) { 
		//console.log('getKMLCount: ' + Map.kmlCount);
		return Map.kmlCount;
	},	
		
	
	
	
	// Construct
	init : function (json) { 
		
		 
		//alert(json);

		var _lat  = json.lat;
		var _lng  = json.lng;
		var _div  = json.div;
		var _zoom = json.zoom;
		var _opt  = json.opt;
		
		if ( _lat == null || _lng == null ) { 
			alert("Lat or lng is null :/");
			return false;
		}
		
		if ( _zoom == null) { 
			_zoom = 12;
		}
		
		
		Map.setLatLng( new google.maps.LatLng(_lat,_lng) ) ;
		Map.setPath(new google.maps.MVCArray);
		Map.setMarkers(new Array());
		Map.setPolys(new Array());
		Map.setKML(new Array());
		
		
		// validate params
		
		
		// Options
		if ( _opt == null ) { 
			
			// DEFAULT OPTIONS
			_opt = {
			  center: Map.getLatLng(),
			  zoom: _zoom,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		

			// CUSTOM OPTIONS
		}else{ 
			
			_opt.center = Map.getLatLng();
			
			
			if ( _opt.mapTypeId == null ) {
				_opt.mapTypeId = google.maps.MapTypeId.ROADMAP;
			}
			
			
			if ( _opt.zoom == null ) { 
				_opt.zoom = 14;
			}
			/*
			for (x in _opt  ){ 
				//alert(x.text);
				alert(x);
				alert(_opt[x]);
			}
			*/
		
		}
		 
		 
		 
		if ( _div == null ) { 
			alert('Please, change the div in _init ');
		}
		
		
		
		// instancia o mapa
		Map.setMap( new google.maps.Map(document.getElementById(_div),  _opt) );
				
		 
	},
	
	
	
	
	
	setCenter : function ( _lat, _lng, zoom ) {
		
		var _map           = Map.getMap();
		_map.setZoom(zoom);
		//Map.setLatLng( new google.maps.LatLng(_lat,_lng) ) ;
		_map.setCenter(new google.maps.LatLng( _lat, _lng));

		
	},
	
	
	
	
	
	
	
	
	
	// ------------------------------------------------------------------------------------
	//
	// MARKERS
	// add() addArray() fetch ()
	// ------------------------------------------------------------------------------------


	Markers : { 
		
		
		// Function to add marker
		// params
		// { id: 1, lat: -3.741313, lng: -38.53867300000002, title: '01',  html: 'html 01' }
		// ------------------------------------------------------------------------------------
		add : function ( json ) { 
			
			
			
			// get param vars
			var _id            = json.id;
			var _lat           = json.lat;
			var _lng           = json.lng;
			var _title         = json.title;
			var _html          = json.html;
			var _icon          = json.icon;
			var _draggable     = json.draggable;
			var _opt	       = json.opt;			// if user defines the custom options for marker
			var _label	       = json.label;

			var _contentString = json.contentString;
			var _position	   = json.position;
			var _cometa  	   = json.cometa;
			
			
			// variaveis para marcadores
			var _markers       = Map.getMarkers();
			var _markersCount  = Map.getMarkersCount();
			
			
			var _map           = Map.getMap();
			
			
			// Define id se ele está vazio
			if ( _id == '' || _id == 'undefined' || _id == null ) { 
				_id = _markersCount++;
			}
			
			Map.setMarkersCount(_id);
			
			//alert(_id);
			
			if ( _draggable == null ) { 
				_draggable = false;
			}
			 			
			
			if ( _label == null ) { 
				_label = true;
			}
			
			
			if ( _contentString == null ) { 
				_contentString = true;
			}
			
			
			
			
			
			if ( _position == null ) { 
				
				_position =  new google.maps.LatLng( _lat, _lng);
				
			}else{
				
				json.lat = _position.lat(); //tmp[0];
				json.lng = _position.lng(); //tmp[1];
				
			}
			
			
			
			
			// 
		 	if ( _opt == null ) { 
			
				var _marker = new google.maps.Marker({
					position  : _position,
					map       : _map,
					title     : _title,
					draggable : _draggable,
					optimized : true,
					icon      : _icon
				});
			
			}else{
				
				
				//for ( x in _opt ) { 
				//	alert( _opt[x]);
				//}
				
				var _marker = new google.maps.Marker({

					position: _opt.position,					
					map: _map
				
				
				});
					
			}
			
			
			
			
			// se vai ter label
			if  ( _label == true ) { 
			
			
				var _label = new Label({
					map      : _map,
					title    : _title
				 });
				 
				_label.bindTo('position', _marker, 'position');
				_label.bindTo('text', _marker, 'position');

			
			}else{ 
				_label = null;
			}
			
			
			
			
			
			// if _title is set and _contentString <> false
			if ( _title != null && _contentString != false ) { 
		
				
				var contentString =  '<h1>' + _title + '</h1>';
				
				// if the html is set
				if ( _html != null ) {
					contentString += '<div>' + _html + '</div>';
				}
	
	
				var infowindow = new google.maps.InfoWindow({
									content: contentString,
									disableAutoPan : false
								});
			
			 
			

				
				// if it marker is draggable
				if ( _draggable == true ) {
						google.maps.event.addListener(_marker, 'dragend', function() {
							
							var _lat = _marker.getPosition().lat(); // str[0]
							var _lng = _marker.getPosition().lng(); // str[1]
							Map.Markers.setPosition({ id : _id, lat: _lat, lng: _lng});
							
						});
				}
				 
				google.maps.event.addListener(_marker, 'click', function() {
				  infowindow.open( _map , _marker);
				});
				 
				
			}	
				
				
				
			// add marker into array
			Map.Markers.addArray(_id, _marker, _label, json, _cometa);

			
			
			 
			
			
			return _id;
		
			
		},
		
		
		
		
		// Add marker into array
		addArray : function ( id, marker, label, json, cometa) {
			
			
			var _markers = Map.getMarkers();
			
			tmpMarcadores    = new Array(4);
			tmpMarcadores[0] = id;
			tmpMarcadores[1] = marker;
			tmpMarcadores[2] = label;
			tmpMarcadores[3] = json;
			tmpMarcadores[4] = cometa;
			
			console.log("RDID " + id);
			console.log(cometa);
			//alert(tmpMarcadores[4]);
			
			//alert(id);
			
			_markers.push( tmpMarcadores );
			return true;
			
		},
		 
		
		
		
		
		
		
		
		// Function to update data
		update : function ( json ) { 
			
			
			// pega dados antigos
			var _id      = json.id;
			
			var _markers = Map.getMarkers();
			
			
			
			for ( x=0; x< _markers.length; x++) { 
				
				
				if ( _id == _markers[x][0] ) { 
					
					// get the old obj
					var obtmp = _markers[x][3]; 
					//alert(obtmp.lat);
					
					for (y in json ) { 
						eval ("obtmp." + y + " = '" + json[y] +"'");
					}
					
					// remove the old element
					Map.Markers.del(_id);
					// start the new marker with those infos
					Map.Markers.add(obtmp);
				}
				
			
			}
			
			//Map.Markers.del(_id);
			//Map.Markers.add(json);
			
		},
		
		
		
		
		
		
		
		// sets the new position of marker and update your json
		setPosition : function ( json ) { 

			var _id  = json.id;
			var _lat = json.lat;
			var _lng = json.lng;
			
			// convertendo para numérico
			if (typeof _id == "string") { 
				_id = parseInt(_id);
			}
			
			 
			var _map   		   = Map.getMap();

			var _markers = Map.getMarkers();
			var _newPos  = new google.maps.LatLng( _lat, _lng);
			
			// alert(_newPos);
			for (x=0; x < _markers.length; x++) { 
				
				
				
				if ( _markers[x][0]  == _id ) { // mostra os ids
					
					_markers[x][1].setPosition(_newPos);
					
					
					// se tem cometa
					if ( typeof _markers[x][4]  === "object") { 
						
						
						
						
						if ( typeof _markers[x][4].polyline != "undefined" ) { 
							_markers[x][4].polyline.setMap(null);
						}
						
						
						_limite      = parseInt(_markers[x][4].limite);     // transforma o limite em numerico
						_limitefor   = _limite - 2;							// limite no for
						
						// se nao foi definido a calda, cria o array
						if ( typeof _markers[x][4].calda == "undefined" ) { 
							_markers[x][4].calda = [];
						}
						
						_caldacometa = _markers[x][4].calda;                // calda do cometa, array
						
						for ( abc=0; abc < _limite; abc++ ) { 
							soma = abc + 1
							if ( soma < _limite ) { 
								
								// verifica se proxima posição não é vazia
								if ( _caldacometa[soma] != "undefined") { 
									_markers[x][4].calda[abc] = _caldacometa[soma]; // o atual recebe o próximo
								}
							}
							
						}

						// a ultima posicao do aray é a posição atual
						tmp = _limite - 1;
						_markers[x][4].calda[tmp] = _newPos;

					    
						tmpArray = [];
						
						// organizando o array
						for ( abc=0; abc < _limite; abc++ ) { 
							
							
							if ( typeof  _markers[x][4].calda[abc] == "object" ) { 
								tmpArray.push(_markers[x][4].calda[abc]	)
								// alert("Inseriu -> " + _markers[x][4].calda[abc] + " no array")
							}
							
						}
						
						
						 
						_markers[x][4].polyline = new google.maps.Polyline({
													path: tmpArray,
													strokeColor: '#ff0000',
													strokeOpacity: 1.0,
													strokeWeight: 2
			            						  });
 
						_markers[x][4].polyline.setMap(_map);
			            //alert("line.setMap(_map)") ;
						
					}
 					
 					
					// update position in JSON
					var temp = _markers[x][3];  
					temp.lat = _lat;
					temp.lng = _lng;
					_markers[x][3] = temp;
					
					
				}
				
			}
			
			
			
			
		
		}, // fim set position
		
		
		
			
		// sets the new position of marker and update your json
		setIcon: function ( json ) { 

			var _id   = json.id;
 			var _icon = json.icon;
			
			var _markers = Map.getMarkers();
			
			for (x=0; x < _markers.length; x++) { 
				
				if ( _markers[x][0]  == _id ) { // mostra os ids
					
					_markers[x][1].setIcon(_icon);
					
					
					// update position in JSON
					var temp = _markers[x][3];  
 					temp.icon = _icon;
					_markers[x][3] = temp;
					
					
				}
				
			}
			
		},
		
		
		
		
 
		
		

		// return the markers serialized
		serialize : function () { 
			
			// varrendo marcadores..
			var _markers = Map.getMarkers();
			var temp     = new Array();
			
			for ( x=0; x<_markers.length; x++) { 
				temp.push(_markers[x][3]);		
			}

			return  JSON.stringify(temp);
				
			 
			
		},
		
		
		
		
		
		
		// load in map, the serialized markers 
		loadSerial : function ( json ) { 
			
			
			// remove all markers
			Map.Markers.del('all');
			
			var _json = JSON.parse(json);
			
			for ( x in _json) { 
				Map.Markers.add(_json[x]);
			}
			
		},
		
		
		setNull : function(i){
			_markers[i][1].setMap(null);

		},
		
		
		
		
		// Del Method
		del : function ( _id ) { 
			
			var _markers = Map.getMarkers();
			console.log('Map.Markers.del('+_id+')');
			//alert(_id);
			
			// varrendo marcadores..
			for (x=0; x < _markers.length; x++) { 
				
				// removendo, ou por 1 ou todos 
				if ( _id == _markers[x][0] ) {
					
					_markers[x][1].setMap(null);
					var obj = _markers[x][2];
					
					try {
						obj.div_.parentNode.removeChild(obj.div_);
					}catch (e) { 
					
					}
	
					_markers.splice(x,1);	
					break;
				}
				
				
				if ( _id == 'all'  )   { // mostra os ids
	
					_markers[x][1].setMap(null);
					var obj = _markers[x][2];
					
					try {
						obj.div_.parentNode.removeChild(obj.div_);
					}catch (e) { 
					
					}
					
					
				
				}
				
				
			 }


			if ( _id == 'all') {
				xtmp = new Array();
				Map.setMarkers(xtmp);
			}
			
		} // end of function
		
		
		
		
		
	},
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// ------------------------------------------------------------------------------------
	// Fences
	// ------------------------------------------------------------------------------------
	Fences : { 
		
		
		
		qtdMarkers : 0,



		// Adicionando esta cerca no array de cercas existentes
		// com isto poderemos excluir a cerca depois
		addArray : function ( id, poly, json) {
			
			var _polys = Map.getPolys();
			
			tmpPoly    = new Array(3);
			tmpPoly[0] = id;
			tmpPoly[1] = poly;
			tmpPoly[2] = json;
			
			_polys.push( tmpPoly );
			return true;
			
		},
		 
		
		
		
		
		
		
		// método para criar o objeto Polygon da cerca
		addPoly : function (json){
			var _polys = Map.getPolys();
			var  _poly = new google.maps.Polygon(json);
			var    _id = _polys.length;
			
			Map.Fences.addArray(_id,_poly, json);
			
			return _id;
		},
		
		
		
		
		// remove all fences
		del : function ( ) { 
			var _polys = Map.getPolys();
			var _map   = Map.getMap();
			
			for (x=0;x < _polys.length; x++) { 
				_polys[x][1].setMap(null);
			}
			
			// remove listeners
			google.maps.event.clearListeners(_map, 'click' );
			
			// remove markers
			Map.Markers.del('all');
		},
		
		
		
		
		
		
		
		
		
		// Adds the funcionality of fence in the map
		add : function () { 
			
			// remove all markers and fences
			Map.Fences.del();
			var _path  = null;
			
			var _map   = Map.getMap();
			var _polys = Map.getPolys();
			_path  = new google.maps.MVCArray;
			
			
			
			Map.setPath(_path); // zerando o path
			
			var id    = Map.Fences.addPoly({ strokeWeight: 2, fillColor: '#5555FF'});
			var _poly = _polys[id][1]; // Objeto criado da 
			
			
			  
			_poly.setMap(_map);
			_poly.setPaths( 
							new google.maps.MVCArray([_path]) 
						   );
						   
			google.maps.event.addListener(_map, 'click', Map.Fences.addPoint );
		
		},
		
		
		
		
		
		
		
		
		/// points of fence
		addPoint : function ( event ) { 
		
			var _path    = Map.getPath();
			var _map     = Map.getMap();
			var _lat	 = event.latLng.lat();
			var _lng	 = event.latLng.lng();
			
			
			var _id      = Map.Fences.qtdMarkers++;
			//alert(_id);
			
			id = Map.Markers.add({
								id : _id,
								lat: _lat, 
								lng: _lng,
								draggable : true, 
								label : false
							});
			
			_path.insertAt(id, event.latLng);
			
			
			
			
			
			// em observação
			var _markers = Map.getMarkers();
			// retorna os marcadores
			for ( x = 0 ; x < _markers.length; x++) { 
				
				if ( _markers[x][0] == id ) { 
					index = x;
				}
				
			}
			
			var marker = _markers[index][1];
 			 
			 
			 
			// adding listener for dragend event ( update the position of marker )
			google.maps.event.addListener(marker, 'dragend', function() {

				
				
				for (var i = 0, I = _markers.length; i < I && _markers[i][1] != marker; ++i);
				
				
					_path.setAt(i, marker.getPosition());
					marcador = _markers[i][0] ;
					Map.Markers.setPosition({"id": marcador, "lat": marker.getPosition().lat(), "lng": marker.getPosition().lng()});
			});
			 
			
			
		 
			// adding listener for click event ( Remove the marker )
			google.maps.event.addListener(marker, 'click', function() {
				marker.setMap(null);
				for (var i = 0, I = _markers.length; i < I && _markers[i][1] != marker; ++i);
					Map.Markers.del(_markers[i][0]);
					_path.removeAt(i);
			});
			
			// fim em observação
			
			/*alert(id);
			// adicionando o listener no marcador
			google.maps.event.addListener(marker, 'dragend', function() {
				for (var i = 0, I = markers.length; i < I && markers[i] != marker; ++i);
				path.setAt(i, marker.getPosition());
				}
			);
			*/
		
		 
		}, // end off addPoint
		
		
		
		
		
		
		
		
		
		
		
		// load the fences
		load : function (json) { 
			
			
			var _json        = JSON.parse(json);
			
			var _del         = _json.del;
			var _markers     = _json.markers;
			var _showMarkers = _json.showMarkers;
			var _map         = Map.getMap();
			var _path        = new google.maps.MVCArray;
			var _polys       = Map.getPolys();
			
			
			
			
			// sets the default param 
			if ( _del == null )  {
				_del = true;
			}
			
			
			if ( _showMarkers == null ) { 
				_showMarkers = true;
			}
			
			
			
			// if del ( remove all markers and fences ) 
			if ( _del == true ) { 
				Map.Markers.del('all');
				Map.Fences.del();
			}
			
			
			
			
			// setting the markers
			for ( x in _markers ) { 
					
					
					var _lat		= _markers[x].lat;
					var _lng		= _markers[x].lng;
					var _position 	= new google.maps.LatLng( _lat, _lng);
					var _id			= Map.Fences.qtdMarkers++;

					// if display markers
					if ( _showMarkers == true ) { 
					
						id = Map.Markers.add({
											id: _id,
											lat: _lat, 
											lng: _lng,
											draggable : true, 
											label : false
										});
						
					// if not display markers
					}else{
						id = _path.length;
					}
					
					
					
					
					_path.insertAt(id, _position);
							
			
			} // end of load _markers
			
			
			
			
			 
			
			
			Map.setPath(_path); // zerando o path
			
			var id    = Map.Fences.addPoly({ strokeWeight: 2, fillColor: '#5555FF'});
			var _poly = _polys[id][1]; // Objeto criado da 
			
			_poly.setMap(_map);
			_poly.setPaths( 
							new google.maps.MVCArray([_path]) 
						   );
			
			
			
			
			// if display markers adds listener to add Points
			if ( _showMarkers == true ) {

				// varrendo os marcadores
				var _markers = Map.getMarkers();

				for (x=0; x<_markers.length; x++) { 
 					
					// adding listener for dragend event ( update the position of marker )
					google.maps.event.addListener(_markers[x][1], 'dragend', function() {
						for (var i = 0, I = _markers.length; i < I && _markers[i][1] != this ; ++i);
							_path.setAt(i, this.getPosition());
							Map.Markers.setPosition({"id": _markers[i][0], "lat": this.getPosition().lat(), "lng": this.getPosition().lng()});
					});
					
					
					
					
					// adding listener for click event ( Remove the marker )
					// here have a bug
					google.maps.event.addListener(_markers[x][1], 'click', function() {
						for (var i = 0, I = _markers.length; i < I && _markers[i][1] != this ; ++i);
							_path.removeAt(i);
							//this.setMap(null);
							Map.Markers.del(_markers[i][0]);


					});		

				
					
				} // end for


					
				google.maps.event.addListener(_map, 'click', Map.Fences.addPoint );					
				
						
			} // end of show markers
			
			
			
			
			
			
			
			
			
		},
		
		
		
		
		
		
		
		
		
		
		serialize : function () { 
		
			
			// varrendo marcadores..
			var _markers = Map.getMarkers();
			var temp     = new Array();
			
			for ( x=0; x<_markers.length; x++) { 
				temp.push(_markers[x][3]);		
			}
			
			return '{"markers" : ' + JSON.stringify(temp) + '}';
		
		},
		
		
		
		
		
		
		
		loadSerialize : function (json) {
			
			Map.Fences.load(json);
			
		}
		
		
		
		
		
		
	
	} // end of fences
	
	
	
	

	
	
	
	
	
	
		
	
	
	
	
	
	
	
	,
	
	
	// INICIO DA AREA DE KML'S
	KML : { 
		
		
		
		
		// Add KML into array
		// Método para criar um array de objetos KML
		addArray : function ( id, kml, json) {
			
			//console.log('Add Array da cerca');
 			 
			
			var _kml         = Map.getKML();
			tmpKML           = new Array(3);
			tmpKML[0]        = id;
			tmpKML[1]        = kml;
			tmpKML[2]        = json;
 			
			_kml.push( tmpKML);
			return true;
			
		},
		
		
		
		// SEMPRE RECEBERÁ UM JSON
		add : function (json) { 
				
				// alert(json);
 
				var _id        = json.id;
				var _url       = json.url;
				var _json      = json;
				
				//console.log('Entrou como JSON');
				
				//console.log("ID DESSEB BIXO " + _id);
				
				var _map   		   = Map.getMap();
				var _kmlCount      = Map.getKMLCount();
				 
				
				// Define id se ele está vazio
				if ( _id == '' || _id == 'undefined' || _id == null ) { 
					_id =  _kmlCount + 1;
				}

				// atualizando a lista de KMLS com o total de ID
				Map.setKMLCount(_id);
				
				// adiciona objeto ao array
				try {
					// cria o objeto do KML
					var ctaLayer = new google.maps.KmlLayer(_url);
					//console.log('Cria o objeto KML, com URL : ' + _url);
					
				}catch (e) { 
					//console.log(e);
				}
				//return false;
				
				
				// se o JSON não foi definido, cria um para ele
				if ( _json == null ) { 
					_json = { id : '',
							  url : _url
							};
					//console.log('JSON NULO ');
				}
				
				 
				ctaLayer.setMap(_map);
				Map.KML.addArray(_id, ctaLayer, _json);
				
				 

		},
		
		
		
		// método para deletar um KML
		del : function ( id )  { 
			
			var _kmls = Map.getKML();
			
			//console.log(_kmls);
			var kml = new Array();
			//console.log("\n\n");
			
			// apagando cerca, lembrar de modificar o array de cercas existentes
			for (x=0; x < _kmls.length; x++ ) { 
				
				
				if ( _kmls[x][0] == id || id == 'all' ) { 
					_kmls[x][1].setMap(null);
					delete(_kmls[x][1]);
				}else{
					kml.push(_kmls[x]);
				}
			}
			
			
			//console.log('Lenght array ' + kml.length);
			Map.setKML(kml);
			
		}
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	,
	
	Utils : { 
	
		lf : function (filename, filetype) {
			
			//alert(filename);
			
			if (filetype=="js"){ //if filename is a external JavaScript file
				var fileref=document.createElement('script')
				fileref.setAttribute("type","text/javascript")
				fileref.setAttribute("src", filename)
			}
			else if (filetype=="css"){ //if filename is an external CSS file
				var fileref=document.createElement("link")
				fileref.setAttribute("rel", "stylesheet")
				fileref.setAttribute("type", "text/css")
				fileref.setAttribute("href", filename)
			}
			if (typeof fileref!="undefined")
				document.getElementsByTagName("head")[0].appendChild(fileref)
		} ,
		
		
		// Use: ("event name", elem, func);
		addDomListener : function (elem, evnt, func) {
			if (elem.addEventListener)  // W3C DOM
				elem.addEventListener(evnt,func,false);
			else if (elem.attachEvent) { // IE DOM
				 var r = elem.attachEvent("on"+evnt, func);
			return r;
			}
			else window.alert('I\'m sorry.. I\'m afraid I can\'t do that.');
		} 
		
		
		 
		
	}	
	
	
}


