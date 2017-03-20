<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Victus Network</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
	<script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
	//]]>
	</script>
</head>
<body>
	<script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
    <script charset="utf-8">
      var apiKey = '45796662';
      var sessionId = '1_MX40NTc5NjY2Mn5-MTQ4OTU4NTcyNTA5M35Ra3I4Zit5RVRaMUdEWHJwZzVmRm5NT1B-fg';
      var token = 'T1==cGFydG5lcl9pZD00NTc5NjY2MiZzaWc9NjI5ZjZhODYwMzBmNWI0YWY3ZTMxZjMwYTA4MDNiYzk0NmViZWQyMzpzZXNzaW9uX2lkPTFfTVg0ME5UYzVOalkyTW41LU1UUTRPVFU0TlRjeU5UQTVNMzVSYTNJNFppdDVSVlJhTVVkRVdISndaelZtUm01TlQxQi1mZyZjcmVhdGVfdGltZT0xNDg5NTg1Nzc1Jm5vbmNlPTAuNTI5MTM3NjQzNTI3MzE3OCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNDkyMTc0MTc2';
      var session = OT.initSession(apiKey, sessionId)
        .on('streamCreated', function(event) {
          session.subscribe(event.stream);
        })
        .connect(token, function(error) {
          var publisher = OT.initPublisher();
          session.publish(publisher);
        });
    </script>

    <script language="JavaScript" type="text/javascript">
	TrustLogo("https://dev.victusnetwork.com/images/logo/logo.png", "CL1", "none");
	</script>
	<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>
</body>
</html>