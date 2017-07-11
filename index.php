<!DOCTYPE html><!-Proposal Document>
<head>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="/BOQEditable/js/jquery.js"></script>
	<script src="/BOQEditable/js/framework.js"></script>
    <script src="/BOQEditable/js/bootstrap.min.js"></script>
    <script src="/BOQEditable/js/jquery.easing.min.js"></script>
    <script src="/BOQEditable/js/scrolling-nav.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.fullpage/2.9.4/jquery.fullpage.extensions.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/jquery.fullpage/2.9.4/jquery.fullpage.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="vendors/jquery.easings.min.js"></script>
    <script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="corner-slider/assets/js/jquery-1.10.2.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="corner-slider/src/assets/js/jquery.cornerslider.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/jquery.fullpage/2.9.4/jquery.fullpage.min.css" rel="stylesheet">
    <title contenteditable="true">DesignQube</title>
    <script>
    (function(){ window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }})(); // function refresh the webpage state on PageRefresh
    </script>
    <script>
    $(".carousel.zoom").carousel().on("slide.bs.carousel", function (data) {
    var n = $(data.target).find(".item").length;
    var active = data.relatedTarget;
    if(active===undefined){
      active = $(data.target).find(".item.active");
    }else{
   active = $(data.relatedTarget);
    }
    console.log(active);
  $(data.target).find(".item.next").removeClass("next");
  var next = $(data.target).find(".item").eq(active.index()-n+1);
  next.addClass("next");
  $(data.target).find(".item.prev").removeClass("prev");
  var prev = $(data.target).find(".item").eq(active.index()-1);
  prev.addClass("prev");
}).trigger("slide.bs.carousel");
</script>
</head>
<body id="home" data-spy="scroll" data-target="#navigation" data-offset="50">
    <div class="container-fluid">
    <div class="row"> <!-Navigation Pane>
        <div class="col-md-3 col-sm-3 sidebar2">
            <br>
            <div class="left-navigation">
                  <div class="row">
                        <img src="/BOQEditable/logo.png" id="logo"><br><br>
                        <br><br><br><br>
                        <div>
                            <nav id="navigation" class="nav navbar-default">
                           <ul class="nav nav-stacked" >
                            <li class="active"><a class="page-scroll" data-parent="#accordion" href="#tab1" id="link"><p style="font-weight: normal;">Cover</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab2" id="link"><p style="font-weight: normal;">Letter</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab3" id="link"><p style="font-weight: normal;">Expertise</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab4" id="link"><p style="font-weight: normal;">Statement of Work</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab5" id="link"><p style="font-weight: normal;">Our Process</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab6" id="link"><p style="font-weight: normal;">Scope of the Work</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab7" id="link"><p style="font-weight: normal;">Resource Chart</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab8" id="link"><p style="font-weight: normal;">Team</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab9" id="link"><p style="font-weight: normal;">Work Showcase</p></a></li>
                            <li><a class="page-scroll" data-parent="#accordion" href="#tab10" id="link"><p style="font-weight: normal;">Fee Proposal</p></a></li>
                            <li><a class="page-scroll" href="#tab11" id="link"><p style="font-weight: normal;">Next Steps</p></a></li></ul>
                          </nav>
                        </div>
                                  </div>
                          </div>
          </div>
            </div>
            <div id="fixed">
<section id="1"> <!-Cover (Page 1)>
<div class="col-sm-9 col-md-9" id="tab1">
  <br>
    <div class="well"  style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">
          <a class="ui blue ribbon label"><h4>Cover</h4></a><h1><span class='projectname'></span></h1>
          <div class='designername'></div>
          <span>  <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain"></span>
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div>
</section>
<section id="2"> <!Letter (Page 2)>
<div class="col-sm-9 col-md-9" id="tab2" >
  <br>
    <div class="well"  style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui orange ribbon label"><h4>Cover Letter</h4></a><br>
          <p align="justify"><br> <h4> Mr.<span class='clientname'></span> ,<span id='clientplace'></span></h4><br>
<h2>Re.<span class='projectname'>Proposal project</span></h2><br>
<h4><span id='salutation'></span><span class='clientname'></span>,</h4><br><br>
<span id='subject'></span><br><br>
 <div id='descripation'></div><br>
 <br><br><div id='complementary'></div><br>

<br><div id='designername1'></div></p><br>

    </div>
</div >
</section>
<section id="3"><!-Expertise(Page 3)>
<div class="col-sm-9 col-md-9" id="tab3" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui teal ribbon label"><h4>Expertise</h4></a><h1 class='projectname'></h1>
          <p> <span class='designername'></span> |<span class='designerplace' ></span> </p>
          <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain">
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
    <h4></h4>
