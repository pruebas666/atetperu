
@extends('components.layout')
@section('content')

    <section>
        <h2>Manuales</h2>
        <hr class="linea-titulo-1">
        <p class="text-detalle">En esta oportunidad
            vamos a mostrar que en ocaciones despues de realizar el formateo con una
            cuenta ya logeada no me deja instalar desde playstore.
            a continuación la solución. </p>
        <div class="item">
            <div class="carousel-col">
                <form class="thumbnail">

                    <img src="/img/icon-ppt.png" alt="">
                    <hr/>
                    <p class="title-thumbnail-p">Despues del formateo playstores no carga, limpieza de cache para el
                        correcto funcionamiento de descarga de Google Play Store</p>

                    <button id="clickBtn" class="btn-blue" style="width: 100%; margin:0">Descargar</button>
                </form>
            </div>
        </div>
    </section>




    <div id="popup">
        <div class="popup-container">
            <div class="popup">
                <form action="{{route('downloadpdf')}}" method="post">
                    @csrf
                <div class="close-popup" id="closeBtn"><a href="javascript:void(0);">X</a></div>
                <h3>Para descargar...</h3>
                <br/>
                <p><input style="padding:10px;font-size:.938rem" type="text" name="correor"  placeholder="correo electronico" required> </p>
                <p><input style="padding:10px;font-size:.938rem"  type="text" name="nroatetr" maxlength="9"  placeholder="Nro ATET" required>  </p>
                <div class="centered"><button class="btn-blue">Enviar</button> </div>
                </form>
            </div>
            </div>
        </div>


    <script async type="text/javascript">
        const clickBtn = document.getElementById("clickBtn");
        const popup = document.getElementById("popup");
        const closeBtn = document.getElementById("closeBtn");
        window.onload = function(){
            clickBtn.addEventListener('click', ()=>{
                popup.style.display = 'block';
                console.log("se dio clic");
                event.preventDefault();
            });
            closeBtn.addEventListener('click', ()=>{
                popup.style.display = 'none';
                event.preventDefault();
            });
        }
    </script>

@endsection


