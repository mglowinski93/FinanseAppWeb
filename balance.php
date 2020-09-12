<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab icon -->
    <link rel="icon" href="img/logo.png">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/data_forms.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/balance.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/piechart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Finance App Income</title>
  </head>
  <body onload="setBalanceStartingDate(); setBalanceEndingDate();">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
          <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" width="30" height="30" alt="">
          </a>
          <a class="navbar-brand" href="index.php">Finance App</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="icon-home"></i>  Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="add_income.php"><i class="icon-dollar"></i>Add income</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="add_expense.php"><i class="icon-basket"></i>  Add expense</a>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="balanceDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chart-bar"></i>  View balance</a>
                <div class="dropdown-menu" aria-labelledby="balanceDropdown">
                  <a class="dropdown-item" href="#">Current month</a>
                  <a class="dropdown-item" href="#">Last month</a>
                  <a class="dropdown-item" href="#">Current Year</a>
                  <a class="dropdown-item" href="#userDefinedBalanceDatesModal" data-toggle="modal" data-target="#userDefinedBalanceDatesModal">User definer period</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-wrench"></i>  Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-logout"></i>  Logout</a>
              </li>
            </ul>
          </div>
        </nav>
          <!-- Modal -->
          <div class="modal fade" id="userDefinedBalanceDatesModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="col-12 modal-title">Chose dates to display balance</h4>
                </div>
                <div class="modal-body">
                    <form class="form-income">
                        <div class="form-group row">
                          <label for="balanceStartingDate" class="col-sm-3 col-form-label">Start date</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="balanceStartingDate" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="balanceEndingDate" class="col-sm-3 col-form-label">End Date</label>
                          <div class="col-sm-8">
                            <input type="date" class="form-control" id="balanceEndingDate" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-6 text-left">
                            <button type="submit" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Cancel</button>
                          </div>
                          <div class="col-6 text-right">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Show balance</button>
                          </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </header>

    <main>
        <div class="container">
          <div class="py-5 text-center">
            <h2>Balance</h2>
            <p class="lead">Current month</p>
          </div>

          <div class="row">
              <div class="col-sm-6" id="incomeSummary">
                  <p class="lead">Incomes</p>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Salaries</td>
                          <td>10000</td>
                        </tr>
                        <tr>
                          <td>Bank Interest</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td>Allegro sale</td>
                          <td>1000</td>
                        </tr>
                        <tr>
                          <td>Other</td>
                          <td>3000</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <div class="col-sm-6" id="expenseSummary">
                  <p class="lead">Expenses</p>
                  <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Savings</td>
                          <td>2000</td>
                        </tr>
                        <tr>
                          <td>Children</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td>Rent</td>
                          <td>1000</td>
                        </tr>
                        <tr>
                          <td>Travels</td>
                          <td>1000</td>
                        </tr>
                        <tr>
                            <td>Pensions</td>
                            <td>1000</td>
                            </tr>
                        <tr>
                            <td>Food</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td>Transport</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Entertainments</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Clothes</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Hygiene</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Books</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Telecommunication</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Others</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Healthcare</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Repayment of debts</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Donations</td>
                            <td>0</td>
                        </tr>
                      </tbody>
                   </table>
              </div>
          </div>
          <div class="row" id="balanceSummary">
              <div class="col">
                  <p class="lead">Summary</p>
                  <p style="">Balance: 5320 PLN</p>
                  <p style="color: green">Great! You manage your finances well</p>
              </div>
          </div>
          <div class="row charts" id="piechartSummary">
            <div class="col-sm-12" id="piechart"></div>
          </div>
        </div>
    </main>

    <footer class="container text-center">
      <p class="mt-5 mb-3 text-muted">&copy;Finance App 2020</p>
    </footer>

  </body>
</html>