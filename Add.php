<!doctype html>
<html lang="de">
<head>
<meta charset="utf-8"/>
<?php include ("serverConnect.php"); ?>
<?php include ("importStyles.php"); ?>    
<title>My Blog</title>
   
</head>
    <?php include ("navBar.php"); ?>
  
<body  charset=utf-8>   
    <form style='width: 75%;  margin-left:auto; margin-right:auto; margin-top: 20px; margin-bottom: 20px;'>
          <div class="form-group">
          <label for="titleInput">Image URL</label>
          <input type="email" class="form-control" id="titelID" placeholder="Titel">
          </div>
          <div class="form-group">
          <label for="titleInput">Titel</label>
          <input type="email" class="form-control" id="titelID" placeholder="Titel">
          </div>
         <div class="form-group">
         <label for="exampleFormControlTextarea1">Beitrag</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
         </div>
        <button type="button" class="btn btn-secondary">Senden</button>
    </form>
</body>
    
<?php include ("footer.php"); ?>
</html>