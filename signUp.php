<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- CDJSN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
      <?php include "styles/utilities.css" ?>
      <?php include "styles/main.css" ?>
      <?php include "styles/signUp.css" ?>
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
            <h4 class="h4 text-center">Sign Up</h4>
            <form action="" method="post" class="signUp-form | d-flex gap-3 flex-column">

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="First Name">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>

                <div class="input-group">
                    <label for="Nationality">Nationality</label>
                    <select name="" id="" class="form-control">
                        <option value="america">America</option>
                        <option value="philippines">Philippines</option>
                        <option value="spain">Spain</option>
                        <option value="unitedKingdom">United Kingdom</option>
                       
                    </select>  
                </div>
                <div class="input-group">
                   
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group">
                 
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="input-group">
                   
                    <input type="text" class="form-control" placeholder="Confirm Password">
                </div>

                <button class="btn btn-primary">Register</button>
                <a href="index.php" class="return-home-link | mx-auto text-center animation-underline">Return to Home</a>

            </form>
        </div>
    </main>

</body>
</html>