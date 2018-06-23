@extends('base')
@section('contenido')
<button id="obtener" class ="btn">
	Obtener Materiales leidos por Tipo
</button>
<ol id="contenido">
</ol>
<script>
	Majax.setConfig(2, 'iAgq88GUeVhyia0ije1q9bXAsRIZP8PbPDHupWsD','');
	var boton = document.getElementById('obtener');
	function animacion(){
		var elementos = document.querySelectorAll('div.cantidad');
		for(var i = 0, n = elementos.length; i<n; i++){
			var porcentaje = parseInt(elementos[i].getAttribute('data-p'));
			var parent = elementos[i].parentElement;
			var width = (porcentaje*parent.clientWidth)/100;
			elementos[i].style.width = width+'px';
			console.log('porcentaje: '+porcentaje)
			console.log('parent: '+parent)
			console.log('width: '+width)
		}
	}
	boton.addEventListener('click',function(e){
		e.preventDefault();
		var majax = new Majax(),
			contenido = document.getElementById('contenido');
		majax.get(
			'/api/material_type_count',
			{
				valid: function(r){
					console.info(r);
					var data = r.data,
						temp = null,
						temp2 = null,
						temp3 = null,
						temp4 = null,
						temp5 = null;
					contenido.innerHTML="";
					var max = data[0].cantidad_vistas,
						porcentaje = 0;
					for(var i = 0,n = data.length; i<n; i++){
						temp = document.createElement('div');
						temp.classList.add('contenedor');
						temp2 = document.createElement('h3');
						temp2.classList.add('title');
						temp2.innerHTML = data[i].area;
						temp3 = document.createElement('div');
						temp3.classList.add('cantidad');
						porcentaje = (data[i].cantidad_vistas/max)*100;
						temp3.setAttribute('data-p',porcentaje);
						temp4 = document.createElement('span');
						temp4.innerHTML = data[i].cantidad_vistas;
						temp.appendChild(temp4);
						temp.appendChild(temp3);
						temp5 = document.createElement('div');
						temp5.classList.add('item');
						temp5.appendChild(temp2);
						temp5.appendChild(temp);
						temp = document.createElement('li');
						temp.appendChild(temp5);
						contenido.appendChild(temp);
					}
					setTimeout(animacion,500);
				},
				error: function(error){
					console.error(error);
				}
			}
		);
	},false);
</script>
@endsection