</div >

<div>
</div>
</section>
<section id="4"><!-Statement of Work(Page 4)>
<div class="col-sm-9 col-md-9" id="tab4" >
  <br><br><br>
    <div class="well"  style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui red ribbon label" ><h4>Statement of work</h3></a><h1 class='projectname'></h1>
          <p> <span class='designername'></span> |<span class='designerplace' ></span> </p>
          <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain">
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section id="5"> <!-Our Process(Page 5)>
<div class="col-sm-9 col-md-9" id="tab5" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui blue ribbon label"><h4>Our Process</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span></p>
          <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain">
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section id="6"><!-Scope of Work(Page 6)>
<div class="col-sm-9 col-md-9" id="tab6" >
  <br><br><br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui orange ribbon label"><h4>Scope of Work</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span></p>
          <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain">
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section id="7"><!-Resource Chart(Page 7)>
<div class="col-sm-9 col-md-9" id="tab7" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui teal ribbon label"><h4>Resource Chart</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span> </p>
          <img src="/BOQEditable/hello.jpg" width="70%" height="60%"id="image" align="center" object-fit="contain">
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section id="8"><!-Team(Page 8)>
<div class="col-sm-9 col-md-9" id="tab8" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff;border:none;">

          <a class="ui red ribbon label" style="text-decoration:none;"><h4>Team</h4></a>

      <center><img class="card-img-top" src="/BOQEditable/images/vikas.jpg" alt="Card image cap" width="40%" height="40%" border-radius="5px">
              <h4 class="card-title"><span id='Name'></span></h4>
              <p class="card-text"><span id='position'></span></p></center>
  </div>

        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section id="9"><!Showcase(Page 9)>
<div class="col-sm-9 col-md-9" id="tab9" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">
          <a class="ui blue ribbon label"><h4>Showcase</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span> </p>
        <center>

	           <div class="row">
               <div class="carousel zoom landscape slide" id="carousel-landscape" data-ride="carousel" data-interval=0>
        <ol class="carousel-indicators">
            <li data-target="#carousel-landscape" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-landscape" data-slide-to="1" class=""></li>
            <li data-target="#carousel-landscape" data-slide-to="2" class=""></li>
            <li data-target="#carousel-landscape" data-slide-to="3" class=""></li>
            <li data-target="#carousel-landscape" data-slide-to="4" class=""></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img alt="" src="https://dummyimage.com/800x600/666666/ffffff">
            </div>
            <div class="item">
              <img alt="" src="https://dummyimage.com/800x600/666666/ffffff">
            </div>
            <div class="item">
              <img alt="" src="https://dummyimage.com/800x600/666666/ffffff">
            </div>
            <div class="item">
              <img alt="" src="https://dummyimage.com/800x600/666666/ffffff">
            </div>
            <div class="item">
              <img alt="" src="https://dummyimage.com/800x600/666666/ffffff">
            </div>
          </div>
          <a href="#carousel-landscape" class="left carousel-control" role="button" data-slide="prev"><span class="sr-only">Previous</span> </a>
          <a href="#carousel-landscape" class="right carousel-control" role="button" data-slide="next"><span class="sr-only">Next</span> </a>
        </div>
      </div>
</div></center>

      </div>
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</section>
<section><!Fee Proposal(Page 10)>
<div class="col-sm-9 col-md-9" id="tab10" >
  <br>
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">
          <a class="ui orange ribbon label"><h4>Fee Proposal</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span> </p><br>
<div id="table">
<table class="ui very basic collapsing celled table" margin-left="700px" >
<thead>
  <tr><th>Description</th>
  <th>Fee</th>
</tr></thead>
<tbody>
  <tr>
    <td>
      <div class="content">
        <b>Professional fees for above mentioned<br> scope of work & services<br></b>
          <div class="sub header">Calculated @ Rs.210/Sq.ft
        </div>
      </div>
    </h4></td>
    <td>
      <span id='feecalculated'></span>
    </td>
  </tr>
  <tr>
    <td>
      <div class="content">
        <p><b>  Service Tax<br>
          Applicable for All<br></b></p>
          <div class="sub header">
            Payments @15%
        </div>
      </div>
    </h4></td>
    <td>
   <span id='service'></span>
    </td>
  </tr>
  <tr>
    <td>
      <div class="content">
        <b> Total</b>
          <div class="sub header">Executive
        </div>
      </div>
    </h4></td>
    <td>
      <span id='execute'></span>
    </td>
  </tr>
