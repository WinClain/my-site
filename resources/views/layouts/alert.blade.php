@if (session('info'))
    <div class="container alert alert--info">
        <p>{{session('info')}}</p>
    </div>
@endif

@if (session('success'))
    <div class="container alert alert--success">
        <p>{{session('success')}}</p>
    </div>
@endif

@if (session('error'))
    <div class="container alert alert--error">
        <p>{{session('error')}}</p>
    </div>
@endif

@if ($errors->any())
<div class="alert alert--error">
   <ul>
      @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
      @endforeach
   </ul>
</div>
@endif
