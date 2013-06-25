<?php require('inc/layout.php');

$Layout->title = 'API-Services';

$Layout->start(); ?>


<div id="content" class="container-fluid">
    <div class="container">

        <h1>ricardo API Security Documentation</h1>
        <div class="row">
            <div class="span12">
                <h3>Authentication</h3>
                <div class="boxed">
                    <h4>Partnership credentials</h4>
                    <p>The partnership credentials are permanent. They allow identifying a partnership on our platform. It mustn’t be transmitted to third people.</p>

                    <h4>SOAP Bindings</h4>
                    <p>To authenticate a SOAP request, you have to give your credentials as following:</p>
					<pre class="prettyprint">ChannelFactory<ISimpleService> factory = new ChannelFactory<ISimpleService>(endpointConfigurationName);
factory.Credentials.UserName.UserName = "UserName";
factory.Credentials.UserName.Password = "Password";</pre>

                    <h4>JSON Bindings</h4>
                    <p>To authenticate a JSON request, you have to give your credentials into HTTP Headers:</p>
					<pre class="prettyprint">Ricardo-Username: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXX
Ricardo-Password: Password</pre>

                </div>
            </div>

        </div>


        <div class="row">
            <div class="span12">
                <h3>How to obtain a Consumer Token?</h3>
                <div class="row-fluid"><p>A consumer token represents, at the same time, a Ricardo customer and a partnership.
                    <br />All the methods you need are in the Partnership service</p>
                </div>
                <div class="boxed">
                    <h4>Ask for a Temp Credential</h4>
                    <p>First of all, you will have to ask for a Temp Credential, using the method:</p>
                    <div class="sectioned">
                        <a href="https://ws.ricardo.ch/ricardoApiSecurity/documentation/technical/html/M_Ricardo_Api_Security_Contracts_IPartnershipService_CreateTempCredential.htm" target="_blank"><pre class="prettyprint">CreateTempCredential()</pre></a>
                        <ul>
                            <li><strong>TempCredentialKey</strong> The Temp Credential key needed to obtain the Consumer Token</li>
                            <li><strong>ValidationUrl</strong> The link to the authorization page</li>
                            <li><strong>ExpirationDate</strong> The limit date to use the temp credential</li>
                        </ul>
                    </div>
                    <h4>Redirect the customer</h4>
                    <p>The customer has to validate the temp credential. You will have to redirect him using the ValidationUrl.</p>
                        <p class="alert"><strong>The link has to be opened into an external browser:</strong> no embedded browser or frame!</p>
                    </p>
                    <h4>Get the Consumer Token</h4>
                    <p>Once the customer has validated your temp credential, you will have to call the method:</p>
                    <div class="sectioned">
                        <a href="https://ws.ricardo.ch/ricardoApiSecurity/documentation/technical/html/M_Ricardo_Api_Security_Contracts_IPartnershipService_CreateTokenCredential.htm" target="_blank"><pre class="prettyprint">CreateTokenCredential</pre></a>
                        <p>And give the temp credential key. If the temp credential has been authorized, you will retrieve a Consumer Token object that contains:</p>
                        <ul>
                            <li><strong>TokenCredentialKey</strong> Represents the username for Consumer Services Authentication</li>
                            <li><strong>TokenExpirationDate</strong> Limit date of use for this access. When expired, you will have to ask again for a temp credential.</li>
                            <li><strong>SessionDuration</strong> after this duration of unactivity, the Consumer Token will need to be refreshed.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>



    </div>
</div><!-- close content -->

<?php $Layout->end(); ?>



