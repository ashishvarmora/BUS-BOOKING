<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Vali is a">
  <title>Employee Management System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <?php include 'include/header.php'; ?>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <?php include 'include/sidebar.php'; ?>
  <main class="app-content">

    <div class="row">

      <div class="col-md-6">
        <div class="tile">
          <h2 align="center">Profile</h2>
          <hr />
          <div class="tile-body">
            <form class="row" method="post">

              <div class="form-group col-md-12">
                <label class="control-label">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" value="jaydeep">
              </div><br />
              <div class="form-group col-md-12">
                <label class="control-label">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="jdpatelo@gmail.com" readonly>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mobile No</label>
                <input class="form-control" type="text" name="mobile" id="mobile" placeholder="Enter your Mobile" value="6353604239">
              </div>

              <div class="form-group col-md-4 align-self-end">
                <input type="submit" id="submit" name="submit" value="Update" class="btn btn-primary">

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <!-- Essential javascripts for application to work-->
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>


</body>

</html>


<style>
  .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #dd3d36;
    color: #fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
  }

  .succWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #5cb85c;
    color: #fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
  }
</style>