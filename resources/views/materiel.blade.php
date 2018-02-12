
@extends("/default")


@section('titre')
Materiel
@endsection

@section('content')
  <div class="col-xs-offset-2 col-xs-8">

  <table class="greyGridTable marge_Top">
     <thead> <!-- En-tête du tableau -->
         <tr>
             <th>Materiel</th>
             <th>Nom</th>
             <th>Nombre</th>
             <th>Supprimer</th>
             <th>Ajouter</th>
         </tr>
     </thead>

     <tbody> <!-- Corps du tableau -->
         <tr>
             <td><img class="Sucre" src="images/vue2-assets/Sucre.png"></td>
             <td><img class="title" src="images/TitreSucre.png"></td>
             <td><h3>3901</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
            <td><img class="title" src="images/vue2-assets/LesGobs.png"></td>
            <td><img class="title" src="images/TitreGobelet.png"></td>
            <td><h3>3901</h3></td>
            <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
            <td><button type="button" class="btnAjout">AJOUTER</button></td>
       </tr>
     </tbody>
  </table>
</div>

@endsection
