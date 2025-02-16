<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML </title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li> 
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            @auth
                            <li class="scroll-to-section" ><a style="color:red" href="{{url('/showcart',Auth::user()->id)}}">Cart[{{$count}}]</a></li>
                            @endauth

                            @guest
                            <li class="scroll-to-section" style="color:red"><a style="color:red" href="#reservation">Cart[]</a></li>

                            @endguest
                            
                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>
                <!-- <a class='menu-trigger'>
                    <span>Menu</span>
                </a> -->
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <div id="top">
    <table align="center" bgcolor="yellow"  >
        <tr>
            <th style="padding:30px;">Food Name</th>
            <th style="padding:30px;">Price</th>
            <th style="padding:30px;">Quantity</th>
            <th style="padding:30px;">Action</th>
        </tr>
        <form action="{{url('/orderconfirm')}}" method="POST">
            @csrf
        @foreach($data as $data)
        <tr>
            <td style="text-align:center">
            <input type="hidden" name="foodname[]" value ="{{$data->title}}"id="">
            
            {{$data->title}}
        </td>
            <td style="text-align:center">
            <input type="hidden" name="price[]" value="{{$data->price}}">
            {{$data->price}}</td>
            <td style="text-align:center">
            <input type="hidden" name="quantity[]" value="{{$data->quantity}}">
            {{$data->quantity}}</td>
        </tr>
        @endforeach
        @foreach($data2 as $data2)
        <tr style="position: relative; top :-36px; right:-345px">
        <td style="text-align:center"> <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>
        </tr>
@endforeach
    </table>
    <div align="center"  style="padding :10px" >
        <button type="button" class="btn btn-outline-primary" id="order"> Order Now</button>
</div>
<div id="appear" align="center" style="padding: 30px;">
    <div style="padding: 10px;">
        <label for="">Name</label>
        <input type="text" name="name" id=" " placeholder="Name">
    </div>
    <div style="padding: 10px;">
        <label for="">Phone</label>
        <input type="number" name="phone" id=" " placeholder="Phone Number">
    </div>
    <div style="padding: 10px;">
        <label for="">Address</label>
        <input type="text" name="address" id=" " placeholder="Address">
    </div>
    <div style="padding: 10px;">
    <input type="submit" class="btn btn-outline-success" value="Order Confirm">
    <button type="button" id="close" class="btn btn-outline-danger">Close</button>        
</div>

</div>
</form>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                            <br>Design: TemplateMo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        hide();
        const orderEl=document.getElementById("order");
        orderEl.addEventListener("click",()=>{
        const appearEl=document.getElementById("appear");
            appearEl.style.display="";


        });
        const closeEl=document.getElementById("close");
        closeEl.addEventListener("click",()=>{
            hide();
        });
        function hide(){
        const appearEl=document.getElementById("appear");
        appearEl.style.display="none";
            
        }
   
    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
