@extends("/default")


@section('titre')
  Les ingredient
@endsection



@section('content')
  <h3>Ma boisson :</h3>
  @foreach ($maBoisson as $key)
    <h3>{{$key->label}}<h3>
    <h3>{{$key->price}}<h3>

<a href="/"><h1>BACK</h1></a>
  @endforeach
  {{-- @include('parts/sucres') --}}
  {{-- @include('parts/maBoisson') --}}
@endsection
