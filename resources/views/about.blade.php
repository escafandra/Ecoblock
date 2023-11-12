@extends('layouts.app')
@section('content')
    <section class="page-section">
        <div class="container mt-4">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nosotros</h2>
                <h3 class="section-subheading text-muted">La mejor opción en construcción</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Misión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Forjar un futuro sostenible liderando la transformación de la construcción. Con soluciones vanguardistas, creando edificaciones que fusionan excelencia y responsabilidad ambiental. Construimos más que estructuras, construimos un mundo habitable para todos.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-12.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Visión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Ser la fuerza impulsora detrás de una nueva era en la construcción. Nos visualizamos como líderes en soluciones constructivas, sostenibles y seguras. Trabajamos por un futuro en el que nuestras tecnologías sean adoptadas, transformando la manera en que se edifica y promoviendo un equilibrio armonioso entre la construcción y el medio ambiente.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-9.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Calidad y Sostenibilidad</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Comprometidos con la calidad superior que cumple con estándares ambientales, garantizando la sostenibilidad en cada proyecto"</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-7.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Eficiencia y Seguridad</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Ofrecemos productos eficientes en recursos y energía, resistentes a sismos y aislantes al fuego para un entorno seguro.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-11.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Innovación</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Estamos en constante búsqueda de nuevas formas de mejorar, liderando el cambio en la industria.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>¿Quienes somos?</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Ecological Block Systems es una empresa Colombiana que tiene como propósito hacer de la construcción una actividad enfocada al futuro de edificaciones sostenibles, por ello diseñamos, e instalamos sistemas constructivos ecológicos.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-12.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>¿Por qué elegirnos?</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Nuestros productos son fabricados con los más altos estándares de calidad, limpios ambientalmente sostenibles, para hacer de la construcción una actividad eficiente ecológicamente responsable, sin aumentar costos.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/empresa/ecological-block-systems-9.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>¿Qué hacemos?</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Hemos diseñado una tecnología constructiva, basada en Paneles de Concreto Liviano para muros divisorios, que garantiza la reducción de cargas muertas en edificaciones, tiempos de ejecución, costos y que, además, por un amplio rango de beneficios, genera un entorno ecológico y de mayor eficiencia para la construcción. Lo hemos llamado ULTRAPANEL.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4 >
                            <a class="nav-link" href="{{ route('contact') }}">
                                ¡Sé parte
                                <br />
                                de nuestra
                                <br />
                                historia!
                            </a>
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
