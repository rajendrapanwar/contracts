<?php

// email credentials
function getEmailSmtpCredentials(){
    return array(
        'smtp_hostname'=>'smtp.gmail.com',
        'smtp_username'=>'anjali.mascot44@gmail.com',
        'smtp_password'=>'ouajcifenzysoiiq',
        'smtp_email_from'=>'anjali.mascot44@gmail.com',
        'smtp_name'=>'Test Project',
    );
}


// send email
function sendEmail($email,$subject,$content) {
    $to = $email;
    $credentials = getEmailSmtpCredentials();

    $mail = new PHPMailer();
    $mail->setLanguage('en', '');
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 2525;
    $mail->Host = $credentials['smtp_hostname'];
    $mail->Username = $credentials['smtp_username'];
    $mail->Password = $credentials['smtp_password'];

    $mail->IsHTML(true);

    $mail->AddAddress($to, $to);
    $mail->SetFrom($credentials['smtp_email_from'],$credentials['name']);
    $mail->Subject = $subject;

    $mail->MsgHTML($content);
    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}


// email template
function getEmailTemplate($title,$content){
$template='<!DOCTYPE html>
<html lang="fr" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <title>'.$title.'</title>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
 
    <style>
      * {
      font-family:Arial, sans-serif !important;
      }
    </style>
    <![endif]-->
    <style>
      /* latin */
      @font-face {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecg.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }
      :root {
      color-scheme: light;
      supported-color-schemes: light;
      }
      html,
      body {
      margin: 0 auto !important;
      padding: 0 !important;
      height: 100% !important;
      width: 100% !important;
      }
      /* center email on Android 4.4 - margin reset */
      div[style*="margin: 16px 0"] {
      margin: 0 !important;
      }
      #MessageViewBody, #MessageWebViewDiv{
      width: 100% !important;
      }
      table,
      td {
      mso-table-lspace: 0pt !important;
      mso-table-rspace: 0pt !important;
      }
      table {
      border-spacing: 0 !important;
      border-collapse: collapse !important;
      table-layout: fixed !important;
      margin: 0 auto !important;
      mso-table-lspace: 0;
      mso-table-rspace: 0;
      }
      /*La poste hack*/
      h2,
      h3 {
      padding: 0;
      margin: 0;
      border: 0;
      background: none;
      }
    </style>
   
      <style type="text/css">
      a {
      text-decoration: none;
      }
      </style>
      <![endif]-->
      <style>
      /* Fix for Outlook links color fix for links and visited links */
      span.MsoHyperlink {
      color: inherit !important;
      mso-style-priority: 99 !important;
      }
      span.MsoHyperlinkFollowed {
      color: inherit !important;
      mso-style-priority: 99 !important;
      }
      /*  Apple Mail / iOS Mail apps */
      a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
      }
      [x-apple-data-detectors-type="calendar-event"] {
      color: inherit !important;
      -webkit-text-decoration-color: inherit !important;
      text-decoration: none !important;
      }
      /*Gmail*/
      u+.body a {
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      font-weight: inherit;
      line-height: inherit;
      }
      /*Samsung Mail*/
      #MessageViewBody a {
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      font-family: inherit;
      font-weight: inherit;
      line-height: inherit;
      }
      </style>
      <style>
      .btn-td,
      .btn-a {
      transition: all 100ms ease-in;
      }
      .btn-td-primary:hover,
      .btn-a-primary:hover {
      background: #414A8B !important;
      border-color: #414A8B !important;
      }
      .btn-td-white:hover,
      .btn-a-white:hover {
      background: #F7F7F7 !important;
      color: #525ca3 !important;
      border-color: #F7F7F7 !important;
      }
      .m-content {
      display: none !important;
      max-height: none !important;
      mso-hide: all !important;
      height: 0 !important;
      }
      </style>
      <style>
      @media screen and (max-width: 680px) {
      .cc-column,
      .cc-column-center {
      display: block !important;
      width: 100% !important;
      max-width: 100% !important;
      direction: ltr !important;
      }
      .cc-column table {
      height: auto !important;
      }
      .cc-column img {
      max-width: 100% !important;
      }
      .cc-column-center {
      text-align: center !important;
      }
      .d-content {
      display: none !important;
      height: 0 !important;
      }
      .m-content {
      display: block !important;
      width: auto !important;
      max-height: none !important;
      overflow: visible !important;
      height: 100% !important;
      }
      .cc-on-narrow {
      text-align: center !important;
      display: block !important;
      margin-left: auto !important;
      margin-right: auto !important;
      float: none !important;
      }
      table.cc-on-narrow {
      display: inline-block !important;
      }
      /*SPECIFIC CSS: END*/
      }
      </style>
      <style>
      .cc-half {
      width: 100% !important;
      max-width: 330px !important;
      }
      .cc-third {
      width: 100% !important;
      max-width: 220px !important;
      }
      .cc-two-third {
      width: 100% !important;
      max-width: 440px !important;
      }
      .cc-fourth {
      width: 100% !important;
      max-width: 25% !important;
      }
      @media screen and (max-width:680px) {
      .cc-half,
      .cc-third,
      .cc-two-third,
      .cc-fourth {
      width: 100% !important;
      max-width: 680px !important;
      }
      .btn{
      font-size:18px !important;
      }
      .p-0-10-50{
      padding: 0 10px 50px !important;
      }
      .p-0-10-45{
      padding: 0 10px 45px !important;
      }
      .p-10{
      padding:10px !important;
      }
      .p-15-10{
      padding: 15px 10px !important;
      }
      .p-25-10{
      padding: 25px 10px !important;
      }
      .p-0-10{
      padding:0 10px !important;
      }
      .text-incline{
      max-width:80% !important;
      max-height:17px !important;
      }
      .bg-header{
      width:100% !important;
      }
      .separator{
        height:50px !important;
        line-height:50px !important;
      }
      }
      </style>
    <style type="text/css">
      li {margin-left:-23px !important}
    </style>
    <style>
      .text-incline{
      max-height:22px;
      position:relative;
      opacity:0.999;
      }
    </style>
  </head>
  <body style="margin: 0; padding: 0 !important;background-color: #F2F2F2;">
    <center role="article" aria-roledescription="email" aria-label="email name" lang="fr" dir="ltr" style="width: 100%;background-color: #F2F2F2;">
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F2F2F2;">
        <tr>
          <td>
            <![endif]-->
            <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family:Arial,sans-serif;" aria-hidden="true">
              Economisez jusqu"à 50% sur votre assurance emprunteur
            </div>
            <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;&#847;&zwnj;&nbsp;
            </div>
            <div style="max-width: 680px; margin: 0 auto;" class="email-container">
             
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" role="presentation">
                <tr>
                  <td align="center" valign="top">
                   
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;overflow:hidden">
                      
                      <tr>
                        <td align="center" style="background-color:#ffffff">
                          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                            <a  href="https://9bum8kt7plw.typeform.com/to/KEIwZaXP?utm_source=email&utm_medium=email&utm_campaign=emailing-assurance-emprunteur-pc&utm_id=assurance-emprunteur" style="font-family:Arial,sans-serif; font-size:20px; mso-line-height-rule: exactly;line-height: 20px; text-decoration: none; color: #000000;margin:0;display:block" alt="Economisez jusqu"à 50% sur votre assurance emprunteur. Faites votre simulation avec un conseiller">
                            <img src="'.base_url('assets/img/common/breadcrumb-bg.png').'" alt="" border="0" width="100%" height="281" style="border: 0; display: block; width: 100%;max-width:680px; height: auto" /></a>
                          </table>
                        </td>
                      </tr>
                     
                      <tr>
                        <td align="center" style="background-color:#ffffff;">
                         
                          <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                              <td valign="top" align="center">
                               
                                <div class="text-incline">
                                  <h3 style="width: 60%;background: #13544e;color: #fff;position: relative;top: 4px;font-size: 25px;padding: 5px;">'.$title.'</h3>
                                </div>
                               
                                <v:image src="https://www.yuyazz.com/email/privilege-courtage/texte-incline.png" style="position:relative;mso-position-horizontal:center;top:-22px;width:457px; height:44px;margin:0 auto" filled="false" />
                                <![endif]-->
                              </td>
                            </tr>
                          </table>
                          <![endif]-->
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffffff;padding:0 45px 50px;" class="p-0-10-50">
                          <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                              <td valign="top" align="center">
                                <![endif]-->
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                  <tr>
                                    <td align="center" style="border:1px solid #22be0d;padding:35px 20px">
                                      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                        <tr>
                                          <td style="font-family:"Poppins",Arial,sans-serif; font-size:14px; mso-line-height-rule: exactly;line-height: 1.5;padding-bottom:30px;color:#000000;text-align:center">
                                            <div style="margin:0">'.$content.'</div>
                                          </td>
                                        </tr>
                                        
                                        
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              
                              </td>
                            </tr>
                          </table>
                          <![endif]-->
                        </td>
                      </tr>
                     
                     
                      <tr>
                        <td style="background-color:#ffffff;padding:15px 20px" class="p-15-10">
                          <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                              <td valign="top" align="center">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                  <tr>
                                    <td align="center">
                                      <img src="https://www.yuyazz.com/email/privilege-courtage/logo-small.png" alt="Privilège courtage : le financement sur mesure" width="300" height="" style="width:100%;max-width:300px; height:auto ; display:block;border:0;margin:0 auto">
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffffff;padding:0 45px 0px;" class="p-25-10">
                          <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                              <td valign="top" align="center">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                  <tr>
                                    <td style="font-size:12px; mso-line-height-rule: exactly;line-height: 1.5;padding:20px 0px 0px 0px;color:#000000;text-align:justify;font-family:"Poppins",Arial,sans-serif; ">
                                      <p style="margin:0 0 0px">A freelancer website is a digital platform that connects independent professionals with clients seeking their services. It allows freelancers to showcase their skills, bid on projects, and secure work in various fields like writing, design, programming, and more. Clients can easily find, hire, and collaborate with skilled freelancers globally, streamlining the process of project outsourcing.</a></p>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffffff;padding:0 45px 0px;" class="p-25-10">
                          <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                              <td valign="top" align="center">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                  <tr>
                                    <td style="font-size:12px; mso-line-height-rule: exactly;line-height: 1.5;padding:20px 0px 20px 0px;color:#000000;text-align:justify;">
                                      <div style="display:flex;justify-content:center;background-color:#13544e;">
                                        <a href="#" style="padding:10px;color:#fff;">Home</a>
                                        <a href="#" style="padding:10px;color:#fff;">About</a>
                                        <a href="#" style="padding:10px;color:#fff;">Contact</a>
                                        <a href="#" style="padding:10px;color:#fff;">Login</a>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                     
                    </table>
                    
                  </td>
                </tr>
              </table>
              
            </div>
          
          </td>
        </tr>
      </table>
      
    </center>
  </body>
</html>';

return $template;
}

?>