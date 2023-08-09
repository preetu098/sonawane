<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sonawane Login</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
   
    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <main>


        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
					<h6 class="text-center">
					{{ isset($message) ? $message: '' }}
					</h6>
                    <h4 class="card-title mb-4">Sign in</h4>
				
                    <form method="post" action="/loginForm">
						@csrf
                        <div class="mb-3">
                            <input class="form-control" placeholder="Email" type="email" name="email" required>
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <input class="form-control" placeholder="Password" type="password" name="password" required>
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            
                            <label class="form-check">
                                <input type="checkbox" style="background-color:rgb(14,46,80)!important" class="form-check-input" checked="">
                                <span class="form-check-label">Remember</span>
                            </label>
                        </div> <!-- form-group form-check .// -->
                        <div class="mb-4">
                            <button type="submit" style="background-color:rgb(14,46,80)!important" class="btn btn-primary w-100"> Login </button>
                        </div> <!-- form-group// -->
                    </form>
                    
                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
           
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>