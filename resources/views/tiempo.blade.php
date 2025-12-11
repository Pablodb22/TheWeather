
@extends('layouts.layout')

@section('content')
@if(isset($respuesta['location']))
<section class="info-principal">
    <div class="weather-card">
        <div class="weather-header">
            <h2>
                <i class="bi bi-geo-alt-fill"></i>
                {{ $respuesta['location']['name'] }}, {{ $respuesta['location']['country'] }}
            </h2>
            <span class="weather-region"><i class="bi bi-compass"></i> {{ $respuesta['location']['region'] }}</span>
            <span class="weather-date"><i class="bi bi-calendar-event"></i> {{ $respuesta['location']['localtime'] }}</span>
            <span class="weather-coords">
                <i class="bi bi-globe"></i> {{ $respuesta['location']['lat'] }}, {{ $respuesta['location']['lon'] }}
            </span>
            <span class="weather-tz">
                <i class="bi bi-clock"></i> {{ $respuesta['location']['tz_id'] }}
            </span>
        </div>
        <div class="weather-main">
            <img src="{{ $respuesta['current']['condition']['icon'] }}" alt="icono clima" class="weather-icon">
            <div class="weather-temp">
                <span class="temp-c">{{ $respuesta['current']['temp_c'] }}ºC</span>
                <span class="temp-f">{{ $respuesta['current']['temp_f'] }}ºF</span>
            </div>
            <div class="weather-condition">
                <i class="bi bi-cloud"></i> {{ $respuesta['current']['condition']['text'] }}
            </div>
        </div>
        <div class="weather-details-grid">
            <div class="weather-detail">
                <i class="bi bi-thermometer-half"></i>
                <span><strong>Sensación:</strong> {{ $respuesta['current']['feelslike_c'] }}ºC</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-wind"></i>
                <span><strong>Viento:</strong> {{ $respuesta['current']['wind_kph'] }} km/h ({{ $respuesta['current']['wind_dir'] }})</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-droplet"></i>
                <span><strong>Humedad:</strong> {{ $respuesta['current']['humidity'] }}%</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-speedometer"></i>
                <span><strong>Presión:</strong> {{ $respuesta['current']['pressure_mb'] }} mb</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-cloud-drizzle"></i>
                <span><strong>Precipitación:</strong> {{ $respuesta['current']['precip_mm'] }} mm</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-clouds"></i>
                <span><strong>Nubosidad:</strong> {{ $respuesta['current']['cloud'] }}%</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-brightness-high"></i>
                <span><strong>UV:</strong> {{ $respuesta['current']['uv'] }}</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-eye"></i>
                <span><strong>Visibilidad:</strong> {{ $respuesta['current']['vis_km'] }} km</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-droplet-half"></i>
                <span><strong>Punto de rocío:</strong> {{ $respuesta['current']['dewpoint_c'] }}ºC</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-thermometer"></i>
                <span><strong>Índice de calor:</strong> {{ $respuesta['current']['heatindex_c'] }}ºC</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-wind"></i>
                <span><strong>Ráfaga de viento:</strong> {{ $respuesta['current']['gust_kph'] }} km/h</span>
            </div>
            <div class="weather-detail">
                <i class="bi bi-sun"></i>
                <span><strong>Radiación solar:</strong> {{ $respuesta['current']['short_rad'] }} W/m²</span>
            </div>
        </div>
    </div>
</section>
@else
<section class="info-principal">
    <div class="weather-card">
        <h2>Busca una ciudad para ver el clima</h2>
    </div>
</section>
@endif
@endsection

