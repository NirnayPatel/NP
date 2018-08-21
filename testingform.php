
<?
   $title = "Perfect Tense - Live Editor";
   $page = 'live-editor';
$base = "https://www.perfecttense.com/";
?>
<!DOCTYPE html>
<html lang="en" style="height: 100% width: 100%">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grammar correction. Automated. Perfect Tense gives you error-free content in seconds.">

    <title><? echo $title; ?></title>

    <!--  favicon -->
    <link rel="shortcut icon" href="<? echo $base; ?>assets/img/ico/favicon.png">
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<? echo $base; ?>assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<? echo $base; ?>assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<? echo $base; ?>assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<? echo $base; ?>assets/img/ico/apple-touch-icon-57-precomposed.png">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="<? echo $base; ?>assets/fonts/iconfont/material-icons.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<? echo $base; ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="<? echo $base; ?>assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<? echo $base; ?>assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="<? echo $base; ?>assets/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- materialize -->
    <link href="<? echo $base; ?>assets/materialize/css/materialize.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<? echo $base; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- shortcodes -->
    <link href="<? echo $base; ?>assets/css/shortcodes/shortcodes.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<? echo $base; ?>style2.css" rel="stylesheet">
    <!-- Jot Form -->
   <link href='https://cdn.jotfor.ms/static/formCss.css?3.3.7290' rel="stylesheet" type="text/css" />
   <link type="text/css" rel="stylesheet" href='https://cdn.jotfor.ms/css/styles/nova.css?3.3.7290' />
   <link type="text/css" media="print" rel="stylesheet" href='https://cdn.jotfor.ms/css/printForm.css?3.3.7290' />
   <link type="text/css" rel="stylesheet" href='https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?'/>
    <?
    if($page == 'home' && $canonical !== false)
    {
        echo '<link rel="canonical" href="https://www.perfecttense.com">';
    }
    ?>

<!--SCRIPTS -->
   <script type="text/javascript">
function setPreview() {
    $('#form1').attr('target','_blank')
    $('#form1').attr('action','live-editor.php')
    $('#form1').submit()
}

function setSubmit() {
    $('#form1').attr('target','')
    $('#form1').attr('action','https://www.perfecttense.com/developers')
    $('#form1').submit()
}
</script>

</head>
    </header>

     //Was everything filled out on website modal form?
  if($_POST['email'] != '' || $_POST['fname'] != '' || $_POST['lname'] != '' || $_POST['company'] != '' || $_POST['message'] != '')
  {
      if(!$_POST['email'] != '' || !$_POST['fname'] != '' || !$_POST['lname'] != '' || !$_POST['company'] != '' || !$_POST['message'] != '')
      {
          $alert_type = 'danger';
          $message = 'You have left some fields empty. Please enter your name, email, subject, and message, and submit your ticket again!';
      }
      else
      { 
          $alert_type = 'success';
          $message = 'Thank you for your contacting us! We have received your message and we will get back to you as soon as possible.';

          unset($_POST);
      
      }
      $icon['danger'] = 'times-circle';
      $icon['success'] = 'thumbs-o-up';
      $message_display = '
      <div class="row">
      <div class="col-md-10 col-md-offset-1">
      <div class="alert '.$alert_type.'-icon icon" role="alert" style="background-color: white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <i class="fa fa-lg fa-'.$icon[$alert_type].'"></i> '.$message.'
                </div><br/>';
  }

   ?>

