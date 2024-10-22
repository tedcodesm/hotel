<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</head>
<body>
    <div style="box-shadow: 2px 5px 6px rgb(17, 16, 16);border-radius: 20px;padding: 25px;" class="container mt-5 col-lg-6">
        <h2>signup </h2>
        <form action="insert.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">username</label>
                <input type="text" name="username" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-control" id="email" placeholder=".........." required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">email</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>         
               </div>
            <button type="submit" name="create_user" class="btn btn-primary">signup</button> 
            <h7 style="margin-left: 20px;" class="text-secondary">Already signed up</h7>
            <a  href="login.php" class=" ml-3">login</a>
        </form>
    </div>
    
</body>
</html>