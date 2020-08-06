<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>

.dataTables_wrapper .dataTables_paginate .paginate_button{
   background-color: crimson;
    border: 2px solid crimson;
    color: white !important;
    outline: none;
    margin-bottom: 1rem;
    margin-top: 1rem;
}

table.dataTable thead th, table.dataTable thead td {
   border-bottom: none;
   color: grey;
}
  .modal-confirm {
    color: #636363;
    width: 325px;
    font-size: 14px;
  }

  .modal-confirm .modal-content {
    padding: 20px;
    border-radius: 5px;
    border: none;
  }

  .modal-confirm .modal-header {
    border-bottom: none;
    position: relative;
  }

  .modal-confirm h4 {
    text-align: center;
    font-size: 26px;
    margin: 30px 0 -15px;
  }

  .modal-confirm .form-control,
  .modal-confirm .btn {
    min-height: 40px;
    border-radius: 3px;
  }

  .modal-confirm .close {
    position: absolute;
    top: -5px;
    right: -5px;
  }

  .modal-confirm .modal-footer {
    border: none;
    text-align: center;
    border-radius: 5px;
    font-size: 13px;
  }

  .modal-confirm .icon-box {
    color: #fff;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: rgb(245, 57, 61);
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }

  .modal-confirm .icon-box i {
    font-size: 58px;
    position: relative;
    top: 3px;
  }

  .modal-confirm.modal-dialog {
    margin-top: 80px;
  }

  .modal-confirm .btn {
    color: #fff;
    border-radius: 4px;
    background: rgb(245, 57, 61);
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    border: none;
  }

  .modal-confirm .btn:hover,
  .modal-confirm .btn:focus {
    background: rgb(245, 57, 61);
    outline: none;
  }

  .refer-wallet {
    width: 100%;
    height: auto;
    padding-top: 3rem;
    padding-bottom: 3rem;
  }

  .refer-wallet .card {
    width: 100%;
    height: auto;
    padding-top: 1rem;
    margin-bottom: 1rem;
    border: 1px solid rgba(233, 227, 227, 0.836);
  }

  .refer-wallet .right .card {
    width: 100%;
    height: auto;
    padding: 1rem;

    border: 1px solid rgba(233, 227, 227, 0.836);
  }

  .refer-wallet .card h4 {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 500;
    text-align: center;
    color: rgb(245, 57, 61);
  }

  .refer-wallet .card button {
    width: 100%;
    height: auto;
    padding-top: .5rem;
    padding-bottom: .5rem;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid rgba(233, 227, 227, 0.836);
    outline: none;
    background-color: white;
    color: grey;
    margin-top: 0px;
    transition: .5s;
    text-align: left;
    padding-left: 1rem;
  }

  .refer-wallet .card button:hover {
    border-bottom: 1px solid rgb(245, 57, 61);

  }

  .refer-wallet .card .his-table {
    width: 100%;
    height: auto;
    margin-top: 2rem;
  }

  .ic {
    padding: 10px;
    font-size: 20px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .ic:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-facebook:hover {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-twitter:hover {
    background: #55ACEE;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-youtube:hover {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }

  .fa-instagram:hover {
    background: #125688;
    color: white;
  }
</style>





<!-- <div class="wallet-op">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet; ?></span></center>
        <a href="recharge"><button><img class="mx-2" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button></a>
      </div>
      <div class="col-md-3">
        <center><span style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet; ?></span></center>
        <a href="refer"><button class="active"><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
      </div>
      <div class="col-md-3">
        <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
        <a href="field"><button><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
      </div>

      <div class="col-md-3">
        <center><img src="../assets/img/Add-Money.svg" width="25px"></center>
        <a href="addmoney"><button>Add Money</button></a>
      </div>
    </div>
  </div>
</div> -->

<div class="wallet-op">
  <div class="container">
    <div class="row wallet_options justify-content-center">
      <div class="col-md-3 wallet_op_bx">
        <center><span class="wallet_amt" style="color: white; margin-top:5px; font-size:23px;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet; ?></span></center>
        <a href="<?php echo $url['wallet']; ?>"><button class="wallet_op_btn "><img class="mx-2 wallet_mob_img" src="../assets/img/recharge_wallet.svg" width="25px" style="margin-top: -10px;">Recharge wallet</button></a>
      </div>
      <div class="col-md-3 wallet_op_bx">
        <center><span class="wallet_amt" style="color: white; font-size:23px; ">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet; ?></span></center>
        <a href="<?php echo $url['refer-wallet']; ?>"><button class="wallet_op_btn active"><img class="mx-2 wallet_mob_img" src="../assets/img/refer.svg" width="25px" style="margin-top: -10px;">Refer & Earn wallet</button></a>
      </div>
      <div class="col-md-3 wallet_op_bx">
        <center><span class="wallet_amt" style="color: white; font-size:23px;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
        <a href="<?php echo $url['field-wallet']; ?>"><button class="wallet_op_btn"><img class="mx-2 wallet_mob_img" src="../assets/img/Field Expense.png" width="25px" style="margin-top: -10px;">Field Expenses</button></a>
      </div>

      <div class="col-md-3 wallet_op_bx wallet_op_bx-money">
        <center><img src="../assets/img/Add-Money.svg" width="30px" class="wallet_mob_img"></center>
        <a href="addmoney"><button class="wallet_op_btn">Add Money</button></a>
      </div>
    </div>
  </div>
</div>



<div class="refer-wallet">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card " style="margin-bottom:2rem ;">
          <h4 class="wal_side_head">Refer & Earn Wallet</h4>

          <a href="recharge"><button class="refer_wallet-btn" style="border-top: 1px solid rgba(233, 227, 227, 0.836);"><img src="../assets/img/Mob.png" width="13px" style="margin-top:-5px; margin-left:4px; margin-right: 20px;">Recharge & PayBills</button></a>
          <!--button class="refer_wallet-btn"><img src="../assets/img/totaljpg.jpg" width="25px" style="margin-top:-5px; margin-right: 10px;">Total Amount</button> -->
          <button class="refer_wallet-btn " data-toggle="modal" data-target="#myModal"><img src="../assets/img/trans.png" width="25px" style="margin-top:-5px; margin-right: 10px;">Transfer to wallet</button>

          <!-- <button><img src="../assets/img/Mob.png" class="wal_left_icons">Recharge & PayBills</button>
          <button><img src="../assets/img/totaljpg.jpg" class="wal_left_icons">Total Amount</button>
          <button><img src="../assets/img/trans.png" class="wal_left_icons">Transfer to wallet</button> -->
          <!-- <button class="wal_left_btn"><span><i class="fa fa-mobile " aria-hidden="true"></i></span> Recharge And Bills</button> -->

        </div>

      </div>
      <div class="col-md-9 right">
        <div class="container bg-white table-responsive">
          <div class="walhistory">
            <h4 class="walhistory_text">Transactions</h4>
          </div>
          <table class="table table-fluid" id="myTable">
            <thead>
              <tr class="bg-white">
                <th>Refered Person</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($history as $value) { ?>
                <tr>
                  <td><?php echo $value['user_id']; ?></td>
                  <td>+<?php echo $value['referal_refer']; ?></td>
                  <td class="text-success">success</td>
                  <td><?php echo $value['payment_date']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class=" container-fluid modal-body">
        <!-- <div class="left">
            <h5>Login</h5>
          </div> -->


        <div class="row">
          <div class="col login_bx">
            <div class="login_head">
              <h5>Transfer to Wallet</h5>
            </div>
            <!-- <p>Login with mobile</p> -->

            <form>

              <input type="number" placeholder="Enter Amount" class="login_inp">
              <input type="password" placeholder="Enter password" class="login_inp">

              <div>
                <button href="#confirm" class=" login_btn" data-toggle="modal">Transfer</button>
              </div>
            </form>

          </div>
        </div>

        <!-- Modal footer -->


      </div>
    </div>
  </div>
</div>
<div id="confirm" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i> &#xf119;
        </div>
        <h4 class="modal-title w-100">Awesome!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<div id="cancle" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          &#xf119;
        </div>
        <h4 class="modal-title w-100">Awesome!</h4>
      </div>
      <div class="modal-body">
        <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<script>
  var sidebarBox = document.querySelector('#box');
  var sidebarBtn = document.querySelector('#btn');
  var pageWrapper = document.querySelector('#main-content');

  sidebarBtn.addEventListener('click', function(event) {

    if (this.classList.contains('active')) {
      this.classList.remove('active');
      sidebarBox.classList.remove('active');
    } else {
      this.classList.add('active');
      sidebarBox.classList.add('active');
    }
  });

  pageWrapper.addEventListener('click', function(event) {

    if (sidebarBox.classList.contains('active')) {
      sidebarBtn.classList.remove('active');
      sidebarBox.classList.remove('active');
    }
  });

  window.addEventListener('keydown', function(event) {

    if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
      sidebarBtn.classList.remove('active');
      sidebarBox.classList.remove('active');
    }
  });
</script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable({
      "bLengthChange": false,
      "bFilter": false,
      "bInfo": false,
      "pagingType": "simple",
      "pageLength": 5,
    });
  });
</script>