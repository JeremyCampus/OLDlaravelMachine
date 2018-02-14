
@extends("/default")


@section('titre')
  Home
@endsection



@section('content')


  <div class="container text-left tis_Container">
    <div class="row marge_Top">
      <div class="col-md-4 bg-2 col-md-offset-0 fixed-bottom">
        <img id="sucre0" class="img-responsive sucres" src="images/sucreCroix.png">
        <img id="sucre1" class="img-responsive sucres" src="images/monSucre.png">
        <img id="sucre2" class="img-responsive sucres" src="images/monSucre.png">
        <img id="sucre3" class="img-responsive sucres" src="images/monSucre.png">
        <img id="sucre4" class="img-responsive sucres" src="images/monSucre.png">
        <img id="sucre5" class="img-responsive sucres" src="images/monSucre.png">
      </div>
      <div class="col-md-4">
        <div id="monnayeur"><h3><strong>0</strong> Credits</h3><h5>Nous somme le :
            01.17.18                        </h5><p>En attente</p>

          <button id="renduMonnaie">Rendu Monnaie</button></div>
      </div>
    </div>
  </div>



  <div class="container text-left tis_Container">
    <div class="row">
      <div class="col-md-7">
        @foreach ($boissons as $boisson)
              <div class="choix"><a href="boisson/{{$boisson->id}}">
            <h3>{{$boisson->label}}</h3><h4> {{$boisson->price/100}} €</h4>
                </a></div>
          {{-- </div> --}}
        @endforeach

        {{-- <form class="" action="/mesIngredients" method="get">
          {{ csrf_field() }}
            {{-- <input type="hidden" id="prix" name="prix" value=""> --}}
        <input type="hidden" id="id" name="id" value="">
        {{-- <input type="hidden" id="monnaieMise" name="monnaieMise" value="0">
        <input type="hidden" id="sucrePourPHP" name="sucrePourPHP" value="0"> --}}
        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
        </form>
      </div>
    </div>
  </div>
  {{-- @include('parts/maBoisson') --}}

  <!-- Pieces -->
  <div class="container text-left tis_Container">
    <div class="row">
      <div class="col-md-4 bg-2 col-md-offset-4 fixed-bottom mesPieces">
        <img id="piece2" class="img-responsive pieces" src="images/pieces/2.png"/>
        <img id="piece1" class="img-responsive pieces" src="images/pieces/1.png"/>
        <img id="piece50" class="img-responsive pieces" src="images/pieces/50ct.png"/>
        <img id="piece20" class="img-responsive pieces" src="images/pieces/20ct.png"/>
        <img id="piece10" class="img-responsive pieces" src="images/pieces/10ct.png"/>
        <img id="piece5" class="img-responsive pieces" src="images/pieces/5ct.png"/>
        <img id="pieceE"  src="images/pieces/symboleE.png"/>
      </div>
    </div>
  </div>
  <!-- End Pieces -->


@endsection
