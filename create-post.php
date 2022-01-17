<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['website'] = $_POST['website'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}
else {
    if(!isset($_SESSION['website']))
    {
        header('Location: /index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/ktyvdq9g8n7n922lwmzdbs6fr9hx5go1klsn2pr97fxvyk3c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Wordpress Writer</title>
</head>
<body>
    <div class="container">
        <form id="postform" method="post" action="">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="My First Article">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Article Text</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="content"></textarea>
  <button type="submit" class="btn btn-primary">Post Article</button>
</div>
</form>
<div id="result" class="alert alert-danger" role="alert">
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });

    $("#postform").submit(function(e) {
          e.preventDefault();
          var formValues= $(this).serialize();

          var htmlContent = tinymce.activeEditor.getContent();

          formValues += htmlContent;

          console.log(formValues);

          $.post("/proccespost.php",formValues, function(result){
              $('#result').text(result);
              $('#result').show();
          });
      });
});
    

  
  </script>

</html>