
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>

<h1>welcome posts</h1>
<div class="card-group">
<div class="row">

@foreach ($posts as $post )

<div class="col-4-lg col-4-md">
    <div class="card">
        <img src="{{ asset('images/sale.png') }}" alt="صورة" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
</div>


    @endforeach
</div>

</div>

</div>
</body>
</html>
