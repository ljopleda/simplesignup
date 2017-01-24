<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign Up</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main_style.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 sign-up-container">
          <form id="main-form" action="process_data.php" method="post">
            <h3>Sign-Up</h3>
            <p>Complete the following fields.</p>
            <div class="row">
              <div class="col-md-offset-1 col-md-3 content-left">
                <p><strong>Name</strong></p>
                <small>First name only</small>
              </div>
              <div class="col-md-7">
                <input type="text" id="inp-name" class="form-control" name="name" placeholder="Name" required="required">
                </div>
            </div>
            <div class="row">
              <div class="col-md-offset-1 col-md-3 content-left">
                <p><strong>Birthday</strong></p>
                <small>mm-dd-yy</small>
              </div>
              <div class="col-md-7">
                <input type="text" id="inp-birthday" class="form-control" name="birthday" placeholder="Birthday" required="required">
              </div>
            </div>
            <div class="row">
              <div class="col-md-offset-4 col-md-4">
                <button class="btn btn-default btn-black btn-block">Submit</button>
                <button id="btn-export" class="btn btn-default btn-black btn-block">Export XML</button>
              </div>
            </div>
            <input type="hidden" name="action" value="saveData">
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/main_script.js"></script>

  </body>
</html>