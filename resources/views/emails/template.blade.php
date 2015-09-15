<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width"/>
</head>
<body style="padding:0; margin: 0 ; ">
    <div style="width: 100%; padding:0; margin: 0 auto;font-family:Helvetica, sans-serif; color: #666666;" > 
            <div style="border: 0; border-bottom: 1px solid #e5e5e5; width: 100%;">
              <a  href="{{ env('MAIN_SERVER') }}" style="color: #666666;">
              <table width="100%" align="center" >
                <tr >
                  <td >
                    <img src="{{ env('MAIN_SERVER') }}images/email/logoEmails.png" width="40">
                  </td>
                  <td  style="text-align:right; vertical-align:middle;">
                    <div style="  font-size: 24px;">&#x2709; {{ env('MAIN_NAME') }} </div>
                    {{ trans('email.master.message1') }} 
                  </td>
                  
                </tr>
              </table>
              </a>
            </div>
            
          <table width="100%" align="center" >
            <tr>
              <td>@yield('content')</td>
            </tr>
          </table>
         <div style="width=100%; margin-top:20px;">
      
                <table style="width:250px;  float:left; font-size:80%; background: #F5F5F5; border-radius: 5px; padding:5px;">
                    <tr><td>
                        <h5>{{trans('email.master.contact_info')}}:</h5>
                    <p>{{trans('email.master.phone')}}: {{env('MAIN_PHONE')}}</p>
                    <p>{{trans('email.master.email')}}: <a style="color: #2196f3; text-decoration: none;" href="mailto:{{env('MAIN_EMAIL')}}">{{env('MAIN_EMAIL')}}</a></p>
                    <br>
                    </td></tr>
                </table>
                   


                <table style="width:250px;  float:left; font-size:80%; padding:5px; ">
                    <tr>
                        <td>
                          <h5>{{trans('email.master.follow_us')}}:</h5>

                  <a style="color: #ffffff; font-weight: bold; text-decoration: none;" href="{{env('FACEBOOK')}}"><p style="   
                              padding: 5px 0 1px; 
                              border-color: #2d4473; 
                              width: 150px !important;
                              text-align: center;
                              background: #3b5998;
                              border: 1px solid #2d4473;
                              
                  ">Facebook</p></a>
               
                  <a style="color: #ffffff; font-weight: bold; text-decoration: none;" href="{{env('TWITTER')}}"><p style="  
                              padding: 5px 0 1px; 
                              border-color: #2d4473; 
                              width: 150px !important;
                              text-align: center;
                              background: #00acee;
                              border:  1px solid #0087bb;
                              
                  ">Twitter</p></a>
               
                 <!--  <a href="{{env('GOOGLE')}}">Google +</a> -->  

                        </td>
                    </tr>
                </table>
         
        </div> 
                
        <table width="100%" align="center">
          <tr>
            <td >
                     <center>
                      <p style="text-align:center;">
                      <a style="color: #2196f3; text-decoration: none;" href="#">Terms</a> / 
                      <a style="color: #2196f3; text-decoration: none;" href="#">Privacy</a> / 
                      <a style="color: #2196f3; text-decoration: none;" href="#">Unsubscribe</a></p> 
                    </center>
            </td>
            </tr>        
                  
                <tr>
                    <td style="width:100%;font-size:11px;color:#cccccc; text-align:justify;">{{ trans('email.master.end_note') }}</td>
                </tr>
        </table>
    </div>    

</body>
</html>