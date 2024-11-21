
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

    <section>
        <div class="container">
            <div class="row">
@foreach ($posts as $post )
            <div class="col-lg-4">
                <article class="card card-style2">
                    <div class="card-img">
                        <img class="rounded-top" src="https://www.bootdey.com/image/350x280/008080/000000" alt="...">
                        <div class="date"><span>24</span>May</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5"><a href="#!">This cleaning tips will haunt you forever</a></h3>
                        <p class="display-30">Seven difficult things you should know about haunt.</p>
                        <a href="#!" class="read-more">read more</a>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li><a href="#!"><i class="fas fa-user"></i>Curtis Chester</a></li>
                            <li><a href="#!"><i class="far fa-comment-dots"></i><span>18</span></a></li>
                        </ul>
                    </div>
                </article>
            </div>

            @endforeach
        </div>
    </div>
    </section>
</div>

</div>
</body>
</html>
