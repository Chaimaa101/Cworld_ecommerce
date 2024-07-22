
<body>
    <style>
        .footer{
  background: #333;
  color: #fff;
  text-align: center;
}
.footer-container{
  width: 85vw;
  margin: 0 auto;
  padding: 30px 0;
}
h2{
    margin-bottom: 10px; 
}
.footer-container p, .footer-container a, .footer-container span{
  opacity: 0.8;
  font-size: 19px;
}
.footer a{
  display: block;
  color: #fff;
  text-decoration: none;
}
.social-icons{
  list-style: none;
  display: flex;
  justify-content: center;
  padding: 15px 0;
}
.social-icons li{
  margin: 0 10px;
  width: 50px;
  height: 50px;
  background: #2e2e2e;
  border-radius: 50%;
  transition: var(--transition);
  cursor: pointer;
}
.social-icons li:hover{
  background: #fff;
  color: #2e2e2e;
}
.contact-item span{
  display: block;
}
@media(min-width: 900px){
  .footer-container{
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
  }
}
@media(min-width: 1170px){
  .footer{
      text-align: left;
  }
  .footer-container{
      grid-template-columns: repeat(4, 1fr);
  }
  .footer-container div:nth-child(1) p{
      padding-right: 20px;
  }
  .contact-item{
      display: grid;
      grid-template-columns: 10% 90%;
      margin-bottom: 15px;
      align-items: center;
  }
}

    </style>

 <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>CWorld is the online glasses store of your dreams (according to you!). We putting a focus on affordable, high-quality eyewear.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "home.php">home</a>
                    <a href = "contact.php">Contact</a>
                    <a href = "about.php">About us</a>
                    <a href = "product.php">Product</a>
                </div>

                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                        Optical Discount Casablanca
Rue Théodore de Banville
Residence Rissala
20000 Casablanca
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            cworld@contact.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        </body>
        </html>