<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF -8">
        <meta http-equiv = "X-UA-Comatible" content="IE=edge">
        <link rel="stylesheet" href="css.css" >
        <link rel="stylesheet" href ="csss/boxicons.min.css">
        <meta name = "viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<title>Food court</title>
<style>::after::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    margin: 0 100px;
    background-color: #ffeae0;
}
.nav{
    width: 100%;
    display:flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 0;
}
.nav .logo h1{
    font-weight: 600;
    font-family: sans-serif;
    color: black;
}
.nav .logo b{
    color: #ff511c;
}
.nav ul{
    display: flex;
    list-style: none;
}
.nav ul li{
  
    margin-right: 30px;
}
.nav ul li a{
    
    text-decoration: none;
    color: black;
    font-weight: 500;
    font-family:  sans-serif;
    font-size: 18px;
}
.nav ul li a .cc{
    
    background-color: #ff511c ;
    color: white;
    outline: none;
    border : none;
    border-radius: 6px;
}
.nav ul .active::after{
    content: '';
    width: 50%;
    height: 3px;
    background-color:#ff511c;
    display: flex;
    position: relative;
    margin-left:  10px;

}
input{
    padding:  10px 20px;
    cursor: pointer;
    font-weight: 600;
}
.signin{
    background: transparent;
    border: none;

}
.signup{
    background-color: #ff511c ;
    color: white;
    outline: none;
    border : none;
    border-radius: 5px;
}
  .content{
    display: grid;
    grid-template-columns: auto;
    gap: 30px;
    margin-top: 130px;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.content .content-left{
    display: block ;
    width: 100%;
}
.grid .content .content-right{
    max-width: 100%;
    display: flex;
    flex-direction: column;
}
.content .content-left .info h2{
    font-size: 60px;
    font-family: sans-serif;
    margin-bottom:  30px;

}
.content .content-left .info p{
    font-size: 25px;
    line-height:  2pc;
    margin-bottom: 30px;
    font-family: sans-serif;
}
.content .content-left button{
    padding: 10px 23px;
    background-color: #ff511c ;
    color: white;
    outline: none;
    border : none;
    border-radius: 6px;
    cursor: pointer;

}
.signup:hover {
    background-color: #c02f03;  
    transition: background-color 0.1s ease;  
}
.content .content-left button:hover {
    background-color: #c02f03;  
    transition: background-color 0.3s ease;  
}

.content .content-right .img {
    max-width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
}

.content .content-right img {
    width: 400px;
    height: auto;
    justify-content: right;
    user-select: none;
    animation: rotate 10s linear infinite;
}

@keyframes rotate {
    0%
{
    transform: rotate(0deg);
}100%{
transform: rotate(360deg);
}
}
.category{
    width: 100%;
display: flex;
margin-bottom: 100px;
justify-content: center;
}
.category .list-items{
    width: 90%;
    position: relative;
    margin-top: 100px;
}
.category .list-items h3{
    font-size: 45px;
    font-weight:  600;
    font-family: sans-serif;
    margin-bottom: 70px;
}
.category .list-items .card-list{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}
.category .card-list .card{
    width: 200px;
    height: auto;
    display: block;
    padding: 10px;
    border-radius: 10px;
    position: relative;
    background: white;
    outline: 2px solid #faad69;
}

.category .card-list .card img{
    width: 100px;;
    height: auto;
    bottom:  170px;
    left:50px;
    object-fit: cover;
    object-position: center;
    background-repeat: no-repeat;
    position: absolute;
    box-shadow: 0 #faad69;
    border-radius: 60%;
}
.category .card-list.card .food-title{
    padding: 40px 0 10px;
}
.category .card-list .card .food-title h1{
    text-align: center;
    font-weight: bold;
    font-size: 16px;
    font-family: sans-serif;

}
.category .card .desc p{
    font-size: 13px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
    font-family: sans-serif;

}
.desc p{
    font-size: 13px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
    font-family: sans-serif;

}
.desc h3{
    font-size: 25px;
    text-align: left;
    font-weight: 500;
    margin-bottom: 20px;
    font-family: sans-serif;

}
.category .card .price{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
footer {
    
    padding: 10px;
    background-color: #333;
    color: white;
}
footer .cs{
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-radius: 5px;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}


.badge {
    background-color: #ff511c;
    color: white;
    padding: 4px 8px;
    margin-left: 5px;
    border-radius: 4px;
    font-size: 12px;
}

.card:hover {
    box-shadow: 0 30px 100px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
    transition: all 0.3s ease;
}


.card:hover .food-title {
    color: #ff511c;
}

.card:hover .desc {
    color: #555;
}
.pos{
    position: absolute;
float: right;

}
.src{
    position: relative;
    float: right;
}</style>

    </head>
    <body>
        <section class ="menu">
            <div class = "nav">
                <div class="logo"><h1>Food<b>City</b></h1></div> 
                <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    
                    
                        <li><a class="active" href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Menu</a>
                            <div class="dropdown-content">
                                <a href="Menu.php">Burger<span class="badge">New</span></a>
                                <a href="Menu.php">Pizza <span class="badge">New</span></a>
                                <a href="Menu.php">Beef</a>
                            </div>
                        </li>
                        <li><a href="service.php">Service</a></li>
                        <li><a href="About.php">About us</a></li>
                    </ul>
                    
            <div>
                    
                    
                    <a href="login.php" target="submit"><input type="submit" Value="Log in" class = "signin"></a>
                    
                    <a href="signup.php" target="submitt"><input type="submit" Value="Sign Up"class = "signup"></a>
                    
                </div>
        </section>
        
        <section class="menu">
            <div class="content">
                <div class="content-left">
                    <div class="info">
                        <div class="pos">
                        <h2>
                            Order Your Best<br> Food Anytime
                        </h2>
                        <p>The delecious food is waiting for you,<br>We are always near you with fresh foods</p>
                        <a href="https://www.eazydiner.com/food-trends/the-indian-food-trail-best-dishes-from-india" target="submitt"><input type="submit" Value="Explore Food"class = "signup" data-bs-toggle="tooltip" title="Hooray!"></a></div></section>
                    </div>
                <div class="content-right">
                       <img   src=" " alt="" class ="img">
                    </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        <section class="category">
<div class="list-items">
    <h3>Popular items</h3>
    <div class="card-list">
        <div class="card">
            <img src="bu.png" alt="" width="150%" height="150%" >
            <div class="food-title">
                <h1>Burger</h1>
            </div>
            <div class="desc">
                <p>
                    a patty of ground beef grilled and placed between two halves of a bun. Slices of raw onion, lettuce, bacon
                </p>
            </div>
            <div class="price">
                <span>$12.99</span><span><i class='bx bxs-plus-circle'></i></span>
            </div>
        </div>
        <div class="card">
            <img src="pizz.png" alt="" width="100%" height="100%">
            <div class="food-title">
                <h1>Pizza</h1>
            </div>
            <div class="desc">
                <p>
                    topped with several salami slices which are loved by several non-vegetarians across the world ,Eat pizza for refreshment
                </p>
                
            </div>
            
            
            <div class="price">
                <span>$9.99</span><span><i class='bx bxs-plus-circle'></i></span>
            </div>
        </div>
        <div class="card">
            <img src="sandd.png" alt="" width="150%" height="150%">
            <div class="food-title">
                <h1>Sandwich</h1>
            </div>
            <div class="desc">
                <p>
                    American Sandwich featuring Ham, Turkey, Salami Cheese & Vegetables,stuffed with lettuce and patty
                </p>
                
            </div>
            
            
            <div class="price">
                <span>$10.99</span><span><i class='bx bxs-plus-circle'></i></span>
            </div>  
        </div>
        <div class="card">
            <img src="donut.png" alt="" width="150%" height="150%">
            <div class="food-title">
                <h1>Doughnuts</h1>
            </div>
            <div class="desc">
                <p>
                    A glazed, yeast-raised, American-style ring doughnut,a ring shaped dough baked with love and sprinkled toppings
                </p>
                
            </div>
             <div class="price">
                <span>$6.99</span><span><i class='bx bxs-plus-circle'></i></span>
            </div>
        </div>
        <br><br>
    </div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="c2.jpg" class="d-block w-100" alt="..." width="100px" height="350px">
            </div>
            <div class="carousel-item">
                <img src="c1.jpg" class="d-block w-100" alt="..."width="10px" height="350px">
            </div>
            <div class="carousel-item">
                <img src="c3.jpeg" class="d-block w-100" alt="..." width="10%" height="350px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Queries
  </button>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Pop Up</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          This page is unavailabele
        </div>
  
        
  
      </div>
    </div>
  </div>
  <div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title">FOOD CITY</h1>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p>Explore New Dishes</p>
      <p>Main Menu</p>
      <p>Variety</p>
      <button class="btn btn-secondary" type="button">Order</button>
    </div>
  </div>
  
  <!-- Button to open the offcanvas sidebar -->
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    HOME
  </button>
    <footer>
        <div class="row">
            <div class="col-*-*"></div>
            <div class="col-*-*"></div>
          </div>
    
</div>        </section>
<hr>
<div class="desc">
<h3>Culinary Innovation:</h3><p>
At Food City, our chefs are the heart and soul of our kitchen. With a commitment to innovation, they meticulously curate a menu that reflects a fusion of global influences while staying true to local flavors. From traditional classics to avant-garde creations, every dish is a celebration of taste, texture, and visual appeal.


</p><h3>Join US:</h3><p>        
    Whether you are a passionate foodie, a casual diner, or someone looking to host an unforgettable event, Food City welcomes you to indulge in a culinary adventure like no other. Join us as we redefine the art of dining, one delicious dish at a time.
    
    Experience the epitome of culinary excellence at Food City – where every meal is a celebration!</p>
</div>
</a><hr>  
 <footer>
<div class = "cs" id="footerr">
    <div class = "fluid-container text-center">
      
      <div class="row">
        <div class="col-sm">
          <ul type="none">
            <li><b>Contacts</b></li>
            <li><a href="https://mail.google.com/mail/u/0/">Email</a></li>
            <li><a href="#">Dealer</a></li>
            <li><a href="#">Office</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul type="none">
            <li><b>Quick Links</b></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Sponsors</a></li>
            <li><a href="#">Feedback</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul type="none">
            <li><b>Experience Now</b></li>
            <li><a href="#">Creators Club</a></li>
            <li><a href="#">Network</a></li>
            <li><a href="#">Shares</a></li>
          </ul>
        </div>
      </div>
      <li>Contact us : foodcity23@gmail.com</li>
      <li>&copy copyrights reserved </li>
    </div>
  </div></footer>
    </body>
</html>