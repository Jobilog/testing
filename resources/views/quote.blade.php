@extends('master')
@section('content')
<style type="text/css">
  body {
   background-image: url("assets/images/mapa2.jpg");
     background-repeat: no-repeat;
}
#cars {
 width:175px;  
 height: 45px; 
}
p{
  font-style: bold;
}
</style>
      <div class="section">
          <div class="quote-form">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
              <div class="heading "> <span>Request Quotation</span>
                <h3>quote form</h3>
              </div>
             <strong><p>SENDER'S FORM</p></strong> 
              <div class="quote-form-box "  ng-controller="RequestController">  
    <form ng-submit="submitForm()" name="requestForm" method="POST" role="form" action="{{url('/')}}" novalidate>
      <input type="hidden" name="_token" value="{{csrf_token()}}">
         <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 right-space">
                      <input id="name" class="quote-name" name="name" type="text" placeholder="Full Name*" value="{{old('name')}}" ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 left-space">
                      <input id="phone" class="quote-phone" name="address" type="text" placeholder="Address*" value="{{old('address')}}"  ng-model="formData.phone" />
                    </div>
                    <div class="col-xs-12 col-sm-4 right-space">
                      <input id="address" class="quote-mail" type="text" placeholder="Phone*" name="phone" value="{{old('phone')}}"ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>
                    </div>
                    <div class="col-xs-12 col-sm-4 left-space">
                      <input id="city" class="quote-city" type="text" placeholder="Company*"  name="company" value="{{old('company')}}" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                    </div><br><br><br><br><br><br><br><br>
                    <div class="col-xs-12 col-sm-3 right-space">
                      <input id="email" class="quote-service" type="text" placeholder="Email*"  name="email" value="{{old('email')}}" ng-model="formData.email" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>
                    </div>
                    <div class="col-xs-12 col-sm-3 left-space">
                      <input id="company" class="quote-subject" type="text" placeholder="City*"  name="city" value="{{old('city')}}" ng-model="formData.subject"  ng-class="{'error' : errorSubject}"/>
                    </div>
          <div class="col-xs-12 col-sm-3 quote-service" style="margin-left:-1.3em">
                      <select name="transaction" id="cars" class="quote-service" value="{{old('transaction')}}">
            <option value="">Transaction*</option>
             <option value="import">Import</option>
             <option value="export">Export</option>
             <option value="domestic">Domestic</option>
        
  </select>

                    </div>
</div>
<hr>
<!--for Shipment-->
 <strong><p>SHIPMENT DETAILS</p></strong>
        <div class="row">
    <div class="col-xs-12 col-sm-2 right-space"> 
        <select name="mode" id="cars" value="{{old('mode')}}" style="margin-left:-1em">
             <option value="">Mode of Transport*</option>
             <option value="air">Air</option>
             <option value="oceanlcl">Ocean (LCL)</option>
             <option value="oceanfcl">Ocean (FCL)</option>
              <option value="truck">Trucking</option>
  </select>
                    
                    </div>

           <div class="col-xs-12 col-sm-2 left-space">
      <select name="contype" id="cars" value="{{old('contype')}}"  style="margin-left:0.5em">
             <option value="">Container Type*</option>
             <option value="none">None</option>
             <option value="20">20 ft</option>
             <option value="40">40 ft</option>
  </select>
                    </div>  
      <div class="col-xs-12 col-sm-2 right-space">
      <input id="name" class="quote-name" name="weight" value="{{old('weight')}}" type="text" placeholder="Weight*"  ng-model="formData.name" ng-class="{'error' : errorName}"/>
        </div>
      <div class="col-xs-12 col-sm-2 left-space">
      <input id="phone" class="quote-phone" name="height" value="{{old('height')}}" type="text" placeholder="Height*"  ng-model="formData.phone" ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>
                    </div>

                    <br><br><br><br>
                    <div class="col-xs-12 col-sm-2 left-space">
                      <input id="city" class="quote-city" type="text" placeholder="Width*"  name="width" value="{{old('width')}}" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                    </div>

                    <div class="col-xs-12 col-sm-2 right-space">
                      <input id="email" class="quote-service" type="text" placeholder="Length*"  name="length" value="{{old('length')}}" ng-model="formData.email" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>
                    </div>
                    <div class="col-xs-12 col-sm-2 left-space" style="margin-left:0.5em">
                      <input id="company" class="quote-subject" type="text" placeholder="Quantity*"  name="quantity" value="{{old('quantity')}}" ng-model="formData.subject"  ng-class="{'error' : errorSubject}"/>
                    </div>
                      <div class="col-xs-12 col-sm-2 quote-service" style="margin-left:-1.2em">
                      <select name="commodity" value="{{old('commodity')}}" id="cars" class="quote-service">
              <option value="">Commodity*</option>
             <option value="phone">Phone</option>
             <option value="bag">Bag</option>
             <option value="furniture">Furniture</option>
              <option value="clothes">Clothes</option>
             <option value="shoes">Shoes</option>
             <option value="goods">Goods</option>
        
  </select>

                    </div>
                   </div>
      
<hr>
<!--for reciever-->
 <strong><p>CONSIGNEE'S FORM</p></strong>
        <div class="row">
                    <div class="col-xs-12 col-sm-5 right-space">
                      <input id="name" class="quote-name" name="con_name" type="text" placeholder="Full Name*" value="{{old('con_name')}}" ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    </div>

                    <div class="col-xs-12 col-sm-6 left-space">
                      <input id="address" class="quote-mail" type="text" placeholder="Address*" name="con_add" value="{{old('con_add')}}" />
                    </div>

                    <div class="col-xs-12 col-sm-2 right-space">
                      <input id="phone" class="quote-phone" name="con_phone" type="text" placeholder="Phone*" value="{{old('con_phone')}}" ng-model="formData.phone" ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>
                    </div>

                    <div class="col-xs-12 col-sm-2   left-space">
                      <input id="city" class="quote-city" type="text" placeholder="Country*"  name="con_country" value="{{old('con_country')}}" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                    </div>

                    <div class="col-xs-12 col-sm-3 right-space"  style="margin-left:-1.3em">
                      <input id="email" class="quote-service" type="text" placeholder="Email*"  name="con_email" ng-model="formData.email" value="{{old('con_email')}}" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>
                    </div>
       
                  </div>
                    <div class="col-xs-12">
                      <!--<input id="submit" class="comment-submit qoute-sub" type="submit"  value="submit">-->
                      <input type="submit"  name="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">
                    </div>        
                  </div>
                   <div class="error error-msg" ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" ng-disabled = "requestForm.$invalid"></div>
                </form>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>

@endsection