<body id="top" class="has-header-search" data-spy="scroll" data-target="#materialize-menu" data-offset="100" style="height: 100% width:100% min-height: 100%">
   <style>
      .row-equal-height {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      }
      .row-equal-height > [class*='col-'] > [class*='flat-border-box'] {
      display: flex;
      flex-direction: column;
      min-height: 100%;
      padding-bottom: 0px;
      margin-bottom: 30px;
      }
      .row-equal-height > [class*='col-'] > [class*='border-box'] {
      display: flex;
      flex-direction: column;
      min-height: 100%;
      padding-bottom: 0px;
      margin-bottom: 30px;
      }
      .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      max-height: 100% !important;
      max-width: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.7);
      }
      .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
      }
      .website_close, .browser_close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }
      .browser_close:hover, .website_close:hover,
      .browser.close:focus .website_close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
      }
      }
   </style>

   <section id="home" class="home-section pink-bg" style="max-height: 100vh; padding: 0vh 0 30vh 0; background-size: cover; margin: auto; background-image: url(https://preview.ibb.co/dWgZGU/5kby5k.png)">
      <img src="https://preview.ibb.co/i07UWU/pt_logo.png" href="www.perfecttense.com" style="height: 10vh; padding-left: 20px; padding-top: 15px;">
      <div class="container" style="padding-top: 6vh;">
      <div class="row text-center">
      <div id="inquiry" style="padding-bottom: 50px;">
      <? echo $message_display; ?>
         <div class="col-md-12 headline" style="color: #1A3D42">
            <h1 style="font-weight: 900; font-size: 45px; color: white;">Intelligent Spelling and Grammar Correction, Anywhere.</h1>
         </div>
         <div class="col-md-10 col-md-offset-1" style="color: white; font-size: 21px;">
            <p>Perfect Tense is smarter than the average spell checker. Our algorithms understand the context and meaning of text to properly identify and fix thousands of errors.</p>
         </div>
         <div class="col-md-12" data-toggle="modal" data-target="#video_modal" align="center">
            <div class="video_modal" style="max-width: 700px;">
               <video id="pt_video" width="100%" loop muted playsinline>
                  <source src="https://dl.dropboxusercontent.com/s/v2xi40vf8hrzsf6/PT%20Live%20GIF.mp4?dl=0" type="video/mp4">
               </video>
            </div>
         </div>
         </ul>
      </div>
   </div>
      <div class="col-md-10 col-md-offset-1" style="color: white; font-size: 25px; padding-top: 6vh;">
         <center>
            <p style="font-size: 30px; margin-bottom: 50px;">Perfect Tense works where you are:</p>
         </center>
      </div>
      <div class="" style="padding-bottom: 10px;">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <center>
               <button id="browserBtn" class="featured-item flat-border-box" style="background-color: white; padding-top: 2vh; padding-bottom: 20px; border-radius: 10px; width: 100%; max-width: 400px;">
                  <div class="desc">
                     <h2 style="margin-bottom: 0px; font-size: 25px; text-align: center; color: #009FDA; font-weight: 600;">Add to your browser (free)</h2>
                  </div>
               </button>
               </center>
            </div>
            <!--Modal-->
            <div id="browserModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                  <span class="browser_close">&times;</span>
                  <h2 style="padding-top: 30px; padding-left: 20px; padding-right: 20px;" align="center">We are adding the finishing touches to our browser extensions, enter your email below to be notified when we release!</h2>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-1 col-lg-offset-1.5 col-lg-8">
                        <form class="jotform-form" action="https://submit.jotform.co/submit/82275229384867/" method="post" name="form_82275229384867" id="82275229384867" accept-charset="utf-8" style="padding: 0px 0px 0px 0px;">
                           <input type="hidden" name="formID" value="82275229384867" /> 
                           <div class="form-all">
                              <ul class="form-section page-section">
                                 <li class="form-line always-hidden jf-required" data-type="control_widget" id="id_3">
                                    <div id="cid_3" class=" always-hidden jf-required">
                                       <div style="width:100%;text-align:left" data-component="widget-directEmbed">
                                          <div class="direct-embed-widgets " data-type="direct-embed" style="width:50px;height:50px">
                                             <input type="hidden" id="input_3" name="q3_typeA" class="form-hidden getUserAgent"> 
                                             <script type="text/javascript" src="//widgets.jotform.io/getUserAgent/main.js"></script> 
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="form-line" data-type="control_email" id="id_4">
                                    <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4" style="font-size: 14px;">Email </label> 
                                    <div id="cid_4" class="form-input-wide">
                                       <span class="form-sub-label-container" style="vertical-align:top">
                                          <input type="email" placeholder="example@example.com" id="input_4" name="q4_email" class="validate[Email]" size="80" value="" data-component="email" /> 
                                          <!--<label class="form-sub-label" for="input_4" style="min-height:13px"> example@example.com </label>-->
                                       </span>
                                    </div>
                                 </li>
                                 <li class="form-line" data-type="control_button" id="id_5" style="margin-top: 0px; margin-bottom: 0px;">
                                    <div id="cid_5" class="form-input-wide" align="center">
                                       <div style="margin-left:0px" class="form-buttons-wrapper"> 
                                          <button id="input_5" type="submit" class="waves-effect waves-light btn submit-button pink mt-30" data-component="button" style="margin-top: 0px;"> Submit </button> 
                                       </div>
                                    </div>
                                 </li>
                                 <li style="display:none"> Should be Empty: 
                                    <input type="text" name="website" value="" /> 
                                 </li>
                              </ul>
                           </div>
                           <script>JotForm.showJotFormPowered = "0";</script>
                           <input type="hidden" id="simple_spc" name="simple_spc" value="82275229384867" />
                           <script type="text/javascript">document.getElementById("si" + "mple" + "_spc").value = "82275229384867-82275229384867";</script>
                           <script src="https://cdn.jotfor.ms/js/widgetResizer.js?REV=3.3.7314" type="text/javascript"></script>
                           <input type="hidden" id="input_8" name="q8_typeA8" class="form-hidden" value="" data-component="hidden" />
                        </form>
                     </div>
                     <!-- /.col-md-8 -->
                  </div>
               </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-lg-6 col-md-6 col-sm-6">
               <center>
               <button id= "websiteBtn" class="featured-item flat-border-box" style="background-color: white; padding-top: 2vh; padding-bottom: 20px; border-radius: 10px; width: 100%; max-width: 400px;">
                  <div class="desc">
                     <h2 style="margin-bottom: 0px; font-size: 25px; text-align: center; color: #009FDA; font-weight: 600;">Add to your website (free)</h2>
                  </div>
               </button>
               </center>
            </div>
            <!--Modal-->
            <div id="websiteModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                  <span class="website_close">&times;</span>
                  <h2 style="padding-top: 30px; padding-left: 20px; padding-right: 20px;" align="center">Adding Perfect Tense to your website is as simple as adding a css class to your code. <br> Fill out the form to get started!</h2>
                  <center>
                     <ul>
                        <li>- Make your site content higher-quality</li>
                        <li>- Help your users improve their grammar</li>
                        <li>- Prevent low-quality submissions </li>
                     </ul>
                  </center>
          <div class="row">
              <div class="col-md-12" style="padding-left: 30px; padding-right: 30px;">
                  <form id="form1" method="post" action="">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-field">
                          <input type="text" name="fname" class="validate" id="fname" value="<? echo strip_tags($_POST['fname']); ?>">
                          <label for="name" class="">First Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-field">
                          <input type="text" name="lname" class="validate" id="lname" value="<? echo strip_tags($_POST['lname']); ?>">
                          <label for="name" class="">Last Name</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="input-field">
                          <label class="sr-only" for="email">Email</label>
                          <input id="email" type="email" name="email" class="validate" value="<? echo strip_tags($_POST['email']); ?>">
                          <label for="email" data-error="wrong" data-success="right" class="">Email</label>
                        </div>

                      </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                      <div class="input-field">
                          <input type="text" name="company" class="validate" id="company" value="<? echo strip_tags($_POST['company']); ?>">

                          <label for="name" class="">Company</label>
                        </div>
                      </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                      <!-- /.col-md-6 -->
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-field">
                          <textarea name="message" id="message" class="materialize-textarea" style="z-index: auto; position: relative; line-height: 29px; font-size: 14px; transition: none; background: transparent !important; height: 29px;"><? echo strip_tags($_POST['message']); ?></textarea>
                          <label for="message" class="">How would you like to use Perfect Tense?</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Submit</button>
                  </form>
              </div><!-- /.col-md-8 -->
          </div><!-- /.row -->
                     <!-- /.col-md-8 -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Scripts -->
