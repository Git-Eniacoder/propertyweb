
        <h1 class="problem">css problem</h1>
        
        
        <div class="wallet-main">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8">
                        <div class="wallet-head">
                            <h3>My Wallet</h3>
                            <hr class="style1">
                        </div>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Recharge</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Refferal</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Field</button>
                        </div>

                        <div id="London" class="tabcontent">
                            <p>Total Balance</p>
                            <input type="number" placeholder="14000" name="ttpp" disabled>
                            <button>ADD money</button>
                            <div class="wallet-content">
                                <p>Recharge Wallet Balance</p>
                                <img class="wallet_icon" src="<?php echo $url['image'].'recharge.png'; ?>" ><input type="number" placeholder="14000" name="ttpp" disabled> Points
                                <h3>Recharges</h3>
                                <hr class="style1">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group45.svg" width="60px"></center>
                                        <p class="cc">Mobile Recharge</p>
                                    </div>
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group45.svg" width="60px"></center>
                                        <p class="cc">DTH Recharge</p>
                                    </div>
                                    <div class="col-md-3">
                                        <center><img src="assets/img/Group45.svg" width="60px"></center>
                                        <p class="cc">Data Card Recharge</p>
                                    </div>
                                </div>
                                <div class="wallet-history">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Transaction</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                <th>comment</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Recharge 250</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                <td> -</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div>         

                            
                        </div>

                        <div id="Paris" class="tabcontent">
                            <h5>Refer your friend and earn point</h5>
                            
                            <div class="wallet-content">
                                <p>Refferal Wallet Balance</p>
                                <img class="re" src="assets/img/Group45.svg" ><input type="number" placeholder="14000" name="ttpp" disabled> Points
                                <p>Refferal Link</p>
                                <h6>www.yoursite.com/refer/adfrd</h6>
                                <h3>Share with friends</h3>
                                <img src="assets/img/Group45.svg" width="60px">
                                <img src="assets/img/Group45.svg" width="60px">
                                <img src="assets/img/Group45.svg" width="60px">
                                <img src="assets/img/Group45.svg" width="60px">
                                <img src="assets/img/Group45.svg" width="60px">
                                <img src="assets/img/Group45.svg" width="60px">
                                
                                <div class="wallet-history">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Referals</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                              
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div> 
                            
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <h5>Refer your friend and earn point</h5>
                        
                            
                            <div class="wallet-content">
                                <p>Feild Wallet Balance</p>

                                <img class="re" src="assets/img/Group45.svg" ><input type="number" placeholder="14000" name="ttpp" disabled> Points <span style="color: #FF5757; margin-left:1rem; font-size:1.3rem;"> Level 1</span></br>
                                <div class="level">
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 2</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 36 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 3</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 4</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 5</sapn></br>
                                <img src="assets/img/Group 45.svg" width="20px"><span style="color: grey; margin-left:2px;">After Refering 6 members sucessfully you will be on</span> <span style="margin-left: 5px;;">Level 6</sapn></br>
                                </div>
                                <h3>Share with friends</h3>
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <img src="assets/img/Group 45.svg" width="60px">
                                <div class="wallet-history">
                                <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Referals</th>
                                                <th>Ammount</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="assets/img/Group45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                              
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                            <tr>
                                                <td><img src="assets/img/Group 45.svg" width="30px"> <span style="color: grey; margin-left:5px;">Id Referals</td>
                                                <td>-300</td>
                                                <td>sucess</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                                
                                
                            </div> 
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="container">
                            <div class="card">
                                <h5>what is recharge wallet ?</h5>
                                <p>hegy djfgdfd hfbd fhdgvfd fd yfd hfvdf gv</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





      
    
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    