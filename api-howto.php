<?php require('inc/layout.php');

$Layout->title = 'API-HowTo';

$Layout->start(); ?>


<div id="content" class="container-fluid">
    <div class="container">
        
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
				<h3>Display an Article</h3>
				<div class="boxed">
					<p>First of all, you need an Article Id. <a href="#modal-articleid" role="button" data-toggle="modal" class="icon-question-sign"></a>
					<div id="modal-articleid" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Article ID</h3>
					  </div>
					  <div class="modal-inner">
						<img src="img/ViewItem.png" />
					  </div>
					</div></p>
					<div class="sectioned">
						<h5>I don’t need to display some sections</h5>
						<p>To reduce the amount of data retrieved by the method <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuction.htm" target="_blank">GetAuction</a>, you can specify which sections you need:</p>
						
						<ul>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/T_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter.htm" target="_blank">GetAuctionParameter</a></li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionDescription.htm" target="_blank">ReturnAuctionDescription</a>: True to get the description</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionInformation.htm" target="_blank">ReturnAuctionInformation</a>: True to get the main information</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionQuestionAnswer.htm" target="_blank">ReturnAuctionQuestionAnswer</a>: True to get the questions/answers</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionBidHistory.htm" target="_blank">ReturnAuctionBidHistory</a>: True to get the bid history</li>
						</ul>
					</div>
					<div class="sectioned">
						<h5>I need to display some sections later</h5>
						<p>You can retrieve each section with its dedicated method:</p>						
						<ul>
							<li>Auction description :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionDescription.htm" target="_blank">SearchService.GetAuctionDescription</a></li>
							<li>Auction information :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionInformation.htm" target="_blank">SearchService.GetAuctionInformation</a></li>
							<li>Auction questions and answers :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionQuestionAnswer.htm" target="_blank">SearchService.GetAuctionQuestionAnswer</a></li>
							<li> When the customer is logged, use <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IUserService_GetAuctionQuestionAnswer.htm" target="_blank">UserService.GetAuctionQuestionAnswer </a> to retrieve private questions and answers</li>
							<li> Auction bid history :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionBidHistory.htm" target="_blank">SearchService.GetAuctionBidHistory</a></li>
						</ul>
					</div>
					<h4>JSON Example</h4>
					<pre class="prettyprint">
POST: https://ws.betaqxl.com/ricardoApi/SearchServiceJson.svc/GetAuction
Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: 23C6A033-EEC7-4D70-B389-1A560F67AE00
Ricardo-Password: ApiPwd
 
Body
{
    "getAuctionParameter": {
        "AuctionId": 706711160,
        "Language": 1,
        "ReturnAuctionBidHistory": true,
        "ReturnAuctionDescription": true,
        "ReturnAuctionInformation": true,
        "ReturnAuctionQuestionAnswer": true
    }
}
					</pre>

					<h4>SOAP Example</h4>
					<pre class="prettyprint"><xmp>
<s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
  <s:Header>
    <a:Action s:mustUnderstand="1">http://ricardo.api/ISearchService/GetAuction</a:Action>
    <a:MessageID>urn:uuid:5bec877b-d03c-4999-b8b4-752e5c3a1f5f</a:MessageID>
    <a:ReplyTo>
      <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
    </a:ReplyTo>
  </s:Header>
  <s:Body>
    <GetAuction xmlns="http://ricardo.api">
      <getAuctionParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <AuctionId>706711160</AuctionId>
        <Language>SwitzerlandDe</Language>
        <ReturnAuctionBidHistory>true</ReturnAuctionBidHistory>
        <ReturnAuctionDescription>true</ReturnAuctionDescription>
        <ReturnAuctionInformation>true</ReturnAuctionInformation>
        <ReturnAuctionQuestionAnswer>true</ReturnAuctionQuestionAnswer>
      </getAuctionParameter>
    </GetAuction>
  </s:Body>
</s:Envelope>

					</xmp></pre>

				</div>
			</div>
		</div>


		<div class="row">
			<div class="span12">
				<h3>Search</h3>
				<div class="boxed">
					<p>I need to perform a simple search <a href="#modal-search" role="button" data-toggle="modal" class="icon-question-sign"></a>
					<div id="modal-search" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Search</h3>
					  </div>
					  <div class="modal-inner">
						<img src="img/search.png" />
					  </div>
					</div></p>
					<div class="sectioned">
						<h5>I don’t need to display some sections</h5>
						<p>To reduce the amount of data retrieved by the method <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuction.htm" target="_blank">GetAuction</a>, you can specify which sections you need:</p>
						
						<ul>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/T_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter.htm" target="_blank">GetAuctionParameter</a></li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionDescription.htm" target="_blank">ReturnAuctionDescription</a>: True to get the description</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionInformation.htm" target="_blank">ReturnAuctionInformation</a>: True to get the main information</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionQuestionAnswer.htm" target="_blank">ReturnAuctionQuestionAnswer</a>: True to get the questions/answers</li>
							<li><a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Article_Parameter_GetAuctionParameter_ReturnAuctionBidHistory.htm" target="_blank">ReturnAuctionBidHistory</a>: True to get the bid history</li>
						</ul>
					</div>
					<div class="sectioned">
						<h5>I need to display some sections later</h5>
						<p>You can retrieve each section with its dedicated method:</p>						
						<ul>
							<li>Auction description :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionDescription.htm" target="_blank">SearchService.GetAuctionDescription</a></li>
							<li>Auction information :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionInformation.htm" target="_blank">SearchService.GetAuctionInformation</a></li>
							<li>Auction questions and answers :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionQuestionAnswer.htm" target="_blank">SearchService.GetAuctionQuestionAnswer</a></li>
							<li> When the customer is logged, use <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IUserService_GetAuctionQuestionAnswer.htm" target="_blank">UserService.GetAuctionQuestionAnswer </a> to retrieve private questions and answers</li>
							<li> Auction bid history :<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_GetAuctionBidHistory.htm" target="_blank">SearchService.GetAuctionBidHistory</a></li>
						</ul>
					</div>
					<h4>JSON Example</h4>
					<pre class="prettyprint">




					</pre>

					<h4>SOAP Example</h4>
					<pre class="prettyprint"><xmp>




					</xmp></pre>

				</div>
			</div>
		</div>



	</div>
</div><!-- close content -->

<?php $Layout->end(); ?>
