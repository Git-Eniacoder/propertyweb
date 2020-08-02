<style>
.profile{
    width:100%;
    height: auto;
    margin-top: 3rem;
    margin-bottom: 3rem;

}
.profile .left{
    width: 100%;
    height: auto;
    
}
.profile .left button {
    width: 100%;
    height: auto;
    padding-top: .5rem;
    padding-bottom: .5rem;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid rgba(233, 227, 227, 0.836);
    outline: none;
    background-color: #DC3545;
    color: white;
    margin-top: 0px;
    transition: .5s;
    text-align: center;
    padding-left: 1rem;
    margin-bottom: 1rem;
  }

  .profile .left  button:hover {
    border-bottom: 1px solid rgb(245, 57, 61);

  }
  .profile .right{
      width: 100%;
      height: auto;
     
  }
  .profile .right .card{
      width: 100%;
      height: auto;
    padding: 3rem;
  }
  .profile .right .card img{
      width: 90px;
      border-radius: 50%;
        border: none;
  }
  .profile .right .card a{
      margin-left: 1rem;
      margin-top: .3rem;
      color: grey;
      text-decoration: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: 400;
  }
  .profile .right .card a:hover{
      
      color: #DC3545;
      
  }
  .profile .right .card .in{
      margin-top: 2rem;
  }
  .profile .right .card .in input[type=text]{
      width: 100%;
      height: auto;
      border: 1px solid rgba(233, 227, 227, 1);
      outline: none;
      padding-top: .5rem;
      padding-bottom: .5rem;
      padding-left: 1rem;
  }
  .profile .right .card .in  input[type=number]{
      width: 100%;
      height: auto;
      border: 1px solid rgba(233, 227, 227, 1);
      outline: none;
      padding-top: .5rem;
      padding-bottom: .5rem;
      padding-left: 1rem;
  }
  .profile .right .card .in  button{
      width: 8rem;
      height: auto;
      border: 2px solid #DC3545;
      outline: none;
      padding-top: .5rem;
      padding-bottom: .5rem;
      color: white;
      background-color: #DC3545;
      transition: .5s;
  }
  .profile .right .card .in  button:hover{
      
      border: 2px solid #DC3545;
      
      color: #DC3545;
      background-color: transparent;
  }
</style>    

<div class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3 left">
                <button>My profile</button>
            </div>
            <div class="col-md-9 right">
                <div class="card">
                    <img src="assets/img/uuser.png" >
                    <a href="#">change</a>
                    <div class="in">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="Email" placeholder="Email">
                    <input type="number" name="mob" placeholder="Mobile No.">
                    <button>Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>