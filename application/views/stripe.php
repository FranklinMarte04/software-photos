<!DOCTYPE html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-2.0.2.min.js"></script>
<script src="//js.stripe.com/v2/"></script>
<script type="text/javascript">
  (function() {
        Stripe.setPublishableKey('pk_test_RZLvrA63gluUBt9jj0xrZ2up');
    })();
</script>
<script type="text/javascript">
// Event Listeners
$('#payment-form').on('submit', generateToken);
var generateToken = function(e) {
    var form = $(this);
    // No pressing the buy now button more than once
    form.find('button').prop('disabled', true);
    // Create the token, based on the form object
    Stripe.create(form, stripeResponseHandler);
    // Prevent the form from submitting
    e.preventDefault();
};
 
var stripeResponseHandler = function(status, response) {};

</script>
</head>
<body>
<form action="" method="POST" id="payment-form">
  <span class="payment-errors"></span>
 
  <div class="row">
    <label>
      <span>Card Number</span>
      <input type="text" data-stripe="number">
    </label>
  </div>
 
  <div class="row">
    <label>
      <span>CVC</span>
      <input type="text" data-stripe="cvc">
    </label>
  </div>
 
  <div class="row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" data-stripe="exp-month">
    </label>
    <input type="text" data-stripe="exp-year">
  </div>
 
  <button type="submit">Buy Now</button>
</form>
</body>
</html>
