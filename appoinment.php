<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- TEMPLATE CSS -->
  <link href="css/appoinment.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

    <!-- <div class="appoinment">
    <div class="booking">
    <div class="first">
      <p>Select a Time Slot To Book Your Appoinment</p>
    </div>
    
    <div class="days" >
        <i class="fa fa-chevron-circle-left" id="left"></i>
       <div class="detail"  onclick="opendate('dateone')">
         <p>Today-22-nov</p>
       </div>

       <div class="detail"  onclick="opendate('datetwo')">
         <p>Today-22-nov</p>
       </div>

       <div class="detail"  onclick="opendate('datethree')">
         <p>Today-22-nov</p>
       </div>
      
       <i class="fa fa-chevron-circle-right" id="right"></i>
    </div>
    <div class="line"></div>


     <div id="dateone" class="schedule">
        <i class="fa fa-cloud-sun"></i>
       
        <span>Afternoon</span>
        <p class="timingone">05:00 PM</p>
        <p class="timingone">05:00 PM</p><br>
        <span>Evening</span>
        <i class="far fa-cloud-moon"></i>
        <p class="timingone">05:00 PM</p>
        <p class="timingone">05:00 PM</p>
    </div>
    
    <div id="datetwo" class="schedule" style="display:none">
        <span>Afternoon</span>
        <p class="timingone">05:00 PM</p>
        <p class="timingone">05:00 PM</p><br>
        <span>Evening</span>
        <p class="timingone">05:00 PM</p>
       </div>
    
    <div id="datethree" class="schedule" style="display:none">
        <span>Afternoon</span>
        <p class="timingone">05:00 PM</p>
        <p class="timingone">05:00 PM</p><br>
        <span>Evening</span>
       
    </div> 



    
  </div>
  </div> -->
  <div class="tabset">
      <!-- Tab 1 -->
      <!-- <i class="fa fa-chevron-circle-left" id="left"></i> -->
      <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
      <label for="tab1">Today-22-nov</label>
      <!-- Tab 2 -->
      <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
      <label for="tab2">Today-22-nov</label>
      <!-- Tab 3 -->
      <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
      <label for="tab3">Today-22-nov</label>
      <!-- <i class="fa fa-chevron-circle-right" id="right"></i> -->
      <div class="tab-panels">
        <section id="marzen" class="tab-panel" >
         
            <span>Afternoon</span>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p><br>
            <span>Evening</span>
            <i class="far fa-cloud-moon"></i>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p>
      </section>
        <section id="rauchbier" class="tab-panel" >
            <span>Afternoon</span>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p><br>
            <span>Evening</span>
            <i class="far fa-cloud-moon"></i>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p>
        </section>
        <section id="dunkles" class="tab-panel">
            <span>Afternoon</span>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p><br>
            <span>Evening</span>
            <i class="far fa-cloud-moon"></i>
            <p class="timingone">05:00 PM</p>
            <p class="timingone">05:00 PM</p>
        </section>
      </div>
      
    </div>
    
 

  
</body>
</html>


 