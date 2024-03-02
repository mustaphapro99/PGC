<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Gestion du Courrier - Page Pricipale</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/assets/lib/bootstrap-3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
src="/assets/lib/jquery/jquery.min.js"></script> 

<!-- Latest compiled and minified JavaScript -->
<script src="/assets/lib/bootstrap-3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body {
            background-size: cover;
            background-image: url('storage/arriere plan 2.png'); /* Assurez-vous que le chemin de votre image est correct */
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh; /* Ajustez la hauteur selon vos besoins */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    .button {
          background-color: #697765; /* Couleur de fond */
          border: none; /* Suppression des bordures */
          color: white; /* Couleur du texte */
          padding: 15px 32px; /* Espacement interne */
          text-align: center; /* Alignement du texte */
          text-decoration: none; /* Suppression des soulignements */
          display: inline-block; /* Affichage en ligne */
          font-size: 16px; /* Taille de police */
          margin-left: 210px; /* Marge à gauche */
          margin-top: 120px; /* Marge en haut */
          cursor: pointer; /* Curseur pointeur */
          border-radius: 10px; /* Angle arrondi */
          transition: background-color 0.3s; /* Transition fluide de la couleur de fond */
    }

    /* Effet de survol */
    .button:hover {
      background-color: #45a049; /* Couleur de fond au survol */
    }

    /* Effet de focus */
    .button:focus {
      outline: none; /* Suppression de l'encadré de focus */
    }


    .button2 {
          background-color: #697765; /* Couleur de fond */
          border: none; /* Suppression des bordures */
          color: white; /* Couleur du texte */
          padding: 15px 32px; /* Espacement interne */
          text-align: center; /* Alignement du texte */
          text-decoration: none; /* Suppression des soulignements */
          display: inline-block; /* Affichage en ligne */
          font-size: 16px; /* Taille de police */
          margin-left: 580px; /* Marge à gauche */
          margin-top: 120px; /* Marge en haut */
          cursor: pointer; /* Curseur pointeur */
          border-radius: 10px; /* Angle arrondi */
          transition: background-color 0.3s; /* Transition fluide de la couleur de fond */
    }

    /* Effet de survol */
    .button2:hover {
      background-color: #761015; /* Couleur de fond au survol */
    }

    /* Effet de focus */
    .button2:focus {
      outline: none; /* Suppression de l'encadré de focus */
    }
</style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vous êtes Connecté') }}
        </h2>
    </x-slot>
    <!-- 
    @foreach($directions as $direction)
<button class="button">{{$direction->direction}}</button>
    @endforeach
    -->
<button class="button"><a href="/courrier/1">Courrier Entrant</a></button>
<button class="button2"><a href="/courrier/2">Courrier Sortant</a></button>
<button class="button2" style="margin-top: 180px; margin-left: 555px;"><a href="/addcourrier">Ajouter un nouveau courrier</a></button>

</x-app-layout>


</body>
</html>