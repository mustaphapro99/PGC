<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Gestion du Courrier - Modifier le courrier</title>
    <!-- Latest compiled and minified CSS -->

<style type="text/css">
   body {
    background-size: cover;
    background-image: url('../../storage/arriere plan 3.png'); /* Assurez-vous que le chemin de votre image est correct */
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .card {
        width: 400px; /* Ajustez la largeur selon vos besoins */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .card-header {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-input,
    .form-control {
        width: 100%;
        padding: 10px;
        
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-checkbox {
        margin-bottom: 15px;
    }

    .form-checkbox label {
        font-size: 14px;
    }

    .form-button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }

    .form-button:hover {
        background-color: #0056b3;
    }
   
</style>
</head>
<body>


<x-app-layout>
<br><br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('updatecourrier') }}">
        <center>
        <div style="width: 50%; background-color: rgba(255, 255, 255, 0.85); padding-left: 20px; padding-right: 20px; padding-bottom: 20px;">

        

        @csrf

        <!-- num_ordre_rrc -->
            <input type="hidden" name="id" value="{{$courrier->id}}">
  
        <!-- num_ordre_rrc -->
            <div>
                <x-input-label for="num_ordre_rrc" :value="__('N° d ordre RRC')" />
                <x-text-input id="num_ordre_rrc" class="block mt-1 w-full" type="text" name="num_ordre_rrc"  required autofocus autocomplete="num_ordre_rrc" value="{{$courrier->num_ordre_rrc}}"/>
            </div>

            <!-- num_ordre_sce -->
            <div>
                <x-input-label for="num_ordre_sce" :value="__('N° d ordre du Service')" />
                <x-text-input id="num_ordre_sce" class="block mt-1 w-full" type="text" name="num_ordre_sce" value="{{$courrier->num_ordre_sce}}" required autofocus autocomplete="num_ordre_sce" />
            </div>
        
            <!-- date -->
            <div>
                <x-input-label for="date" :value="__('Date')" />
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" value="{{$courrier->date}}"  required autofocus autocomplete="date" />
            </div>

            <!-- annee -->
            <div>
                <x-input-label for="annee" :value="__('Année')" />
                <x-text-input id="annee" class="block mt-1 w-full" type="number" name="annee" value="{{$courrier->annee}}"  min="2020" max="2100" required autofocus autocomplete="annee" />
            </div>

            <!-- Type -->
            <div >
                  <x-input-label for="num_ordre_rrc" :value="__('Type du document')" />
                      <select  name = "type" class="form-control" id="type" ><option  selected value="{{$courrier->type_id}}" >{{$courrier->type}}</option>
                    @foreach($types as $type)
                    <option value = "{{$type->id}}">{{$type->type}}</option> 
                        @endforeach
                      </select>
             </div>

            <!-- objet -->
            <div>
                <x-input-label for="objet" :value="__('Objet')" />
                <x-text-input id="objet" class="block mt-1 w-full" type="text" name="objet" value="{{$courrier->objet}}"  required autofocus autocomplete="username" />
            </div>

            <!-- Direction -->
            <div >
                  <x-input-label for="num_ordre_rrc" :value="__('Nature ou Direction')" />
                      <select  name = "direction" class="form-control" id="direction"><option selected value="{{$courrier->direction_id}}" >{{$courrier->direction}}</option>
                        @foreach($directions as $direction)
                            <option value = "{{$direction->id}}">{{$direction->direction}}</option> 
                        @endforeach
                      </select>
             </div>      
            
             <!-- Organe -->
            <div >
                  <x-input-label for="num_ordre_rrc" :value="__('Organe pourvoyeur/destinataire')" />
                      <select  name = "organe" class="form-control" id="organe"><option  selected value="{{$courrier->organe_id}}" >{{$courrier->organe}}</option>
                    @foreach($organes as $organe)
                    <option value = "{{$organe->id}}">{{$organe->organe}}</option> 
                        @endforeach
                      </select>
             </div>

             <!-- Classification -->
            <div >
                  <x-input-label for="num_ordre_rrc" :value="__('Classification')" />
                      <select  name = "classification" class="form-control" id="classification"><option  selected value="{{$courrier->classification_id}}" >{{$courrier->classification}}</option>
                    @foreach($classifications as $classification)
                    <option value = "{{$classification->id}}">{{$classification->classification}}</option> 
                        @endforeach
                      </select>
             </div>
<br>

            <x-primary-button class="ms-3">
                {{ __('Enregistrer') }}
            </x-primary-button>
            <x-primary-button class="ms-3">
                <a href="/dashboard">Retour</a>
            </x-primary-button>
            </div>
        </div>
        </center>
    </form>

</x-app-layout>
<br>
</body>
</html>