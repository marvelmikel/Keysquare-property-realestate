<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.card{
margin: 0;
font-size: .9rem;
font-weight: 400;
line-height: 1.6;
color: #212529;
text-align: center;
background-color: #098716;
} 
.card-body{
padding:15px;
}
.button{
   
  font: bold 13px Arial;
  text-decoration: none;
  background-color: #deaea8;
  color: white;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.vertical-center {
  margin: 0;
  position: absolute;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
body {
    font-size: 16px;
    font-family: var(--primary-font), sans-serif !important;
}

        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}

.trow{
  background-color: #D6EEEE;
  }
</style>
</head>
<body class="card" style ="background-color:#098716">
    <div class="card-body">
    <h2 style="color:white; text-align:center;text-transform:uppercase;">Inspection Booked</h2>
<h3 style ="text-align:left; color:white;"> Hello, a client just booked for inspection <br>
    below are the details: </h3>
    <div class="vertical-center" style="">
</div>

<table>
  <tr>
  <th style="color:white;">Name</th>
  <th style="color:white;">Email</th>
  <th style="color:white;">Phone Number</th>
  <th style="color:white;">City</th>
  <th style="color:white;">Date</th>
  <th style="color:white;">Time</th>
  </tr>
  <tr>
  <td class="trow">{{$name}}</td>
  <td class="trow" style="text-decoration:none !important;text-decoration:none;">{{$email}}</td>
  <td class="trow" >{{$phone_number}}</td>
  <td class="trow">{{$preffered_city}}</td>
  <td class="trow">{{$preffered_date}}</td>
  <td class="trow">{{$preffered_time}}</td>
  </tr>
  
  
</table>     
<p style="text-align:left; color:white;"> Please treat accordingly.</p> 
<h5 style="color:#deaea8;text-align:center;text-transform:uppercase;">  </h5>
    </div>


</body>
</html>