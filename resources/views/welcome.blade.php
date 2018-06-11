<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<script src="/js/majax.js"></script>
        <link href={{asset('css/estilos.css')}} rel="stylesheet" type="text/css">
    </head>
    <body>
		<button id="btn">
			 OBTENER MATERIALES
		</button>
		
		
		<script>
			Majax.setConfig(2, 'TlVHvggAEpYIFGvNLhSu7d0qw2SVHIoXTigN1mia','');
			function obtenerMateriales(e){
				e.preventDefault();
				var majax = new Majax();
				majax.get(
					'/api/materials',
					{
						valid: function(r){
							console.info(r);
                            for(i=0;i<r.data.length;i++){
                                document.getElementById('s1').innerHTML=document.getElementById('s1').innerHTML+r.data[i].titulo+r.data[i].idioma+r.data[i].tipo+"<br>";
                            }
						},
						error: function(error){
							console.error(error);
						}
					}
				);
			}
			document.getElementById('btn').addEventListener('click',obtenerMateriales);
		</script>
		<button id="btn1">
             OBTENER IDIOMAS 
        </button>
		 <script>
        Majax.setConfig(2,'TlVHvggAEpYIFGvNLhSu7d0qw2SVHIoXTigN1mia','');
        function obtenerIdiomas(e){
            e.preventDefault();
            var majax= new Majax();
            majax.get(
                '/api/language',
                {
                    valid: function(r){
                        console.info(r);
                        ds2 = document.getElementById('s1');
							r.data.forEach(function(s){
								ds2.innerHTML = ds2.innerHTML + " Idioma: "+ s.idioma;
							});
                    },
                     error :function(error){
                        console.error(error);
                    
                }
}
            );

        }
        document.getElementById('btn1').addEventListener('click',obtenerIdiomas);
        </script>
<button id="btn2">
            OBTENER TIPOS DE MATERIAL
        </button>
        <script>
        Majax.setConfig(2,'TlVHvggAEpYIFGvNLhSu7d0qw2SVHIoXTigN1mia','');
        function obtenerTipodeMateriales(e){
            e.preventDefault();
            var majax= new Majax();
            majax.get(
                '/api/materialtype',
                {
                    valid: function(r){
                        console.info(r);
                        ds3 = document.getElementById('s1');
							r.data.forEach(function(s){
								ds3.innerHTML = ds3.innerHTML + " TIPO: "+ s.tipo;
							});
                    },
                    error: function(error){
                        console.error(error);
                    }
                }

            );
        }
        document.getElementById('btn2').addEventListener('click',obtenerTipodeMateriales);
        </script>
        <div id="s1"></div>
    </body>
</html>
