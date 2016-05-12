<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Weather Forecast Prediction</title>
    <script src="vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/app.js" type="text/javascript"></script>

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="styles/style.css" rel="stylesheet"/>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="white center">Weather Forecast Prediction</h1>
          <p class="lead white center">Enter your city below for a weather forecast</p>
          <form class="center" id="weather">
            <div class="form-group">
              <label></label>
              <input type="text" class="form-control" name="city" id="city" placeholder="City" />
            </div>
            <input type="submit" class="btn btn-success btn-lg" value="Find Weather" />
          </form>
          <div class="alert">

          </div>
        </div>

      </div>
    </div>
  </body>
</html>
