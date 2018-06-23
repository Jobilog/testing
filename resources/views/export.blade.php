@extends('master')
@section('content')
 <style>
 
#customers {
    font-family: "Lucida Console", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
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
<center><h3>Export Rates</h3></center>
<table id="customers" align="center"> <br>
  <tr>
    <th></th>
    <th>Full Container Load</th>
    <th>Less than a Container load</th>
  </tr>
  <tr>
     <td>Container Size</td>
    <td>20'</td>
    <td>40'</td>
  </tr>
  <tr>
     <td>Brokerage</td>
  <td>Php <?php echo number_format("1300",2)?></td>
    <td>Php <?php echo number_format("1300",2)?></td>
  </tr>
  <tr>
    <td>Processing Fee</td>
     <td>Php <?php echo number_format("1500",2)?></td>
    <td>Php <?php echo number_format("1500",2)?></td>
  </tr>
  <tr>
     <td>Documentation</td>
     <td>Php <?php echo number_format("500",2)?></td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
    <td>Handling Fee</td>
    <td>Php <?php echo number_format("500",2)?></td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
     <td>Import Entry</td>
 <td>Php <?php echo number_format("315",2)?></td>
    <td>Php <?php echo number_format("315",2)?></td>
  </tr>
  <tr>
    <td>Customs Entry</td>
  <td>Php <?php echo number_format("2500",2)?></td>
    <td>Php <?php echo number_format("2500",2)?></td>
  </tr>
  <tr>
   <td>Atrig</td>
   <td>Php <?php echo number_format("300",2)?></td>
    <td>Php <?php echo number_format("300",2)?></td>
  </tr>
  <tr>
    <td>Collectors</td>
     <td>Php <?php echo number_format("1500",2)?></td>
    <td>Php <?php echo number_format("1500",2)?></td>
  </tr>
  <tr>
     <td>Receipted</td>
    <td>Php <?php echo number_format("12",2)?></td>
    <td>Php <?php echo number_format("12",2)?></td>
  </tr>
  <tr>
    <td>Freight Charge</td>
   <td>Php <?php echo number_format("18000",2)?></td>
    <td>Php <?php echo number_format("20000",2)?></td>

   </tr>
 
</table>  <br>

@endsection