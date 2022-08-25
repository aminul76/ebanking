 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thegenius.co/html/loanplus/preview/car-loan.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jun 2022 19:25:56 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{('frontend')}}/assets/img/favicon.png" type="image/gif">
     <meta name="description" content="Loanplus - Loan Company HTML Template, Credit Website Template.">
    <meta name="keywords" content="Home Loan Template, Bootstrap Template, Loan Product, Personal Loan">
    <title>Loanplus - Loan Company HTML Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{('frontend')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{('frontend')}}/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="{{('frontend')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{('frontend')}}/assets/css/responsive.css">
     <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

</head>

<body class="js">
    <!-- start header area -->
    <header class="header-area">
       
        <div class="logo-right-address">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sitelogo">
                            <a href="{{url('/')}}"><img src="{{('frontend')}}/assets/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="right-address">
                            <div class="single-address">
                                <div class="icon">
                                    <img src="{{('frontend')}}/assets/img/call.png" alt="">
                                </div>
                                <div class="content">
                                    <p>
                                        <span>Call Us:</span> +2 -450-000-0120
                                    </p>
                                </div>
                            </div>
                            <div class="single-address">
                                <div class="icon">
                                    <img src="{{('frontend')}}/assets/img/envalope.png" alt="">
                                </div>
                                <div class="content">
                                    <p>
                                        <span>Email us: </span> support@lender.com
                                    </p>
                                </div>
                            </div>
                            <div class="single-address">
                                <a href="#" class="button btn btn-default btn-sm"><i class="fa fa-reply-all"></i> GET A QUOTES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-lg-11">
                        <div id="cssmenu">
                            <ul>
                                <li ><a href="{{url('/')}}">Home</a>
                                    <ul>
                                        
                                    </ul>
                                </li>
                                <li><a href="about.html">About us </a></li>
                                <li><a href="#services.html">Service</a>
                                    <ul>
                                        <li><a href="#services-image.html">Services Image</a></li>
                                        <li><a href="#business-loan.html">Business Loan</a></li>
                                        <li><a href="#education-loan.html">Education Loan</a></li>
                                        <li><a href="#car-loan.html">Car Loan</a></li>
                                        <li><a href="#home-loan.html">Home Loan</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li> <a href="#calculator.html">Calculator</a></li>
                                        <li> <a href="#gallery.html">Gallery</a></li>
                                        <li><a href="#team.html">Team</a></li>
                                        <li><a href="#testimonial.html">Testimonials</a></li>
                                        <li><a href="#faq.html">FAQ</a></li>
                                        <li><a href="#how-it-work.html">How It Works</a></li>
                                        <li><a href="#apply-now.html">Apply Now</a></li>
                                        <li><a href="#404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#blog.html">Blog</a>
                                    <ul>
                                        <li> <a href="#single.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 text-right">
                        <div class="searchbtn">
                            <a href="#" class="fa fa-search"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="searchform">
            <input type="text" name="s" placeholder="Search Here">
            <button><i class="fa fa-times"></i></button>
        </div>
    </header>
    <!-- end of header area -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>DPS</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DPS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- end of banner area -->
    <section class="services-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Monthly Installment Amount
                            </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($alldpses as $alldpse)
                                <option  value="{{ $alldpse->id }}">
                                    {{ number_format($alldpse->installment_amount,2) }}</option>
                                @endforeach
                            </select>                      
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Installment Duration

                            </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($alldpses as $alldpse)
                                <option  value="{{ $alldpse->id }}">
                                    {{ $alldpse->duration }}</option>
                                @endforeach   
                            </select>                    
                         </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Institution Type

                            </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($bankuser as $bankuser)
                                <option  value="{{ $bankuser->id }}">
                                    {{ $bankuser->name_of_bank }}</option>
                                @endforeach   
                            </select>                      
                         </div>

                        <button type="submit" class="button btn btn-default btn-sm">Seach</button>
                      </form>
                </div>
                 <div class="col-md-9">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                          <tr>
                            <th>Institution
                            </th>
                            <th>INTEREST RATE</th>

                            <th>INSTALLMENT AMOUNT</th>
                            <th>DURATION</th>
                            <th>MATURE AMOUNT</th>
                        </tr>
                        </thead>
                        <tbody>
                         
                         
                            @foreach($dpses as $dps)
                            <tr>
                           
                            <td> 
                                {{ $dps->name_of_bank }}
                                Bank
                            </td>
                            <td>INTEREST RATE
                                <br>
                              {{ number_format($dps->interset_rate,2) }}
                              BDT  
                            </td>
                            <td>INSTALLMENT AMOUNT


                                <br>
                                {{$dps->installment_amount}}
                                BDT
                            </td>
                            <td>DURATION


                                <br>
                                {{$dps->duration}}
                                YEARS
                            </td>

                            <td>MATURE AMOUNT




                                <br>
                                {{$dps->mature_amount}}
                                BDT
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                 </div>
            </div>


           
           
        </div>
    </section>
    <!-- start footer area -->
    <section class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <img src="{{('frontend')}}/assets/img/footer-logo.png" alt="" />
                        </div>
                        <p>Over 24 years experience and knowledge Loanplus wе’rе hеrе to рrоvіdе уоu wіth fіnаnсіаl ѕоlutіоnѕ fоr аll уоur lеndіng needs. Whether you are lооkіng fоr any kind of loan, оur lending tеаm wіll explain lеndіng орtіоnѕ to уоu іn a ѕtrаіghtfоrwаrd mаnnеr.</p>
                        <div class="mail">
                            <span>Any Queries :</span>support@loanplus.com
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2">
                    <div class="footer-widget pages-widget">
                        <div class="footer-title">
                            <h4>Solutions</h4>
                        </div>
                        <ul>
                            <li><a href="#">Personal Loan</a></li>
                            <li><a href="#">Car Loan</a></li>
                            <li><a href="#">Home Loan</a></li>
                            <li><a href="#">Education Loan</a></li>
                            <li><a href="#">Business Loan </a></li>
                            <li><a href="#">Perday Loan </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="footer-widget recent-post">
                        <div class="footer-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <ul>
                            <li><a href="#">This book is a treatise on theory
of ethics very popular. <span class="date">January 18, 2018</span></a></li>
                            <li><a href="#">Be cites of the word in classical
literature to discove. <span class="date">Februay 10, 2018</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h4>Newsletter</h4>
                        </div>
                        <div class="form-widget">
                            <p>Subscribe to our newsletter and get latest news related to loan,credit cards,perday loan,interates rate.</p>
                            <form action="#" method="get">
                                <div class="newsletter">
                                    <label for="envalope" class="fa fa-envelope"></label>
                                    <input id="envalope" type="email" name="email" placeholder="Email address">
                                </div>
                                <button type="submit" class="button btn btn-default btn-lg">Subscribe +</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copy-right-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <div class="copyright-text">
                        <p><i class="fa fa-copyright"></i> 2018 Loanplus. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="footer-nave">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square"></i></a>
                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of footer area -->
    <!-- Optional JavaScript -->
    
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
    
  })

  </script>
  <script src="{{('frontend')}}/assets/js/popper.min.js"></script>
    <script src="{{('frontend')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{('frontend')}}/assets/js/jquery.nice-select.js"></script>
    <script src="{{('frontend')}}/assets/js/menumaker.js"></script>
    <script src="{{('frontend')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{('frontend')}}/assets/js/slider.js"></script>
    <script src="{{('frontend')}}/assets/js/active.js"></script>
</body>


<!-- Mirrored from thegenius.co/html/loanplus/preview/car-loan.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jun 2022 19:25:57 GMT -->
</html> 


