<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    @if(Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif

</ul>

