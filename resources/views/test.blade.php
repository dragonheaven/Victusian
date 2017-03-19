<!DOCTYPE html>
<html>
<head>
	<title>Victus test page</title>
	<script src="https://js.stripe.com/v3/"></script>
</head>
<body>
	
	<form action="{{url('/eventOrder')}}" method="POST">
	{{ csrf_field() }}
	  <script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="pk_test_Nlf6T59gFZyCPKTJSPo19Msx"
	    data-amount="3000"
	    data-name="Victusian"
	    data-description="Join Event"
	    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
	    data-locale="auto">
	  </script>
	</form>
</body>
</html>