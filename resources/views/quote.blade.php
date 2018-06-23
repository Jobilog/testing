@extends('master')
@section('content')
<style type="text/css">
  body {
   background-image: url("assets/images/mapa2.jpg");
     background-repeat: no-repeat;
}
#cars {
 width:150px;  
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
    <form ng-submit="submitForm()" name="requestForm" method="post" novalidate>
         <div class="success" ng-class="{'submissionMessage' : submission}" ng-bind="successsubmissionMessage" id="success"></div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 right-space">
                      <input id="name" class="quote-name" name="name" type="text" placeholder="Name*"  ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 left-space">
                      <input id="phone" class="quote-phone" name="phone" type="text" placeholder="Address*"  ng-model="formData.phone" ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>
                    </div>
                    <div class="col-xs-12 col-sm-4 right-space">
                      <input id="address" class="quote-mail" type="text" placeholder="Phone*" name="address" />
                    </div>
                    <div class="col-xs-12 col-sm-4 left-space">
                      <input id="city" class="quote-city" type="text" placeholder="Company*"  name="city" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                    </div><br><br><br><br><br><br><br><br>
                    <div class="col-xs-12 col-sm-3 right-space">
                      <input id="email" class="quote-service" type="text" placeholder="Email*"  name="email" ng-model="formData.email" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>
                    </div>
                    <div class="col-xs-12 col-sm-3 left-space">
                      <input id="company" class="quote-subject" type="text" placeholder="City*"  name="company" ng-model="formData.subject"  ng-class="{'error' : errorSubject}"/>
                    </div>
</div>
<hr>
<!--for reciever-->
 <strong><p>RECEIVER'S FORM</p></strong>
        <div class="row">
                    <div class="col-xs-12 col-sm-5 right-space">
                      <input id="name" class="quote-name" name="name" type="text" placeholder="Name*"  ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 left-space">
                      <input id="phone" class="quote-phone" name="phone" type="text" placeholder="Address*"  ng-model="formData.phone" ng-pattern="/^[(]{0,1}[0-9]{3}[)\.\- ]{0,1}[0-9]{3}[\.\- ]{0,1}[0-9]{4}$/" ng-class="{'error' : errorPhone}"/>
                    </div>

                    <div class="col-xs-12 col-sm-4 right-space">
                      <input id="address" class="quote-mail" type="text" placeholder="Phone*" name="address" />
                    </div>
                    <div class="col-xs-12 col-sm-4 left-space">
                      <input id="city" class="quote-city" type="text" placeholder="Company*"  name="city" ng-model="formData.city"  ng-class="{'error' : errorCity}"/>
                    </div>

                    <div class="col-xs-12 col-sm-3 right-space">
                      <input id="email" class="quote-service" type="text" placeholder="Email*"  name="email" ng-model="formData.email" ng-pattern = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/"  ng-class="{'error' : errorEmail}"/>
                    </div>
                    <div class="col-xs-12 col-sm-3 left-space">
                      <input id="company" class="quote-subject" type="text" placeholder="City*"  name="company" ng-model="formData.subject"  ng-class="{'error' : errorSubject}"/>
                    </div>
                    <div class="col-xs-6 col-sm-3 right-space">
                      <input id="zip" class="quote-service" type="text" placeholder="Zipcode*"  name="zip" />
                    </div>
                   
                    <div class="col-xs-12 col-sm-3 quote-service">
                      <select name="cars" id="cars" class="quote-service">
             <option value="volvo">Volvo</option>
             <option value="saab">Saab</option>
             <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
  </select>

                    </div>       
                  </div>
                    <div class="col-xs-12">
                      <!--<input id="submit" class="comment-submit qoute-sub" type="submit"  value="submit">-->
                      <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Submit </button>
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