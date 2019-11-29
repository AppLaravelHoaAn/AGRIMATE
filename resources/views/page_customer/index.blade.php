<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agrimate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="public/images/icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link href="{{ url('public/css/style_main.css') }}" rel="stylesheet">

  <style>
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%;
      min-height: 200px;
    }
    
    /* reponsive_mobile */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
      #myNavbar{
        border-top:2px solid #068142;
      }
      #search{
        display: none;
      }
      #icon_home{
        background-color: white;
      }
      #navbar{
        border-top:2px solid #068142;
      }
      .container-fluid #navbar_border button:hover{
        background-color: orange;
      }
    }
    /* reponsive_mobile */

    /* reponsive_mobile_dropdown_menu */
    @media only screen and (min-width: 768px) {
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    }
    /* reponsive_mobile_dropdown_menu */

    .responsive {
      max-width: 95%;
      height: 60px;
      margin:5px;
    }
    .dropdown #button_dropdown{
      border-radius: 2px;
      background-color:white;
    }
  </style>

  <script type="text/javascript">
    $('.dropdown-toggle').click(function(e) {
      if ($(document).width() > 768) {
        e.preventDefault();
        var url = $(this).attr('href');
        if (url !== '#') {
          window.location.href = url;
        }
      }
    });
  </script>

</head>

<body style="font-family: 'Roboto', sans-serif;">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white;border:0px solid white;
box-shadow: 0 2px 5px rgba(0,0,0,0.14), 0 2px 5px rgba(0,0,0,0.20);">
  <div class="container-fluid">
     <div class="navbar-header" id="navbar_border">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar"
      style="margin-top:20px;border:2px solid #068142;background-color:white;">
        <span class="icon-bar" style="background-color:#068142"></span>
        <span class="icon-bar" style="background-color:#068142"></span>
        <span class="icon-bar" style="background-color:#068142"></span>                        
      </button>

      <button type="button" class="navbar-toggle" data-toggle="collapse" onclick="openSearch()"
      style="margin-top:20px;border:2px solid #068142;padding:5.2px;background-color:white;">
        <i class="fa fa-search" style="font-size:20px;color:#068142;width:25px;"></i>                     
      </button>

      <a href="#" style="margin-right:5px;">
        <img src="public/images/LOGO_WEB.png" class="responsive" alt="Logo">
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li style="background-color:#068142;border-radius:2px;">
          <a href="#" style="height:70px;color:white;" id=> 
            <i class="fa fa-home" style="font-size:38px;"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="button_dropdown" 
          aria-haspopup="true" aria-expanded="false" style="height:70px;color:#068142;font-size:20px;padding-top:20px;">
            <img src="public/images/icon_nha_nuoc.png" style="width:30px;height:30px;">
            <span>Nhà nước</span> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" style="border:1px solid #068142;font-size:16px;">
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Thông tin văn bản pháp luật
              </a>
            </li>
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Danh bạ các cơ quan tổ chức
              </a>
            </li>
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Các cá nhân phụ trách các lĩnh vực
              </a>
            </li>
            {{-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li> --}}
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="button_dropdown" 
          aria-haspopup="true" aria-expanded="false" style="height:70px;color:#068142;font-size:20px;padding-top:20px;">
            <img src="public/images/icon_doanh_nghiep.png" style="width:30px;height:30px;">
            <span>Nhà doanh nghiệp</span> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" style="border:1px solid #068142;font-size:16px;">
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Công ty/ doanh nghiệp
              </a>
            </li>
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Nhà phân phối/Đại lý
              </a>
            </li>
            <li>
              <a href="#" style="color:#068142;">
                <i class="fa fa-arrow-circle-right"></i> Hợp tác xã
              </a>
            </li>
              
            {{-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li> --}}
          </ul>
        </li>

        <li>
          <a href="#" style="height:70px;color:#068142;font-size:20px;padding-top:20px;">
            <img src="public/images/icon_khoa_hoc.png" style="width:30px;height:30px;">
            <span>Nhà khoa học</span>
          </a>
        </li>

        <li>
          <a href="#" style="height:70px;color:#068142;font-size:20px;padding-top:20px;">
            <img src="public/images/icon_nong_dan.png" style="width:30px;height:30px;">
            <span>Nhà nông</span>
          </a>
        </li>

        <li>
          <a href="#" style="height:70px;width:70px;padding-top:23px;
          background-color:white;border-radius:5px;" data-toggle="tooltip" title="Tìm kiếm" id="search"> 
            <img src="public/images/icon_search.png" onclick="openSearch()"
            style="width:30px;height:30px;">
          </a>
        </li>

      </ul>
      <!-- end_ul -->

      <ul class="nav navbar-nav navbar-right">
        {{-- <li>
          <a href="#" style="height:70px;color:#068142;font-size:20px;padding-top:10px;">
            <img src="public/images/icon_login.png" style="width:110px;height:50px;">
          </a>
        </li> --}}
        <li>
          <a href="#" style="height:70px;color:#068142;font-size:20px;padding-top:20px;">
            <img src="public/images/login.ico" style="width:30px;height:30px;">
            <span>Đăng nhập</span>
          </a>
        </li>
      </ul>

    </div>
    <!--/.nav-collapse -->
  </div>
</nav><br><br><br><br>


<!-- box_madal_search -->
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  <div class="overlay-content">
    <form action="#">
      <input type="text" placeholder="Nhập tìm kiếm ..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<!-- box_madal_search -->

<script type="text/javascript">
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  // Close the full screen search box
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
</script>



<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="https://placehold.it/800x400?text=IMAGE" alt="Image">
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>      
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another Image Maybe" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p>Some text..</p>
    </div>
    <div class="well">
       <p>Upcoming Events..</p>
    </div>
    <div class="well">
       <p>Visit Our Blog</p>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 6</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
