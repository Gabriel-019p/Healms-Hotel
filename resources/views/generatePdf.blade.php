
<div class="container">
<div class="contain">
<div class="uni">
</div>
<div class="image-background">
<div class="dues"></div>
<h1 class="heams"><span class=""></span>HEAMS APARTMENT & SUITES</h1>
<div class="receipt">PAYMENT RECEIPT</div>
<div class="parent-container">
    <div class="mid">
        <div>Hotel Reservation ID:<span class="hotel">{{ $payment->hotelid }}</span></div>
        <div>Date: {{ $payment->created_at }}</div>
        <div>Payment reference ID: {{ $payment->payment_reference }}</div>
    </div>
</div>
<div class="con">
<p class="list">Name:<span class="fig">{{ $payment->name }}</span></p>  
<p class="list3">Phone Number:<span class="due">{{ $payment->phone}}</span></p>
<p class="list2">Room:<span class="dept">{{ $payment->room_type }}</span></p>
<p class="list4">Amount Paid:<span class="level">{{ $payment->amount }}</p>
<p class="list4">Arrival Date:<span class="level">{{ $payment->arrival }}</p>
<p class="list4">Departure Date:<span class="level">{{ $payment->departure }}</p>
<p class="list5">This is to certify that the bearer <span class="">{{ $payment->name }}</span> has paid his/her <span class="lev">{{ $payment->amount }}</span> to reserve <span>, <span class="lev">{{ $payment->room_type }}</span> Space</p>
<p class="list6">Paultech INC</p>

</div>
</div>
</div>
</div>

<style>
    .hotel{
        color:  red;
        font-style:bold;
        padding-left: 2px;
    }
    .container{
        border: #615EFC 1px solid;
        padding:8px;
    }
    .contain{
        border: Tomato 1px dotted;
        padding:4px;
        background-color:;
    }
    .aau {
        text-align: center;
        font-family: Arial, sans-serif;
    }
    .dues{
        text-align: center;
        font-family: Arial, sans-serif;
        font-size:25px;
    }
    .parent-container {
    display: flex; /* Set container to flex */
    }

    .mid {
        display: flex; /* Set .mid to flex to allow its children to align horizontally */
        align-items: center; /* Vertically center-align children */
        padding-left:3%;
        padding-top:2%;
    }
    .fig{
        font-weight: bold;
        padding:1px;
        font-size:15px;
        padding-left:3%;
        padding-right:5%;
    }
    .dept{
        font-weight: bold;
        padding:1px;
        font-size:16px;
        padding-left:1%;
        padding-right:1%;
    }
    .matric{
        font-weight: bold;
        padding:1px;
        font-size:16px;
        padding-left:3%;
        padding-right:3%;
    }
    .level{
        font-weight: bold;
        padding:1px;
        font-size:16px;
        padding-left:3%;
        padding-right:5%;
    }
    .lev{
        font-weight: bold;
    }
    .due{
        font-weight: bold;
        padding:1px;
        font-size:16px;
        padding-left:2%;
        padding-right:5%;
    }
    .name{
        font-weight: bold;
        padding:1px;
        font-size:16px;
        padding-left:10%;
        padding-right:10%;
    }
    .con{
        padding-left:3%;
        padding-right:3%;
        margin-top:5%;
    }
    .list{
        font-size:18px;
        font-family: Georgia;
    }
    .list2{
        font-size:15px;
    }
    .list3{
        font-size:15px;
    }
    .list4{
        font-size:15px;
    }
    .list5{
        text-align: center;
        padding-top:10%;
        font-size:15px;
    }
    .list6{
        text-align: center;
        padding-top:1%;
        font-size:10px;
    }
    .receipt{
        text-align: center;
        font-family: Arial, sans-serif;
        font-size:15px;
        padding:5px;
        border-bottom: 1px dashed black;
    }

    .heams{
        text-align: center;
        font-family: Arial, sans-serif;
        font-size:25px;
    }
    .image-background {
      background-image: url("image/hem1.png"); /* Path to your image */
      background-repeat: no-repeat;
      background-position: center;
      background-size: 15% auto; /* Reduce width and maintain aspect ratio */
      opacity: 0.6; /* Reduce opacity to 70% */
      height: 550px; /* Set the height of the container (adjust as needed) */
      width: 100%; /* Make the container full width */
      padding-top:
    }
  
</style>