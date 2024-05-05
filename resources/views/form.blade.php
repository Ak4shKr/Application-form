<html>
<head>
    <title>Application form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<a href="/" class="btn btn-primary position-absolute top-0 end-0 ml-4">Go To Home</a>

  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if($errors->any()){
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
  }
  @endif
  <div class="card col-md-6 m-auto">
    <div class="card-header text-center font-weight-bold">
      netMaxims technologies: Intern Form
    </div>
    <div class="card-body">
      <form name="form" id="form" method="post" action="{{url('store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputname">Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Alfonso albert" requird="">
        </div>
        <div class="form-group">
          <label for="exampleInputqualification">Qualification</label>
          <input type="text" id="qualification" name="qualification" class="form-control" placeholder="Btech" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputexperiance">Experiance</label>
          <input type="text" id="qualification" name="experiance" class="form-control" placeholder="2 yrs as full stack dev" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputage">Age</label>
          <input type="text" id="qualification" name="age" class="form-control" placeholder="20" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputnumber">Number</label>
          <input type="text" id="qualification" name="number" class="form-control" placeholder="1234567890" required="">
        </div>
         <div class="form-group">
          <label for="exampleInputemail">Email</label>
          <input type="text" id="qualification" name="email" class="form-control" placeholder="albert@gmail.com" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>