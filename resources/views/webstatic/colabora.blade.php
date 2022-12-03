@extends('components.layout')
@section('content')
    <section>
        <div class="hand-container wave"><img class="hand wave" src="./img/hand.png" alt="*waves"></div>
        <p class="text-detalle">
            Buscamos que la gestión de este conocimiento siga creciendo por ello si cuentas con algún conocimiento
            pedimos puedas enviarnos la información para seguir actualizando esta pagina
            sobre algún tema sucitado con las tabletas del Minedu. </p>
        <form class="form-container" id="form" action="sendEmail.php" method="post">
            <h1>Te responderemos lo antes posible</h1>
            <p><label for="required-input">Ingrese Nombres y Apellidos: </label> <input type="text" name="names"
                                                                                        onkeypress="return checkL(event)"
                                                                                        placeholder="apellidos"
                                                                                        required></p>
            <p><label for="dynamic-label-input">Ingrese correo: </label><input type="text" name="email"
                                                                               placeholder="correo" required></p>
            <p><label for="required-input">Ingrese Celular: </label> <input type="text" name="celular" maxlength="9"
                                                                            placeholder="celular"
                                                                            onkeypress="return checkN(event)" required>
            </p>
            <p><label for="optional-input">Escribe el problema y solucion para contactarnos con usted</label> <textarea
                    name="description" rows="8" onkeypress="return check(event)"> </textarea></p>
            <div class="centered">
                <button class="btn-blue" type="submit" onclick="sendMail()">Enviar</button>
            </div>
        </form>
    </section>
@endsection


