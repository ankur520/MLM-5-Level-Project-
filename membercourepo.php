  <?php include 'includes/header.php' ?>


<?php include 'controllers/levelsdata/membercountlevel1.php' ?>
<?php include 'controllers/levelsdata/membercountlevel2.php' ?>
<?php include 'controllers/levelsdata/membercountlevel3.php' ?>
<?php include 'controllers/levelsdata/membercountlevel4.php' ?>


  <?php include 'includes/navigation.php' ?>

  <section role="main" class="content-body">

    <header class="page-header">

      <h2>Member Count Report</h2>

      <div class="right-wrapper text-right">

      </div>

    </header>





    <!-- start: page -->
    <div class="panel card-sign ">

      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Levels</th>
                <th scope="col">Total</th>
                <th scope="col">Active</th>
                <th scope="col">Deactive</th>
                <th scope="col">Income</th>
                <th scope="col">Total Income</th>
              </tr>
            </thead>


            <tbody>             
              <tr>
                <th scope="row">Level 1</th>
                <td><?php  echo $L1total  ?></td>
                <td><?php  echo $L1active ?></td>
                <td><?php  echo $L1subtract  ?></td>
                <td><?php  echo " $ " . $L1Percentage; ?></td>
                <td> <?php echo " $ " . $L1TotalIncome ?> </td>
              </tr>


              <!-- LEVEL 2 -->
              <tr>
                <th scope="row">Level 2</th>
                <td><?php  echo array_sum($L2total); ?></td>
                <td><?php  echo  array_sum($L2total_active); ?></td>
                <td><?php  echo $L2subtract ?></td>
                <td><?php  echo  "$ " . $L2Percentage ?></td>
                <td><?php  echo  " $ " . $L2TotalIncome ?></td>
              </tr>


              <!-- LEVEL 3 -->
              <tr>
                <th scope="row">Level 3</th>
                <td><?php  echo array_sum($totalL3); ?></td>
                <td><?php  echo  array_sum($totalL3_active); ?></td>
                <td><?php  echo  array_sum($totalL3) - array_sum($totalL3_active) ?></td>
                <td><?php  echo  "$ " . $L3Percentage; ?></td>
                <td><?php  echo  " $ " . $L3TotalIncome; ?></td>
              </tr>


              <!-- LEVEL 4 -->
              <tr>
                <th scope="row">Level 4</th>
                <td><?php  echo  array_sum($totalL4) ?></td>
                <td><?php  echo  array_sum($totalL4_active) ?></td>
                <td><?php  echo  array_sum($totalL4) - array_sum($totalL4_active) ?></td>
                <td><?php  echo  " $ " . $L4Percentage ?></td>
                <td><?php  echo  " $ " . $L4TotalIncome ?></td>
              </tr>


 <section class="banner-area bg_cover"
  style="background-image: url(assets/images/stock-market-charts-BMBN6MJ.jpg); height: 800px; " >

            </tbody>
          </table>
        </div>

      </div>
    </div>

  </section>
  <?php include 'includes/footer.php' ?>