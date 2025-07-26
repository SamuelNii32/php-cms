<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );


?>
<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  <title>Website Admin</title>
  
  <link href="styles.css" type="text/css" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  
</head>
<body>

  <h1>Welcome to our site!</h1>
  <p>This is our game cms</p>

  <?php

  $query = 'SELECT *
    FROM games
    ORDER BY date DESC';
  $result = mysqli_query( $connect, $query );

  ?>
  <div id="login">
    <a href="./admin/index.php/"> to log in click here</a>

  </div>

  <p>There are <?php echo mysqli_num_rows($result); ?> projects in our system!</p>

  <hr>

  <?php while($record = mysqli_fetch_assoc($result)): ?>

    <div>

      <h2><?php echo $record['title']; ?></h2>
      <?php echo $record['content']; ?>

      <?php if($record['photo']): ?>

        <p>This is a sample image.</p>

        <img src="<?php echo $record['photo']; ?>">



      <?php else: ?>

        <p>This record does not have an image!</p>

      <?php endif; ?>

    </div>

    <hr>

  <?php endwhile; ?>

</body>
</html>
