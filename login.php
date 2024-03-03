<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

     <!-- CDJSN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
      <?php include "styles/utilities.css" ?>
      <?php include "styles/main.css" ?>
      <?php include "styles/login.css" ?>
      <?php include "styles/animation.css" ?>
  </style>
</head>
<body>
    
    <main class="main d-flex justify-content-center align-items-center">
        <div class="image-wrapper">
            <img src="" alt="">
            <div class="login-content">
                <h1 class="h1">Enjoy The World</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, laudantium eius commodi quaerat minima cupiditate tempora cum distinctio sed libero et laboriosam, voluptates harum quisquam ea ipsa quidem. Nisi, delectus.</p>
                <button class="btn btn-primary">
                    Learn More
                </button>
            </div>
        </div>
        <div class="container d-flex flex-column justify-content-center">
            <a href="#" class="text-link | mx-auto text-center animation-underline">Travel Agency</a>
            <h4 class="h4 text-center">Login</h4>
            <form action="" method="post" class="login-form | d-flex gap-3 flex-column">
                
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group">
                    <label for="username">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <button class="btn btn-primary">Login</button>

                <p class="or-line-text | text-center">Or</p>

                <div class="btn-group">
                    <button class="google-button | btn"><i class="fa-brands fa-google"></i> Sign in with Google</button>
                    <a href="signUp.php" class="text-center btn btn-secondary">Sign Up</a>
                   
                </div>
            </form>
        </div>
        
    </main>

</body>
</html>