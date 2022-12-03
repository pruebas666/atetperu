    // 1. Define route components.
// These can be imported from other files
const Inicio = { template: `<section>

<h2>Sobre esta iniciativa</h2><hr class="linea-titulo-1"><p class="text-detalle">La web, se creo como iniciativa de nuestro
Lider Macro regional <b> Sr. Francis Vargas </b> en sinergia con el <b>equipo ATET de la provincia de
Cajamarca</b>, Directores, Daip, Docentes, Cist y especialistas la propuesta nace para tener la informacion
organizada y de forma precisa sobre las tablet\'s repartidas
por el ministerio de educación a las instituciones educativas
de todo el Perú.</p>
<img class="drop-shadow" src="./img/principal.jpg">
</section>` }


const Lenovo = { template: `<section>
<h2>Lenovo TB-X606X</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
vamos a realizar el formateo de la tableta Lenovo
<b>modelo TB-X606X</b> en la que precisamos como saltar
el correo que se registro inicialmente. </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/eDCvs3xf3cs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>
<section>
<h2>Lenovo TAB TB-X505L</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
vamos a realizar el formateo de la tableta Lenovo
<b>modelo TAB TB-X505L</b> en la que precisamos como saltar
el correo que se registro inicialmente. </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/NtJz1w79wgY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>`}



const Aoc = { template: `<section>
<h2>AOC Q10107L-ME</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
vamos a realizar el formateo de la tableta AOC
<b>modelo Q10107L-ME</b> en la que se presente el problema
que no se podia ingresar a la pestaña configuración. </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/-oYU0kbui_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>
<section>
<h2>Actualizacion de Gestor de Contenidos AeC 2022</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
mostramos la forma mas efectiva y rapida
para la actualizacion del gestor de contenido AeC 2022 </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/jk5zBTOljg0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>`}


const AllDocube = { template: `<section>
<h2>AllDocube T1021P</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
vamos a realizar el formateo de la tableta AllDocube
<b>modelo T1021P</b> en la que precisamos como saltar
un correo </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/qLCcVaWHY8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>
<section>
<h2>Actualizacion de Gestor de Contenidos AeC 2022</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
mostramos la forma mas efectiva y rapida
para la actualizacion del gestor de contenido AeC 2022 </p>
<div class="hs-responsive-embed-youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/jk5zBTOljg0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</section>`}


const Manuales = { template: `<section>
<h2>Manuales</h2><hr class="linea-titulo-1"><p class="text-detalle">En esta oportunidad
vamos a mostrar que en ocaciones despues de realizar el formateo con una
cuenta ya logeada no me deja instalar desde playstore.
a continuación la solución. </p>
<div class="item">
<div class="carousel-col">
<form action="downloadpdf" method="post"  class="thumbnail">
<img src="./img/icon-ppt.png" alt="">
<hr />
<p class="title-thumbnail-p">Despues del formateo playstores no carga, limpieza de cache para el correcto funcionamiento de descarga de Google Play Store</p>

<button id="clickBtn" class="btn-blue" style="width: 100%; margin:0">Descargar</button>
</form>
</div>
</div>

</section>`}


const Colabora = { template: `<section>
<div class="hand-container wave"><img class="hand wave" src="./img/hand.png" alt="*waves"></div>
<p class="text-detalle">
Buscamos que la gestión de este conocimiento siga creciendo por ello si cuentas con algún conocimiento
pedimos puedas enviarnos la información para seguir actualizando esta pagina
sobre algún tema sucitado con las tabletas del Minedu.  </p>
<form class="form-container" id="form" action="sendEmail.php" method="post">
<h1>Te responderemos lo antes posible</h1>
<p> <label for="required-input">Ingrese Nombres y Apellidos: </label> <input type="text" name="names" onkeypress="return checkL(event)"  placeholder="apellidos" required> </p>
<p> <label for="dynamic-label-input">Ingrese correo: </label><input type="text" name="email"  placeholder="correo" required> </p>
<p> <label for="required-input">Ingrese Celular: </label> <input type="text" name="celular" maxlength="9"  placeholder="celular" onkeypress="return checkN(event)"  required>  </p>
<p> <label for="optional-input">Escribe el problema y solucion para contactarnos con usted</label> <textarea name="description" rows="8" onkeypress="return check(event)" > </textarea></p>
<div class="centered"><button class="btn-blue" type="submit" onclick="sendMail()">Enviar</button> </div>
</form></section>`}


// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Inicio, redirect: '/inicio' },
  { path: '/inicio', component: Inicio },
  { path: '/lenovo', component: Lenovo },
  { path: '/webstatic', component: Aoc },
  { path: '/alldocube', component: AllDocube },
  { path: '/docs', component: Manuales },
  { path: '/colabora', component: Colabora },
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = VueRouter.createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history: VueRouter.createWebHistory(),
  routes, // short for `routes: routes`
  activeClass: 'router-link-active'
})


// 5. Create and mount the root instance.
const app = Vue.createApp({})
// Make sure to _use_ the router instance to make the
// whole app router-aware.
app.use(router)

app.mount('#app')

// Now the app has started!