</tbody>
</table>
</div>
<br>

<br>
<div class="ui raised segment">
  <p>Account Holders Name : <span id='AccountHoldersName'></span>
    Branch Name:<span id='BranchName'></span><br>
    Account Number:<span id='AccountNumber'></span>	
    IFSC Code:	<span id='IFSCCode'></span><br>
    Bank Name:	<span id='BankName'></span>
    SWIFT Code:	<span id='SWIFTCode'></span><br>
</div>
    </div>
</div >
</section>
<section><!-Next Steps (Page 11)>
<div class="col-sm-9 col-md-9" id="tab11">
    <div class="well" style="box-shadow: 5px 5px 45px #E8E9EB;background-color:#fff; border:none;">

          <a class="ui teal ribbon label"><h4>Next Steps</h4></a><h1 class='projectname'></h1>
          <p><span class='designername'></span> |<span class='designerplace' ></span> </p><br>
          <br><p font-size="9px">
          <span id='contents'></span><span id='phonenumber'></span></p>
        <h1 align="center"></h1>
        <h4 align="center">  </h4>
    </div>
</div >
</div>
</section>
</div>
<style>
#ribbon{
  height:100px;
  width: 265px;
  right: 20px;
  position: fixed;
  bottom:0;
  font-family: Muli,helvetica,sans-serif;
}

#tab1{
  right:0;
  font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  transition: all 0.2s linear;
  height: 100%
}

#tab2{

  font-family:    Muli, Helvetica, sans-serif;
  right:0;
  color: grey;
  text-align: justify;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;
  transition: all 0.2s linear;
}
#tab3{
  right:0;
font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;

}

#tab4{
  right:0;
font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;
}

#tab5{
  right:0;
font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;

}
#tab6{
  right:0;
  font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;

}

#tab7{
  right:0;
font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;

}

#tab8{
  right:0;
  font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;

}

#tab9{
  right:0;
font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;
}

#tab10{
  right:0;
  font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 20px;


}
#tab11{
  right:0;
  font-family:    Muli, Helvetica, sans-serif;
  position: relative;
  margin-left: 275px;
  margin-right: 20px;
  margin-top: 10px;
    margin-bottom:20px;
    color: grey;

}
#right{
  position:fixed;
  right: 0px;

}
.nav-stacked{
color: grey !important;
width: auto !important;
height: auto !important;
box-shadow: none;
font-size: 12px;
background-color: none;
}

.nav-stacked>li:active {
background-color:#fff !important;
width: auto;
height: auto;
border-left: 2px;
border-color: #000;
}
ul.nav{
  background-color:#fff;
  box-shadow: none;
  border-left: 2px;
  border-left-color:gray;
}
li.nav-default:active{
  font-weight:bold;
}
ul.nav a:active{
  background-color: #fff;
  font-weight: bold;
}
ul.nav li:active{
  border-left: 2px;
  font-weight:bold;
}
ul.nav>a:active{
}
ul.nav a:hover { color: grey !important; background-color: #fff;  border-left: 2px solid #d3d3d3;font-weight: bold;;}
ul.nav a{color: grey !important; font-size: 12px; border-left:2px solid #d3d3d3;}
.nav-stacked > .active > a,
.nav-stacked > .active > a:hover {
color: Black !important;
font-weight: bold;
background-color:#fff !important;
text-decoration: none;
border-radius: none;
border-left: 2px solid;
font-weight: bold;
}
#row{
  margin-left: 20px;
}
#rightone{
  position: absolute;
  right: 120px;
}
#divfixed{
  font-family:    Muli, Helvetica, sans-serif;
  font-style: normal;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  position: fixed;
  left:20px;}



}
@font-face {
  font-family: 'Muli', sans-serif;
  src: url("https://fonts.googleapis.com/css?family=Muli");

}
#table{
  margin-left: 50px;
}
#table2{
  margin-left: 50px;
}

#fixed{
  width:1325px;
}

#chipname{
  top: 20px;
  right: 20px;
}
body{
  font-family: Muli,Helvetica, sans-serif;
}
html,body, .container-fluid, .sidebar2,.main-content{

  height:100%;
}
.sidebar2 {
    background-color:#fff;
    text-decoration-line: none;
    z-index: 1000;
    height: 100%;
    position: fixed;

    width: 250px;

    text-emphasis-position: above;
    font-weight: lighter !important;
    font-size: 12px;
    border-color: none;
   color: grey;
   padding-left: 50px;
}

