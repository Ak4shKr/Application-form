<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Application</title>
</head>
<body class="ml-4 mt-2">
    <h1 class="mb-4">List of Application</h1>
    {{-- <a href="/register" class="btn btn-primary position-absolute top-0 top-0 ml-100">Go To Register</a> --}}


    @if($posts->isEmpty())
        <p>No Application found.</p>
    @else
        <ul>
            
            @foreach($posts as $post)
                <li type="1">
                    <div class="card mb-4 p-4 col-md-6">
                    <h2>{{ $post->name }}</h2>
                    <p> <strong>Qualification:-  </strong>{{ $post->qualification }}</p>
                    <p><strong>Experiance:-  </strong>{{ $post->experiance }}</p>
                    <p><strong>Age:-  </strong>{{ $post->age }}</p>
                    <p><strong>Mob.:-  </strong>{{ $post->number }}</p>
                    <p><strong>Email:-  </strong>{{ $post->email }}</p>
                    </div>
                </li>
            @endforeach
            
        </ul>
    @endif
</body>
</html>