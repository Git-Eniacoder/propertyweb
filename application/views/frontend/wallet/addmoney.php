<style>
.add-money{
  width: 100%;
  height: auto;
  padding-top: 3rem;
  padding-bottom: 3rem;
}
.add-money .card{
  width: 100%;
  height: auto;
  padding-top: 1rem;
  border: 1px solid rgba(233, 227, 227, 0.836);
}
.add-money .card h4{
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-weight: 500;
  text-align: center;
  color: rgb( 245, 57, 61 );
}
.add-money .card button{
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
}
.add-money .card button:hover{
  border-bottom: 1px solid rgb( 245, 57, 61 );
  
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
.fa-facebook:hover{
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
      <div class="wallet-op">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->recharge_wallet;?></span></center>
                  <a href="recharge"><button ><img class="mx-2" src="../assets/img/recharge_wallet.svg" width="25px">Recharge wallet</button></a>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;">&#x20B9;<?php echo $post["all_data"][0]->refferal_wallet;?></span></center>
                  <a href="refer"><button ><img class="mx-2" src="../assets/img/refer.svg" width="25px">Refer & Earn wallet</button></a>
               </div>
               <div class="col-md-3">
                  <center><span style="color: white;"> &#x20B9;<?php echo $post["all_data"][0]->filed_wallet;?></span></center>
                  <a href="field"><button><img class="mx-2" src="../assets/img/Field Expense.png" width="25px">Field Expenses</button></a>
               </div>

               <div class="col-md-3">
                   <center><img  src="../assets/img/Add-Money.svg" width="25px"></center>
                  <a href="addmoney"><button class="active">Add Money</button></a>
               </div>
            </div>
         </div>
      </div>
      <div class="add-money">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        
                        
                       
                        <button>Buy plan 960</button>
                        
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 2rem;">
                    <h4 >Scan Qr code</h4>
                    <center><img width="200px;" src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg" alt=""></center>
                    <div class="card-body py-0">
                        <h6 style="text-align: center;" class="text-primary">Or</h6>
                        <p style="text-align: center;" class="card-text">Pay Through UPI</p>
                        <h4 style="text-align: center;" class="card-title">7014162976@ybl</h4>
                    </div>
                        
                </div>
                </div>
                <div class="col-md-6">

                    <div class="card">
                    <h4 style="text-align: left; margin-left: 1rem;">History</h4>
                    <div class="his-table table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Refered Person</th>
                                <th>Ammount</th>
                                <th>Status</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach($history as $value) { ?>
                              <tr>
                                <td><?php echo $value['user_id'] ;?></td>
                                <td>+<?php echo $value['payment_amount'] ;?></td>
                                <td class="text-success">success</td>
                                <td><?php echo $value['payment_date'] ;?></td>
                              </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                      
                </div>
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

