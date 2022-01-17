<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>Welcome</title>
</head>
<body>
<div class="container">
<form method="post" action="/create-post.php">
 
<div class="mb-3">
    <label for="exampleInputwebsite" class="form-label">Website</label>
    <input type="text" name="website" class="form-control" value="wp-test.42web.io" id="exampleInputsite">
  </div>
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="tester">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value="admin" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Enter</button>
</form>
<div>
</body>
</html>