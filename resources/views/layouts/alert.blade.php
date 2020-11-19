@if (session('info'))
    <div class="container alert alert-primary">
        <p>{{session(info)}}</p>
    </div>
@endif


@if (session('success'))
    <div class="container alert alert-success">
        <p>{{session(success)}}</p>
    </div>
@endif


@if ($errors->any())
<div class="alert--error-valid">
   <ul>
      @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
      @endforeach
   </ul>
</div>
@endif
