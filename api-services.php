<?php require('inc/layout.php');

$Layout->title = 'API-Services';

$Layout->start(); ?>


	<div id="content" class="container-fluid">

		<h1>ricardo API Services</h1>
		<div class="row-fluid">

				<p>Our services are split into two categories:</p>
		</div>
		<div class="row">
			<div class="boxed span6">
				<h4>Partnershipt Services</h4>
				<ul class="inline">
					<li>
						<span lang="EN-US">DataService (<a href="https://ws.betaqxl.com/ricardoApi/DataService.svc?singleWsdl" target="_blank">SOAP</a>, <a href="https://ws.betaqxl.com/ricardoApi/DataServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">SearchService (<a href="https://ws.betaqxl.com/ricardoApi/SearchService.svc?singleWsdl" target="_blank">SOAP</a>,<a href="https://ws.betaqxl.com/ricardoApi/SearchServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
				</ul>
			</div>

			<div class="boxed span6">
				<h4>Consumer Services</h4>
				<ul class="inline">
					<li>
						<span lang="EN-US">Billing Service (<a href="https://ws.betaqxl.com/ricardoApi/BillingService.svc?singleWsdl" target="_blank">SOAP</a>, <a href="https://ws.betaqxl.com/ricardoApi/BillingServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">BuyingService (<a href="https://ws.betaqxl.com/ricardoApi/BuyingService.svc?singleWsdl" target="_blank">SOAP</a>,<a href="https://ws.betaqxl.com/ricardoApi/BuyingServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">NotifyService (<a href="https://ws.betaqxl.com/ricardoApi/NotifyService.svc?singleWsdl" target="_blank">SOAP</a>, <a href="https://ws.betaqxl.com/ricardoApi/NotifyServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">RatingService (<a href="https://ws.betaqxl.com/ricardoApi/RatingService.svc?singleWsdl" target="_blank">SOAP</a>,<a href="https://ws.betaqxl.com/ricardoApi/RatingServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">SellingService (<a href="https://ws.betaqxl.com/ricardoApi/RatingService.svc?singleWsdl" target="_blank">SOAP</a>, <a href="https://ws.betaqxl.com/ricardoApi/SellingServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
					<li>
						<span lang="EN-US">UserService (<a href="https://ws.betaqxl.com/ricardoApi/UserService.svc?singleWsdl" target="_blank">SOAP</a>,<a href="https://ws.betaqxl.com/ricardoApi/UserServiceJson.svc?singleWsdl" target="_blank">JSON</a>)</span>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="row">
			<div class="span12">
				<h3>Authentication</h3>
				<div class="boxed">
					<h4>Partnership credentials</h4>
					<p>The partnership credentials are permanent. They allow identifying a partnership on our platform. It mustn’t be transmitted to third people.</p>

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



