@extends("/default")


@section('titre')
  Les Boissons existantes
@endsection



@section('content')
    <div class="container text-left tis_Container marge_Top">
        <div class="row">
            <div class="col-md-7">
                <h3>Mes Boissons :</h3>
                <table class="greyGridTable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Code</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($maBoisson as $key)
                        <tr>
                            <td><h3></h>{{$key->label}}</h3></td>
                            <td><h3>{{$key->price}}</h3></td>
                            <td><img src="/images/{{$key->code}}.png" alt="{{$key->code}}" style="width:150px;"/></td>
                            <td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-tower"></span> MODIFY</a></td>
                            <td><a href="{{  route('deleteBoisson') }}" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span> DELETE</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  {{-- @include('parts/sucres') --}}
  {{-- @include('parts/maBoisson') --}}
@endsection
