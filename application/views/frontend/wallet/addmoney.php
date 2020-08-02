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
   .add-money {
      width: 100%;
      height: auto;
      padding-top: 3rem;
      padding-bottom: 3rem;
   }

   .add-money .card {
      width: 100%;
      height: auto;
      padding-top: 1rem;
      border: 1px solid rgba(233, 227, 227, 0.836);
   }

   .add-money .card h4 {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: 500;
      text-align: center;
      color: rgb(245, 57, 61);
   }

   .add-money .card button {
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
      padding-left: 1.5rem;
   }

   .add-money .card button:hover {
      border-bottom: 1px solid rgb(245, 57, 61);
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
            <a href="refer"><button><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
         </div>
         <div class="col-md-3">
            <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
            <a href="field"><button><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
         </div>
         <div class="col-md-3">
            <center><img src="../assets/img/Add-Money.svg" width="25px"></center>
            <a href="addmoney"><button class="active">Add Money</button></a>
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
            <center><span class="wallet_amt" style="color: white; font-size:23px;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet; ?></span></center>
            <a href="<?php echo $url['refer-wallet']; ?>"><button class="wallet_op_btn"><img class="mx-2 wallet_mob_img" src="../assets/img/refer.svg" width="25px" style="margin-top: -10px;">Refer & Earn wallet</button></a>
         </div>
         <div class="col-md-3 wallet_op_bx">
            <center><span class="wallet_amt" style="color: white; font-size:23px;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet; ?></span></center>
            <a href="<?php echo $url['field-wallet']; ?>"><button class="wallet_op_btn"><img class="mx-2 wallet_mob_img" src="../assets/img/Field Expense.png" width="25px" style="margin-top: -10px;">Field Expenses</button></a>
         </div>

         <div class="col-md-3 wallet_op_bx wallet_op_bx-money">
            <center><img src="../assets/img/Add-Money.svg" width="25px" class="wallet_mob_img"></center>
            <a href="addmoney"><button class="wallet_op_btn active">Add Money</button></a>
         </div>
      </div>
   </div>
</div>






<div class="add-money">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="card" style="margin-bottom: 2rem;">
               <h4 style="text-align:left; margin-left: 1rem;">Add Money</h4>
               <button style="border-top: 1px solid rgba(233, 227, 227, 0.836);"> <img src="../assets/img/buy.png" width="20px" style="margin-top:-5px; margin-left:4px; margin-right: 20px;">Buy plan 960</button>
            </div>
         </div>

         <div class="col-md-9">
         <div class="card" style="margin-bottom: 2rem; padding-top:2rem; padding-bottom:2rem;">
         <p style="text-align: center;" class="card-text">Scan Qr code for buy plan</p>
               <h4>Scan Qr code</h4>
               <center><img width="200px;" src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt=""></center>
               <div class="card-body py-0">
                  <h6 style="text-align: center;" class="text-primary">Or</h6>
                  <p style="text-align: center;" class="card-text">Pay Through UPI</p>
                  <h4 style="text-align: center;" class="card-title">7014162976@ybl</h4>
               </div>
            </div>
            <div class="container bg-white table-responsive" style=" margin-bottom:2rem;">
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
                           <td>+<?php echo $value['payment_amount']; ?></td>
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