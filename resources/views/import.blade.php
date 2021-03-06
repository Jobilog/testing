@extends('master')
@section('content')
 <style>
 
#customers {
    font-family: "Lucida Console", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#customers td {
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
    font-size: 15px;
    font-weight: 900;
}
</style>
<center><h3>Import Rates</h3></center>
<table id="customers" align="center"> <br>
  <tr>
    <th>Brokerage Fee</th>
    <th>AS PER CAO 01-2001</th>
  </tr>
  <tr>
     <td>Documentation</td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
     <td>Customs Entry Form</td>
  <td>Php <?php echo number_format("500",2)?></td>
   
  </tr>
  <tr>
    <td>Processing Fee</td>
     <td>Php <?php echo number_format("2500",2)?></td>
  </tr>
  <tr>
     <td>*Succeeding container</td>
     <td>Php <?php echo number_format("1000",2)?>/container</td>
  </tr>
  <tr>
    <td>Handling Fee</td>
    <td>Php <?php echo number_format("500",2)?></td>
  </tr>
  <tr>
     <td>In Case:</td>
 <td></td>

  </tr>
  <tr>
    <td>No Import License</td>
  <td>Php <?php echo number_format("10000",2)?>/LCL</td>
  </tr>
  <tr>
   <td></td>
   <td>Php <?php echo number_format("7000",2)?>/AIR</td>

  </tr>
  <tr>
    <td></td>
     <td>Php <?php echo number_format("15000",2)?>/Contnr</td>

  </tr>
  <tr>
     <td>Trucking charges (Metro Manila)</td>
    <td></td>
  </tr>
  <tr>
    <td>LCL/FCL Shipment</td>
   <td></td>

   </tr>
   <tr>
    <td>a.)0001kgs-100kgs</td>
   <td>Php <?php echo number_format("1500",2)?>/trip</td>
   </tr>
   <tr>
    <td>b.)1,001kgs-1,500kgs</td>
   <td>Php <?php echo number_format("1800",2)?>/trip</td>
   </tr>
   <tr>
    <td>b.)1,501kgs-2000kgs</td>
   <td>Php <?php echo number_format("2200",2)?>/trip</td>
   </tr>
     <tr>
    <td>1x20'</td>
   <td>Php <?php echo number_format("18000",2)?>/trip</td>
   </tr>
   <tr>
    <td>1x40'</td>
   <td>Php <?php echo number_format("18000",2)?>/trip</td>
   </tr>
   <tr>
    <td>PLUS</td>
   <td>Other receipted expenses</td>
   </tr>
</table>  <br>

@endsection