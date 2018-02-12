
@extends("/default")


@section('titre')
Recettes
@endsection

@section('content')
  <div class="col-xs-offset-2 col-xs-8">

  <table class="greyGridTable marge_Top">
     <thead> <!-- En-tête du tableau -->
         <tr>
             <th>Pièce</th>
             <th>Nombre</th>
             <th>Supprimer</th>
             <th>Ajouter</th>
         </tr>
     </thead>

     <tbody> <!-- Corps du tableau -->
         <tr>
             <td><img class="img-responsive " src="images/pieces/2.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
           <td><img class="img-responsive " src="images/pieces/1.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
           <td><img class="img-responsive " src="images/pieces/50ct.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
           <td><img class="img-responsive " src="images/pieces/20ct.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
           <td><img class="img-responsive " src="images/pieces/10ct.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
         <tr>
           <td><img class="img-responsive " src="images/pieces/5ct.png"></td>
             <td><h3>10</h3></td>
             <td><button type="button" class="btnSuppr">SUPPRIMER</button></td>
             <td><button type="button" class="btnAjout">AJOUTER</button></td>
         </tr>
     </tbody>
  </table>
</div>
@endsection
