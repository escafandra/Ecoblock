@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans('navigation.about') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <div>
                        <h2>Misión</h2>
                        <p>Forjar un futuro sostenible liderando la transformación de la construcción. Con soluciones vanguardistas, creando edificaciones que fusionan excelencia y responsabilidad ambiental. Construimos más que estructuras, construimos un mundo habitable para todos.</p>
                    </div>
                    <div>
                        <h2>Visión</h2>
                        <p>Ser la fuerza impulsora detrás de una nueva era en la construcción. Nos visualizamos como líderes en soluciones constructivas, sostenibles y seguras. Trabajamos por un futuro en el que nuestras tecnologías sean adoptadas, transformando la manera en que se edifica y promoviendo un equilibrio armonioso entre la construcción y el medio ambiente.</p>
                    </div>
                    <div>
                        <h2>Calidad y Sostenibilidad</h2>
                        <p>Comprometidos con la calidad superior que cumple con estándares ambientales, garantizando la sostenibilidad en cada proyecto"</p>
                    </div>
                    <div>
                        <h2>Eficiencia y Seguridad</h2>
                        <p>Ofrecemos productos eficientes en recursos y energía, resistentes a sismos y aislantes al fuego para un entorno seguro.</p>
                    </div>
                    <div>
                        <h2>Innovación</h2>
                        <p>Estamos en constante búsqueda de nuevas formas de mejorar, liderando el cambio en la industria.</p>
                    </div>
                    <div>
                        <h2>¿Quienes somos?</h2>
                        <p>Ecological Block Systems es una empresa Colombiana que tiene como propósito hacer de la construcción una actividad enfocada al futuro de edificaciones sostenibles, por ello diseñamos, e instalamos sistemas constructivos ecológicos.</p>
                    </div>
                    <div>
                        <h2>¿Por qué elegirnos?</h2>
                        <p>Nuestros productos son fabricados con los más altos estándares de calidad, limpios ambientalmente sostenibles, para hacer de la construcción una actividad eficiente ecológicamente responsable, sin aumentar costos.</p>
                    </div>
                    <div>
                        <h2>¿Qué hacemos?</h2>
                        <p>Hemos diseñado una tecnología constructiva, basada en Paneles de Concreto Liviano para muros divisorios, que garantiza la reducción de cargas muertas en edificaciones, tiempos de ejecución, costos y que, además, por un amplio rango de beneficios, genera un entorno ecológico y de mayor eficiencia para la construcción. Lo hemos llamado ULTRAPANEL.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
