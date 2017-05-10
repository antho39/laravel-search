@extends('layouts.layout')
@section('content')
<p>Tableau exemple</p>
<table class="table" data-toggle="table">
    <thead>
    <tr>
        <th data-sortable="true">Auteur</th>
        <th data-sortable="true">Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr class="book">
            <td>{{ $book->author }}</td>
            <td>{{ substr($book->description, 0, 50) }}... <a href="{{ route('bookShow', $book->id) }}">Plus</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    $( document ).ready(function(){
        /**
         * NOTE : Cette "recherche" se fait sur chacune des colonnes de ton tableau
         * Plutôt que de faire X barre de recherches tu en as une seule qui gère l'ensemble de tes colonnes
         * Après si ça ne te conviens pas et que tu préfères pouvoir faire une barre de recherche par colonne,
         * dis le moi et je ferais une modif sur le code
         */



        // Lorsqu'une lettre est tapée dans la barre de recherche
        // id de la barre de recherche #search
        $("input#search").keyup(function(){
            // on stock dans la variable val le contenu de la textBox en minuscule
            var val = $(this).val().toLowerCase();

            // Pour chaque ligne du tableau aillant la classe .book
            $('.book').each(function () {

                // on stock dans la variable val le contenu de toutes les colonnes de la ligne
                var text = $(this).text().toLowerCase();

                // Si dans la variable text on trouve le mot tapé dans la barre de recherche on affiche la ligne
                if(text.indexOf(val) != -1){
                    console.log(text);
                    $(this).show();
                }

                // Sinon on la cache
                else {
                    $(this).hide();
                }
            });
        });

    })
</script>

@endsection