<script type="text/javascript">JotForm.ownerView=true;</script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.7314" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.7314" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1534880417559" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1534438273489","field":"4","visibility":"Require","isError":false}],"id":"1534438284218","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1534438273489","field":"4","operator":"isEmpty","value":"","isError":false}],"type":"require"}]);
   JotForm.init(function(){
      JotForm.populateBrowserInfo('input_8');
      setTimeout(function() {
          $('input_4').hint('example@example.com');
       }, 20);
      JotForm.highlightInputs = false;
      JotForm.alterTexts(undefined);
   JotForm.clearFieldOnHide="disable";
   JotForm.submitError="jumpToFirstError";
    /*INIT-END*/
   });
   
   JotForm.prepareCalculationsOnTheFly([null,null,null,{"name":"typeA","qid":"3","text":"User Agent String","type":"control_widget"},{"description":"","name":"email","qid":"4","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"submit","qid":"5","text":"Submit","type":"control_button"},null,{"name":"typeA8","qid":"8","text":"User browser Info","type":"control_hidden"}]);
   setTimeout(function() {
   JotForm.paymentExtrasOnTheFly([null,null,null,{"name":"typeA","qid":"3","text":"User Agent String","type":"control_widget"},{"description":"","name":"email","qid":"4","subLabel":"example@example.com","text":"Email","type":"control_email"},{"name":"submit","qid":"5","text":"Submit","type":"control_button"},null,{"name":"typeA8","qid":"8","text":"User browser Info","type":"control_hidden"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.7314" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.7314" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.7314" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>

   <script>
      var browser_modal = document.getElementById('browserModal');
      var browser_btn = document.getElementById("browserBtn");
      var browser_span = document.getElementsByClassName("browser_close")[0];
      browser_btn.onclick = function() {
          browser_modal.style.display = "block";
      }
      browser_span.onclick = function() {
          browser_modal.style.display = "none";
      }
      window.onclick = function(event) {
          if (event.target == browser_modal) {
              browser_modal.style.display = "none";
          }
      }
   </script>
   <script>
      var website_modal = document.getElementById('websiteModal');
      var website_btn = document.getElementById("websiteBtn");
      var website_span = document.getElementsByClassName("website_close")[0];
      website_btn.onclick = function() {
          website_modal.style.display = "block";
      }
      website_span.onclick = function() {
          website_modal.style.display = "none";
      }
      window.onclick = function(event) {
          if (event.target == website_modal) {
              website_modal.style.display = "none";
          }
      }
   </script>
   <script type="text/javascript">
      setTimeout(function() {
          document.getElementById("pt_video").play();
      }, 3000);
   </script>
   <script>
      var parsed_qs = '';
      var banner = '';
      if (parsed_qs) {
          var myDate = new Date();
          myDate.setDate(myDate.getDate() + 90);
          document.cookie = "ref=" + parsed_qs + ";expires=" + myDate + ";domain=.perfecttense.com;path=/";
          if (banner) {
              document.cookie = "banner=" + banner + ";expires=" + myDate + ";domain=.perfecttense.com;path=/";
          }
          record_click(parsed_qs, banner);
      }
      
      function record_click(ref, banner) {
          const payload = {
              ref: ref,
              banner: banner
          };
          axios.post('https://backend.perfecttense.com/aff_click', payload)
              .then(res => {
                  console.log('record aff click');
              })
              .catch(res => {
                  console.log('error record click');
              });
      }
   </script>
   <!-- Preloader -->
   <div id="preloader">
      <div class="preloader-position">
         <img src="https://www.perfecttense.com/assets/img/logo.png" style="height:100px;" alt="logo">
         <div class="progress">
            <div class="indeterminate"></div>
         </div>
      </div>
   </div>
   <!-- End Preloader -->
   <!-- jQuery -->
   <script src="https://www.perfecttense.com/assets/js/jquery-2.1.3.min.js"></script>
   <script src="https://www.perfecttense.com/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://www.perfecttense.com/assets/materialize/js/materialize.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/jquery.easing.min.js"></script>
   <!--<script src="https://www.perfecttense.com/assets/js/smoothscroll.min.js"></script>-->
   <script src="https://www.perfecttense.com/assets/js/menuzord.js"></script>
   <script src="https://www.perfecttense.com/assets/js/bootstrap-tabcollapse.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/jquery.inview.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/jquery.countTo.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/imagesloaded.js"></script>
   <script src="https://www.perfecttense.com/assets/js/jquery.shuffle.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/jquery.stellar.min.js"></script>
   <script src="https://www.perfecttense.com/assets/magnific-popup/jquery.magnific-popup.min.js"></script>
   <script src="https://www.perfecttense.com/assets/owl.carousel/owl.carousel.min.js"></script>
   <script src="https://www.perfecttense.com/assets/js/scripts.js"></script>
</body>
</html>
