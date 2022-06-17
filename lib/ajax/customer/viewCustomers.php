
  <div class="jumbotron jumbotron-default" style="background-color:#fff">
      <h2 class="display-2" style="text-align:center;color:#000">View Customer</h2>
      <hr class="display-2">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">User Name</th>
              <th scope="col">User Mail</th>
              <!-- <th scope="col">User NIC</th>
              <th scope="col">User Tel</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            include_once('../../functions/allFunctions.php');
            ViewCustomers();
            ?>
          </tbody>
        </table>
  </div>
