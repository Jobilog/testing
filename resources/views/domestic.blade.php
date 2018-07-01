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
    width: 45%;
}

#customers td {
    border: 1px solid #ddd;
    padding: 5px;
    font-size: 15px;
    font-weight: 900;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    font-size: 15px;
    font-weight: 900;
    padding-top: 12px;
    padding-bottom: 9px;
    text-align: left;
    background-color: rgb(49, 69, 85);
    color: white;
}
</style>
<center><h3>Domestic Rates</h3></center>
<table id="customers" style="float:left;">
  <tr>
    <th>Land Shipment</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>Destination</td>
    <td>Min. 1-25Kg</td>
    <td>Excess to 25Kg
     (excess per kilo)</td>
  </tr>
  <tr>
     <td>MetroManila</td>
    <td>Php <?php echo number_format("20",2)?></td>
   <td>Php <?php echo number_format("7.50",2)?></td>
  </tr>
  <tr>
     <td>San Pablo/Angeles
     /Bulacan/Rizal</td>
  <td>Php <?php echo number_format("650",2)?></td>
  <td>Php <?php echo number_format("8.50",2)?></td>
  </tr>
  <tr>
    <td>Cabanatuan/Tarlac/Cavite
    Olongapo/Batangas/Los Banos
  /Pampanga</td>
     <td>Php <?php echo number_format("750",2)?></td>
     <td>Php <?php echo number_format("8.50",2)?></td>
  </tr>
  <tr>
     <td>Dagupan/La Union
     Pangasinan/Baguio</td>
     <td>Php <?php echo number_format("800",2)?></td>
     <td>Php <?php echo number_format("9.50",2)?></td>
  </tr>
  <tr>
    <td>Cauayan/Naga/Quezon</td>
    <td>Php <?php echo number_format("850",2)?></td>
    <td>Php <?php echo number_format("10",2)?></td>
  </tr>
  <tr>
     <td>Calapan/Mindoro</td>
 <td>Php <?php echo number_format("1850",2)?></td>
 <td>Php <?php echo number_format("11.50",2)?></td>

  </tr>
  <tr>
    <td>San Nicolas/Laog
    /Legaspi/Tuguegarao
  /Ilocos/Isabela</td>
  <td>Php <?php echo number_format("1850",2)?></td>
  <td>Php <?php echo number_format("12.50",2)?></td>

  </tr>
  <tr>
    <td>VAT</td>
     <td>12%</td>
     <td></td>
  </tr>
  
</table>

<table id="customers" style="float:left;" >
  <tr>
    <th>Air Shipment</th>
    <th></th>

   
  </tr>
  <tr>
    <td>a.) Freight AIF, MYC Insurance and Valuation Charge-as per PAL's Standard Rate</td>
    <td></td>
    
   
  </tr>
  <tr>
     <td>b.) Cartage Fee</td>
     <td></td>
  </tr>
  <tr>
   <td>Min. 1-10kg</td>
  <td>Php <?php echo number_format("20",2)?></td>
 </tr>
  <tr>
     <td>per kg in excess</td>
     <td>Php <?php echo number_format("3.50",2)?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
  </tr>
  <tr>
     <td>c.) Delivery Fee</td>
 <td></td>
  </tr>
  <tr>
    <td>Min. 1-10kg</td>
  <td>Php <?php echo number_format("19",2)?></td>
  </tr>
  <tr>
     <td>per kg in excess</td>
     <td>Php <?php echo number_format("3.50",2)?></td>
  </tr>
 
</table>

<table id="customers" style="float:left;" >

  <tr>
    <th>Boat Shipment</th>
    <th></th>
    <th></th>
   
  </tr>
  <tr>
     <td>a.) per CBM</td>
     <td>Visayas Area</td>
    <td>Php <?php echo number_format("2300",2)?></td>
   
  </tr>
  <tr>
     <td></td>
     <td>Mindanao Area</td>
  <td>Php <?php echo number_format("2900",2)?></td>
  </tr>
  <tr>
    <td></td>
     <td></td>
     <td></td>
  </tr>
  <tr>
     <td>b.) Special Rate per Kg</td>
     <td>Visayas Area</td>
     <td>Php <?php echo number_format("8",2)?></td>
  </tr>
  <tr>
    <td></td>
     <td>Mindanao Area</td>
  <td>Php <?php echo number_format("9",2)?></td>
  
  </tr>
  <tr>
     <td>c.) Additional Charges:</td>
 <td></td> <td></td>
  </tr>
  <tr>
    <td></td>
    <td>Pick Up</td>
  <td>Php <?php echo number_format("2",2)?>/Kg</td>
  </tr>
   <tr>
    <td></td>
    <td>Handling</td>
  <td>Php <?php echo number_format("2",2)?>/Kg</td>
  </tr>
   <tr>
    <td></td>
    <td>VAT</td>
  <td>12%</td>
  </tr>
  
</table>


@endsection