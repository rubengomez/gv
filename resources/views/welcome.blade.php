@extends('layouts.app')

@section('content')
<div class="container">
    <div class="nav-scroller bg-white shadow-sm">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Inicio</a>
        <a class="nav-link" href="#QuienesSomos">Quienes somos</a>
        <a class="nav-link" href="#servicios">Servicios</a>
        <a class="nav-link" href="#">Mision y Vision</a>
        <a class="nav-link" href="#">Aviso de privacidad</a>
        <a class="nav-link" href="#contacto">Contacto</a>
      </nav>
    </div>

    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/fondo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nuestro Compromiso</h5>
          <p>Mediante el diálogo estrecho y continuo con nuestros clientes, desarrollaremos una variedad de nuevos y mejores servicios, que satisfagan de forma integral sus necesidades.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fondo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fondo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <div class="row justify-content-center" id="QuienesSomos">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">¿QUIÉNES SOMOS?</div>

                <div class="card-body">
                    Somos una Empresa Emprendedora y confiable en ofrecer servicios de verificacion de Baja Emisión Contaminantes y Condiciones Físico Mecánicas y de Seguridad a vehículos automotores que utilizan DIESEL y gasolina como combustible, con estricto apego a las Normas Oficiales Mexicanas (NOM-041-SEMARNAT-2015-NOM-045-SEMARNAT-2017, NOM-068-SCT-2-2014, NOM-047-SEMARNAT-2014 y NOM-167-SEMARNAT-2017) con la calidad y profesionalismo por más de 20 años de trayectoria.
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" id="servicios">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">NUESTROS SERVICIOS.</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Emisiones contaminantes:</div>

                <div class="card-body">

                    Programa Federal, implementado para reducir las partículas contaminantes emitidas por el autotransporte federal, a través de procedimientos de verificacion y mecanismos de aseguramiento de calidad.
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Condiciones físico - mecánicas y de seguridad:</div>

                <div class="card-body">

                    Programa Federal diseñado para mantener en buenas condiciones físico mecánicas a las unidades de autotransporte que transitan por los caminos y puentes federales, al verificar el desgaste de los diferentes componentes mecánicos evitando así el riesgo de accidentes.
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MISION Y VISION</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Mision</div>

                <div class="card-body">

                    Satisfacer integralmente las necesidades del cliente, actuando con ética, profesionalismo y estricto apego a la Ley, en la prestación de los servicios de Emisiones Contaminantes y Condiciones Físico-Mecánicas y de Seguridad, impulsando el desarrollo de nuestros colaboradores y la rentabilidad de la Unidad de Verificacion.
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Vision</div>

                <div class="card-body">

                    Consolidarnos a nivel nacional, como un GRUPO eficiente, con personal comprometido y alta vocación de servicio que nos permita seguir a la vanguardia, a través de la innovación, mejora continua y compromiso social.

Ser un excelente lugar de trabajo, donde el personal dé lo mejor de sí, maximizando el retorno del capital a los accionistas.
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">NUESTROS VALORES</div>
            </div>
        </div>
    </div>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Responsabilidad
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Cumplir con los compromisos adquiridos, aplicando los conocimientos, creatividad y competencia técnica, mejorando la confiabilidad de nuestros servicios.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Calidad
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Hacer el trabajo bien desde la primera vez, mejorando las expectativas del cliente y administrando eficientemente los recursos conferidos.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Servicio
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Ofrecer a las partes interesadas un trato oportuno, amable y cortés, tratando de resolver sus problemas y/o necesidades, así como asegurar una comunicación clara, efectiva y permanente.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Liderazgo
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            Ser reconocidos como la mejor opción por nuestra visión y capacidad de responder ante los retos que se nos presentan o establecemos.
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center" id="contacto">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Aviso de privacidad</div>

                <div class="card-body">

                    Descarga aqui nuestro aviso de privacidad:
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
          <span class="text-muted">ventas y atención a clientes federal: Lic. Jorge Torres correo mcgardea40@hotmail.com

  </span>
        </div>
        <div class="container">
          <span class="text-muted">Facturación y cobranza: Luz Maria Galicia correcro: cuentasporcobrar@garroverificaciones.com
  </span>
        </div>
        <div class="container">
          <span class="text-muted">
  direccion general: Ing. Rodolfo Isaac Bernadac correo: direccion@garroverificaciones.com
  </span>
        </div>
      <div class="container">
          <span class="text-muted">
              horarios:
              lunes a viernes de 8:00 am a 6:00 pm
              Sabados de 8:00 am a 3:00 pm</span>
    </div>
    </footer>
</div>
@endsection
