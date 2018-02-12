@extends("/default")


@section('titre')
    Les ingredient
@endsection


@section('content')

    <div class="row marge_Top">

        {{--<div class="col-lg-6 col-lg-push-3">--}}

            {{--<div class="pull-left">--}}

                {{--<h2>Add New Post</h2>--}}

            {{--</div>--}}

            {{--<div class="pull-right">--}}

                {{--<br/>--}}

                {{--<a class="btn btn-primary" href="#"> <i class="glyphicon glyphicon-arrow-left"></i></a>--}}

            {{--</div>--}}

        {{--</div>--}}


    <div class="col-lg-6 col-lg-push-3 form-group">

    <form action ='/boisson/store' method = POST>
        {{ csrf_field() }}
            <label for="nom">Nom de la nouvelle boisson</label>
            <input type="text" class="form-control" id="nom" placeholder="Enter the name of drink" name="nom">
            </br>

            <div class="form-group">
                <label for="code">Code de production</label>
                <input type="text" class="form-control" id="code" placeholder="Enter the product Code" name="code" maxlength="3" style="text-transform: uppercase;">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input id="prix" type="number" class="form-control" placeholder="Enter the price" name="prix">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
    </div>
@endsection
