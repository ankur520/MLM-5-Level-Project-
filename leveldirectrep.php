  <?php include 'includes/header.php' ?>


  <?php include 'includes/navigation.php' ?>


  <section role="main" class="content-body">

    <header class="page-header">

      <h2>Level Direct Report</h2>

      <div class="right-wrapper text-right">

      </div>
    </header>


<?php 

$myidno = $_SESSION["loggedin_selfid"];

?>






    <!-- start: page -->
    <div class="panel card-sign ">

          <section class="card">
      <header class="card-header">
                    <div class="card-actions">
                      <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    </div>

                    <h2 class="card-title">Level 1</h2>
                  </header>

      <div class="card-body">

        <!-- LEVEL 1  -->
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
          
                <th scope="col">Id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Active</th>
              </tr>
            </thead>
            <tbody>
              <?php include'controllers/levelsdata/leveldirectlevel1.php' ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    </div>

    <hr>
    <br>
    <br>

    <!-- LEVEL 2  -->
    <div class="panel card-sign ">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col">Level 2</th>
                <th scope="col">Id No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sponser Name</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Active</th>
              </tr>
            </thead>
            <tbody>

              <?php include'controllers/levelsdata/leveldirectlevel2.php' ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>


    <hr>
    <br>
    <br>

    <!-- LEVEL 3  -->
    <div class="panel card-sign ">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col">Level 3</th>
                <th scope="col">Id No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sponser Name</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Active</th>
              </tr>
            </thead>
            <tbody>
              <?php  include'controllers/levelsdata/leveldirectlevel3.php' ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <hr>
    <br>
    <br>


    <!-- LEVEL 4  -->
    <div class="panel card-sign ">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead>

              <tr>
                <th scope="col">Level 4</th>
                <th scope="col">Id No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sponser Name</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Active</th>
              </tr>

            </thead>
            <tbody>

              <?php  include'controllers/levelsdata/leveldirectlevel4.php' ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>


  </section>

  <?php include 'includes/footer.php' ?>