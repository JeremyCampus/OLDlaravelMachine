@extends("/default")


@section('titre')
  Les ingredients
@endsection



@section('content')
  <h3>Ma boisson :</h3>


    <h3>{{$drink->label}}<h3>
    <h3>{{$drink->price}}<h3>

    <a href="/"><h1>BACK</h1></a>

  {{-- @include('parts/sucres') --}}
  {{-- @include('parts/maBoisson') --}}
@endsection
