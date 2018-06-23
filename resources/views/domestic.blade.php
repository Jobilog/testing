@extends('master')
@section('content')
<style type="text/css">
	       table {
  border-collapse: collapse;
  border: 1px solid gray;
  width: calc(50% - 10px);
  margin: 10px;
}

#customers {
    font-family: "Lucida Console", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 9px;
    font-size: 15px;
    font-weight: 900;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(49, 69, 85);
    color: white;
}
</style>
<center><h3>Domestic Rates</h3></center>
<table id="customers" style="float:left;" >
  <tr>
    <th>Air Rates</th>
    <th>All Destination</th>
   
  </tr>
  <tr>
     <td>Container Size</td>
    <td>Php <?php echo number_format("20",2)?></td>
   
  </tr>
  <tr>
     <td>Brokerage</td>
  <td>Php <?php echo number_format("19",2)?></td>
  </tr>
  <tr>
    <td>Processing Fee</td>
     <td>Php <?php echo number_format("300",2)?></td>
  </tr>
  <tr>
     <td>Documentation</td>
     <td>Php <?php echo number_format("350",2)?></td>
  </tr>
  <tr>
    <td>Handling Fee</td>
    <td>Php <?php echo number_format("1",2)?></td>
  </tr>
  <tr>
     <td>Import Entry</td>
 <td>Php <?php echo number_format("50",2)?></td>
  </tr>
  <tr>
    <td>Customs Entry</td>
  <td>Php <?php echo number_format("75",2)?></td>
  </tr>
  <tr>
   <td>Atrig</td>
   <td>Php <?php echo number_format("65",2)?></td>
  </tr>
  <tr>
    <td>Collectors</td>
     <td>Php <?php echo number_format("3500",2)?></td>
  </tr>
  <tr>
     <td>Receipted</td>
    <td>Php <?php echo number_format("45",2)?></td>
  </tr>
  <tr>
    <td>Freight Charge</td>
   <td>Php <?php echo number_format("3500",2)?></td>

   </tr>
</table>
<table id="customers" style="float:left;">
  <tr>
    <th>Land Rates</th>
    <th>All Destination</th>
   
  </tr>
  <tr>
     <td>Container Size</td>
    <td>Php <?php echo number_format("20",2)?></td>
   
  </tr>
  <tr>
     <td>Brokerage</td>
  <td>Php <?php echo number_format("19",2)?></td>
  </tr>
  <tr>
    <td>Processing Fee</td>
     <td>Php <?php echo number_format("300",2)?></td>
  </tr>
  <tr>
     <td>Documentation</td>
     <td>Php <?php echo number_format("350",2)?></td>
  </tr>
  <tr>
    <td>Handling Fee</td>
    <td>Php <?php echo number_format("1",2)?></td>
  </tr>
  <tr>
     <td>Import Entry</td>
 <td>Php <?php echo number_format("50",2)?></td>
  </tr>
  <tr>
    <td>Customs Entry</td>
  <td>Php <?php echo number_format("75",2)?></td>
  </tr>
  <tr>
   <td>Atrig</td>
   <td>Php <?php echo number_format("65",2)?></td>
  </tr>
  <tr>
    <td>Collectors</td>
     <td>Php <?php echo number_format("3500",2)?></td>
  </tr>
  <tr>
     <td>Receipted</td>
    <td>Php <?php echo number_format("45",2)?></td>
  </tr>
  <tr>
    <td>Freight Charge</td>
   <td>Php <?php echo number_format("3500",2)?></td>

   </tr>
</table>
<table id="customers" style="margin:left;">
  <tr>
    <th>Sea Rates</th>
    <th>All Destination</th>
   
  </tr>
  <tr>
     <td>Cartage Fee</td>
    <td>Php <?php echo number_format("20",2)?></td>
   
  </tr>
  <tr>
     <td>Delivery Fee</td>
  <td>Php <?php echo number_format("19",2)?></td>
  </tr>
  <tr>
    <td>Freight AIF</td>
     <td>Php <?php echo number_format("300",2)?></td>
  </tr>
  <tr>
     <td>MYC Insurance</td>
     <td>Php <?php echo number_format("350",2)?></td>
  </tr>
  <tr>
    <td>Valuation</td>
    <td>Php <?php echo number_format("1",2)?></td>
  </tr>
  <tr>
     <td>Minimum Kilo 49</td>
 <td>Php <?php echo number_format("75",2)?></td>
  </tr>
  <tr>
    <td>Maximum kilo 249</td>
  <td>Php <?php echo number_format("65",2)?></td>
  </tr>
  
</table>
 
<br><br><br><br><br><br><br><br><br><br>


@endsection