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
    </head>
    <body>
        <button id="contenido">
            Obtener Datos
        </button>
        <div id="contenido">
        </div>
        <script>
        Majax.setConfig(2,'6e2eIb6UuteHJMWmRKdUlvQbmE3WpWYUh86OFHck','');
            function obtenerMateriales(e){
                e.preventDefault();
                var majax=new Majax();
                majax.get(
                '/api/materials',
                {
                    valid: function(r){
                        console.info(r);
                    },
                    error: function(error){
                        console.error(error);
                    }
                }
                );
            }
            document.getElementById('btn').addEventListener('click',obtenerMateriales)
        </script>
    </body>
</html>
