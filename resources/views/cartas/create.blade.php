<html>
    <head>
        <link rel="stylesheet" href="{{ url('/dist/css/pdf-letter.css') }}" type="text/css" />
        
    </head>
    <body>
        <div class="documento">
                <div class="header-cart">
                    <div class="canal">
                        <h5>FIJA</h5>
                    </div>
                    <div class="movistar">
                        <img  src="{{ url('/image/config/movistar.png') }}"></img>
                    </div>
                </div>
                <div class="sub-header">
                    <div class="sub-header-body">
                        <p style="font-style:oblique;">
                            <strong>|| _N_RESOLUCION_ ||</strong>
                        </p>
                        <br>
                        <p>Lima, {{$carta->fecha_respuesta}}</p>
                        <br>
                        <p>Señor (a): </p>
                        <p><strong>{{$carta->reclamante}}</strong></p>
                        <p><strong>{{ $carta->direccion }}</strong></p>
                        <p><strong>{{ $carta->locacion }}</strong></p>
                        <br>
                        <p>Servicio: {{ $carta->numero_reclamo }}
                        <p>Reclamo: {{ $carta->numero_reclamo }}</p>
                        <br>
                        <p>Hola, {{ $carta->reclamante }}</p>
                    </div>
                </div>
                <br>
                <div class="body-cart">
                    <div class="body-saludo">
                        <p id="p-saludo">{{$carta->saludo}}</p>                        
                    </div>
                    <br>
                    <div class="parrafo-espacio body-parrafo1">
                        <p>{{ $carta->parrafo1 }}</p>
                    </div>
                    <div class="parrafo-espacio body-parrafo2">
                        <p>{{ $carta->parrafo2 }}</p>
                    </div>
                    <div class="parrafo-espacio body-parrafo3">
                        <p>{{ $carta->parrafo3 }}<p>
                    </div>
                    <div class="body-resultado">
                        <p id="p-resultado">{{ $carta->resultado }}</p>                        
                    </div>                    
                    <div class="footer">
                        <br>
                        <p>Sin otro particular me despido</p>
                        <div class="firma">
                            <img src="{{url('/image/config/firma.png')}}"></img>
                        </div>
                        <div class="nombre-firma"  >
                            <p><strong>Michael Campbell Parodi</strong></p>
                            <p style="margin-top:-1%;"><strong>Soluciones Fija</strong></p>
                            
                        </div>
                    </div>
                </div>
                <div class="footer-cart">
                    <p >(*) Los recursos de 2da Instancia (Apelaciones o Quejas), pueden presentar a través del call center 104 u oficinas comerciales.</p>
                </div>
            
        </div>
        
    </body>
</html>