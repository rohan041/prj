<?php 
include('include/header.php');
include('include/navbar.php');
 
    include('include/scripts.php');
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.13/tailwind.min.css'>

<style type="text/css">

.box{
background-color: white;

}
.c-dashboardInfo {
  margin-bottom: 15px;
}
.c-dashboardInfo .wrap {
  background: #ffffff;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #6c6c6c;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #323c43;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(2) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(3) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}

</style>
</head>
<div class="main-panel"><br><br>
<div class="content">
<div class="page-inner">

                         <div class="container-fluid">
                            
	<div class="page-inner mt--5">
	
     
         <div class="row">
                                   <div class="col-md-3">
                                       <div class="card card-stats card-secondary">
                                             <div class="card-body ">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big  text-center"  >
                                                              <i class="fas fa-palette"  style="font-size: 65; color:black;"></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category">Design / Work</p>
                                                                 <h4 class="card-title">1,294</h4>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <div class="card card-stats card-primary">
                                             <div class="card-body ">
                                                 
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                  <i class="
fas fa-id-card" style="font-size: 65" ></i>
                        </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category" style=" font-family: sans-serif; font-size: 23;">Jobs</p>
                                                                 <h4 class="card-title">$ 1,345</h4>
                                                                <!--  <br>
                                                                 <h4><button>View All</button></h4>  -->
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-3">
                                        <div class="card card-stats card-info">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                    <i class="

fas fa-shopping-cart" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category">Subscribers</p>
                                                                 <h4 class="card-title">1303</h4>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                    <div class="col-md-3">
                                        <div class="card card-stats card-success">
                                             <div class="card-body">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                    <i class="

fas fa-users" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category">Subscribers</p>
                                                                 <h4 class="card-title">1303</h4>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                    
                                   <div class="col-md-3">
                                        <div class="card card-stats card-danger">
                                             <div class="card-body ">
                                                  <div class="row">
                                                       <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="

fas fa-wallet" style="font-size: 65" ></i>
                                                            </div>
                                                       </div>
                                                       <div class="col-7 d-flex align-items-center">
                                                            <div class="numbers">
                                                                 <p class="card-category">Order</p>
                                                                 <h4 class="card-title">576</h4>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
    
<!---------------------------------------------------------------------- for 2nd  ----------------------------------------------------------->
<div id="root">
  <div class="container pt-5">
    <div class="row align-items-stretch">
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Portfolio Balance<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">€10,500</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Rental income<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">€500</span><span
            class="hind-font caption-12 c-dashboardInfo__subInfo">Last month: €30</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Available funds<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">€5000</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Rental return<svg
              class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
              </path>
            </svg></h4><span class="hind-font caption-12 c-dashboardInfo__count">6,40%</span>
        </div>
      </div>
    </div>
  </div>


<!------- for 3rd ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<body class="flex items-center justify-center p-6 bg-gray-900 min-h-screen">
  <section class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-6xl">
    <div class="relative p-5 bg-gradient-to-r from-teal-400 to-green-500 rounded-md overflow-hidden">
      <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">$5000.00
        <!-- <p>dmdedejdnjendndejdnejndjendn endjednejdnejdnedje sednekd</p> --></div>
      <div class="relative z-10 text-green-200 leading-none font-semibold">Next month's income</div>
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute right-0 bottom-0 h-32 w-32 -mr-8 -mb-8 text-green-600 opacity-50">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>
    <div class="relative p-5 bg-gradient-to-r from-blue-400 to-blue-600 rounded-md overflow-hidden">
      <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">110</div>
      <div class="relative z-10 text-blue-200 leading-none font-semibold">Members</div>
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute right-0 bottom-0 h-32 w-32 -mr-8 -mb-8 text-blue-700 opacity-50">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
    </div>
    <div class="relative p-5 bg-gradient-to-r from-red-400 to-red-600 rounded-md overflow-hidden">
      <div class="relative z-10 mb-4 text-white text-4xl leading-none font-semibold">3</div>
      <div class="relative z-10 text-red-200 leading-none font-semibold">Upcoming cancellations</div>
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute right-0 bottom-0 h-32 w-32 -mr-8 -mb-8 text-red-700 opacity-50">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
    </div>
    <div class="relative p-5 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-md overflow-hidden">
      <div class=" mb-4 text-white text-4xl leading-none font-semibold">97.00%</div>
      <div class="text-yellow-200 leading-none font-semibold">Retention rate</div>
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="absolute right-0 bottom-0 h-32 w-32 -mr-8 -mb-8 text-yellow-700 opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
</svg>
      </svg>
    </div>
  </section>
</body>




  
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include('include/scripts.php')

?>