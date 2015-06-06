<form id = 'my_booking' action = 'index.php/booking/save_booking/<?php echo $movies[0]['id'];?>' method = 'post'>
<div class = "container" style = 'width:600px!important' >
 <center>
	<div class="thumbnail">
	  <img src="assets/img/<?php echo $movies[0]['pic'];?>" alt="" width='170px'>
	  <h3><b><?php echo $movies[0]['name_en'];?></b></h3>
	  <p><b><?php echo $movies[0]['name_th'];?></b></p>
      <p><b><?php echo $movies[0]['price'];?> บาท</b></p>
	</div>
  <button style = 'width:100%!important'type="button" class="btn btn-default btn-round-lg btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน้าจอ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
   <br/>
   <center id = 'box1'>
 <?php 
 $char="A";
 $j = 0;
 for($i = 1 ; $i <= 40 ;$i ++){  
 $j++;
  if($i%8==1)
  {
 	echo "<br/><h6><b>Zone : ".$char."</b></h6>";
  }
  $data_check =  $char.$j;
    if ( in_array($char.$j,$check) )
    {
      $chcek = 'checked';
      $dis = 'disabled';
    }
    else
    {
      $chcek = '';
      $dis = '';
    }
 ?>
	<span class="button-checkbox">
	    <button type="button" <?php echo $dis; ?> class="btn" data-color="primary"><?php echo $j;?></button>
	    <input type="checkbox" id = 'room' name = 'room[]' value = '<?php echo $char.$j ;?>' <?php echo $dis; ?> <?php echo $chcek;?>  class="hidden" />
	</span>
 <?php 
  if($i%8==0)
  {
 	$j=0;
 	$char++;
  }
} ?><br/><br/>
      <input type = 'button' class="btn btn-primary btn-round-lg btn-lg" id = 'btn_book' value= 'จอง'/>
      <a class="btn btn-default btn-round-lg btn-lg" href = 'index.php/main'>ยกเลิก</a>
    <br/><br/>
</div>
 <br>

<div class="container" id = 'box2'>
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <div class='col-md-12 form-group'>
  <div class="form-row">        <h1>จ่ายเงิน</h1>
          <hr class="featurette-divider"></hr>
          <p>NOTE: คุณต้องจ่ายเงินก่อนจึงจะสามารถสำรองที่นั่งได้ ขอบคุณค่ะ.</p>
        <hr class="featurette-divider"></hr></div>
    </div>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <br>
          <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input name = 'name1' class='form-control' size='4' type='text'>
              </div>
                    
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                  <label class='control-label'>Card Number</label>
                <input name = 'name2' autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
             <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Billing Address</label>
                <input name = 'name3' autocomplete='off' class='form-control' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input name = 'name4' autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input name = 'name5'  class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input name = 'name6' class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <input type = 'hidden' id = 'name7' name = 'name7'/>
           
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                         <hr class="featurette-divider"></hr>
                      
              <div class='error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
              
              </div>
            </div>
           <div class="jumbotron jumbotron-flat">
           <div class="center"><small><b>Your total today:</b></small></div>
           <div class="paymentAmt">$100</div>
              </div>
                <button class='form-control btn btn-primary submit-button' type='submit'> ยืนยันการจ่ายเงินและสำรองที่นั่ง »</button>
                <a class='form-control btn btn-default submit-button' href = 'index.php/main'>ยกเลิก</a>
              </div>
            </div>
            
            
          </form>
        </div>   </div>
        
        <div class='col-md-4'></div>
    </div>
</div>
</div>
<br>
</form>
</center>
<div class = 'container'>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#box2").hide();
        $("#btn_book").click(function(){
            $("#box1").hide(200); 
            $("#box2").show(200);   
            var numberOfChecked = $('input:checkbox:checked').length;
            var mon  = '<?php echo $movies[0]['price'];?>';
            var amount = (  mon * numberOfChecked);
            $("#name7").val(mon);
            $(".paymentAmt").text(amount+"฿");
        });
    });
</script>
<script>
$(function () {

    $(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#payment-form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
      $form.get(0).submit();
    }
  }
})
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>
<style>
/* Global */
 
.jumbotron-flat {
  background-color: solid #4DB8FFF;
  height: 100%;
  border: 1px solid #4DB8FF;
  background: white;
  width: 100%;
text-align: center;
overflow: auto;
}

.paymentAmt {
    font-size: 80px; 
}


.btn-round-lg{
border-radius: 22.5px;
}
.btn-round{
border-radius: 17px;
}
.btn-round-sm{
border-radius: 15px;
}
.btn-round-xs{
border-radius: 11px;
padding-left: 10px;
padding-right: 10px;
}

img { max-width:100%; }

a {
    -webkit-transition: all 150ms ease;
	-moz-transition: all 150ms ease;
	-ms-transition: all 150ms ease;
	-o-transition: all 150ms ease;
	transition: all 150ms ease; 
	}
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }



body{border-top:0;background:#c4e17f;background-image:-webkit-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:-moz-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:-o-linear-gradient(left,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4);background-image:linear-gradient(to right,#c4e17f,#c4e17f 12.5%,#f7fdca 12.5%,#f7fdca 25%,#fecf71 25%,#fecf71 37.5%,#f0776c 37.5%,#f0776c 50%,#db9dbe 50%,#db9dbe 62.5%,#c49cde 62.5%,#c49cde 75%,#669ae1 75%,#669ae1 87.5%,#62c2e4 87.5%,#62c2e4)}
.thumbnails li> .fff .caption { background:#fff !important; padding:10px }
/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
        }



/* Thumbnail Box */
.caption h4 {
   
    color: #444;
    }
    .caption p {
       
        color: #999;
        }
        .btn.btn-mini {
            
            }


/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    }
    .carousel-control{
        background: #666;
        border: 0px;
        border-radius: 0px;
        display: inline-block;
        font-size: 34px;
        font-weight: 200;
        line-height: 18px;
        opacity: 0.5;
        padding: 4px 10px 0px;
        position: static;
        height: 30px;
        width: 15px;
        }





/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
}


li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

</style>