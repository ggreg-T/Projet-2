@extends('layouts.main')
@section('content')

<h1><strong> Formulaire 2</strong></h1>
<br><br><br><br><br><br><br><br><br><br>

<!-- capture d'erreur  -->
<div class="my-5">
    @foreach ($errors->all() as $error)
        <span class="block text-red-500" >{{ $error }}</span>
    @endforeach
</div>

<!-- bouton d'appel formulaire -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
Sign Up
</button>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

    <section>
        <div class="imgBox">
            <img src="https://unsplash.com/photos/mk7D-4UCfmg" alt="pour">
        </div>

        <div class="contentBox">
            <div class="formBox">
                <h2>Renseigne ton objet</h2>

                <form action="#">
                    @csrf

                    <!-- nom de l'objet  -->
                    <div class="inputBx">
                        <span>Nom de l'objet</span>
                        <input type="text" placeholder="Entrez le nom de l'objet" id="nom" name="nom_objet" required>
                    </div>

                    <!-- date de création  -->
                    <div class="inputBx">
                        <span>Date de création</span>
                        <input type="text" placeholder="Entrez la date" id="dco" name="dco" required>
                    </div>

                    <!-- description  -->
                    <div class="inputBx">
                        <span>Descriptif</span>
                        <br>
                        <textarea placeholder="Décrivez l'objet" id="description" name="description" required></textarea>
                    </div>

                    <!-- Image  -->
                    <div class="inputBx">
                        <span>Image</span>
                        <input type="file" placeholder="Entrez le l'image de l'objet" name="image" required>
                    </div>

                    <div class="inputBx">
                        <span>Image</span>
                        <select id="rubrique"  name="rubrique" >
                            @foreach ($rubriques as $rubrique)

                            <option value="{{$rubrique->id}}" >
                                {{ $rubrique->name }} 
                            </option>
                            @endforeach
                        </select>
                    </div>

                      <!-- Bouton submit  -->
                    <div class="inputBx">
                    <x-button>boutest</x-button>
                    </div>
                    
                       <!-- lien pour s'enregistrer  -->
                    <div class="inputBx">
                      <p>Vous n'avez pas de compte? <a href="#">Créer un compte</a></p>
                    </div>


                </form>
            </div>
        </div>
    </section>
</div>
@endsection
