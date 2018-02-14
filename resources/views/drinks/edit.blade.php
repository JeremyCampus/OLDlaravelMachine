@extends("/default")


@section('titre')
    Home
@endsection

@section('content')
    <form action ='/boisson/{{$drink->id}}' method = 'POST'>
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="form-group">
        <label for="Name">New name of Drink</label>
        <input type="text" class="form-control" id="NameField" placeholder="Enter the name of drink" name="DrinkName"                         value={{$drink->label}}>

    </div>
    <div class="form-group">
        <label for="Code">New Product</label>
        <input type="text" class="form-control" id="CodeField" placeholder="Enter the product Code" name="Code" maxlength="3"                 value="{{$drink->code}}" style="text-transform: uppercase;">
    </div>
    <div class="form-group">
        <label for="Price">New Price</label>
        <input id="PriceField" type="number" class="form-control" placeholder="Enter the price" name="DrinkPrice"                             value="{{$drink->price}}">
    </div>
    <button type="submit" class="btn btn-primary">Validate</button>
</form>

@endsection