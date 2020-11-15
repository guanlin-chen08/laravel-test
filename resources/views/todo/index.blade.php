<!-- {{$todos}} -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@foreach ($todos as $todo)
    <div>
            <form action="{{url('todo')}}/{{$todo->id}}" method="POST">
            <p class="text-monospace">
                This is user {{ $todo->title }}
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                    <input type="submit" value="DELETE" class="btn btn-light btn-sm">
            </p>
            </form>
    </div>
@endforeach
<form action="{{url('todo')}}" method="POST">
{{csrf_field()}}

    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="plese input" aria-label="plese input" aria-describedby="basic-addon2" name="title">
    <div class="input-group-append">
        <input class="input-group-text" type="submit">
    </div>
    </div>
    <!-- <input type="text" placeholder="plese input" name="title">
    <input type="submit" class="btn btn-light btn-sm"> -->
</form>