body
{
  background-color: #fff;
}
.main-content{
    text-align:center;
}

#logo{
  width: 70%;
  height: 70%;
}
#corner-slider {
  border: none;
  position:fixed;
  z-index:10000;
	overflow:hidden;
	height:75px;
  width:100%;
  right:0 !important;
  font-size: 12px;
  font-weight: bold;
  color:#fff;
  background:rgba(105,105,105,0.9);
}
#corner-slider.hidden{
    display:none;
}
#corner-slider .close{
  position:absolute;
	cursor:pointer;
	font-size:6px;
	display:none;
	z-index:1002;
	right:5px;
	top:5px;
}
/* carousel.zoom */
.carousel.zoom{
  overflow: hidden;
  display: inline-block;
}
.carousel.zoom .carousel-inner{
  position: relative;
  overflow: visible;
}
.carousel.zoom .carousel-inner>.item{
  position: absolute;
  display: block;
  width: 100%;
  opacity: 0;
  z-index: 0;
  transition: all .4s ease-in-out;
}
.carousel.zoom .carousel-inner>.item.active{
  position: relative;
  opacity: 1;
  z-index: 1;
}
.carousel.zoom .carousel-inner>.item.active.right,
.carousel.zoom .carousel-inner>.item.next {
  -webkit-transform-origin: center right;
  -moz-transform-origin: center right;
  -ms-transform-origin: center right;
  -o-transform-origin: center right;
  transform-origin: center right;
  opacity: 0.3;
}
.carousel.zoom .carousel-inner>.item.active.left,
.carousel.zoom .carousel-inner>.item.prev {
  -webkit-transform-origin: center left;
  -moz-transform-origin: center left;
  -ms-transform-origin: center left;
  -o-transform-origin: center left;
  transform-origin: center left;
  opacity: 0.7;
}
/* carousel.zoom.landscape */
.carousel.zoom.landscape .carousel-inner{
  margin: 0 15px;
  width: auto;
}
.carousel.zoom.landscape .carousel-inner>.item.active.right,
.carousel.zoom.landscape .carousel-inner>.item.next {
  -webkit-transform: translate3d(15px,0,0) scale(0.8);
  -moz-transform: translate3d(15px,0,0) scale(0.8);
  -ms-transform : translate3d(15px,0,0) scale(0.8);
  -o-transform : translate3d(15px,0,0) scale(0.8);
  transform: translate3d(15px,0,0) scale(0.8);
}
.carousel.zoom.landscape .carousel-inner>.item.active.left,
.carousel.zoom.landscape .carousel-inner>.item.prev {
  -webkit-transform: translate3d(-15px,0,0) scale(0.8);
  -moz-transform: translate3d(-15px,0,0) scale(0.8);
  -ms-transform : translate3d(-15px,0,0) scale(0.8);
  -o-transform : translate3d(-15px,0,0) scale(0.8);
  transform: translate3d(-15px,0,0) scale(0.8);
}
.carousel.zoom.landscape .carousel-control{
  width: 30px;
  background: transparent;
}
/* carousel.zoom.portrait */
.carousel.zoom.portrait .carousel-inner{
  margin: 0 50px;
  width: auto;
}
.carousel.zoom.portrait .carousel-inner>.item.active.right,
.carousel.zoom.portrait .carousel-inner>.item.next {
  -webkit-transform: translate3d(50px,0,0) scale(0.8);
  -moz-transform: translate3d(50px,0,0) scale(0.8);
  -ms-transform : translate3d(50px,0,0) scale(0.8);
  -o-transform : translate3d(50px,0,0) scale(0.8);
  transform: translate3d(50px,0,0) scale(0.8);
}
.carousel.zoom.portrait .carousel-inner>.item.active.left,
.carousel.zoom.portrait .carousel-inner>.item.prev {
  -webkit-transform: translate3d(-50px,0,0) scale(0.8);
  -moz-transform: translate3d(-50px,0,0) scale(0.8);
  -ms-transform : translate3d(-50px,0,0) scale(0.8);
  -o-transform : translate3d(-50px,0,0) scale(0.8);
  transform: translate3d(-50px,0,0) scale(0.8);
}
.carousel.zoom.portrait .carousel-control{
  width: 50px;
  background: transparent;
}
</style>
<script src='/BOQEditable/js/proposify.js'></script>
<div style="top:20px; right:20px; position:fixed;">
<i class=" circular tag icon link" data-tooltip="Contents you edit, are saved automatically" data-variation="small" data-position="bottom"></i></div>
</body>
</html>
