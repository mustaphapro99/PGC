<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Gestion du Courrier - Courrier</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/assets/lib/bootstrap-3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
src="/assets/lib/jquery/jquery.min.js"></script> 

<!-- Latest compiled and minified JavaScript -->
<script src="/assets/lib/bootstrap-3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body {
            background-size: cover;
            background-image: url('../storage/vide1.png'); /* Assurez-vous que le chemin de votre image est correct */
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh; /* Ajustez la hauteur selon vos besoins */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

   @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
    h1 { 
        font-weight: 300;
        line-height:1em;
        text-align: center;
        color: black;
    }
    .container th h1 {
        font-weight: bold;
        font-size: 1.3em;
        text-align: center;
        color: white;
    }

    .container td {
        background-color: #f7f0cf;
      color: black;
          font-weight: normal;
          font-size: 1em;
      -webkit-box-shadow: 0 2px 2px -2px #0E1119;
           -moz-box-shadow: 0 2px 2px -2px #0E1119;
                box-shadow: 0 2px 2px -2px #0E1119;
    }

    .container {
      text-align: center;
      overflow: hidden;
      width: 100%;
      margin: 0 auto;
      display: table;
      padding: 0 0 2em 0;
    }

    .container td, .container th {
          padding-bottom: 0.5%;
          padding-top: 0.5%;
          padding-left:0.5%; 
    }

    .container th {
          background-color: #1F2739;
    }

    

    .button {
          background-color: #697765; /* Couleur de fond */
          border: none; /* Suppression des bordures */
          color: white; /* Couleur du texte */
          padding: 8px 7px; /* Espacement interne */
          text-align: right; /* Alignement du texte */
          text-decoration: none; /* Suppression des soulignements */
          display: inline-block; /* Affichage en ligne */
          font-size: 16px; /* Taille de police */
          
          cursor: pointer; /* Curseur pointeur */
          border-radius: 10px; /* Angle arrondi */
          transition: background-color 0.3s; /* Transition fluide de la couleur de fond */
    }
</style>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>
    <!--  -->
    <br>
<table class="container">
    <thead>
        <tr>
            <th><h1>N° d'ordre RRC</h1></th>
            <th><h1>N° d'ordre sce</h1></th>
            <th><h1>Date</h1></th>
            <th><h1>Type</h1></th>
            <th><h1>Objet</h1></th>
            <th><h1>Organe</h1></th>
            <th><h1>Classification</h1></th>
            <th><h1></h1></th>
            <th><h1></h1></th>
        </tr>
    </thead>
    <tbody>
        @foreach($courriers as $courrier)
        <tr>
            <td>{{$courrier->num_ordre_rrc}}</td>
            <td>{{$courrier->num_ordre_sce}}</td>
            <td>{{$courrier->date}}</td>
            <td>{{$courrier->type}}</td>
            <td>{{$courrier->objet}}</td>
            <td>{{$courrier->organe}}</td>
            <td>{{$courrier->classification}}</td>
            
            <td><center><button style="width:100%" ><a  class="button" href="modifycourrier/{{$courrier->id}}">Modifier</a></button></center></td>

            <td><center><button style="width:100%" ><a class="button" href="deletecourrier/{{$courrier->id}}">Suppr</a></button></center></td>
        </tr>
        @endforeach
    </tbody>
</table>


</x-app-layout>


</body>
</html>