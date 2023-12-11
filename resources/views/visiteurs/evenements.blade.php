<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')

<!-- Content -->
<article>
  <header class="section background-dark">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Evènements à la maison des ligues.</h1>

    </div>
  </header>
  <div class="section background-white">
    @foreach ($events as $event)
    <div class="line">
      <hr class="break-small background-primary margin-bottom-10">
      <h2 class="text-size-40 margin-bottom-10">
        {{ $event->intitule }} / {{ $event->lieu }}<!-- Intitulé de l'évènement et lieu -->
      </h2>
      <h2 class="text-size-40 margin-bottom-10">
        @php
          $start_date = new DateTime($event->date_deb);
          $end_date = new DateTime($event->date_fin);
          echo $start_date->format('d') . '-' . $end_date->format('d M Y');
        @endphp
        <!-- date de début et de fin de l'évènement -->
      </h2>
      <div class="line margin-top-30">
        <div class="margin">
          <div class="s-12 m-6 l-6 margin-bottom-70">
            <img src="{{ asset($event->url_image) }}" alt="{{ $event->intitule }}" style="max-width: 100%; height: auto;">
          </div>
          <div class="s-12 m-6 l-6">
            <p class="text-size-20 margin-top-30">
              {{ $event->details }}<!-- details de l'évènement -->
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</article>
<!-- termine le corps de la page -->
@endsection