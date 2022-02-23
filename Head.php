<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mamma's Pizza - Sindal</title>
  <meta charset="iso-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  
  <!-- BOOTSTRAP OLD VERSION -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
    /* NP */
    /*--- GENEREL ---*/
    body{
      background-color: #f9f9f9;
    }
    .black-box{
      margin: 0px;
      width:100%;
      background-color:black;
    }
    .round-border-div{
      background-color: white;
      border-radius: 30px;
      border: solid black 4px;
      padding: 20px;
      margin: auto;
    }
    
    .map {
      margin: auto;
    }
/*--- HEADER ---*/
    .header-logo-img-div {
      height: 200px;
      float: left;
    }
    .header-logo-img {
      margin: 3px;
      height: 100px;
    }
    .menu-head a:hover {
      text-decoration: none;
    }
    .menu-head h1 {
      font-family: arial;
      text-shadow: -4px -4px 5px white;
      text-shadow: 5px 2px 5px black;
      -webkit-text-stroke: 0.5px rgba(0,0,0,0.5);
    }
    #menu-logo-norager {
      color: white;
      margin: 0px;
    }
    #menu-logo-pizza {
      color: red;
      margin: -15px;
    }
    #menu-logo-grillhouse {
      color: #006400;
      margin: -15px;
      text-shadow: 4px 2px 5px #333;
    } 
    #menu-logo-adress {
      text-align: center;
      font-family: Arial;
      color: white;
      font-size: 14px;
      font-weight: 150;
      padding: 10px;
    }
    .tlf {
      color: lightblue;
      font-size: 
    }
    .header-img{
      height: 200px;
      width: 100%;
    }
    #slogan {
      font-family: Georgia;
      font-size: 1.5em;
      color: #FFF8DC;
      border-top: 1px solid #FFF8DC;
      padding-top: 5px;
    }
    
 /* FOOTER */
    #footer-np {
      background-color: #58cc74;
      border-top: 4px #2c2f33 solid;
    }
    .footer-menu {
      margin: auto;
      border: 1px solid darkgreen;
      border-radius: 50px;
      background-image: linear-gradient(white, #58cc74);
      padding: 10px;
      box-shadow: 5px 5px 10px darkgreen;
    }

    #openinghours {
      margin:auto;
      padding: 5px;
      border-radius: 25px;
      border: 2px solid black;
      background-color: white;
      width: 300px;
    }
    td{
      padding: 0px 5px 0px 5px;
    } 
    #openinghours_title {
      font-weight: bold; 
      text-align: left;
    }
    #openinghours_days1 {
      text-align: left;
    }
    #openinghours_days2 {
      text-align: left; 
    }
    #openinghours_hours1 {

    }
    #openinghours_hours2 {

    }
    #specialhours {
      font-style: italic;
      text-align: center;
    }
    
    .social-icons {
      margin: 10px 10px 10px 10px;
    }
    
    /* CONTENT */
    .news {
      padding: 10px;
      background-color: white;
      opacity: 0.8;
      border-radius: 20px;
      border: 2px solid #006400;
    }
    .news-title {
      color: black;
      font-style: italic;
    }
    
 /* MENU */
    #shfrokosttilbud, #shpizza, #shindbagtpizza, #shmexikanskpizza, #shitalienskpizza, #shsalatpizza, 
    #shbornemenu, #shpita, #shdurum, #shsandwich, #shburger, #shsalater, #shpasta, #shgrill, 
    #shtilbehor, #shdrikkevarer 
    {
      display:block;
    }
    
    .form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}
    .form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}

    
    .container-menu {
      border-radius: 30px;
      border: solid black 4px;
      padding: 10px;
      margin: auto;
      color: #FFF8DC;
    }
   
   /*
    .table-container {
      background-color: white;
      text-align: left;
      border-radius: 50px;
      border: 2px solid black;
      padding: 15px;
    }
    .table-menu {

    }
    */
    .intro-text{
      color: #FFF;
    }
    .title {
      color: red;
      font-family: Palatino;
      text-transform: capitalize;
      font-weight: bold;
      padding-top: 5px;
      font-style: italic;
    }
    .description{

    }
    .price {
      border-bottom:2px solid #006400;
      border-top: none;
      border-right: none;
      border-left: none;
      padding: 5px;
      text-align: right;
    }

    
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      width: 100%;
    }
    
  .carousel-inner img {
      margin: auto;
      max-height:250px;
  }
 
    .search-txt{
      color: #006400;
    }
 .btn-search{
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #006400;
  font-size: 17px;
   border-radius: 50%;
  border: 2px solid #FFF8DC;
  cursor: pointer;
}

.btn-search:hover {
  background: #ccc;
}
    
/*--- FOOTER ---*/
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5;
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  text-align: center;
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block;
}
.footer-links a
{
  color:#737373;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block;
}
.site-footer .social-icons
{
  text-align: center;
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#3B5998/*#33353d*/;
}
    .fa-facebook {
  background: #33353D/*#3B5998*/;
  color: white;
}
    
.copyright-text
{
  margin:0;
  text-align:right;
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px;
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0;
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center;
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none;
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px;
  vertical-align: middle;
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear;
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe;
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px;
}
.social-icons a.facebook:hover
{
  background-color:#3b5998;
}

@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600;
  }
}
  </style>
</head>