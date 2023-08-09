<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sonawane Update</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <main>


        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
					<h6 class="text-center">
                    @if(session('success'))
                   <div class="alert alert-success">
                        {{session('success')}}
                   </div>
                   @endif
					</h6>
                    <h4 class="card-title mb-4">Construction Record Update</h4>
                    @foreach($data as $d)
                    
                    
                    <form method="post" action="/edit" enctype="multipart/form-data">
						@csrf
                        <input type="hidden" name="id" value="{{$d->id}}"/>
                        <div class="mb-3">
                            <input class="form-control" placeholder="Header Title" type="text" name="title" value=" {{$d->header}}">
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Description" name="description" >{{$d->description}}</textarea>
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                        <input class="form-control" placeholder="Seo Name" type="text" name="seo_title" value=" {{$d->seo_title}}">
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="SEO Description" name="seodescription" >{{$d->seo_desc}}</textarea>
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <input type="file" class="form-control" value="{{$d->image}}" name="file">
                        </div> <!-- form-group// -->
                       
                        <div class="mb-4">
                            <button type="submit" style="background-color:rgb(14,46,80)!important" class="btn btn-primary w-100"> Update </button>
                        </div> <!-- form-group// -->
                    </form>
                    @endforeach
                </div>     </div>
        </section>
        <footer class="main-footer text-center">
           
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="../assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="../assets/js/main.js" type="text/javascript"></script>
</body>

</html>