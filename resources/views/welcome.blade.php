<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="C:\Users\ad\gestionDB\public\css\estilos.css" rel="stylesheet" type="text/css">
        <script src="/js/majax.js"></script>


    </head>
    <body>
        <button id="btn" style="background:#FE2E9A; height:34px; margin:0 auto; margin-right:10px; float:left;text-align:center">
            OBTENER MATERIALES
        </button>

        <script>
            Majax.setConfig(2,'6e2eIb6UuteHJMWmRKdUlvQbmE3WpWYUh86OFHck','');
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
                            error:function(error){
                                console.error(error);
                            }
                        }
                    );
            }
            document.getElementById('btn').addEventListener('click',obtenerMateriales);
            </script>
            <button id="btn1"style="background:#FE9A2E; height:34px; margin:0 auto; margin-right:10px; float:left;text-align:center">
            OBTENER IDIOMAS</button>

            <script>
        Majax.setConfig(2,'6e2eIb6UuteHJMWmRKdUlvQbmE3WpWYUh86OFHck','');
        function obtenerIdiomas(e){
            e.preventDefault();
            var majax= new Majax();
            majax.get(
                '/api/languages',
                {
                    valid: function(r){
                        console.info(r);
                        for(i=0;i<r.data.length;i++){
                                    document.getElementById('s1').innerHTML=document.getElementById('s1').innerHTML+r.data[i].idioma+"<br>";
                                }
                    },
                    error: function(error){
                        console.error(error);
                    }
                }
            );
        }
        document.getElementById('btn1').addEventListener('click',obtenerIdiomas);
        </script>
        <button id="btn2"style="background:#819FF7; height:34px; margin-left: auto;
  margin-right: auto; margin-right:10px; float:left; text-align:center">
            OBTENER TIPOS DE MATERIAL
        </button>

        <script>
        Majax.setConfig(2,'6e2eIb6UuteHJMWmRKdUlvQbmE3WpWYUh86OFHck','');
        function obtenerTipodeMateriales(e){
            e.preventDefault();
            var majax= new Majax();
            majax.get(
                '/api/materialstype',
                {
                    valid: function(r){
                        console.info(r);
                        for(i=0;i<r.data.length;i++){
                                    document.getElementById('s1').innerHTML=document.getElementById('s1').innerHTML+r.data[i].tipo+"<br>";

                                }
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
