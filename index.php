<!DOCTYPE html>
<html>
  <head>
    <title>CoinGraphs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Just for basic styling. -->
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div id="contents">
      <div class="row">
        <div class="col-md-6">
          <div id="btc-graph">

          </div>
          <!--<iframe src="https://price.bitcoin.com/" style="width: 100%; min-height: 300px; height: auto; border: 1px solid rgb(204, 204, 204); border-radius: 5px; padding: 0px; margin-top: 20px;"></iframe>-->
        </div>
        <div class="col-md-6">
          <div id="btc-data">
            <div class="row r1">
              <div class="col-md-6">
                <div class="data" id="btc-value"></div>
              </div>
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
            </div>
            <div class="row r2">
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row r1">
        <div class="col-md-6">
          <div id="eth-graph">

          </div>
        </div>
        <div class="col-md-6">
          <div id="eth-data">
            <div class="row">
              <div class="col-md-6">
                <div class="data" id="eth-value"></div>
              </div>
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
            </div>
            <div class="row r2">
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
              <div class="col-md-6">
                <div class="data">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- React -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <!-- React plugins -->
    <script src="https://unpkg.com/react@0.14.0/dist/react-with-addons.js"></script>
    <!-- Charts -->
    <script src="https://npmcdn.com/recharts@0.22.0/umd/Recharts.min.js"></script>
    <!-- Main React Code -->
    <script type="text/babel" src="main.js"></script>
  </body>
</html>