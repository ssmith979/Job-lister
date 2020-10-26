<!DOCTYPE html>
<html>
    <head>
        <title>Job Lister </title>
        <link rel='stylesheet' href='https://bootswatch.com/4/flatly/bootstrap.css'>
        <link rel='stylesheet' href='css/styles.css'>

    <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="create.php">Create listing</a></li>
     
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>

