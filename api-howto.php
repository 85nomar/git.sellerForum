<?php require('inc/layout.php');

$Layout->title = 'API-HowTo';

$Layout->start(); ?>


	<div id="content" class="container-fluid">

		<h1>ricardo API How To</h1>

		<div class="row">
			<div class="span12">
				<div class="boxed">
					<h4>Login</h4>
					<p>For external applications, please refer to the “How to obtain a Consumer Token?” section of Ricardo <a href="https://ws.betaqxl.com/ricardoApiSecurity/documentation/">API Security.</a></p>

					<p>For Ricardo Group internal applications, use the method <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ILoginService_Login.htm">LoginService.Login</a> to retrieve a Consumer Token.</p>
				</div>
			</div>
		</div>
	
		
		<div class="row">
			<div class="span12">
				<h3>Display an Article <i class="icon-question"></i></h3>
				<div class="boxed">
					<p>First of all, you need an Article Id.</p>

					<h4>Token credentials</h4>
					<ul>
						<li>A token credential represents, at the same time, a Ricardo customer and a partnership.</li>
						<li>The key represents the username and no password is required.</li>
						<li>Token credentials act as a session; they expire after a certain time of inactivity.</li>
						<li>After expiration, token credentials can be
refreshed (CF. <a href="https://ws.betaqxl.com/ricardoApiSecurity/documentation/">Ricardo API
Security</a>)</li>
					</ul>
					
					<h4>SOAP Bindings</h4>
					<p>To authenticate a SOAP request, you have to give your credentials as following:</p>
					<pre class="prettyprint">ChannelFactory<ISimpleService> factory =
 new ChannelFactory<ISimpleService>(endpointConfigurationName);
factory.Credentials.UserName.UserName = "UserName";
factory.Credentials.UserName.Password = "Password";</pre>

					<h4>JSON Bindings</h4>
					<p>To authenticate a JSON request, you have to give your credentials into HTTP Headers:</p>
					<pre class="prettyprint">Ricardo-Username: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXX
Ricardo-Password: Password</pre>

				</div>
			</div>

		</div>






	</div><!-- close content -->
</div><!-- close wrap -->

<?php $Layout->end(); ?>
