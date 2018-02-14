@extends("/default")


@section('titre')
    Home
@endsection



@section('content')


    <form action ='/boisson/store' method = 'POST'>
        {{ csrf_field() }}
        {{--{{method_field('POST')}}--}}
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Enter the name of drink" name="nom" >

        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="CodeField" placeholder="Enter the product Code" name="code" maxlength="3"  style="text-transform: uppercase;">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input id="PriceField" type="number" class="form-control" placeholder="Enter the price" name="prix">
        </div>
        <button type="submit" class="btn btn-primary">Validate</button>
    </form>

@endsection
