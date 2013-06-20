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
	
	   <!-- DISPLAY ARTICLE ID -->	
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
						<img src="img/docu/show-viewItem.png" />
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
}</pre>

					<h4>SOAP Example</h4>
					<pre class="prettyprint"><xmp><s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
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
</s:Envelope></xmp></pre>
				</div><!-- end boxed -->
			</div>
		</div>

        <!-- SEARCH -->
		<div class="row">
			<div class="span12">
				<h3>Search</h3>
				<div class="boxed">
					<h5>I need to perform a simple search <a href="#modal-search" role="button" data-toggle="modal" class="icon-question-sign"></a>
					<div id="modal-search" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Search</h3>
					  </div>
					  <div class="modal-inner">
						<img src="img/docu/show-search.png" />
					  </div>
					</div></h5>
					<div class="sectioned">
						<p>You can use the method <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISearchService_SimpleSearch.htm" target="_blank">SearchService.SimpleSearch</a> which allows you to search for articles that contain a certain text and are below a given category. You will be able to specify paging values and a sort. <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/T_Ricardo_Api_Contracts_Dto_Search_Parameter_SimpleSearchParameter.htm" target="_blank">SimpleSearchParameter</a> contains the following fields:</p>
                        <div class="doc-text">
                            <p><strong>CategoryId</strong>: the root category </p>
                            <p><strong>SearchText</strong>: the text will be searched into titles and descriptions</p>
                            <p><strong>Language</strong>: the articles language (ex: Deutsch, French, both)</p> 
                            <p><strong>PageSize</strong>: the number of articles per page</p>
                            <p><strong>PageNumber</strong>: the page index</p>
                            <p><strong>SortBy</strong>: the column on which the sort will be apply</p>
                            <p><strong>AscendingSort</strong>: set to true to sort ascending (false for descending)</p>
                            <p><strong>CategoryInfos</strong>: set to true to retrieve the number of articles by category</p>
                        </div>
					</div>
					<h4>JSON Example</h4>
					<pre class="prettyprint">POST: https://ws.betaqxl.com/ricardoApi/SearchServiceJson.svc/SimpleSearch
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
    "SimpleSearchParameter": {
        "AscendingSort": true,
        "CategoryId": 1,
        "CategoryInfos": true,
        "Language": 2,
        "PageNumber": 1,
        "PageSize": 10,
        "SearchText": "iphone",
        "SortBy": 1
    }
}</pre>

                    <h4>SOAP Example</h4>
                    <pre class="prettyprint"><xmp><s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
  <s:Header>
    <a:Action s:mustUnderstand="1">http://ricardo.api/ISearchService/SimpleSearch</a:Action>
    <a:MessageID>urn:uuid:f051e95d-d04c-4bc3-aba1-5bd2209be312</a:MessageID>
    <a:ReplyTo>
      <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
    </a:ReplyTo>
  </s:Header>
  <s:Body>
    <SimpleSearch xmlns="http://ricardo.api">
      <simpleSearchParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <AscendingSort>false</AscendingSort>
        <CategoryId>1</CategoryId>
        <CategoryInfos>false</CategoryInfos>
        <Language>SwitzerlandDe</Language>
        <PageNumber>1</PageNumber>
        <PageSize>10</PageSize>
        <SearchText>iphone</SearchText>
        <SortBy>Default</SortBy>
      </simpleSearchParameter>
    </SimpleSearch>
  </s:Body>
</s:Envelope></xmp></pre>
                    <div class="sectioned">
                        <h5>I need to perform an advanced search <a href="#modal-search" role="button" data-toggle="modal" class="icon-question-sign"></a>
                        <div id="modal-search" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Search</h3>
                          </div>
                          <div class="modal-inner">
                            <img src="img/docu/show-search.png" />
                          </div>
                        </div></h5>
                        <div class="sectioned">
                            <p>To perform an advanced search, you can add filters to a simple search (<a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/T_Ricardo_Api_Contracts_Dto_Search_Parameter_AdvancedSearchParameter.htm" target="_blank">AdvancedSearchParameter</a>):</p>
                            <div class="doc-text">
                                <p><strong>SearchType</strong>: specifies how to apply the SearchText parameter</p>
                                <p><strong>SearchExcludeWords</strong>: these must not be present in the article</p>
                                <br/>
                                <p><strong>ListingType</strong>: special type of listing (ex: New, Premium…) </p> 
                                <p><strong>SearchArticleType</strong>: type of the article (ex: auction, classified…)</p>
                                <p><strong>ArticleConditionId</strong>: condition of the article </p>
                                <p><strong>MinPrice</strong>: minimum article price</p>
                                <p><strong>MaxPrice</strong>: maximum article price</p>
                                <p><strong>StartRange</strong>: article starting period</p>
                                <p><strong>EndRange</strong>: article ending period</p>
                                <p><strong>WithPicture</strong>: true to retrieve only articles with a picture</p>
                                <br/>
                                <p><strong>SellerCountryId</strong>: seller country</p>
                                <p><strong>SellerRegionId</strong>: seller region</p>
                                <p><strong>SellerZipCode</strong>: seller zip code</p>
                                <p><strong>SellerZipRange</strong>: range of kilometers around the zip code</p>
                                <br />
                                <p><strong>SellerType</strong>: type of seller (ex: individual, professional)</p>
                            </div>
                        </div>
                        <h4>JSON Example</h4>
                        <pre class="prettyprint">Headers
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
    "advancedSearchParameter": {
        "ArticleType": 1,
        "CategoryId": 1,
        "CategoryInfos": true,
        "Language": 2,
        "PageNumber": 1,
        "PageSize": 10,
        "SearchText": "iphone",
        "SearchType": 0,
        "SortBy": 1,
        "MaxPrice": 10000,
        "MinPrice": 10,
        "WithPicture": false
    }
}</pre>

                    <h4>SOAP Example</h4>
                    <pre class="prettyprint"><xmp><s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
  <s:Header>
    <a:Action s:mustUnderstand="1">http://ricardo.api/ISearchService/AdvancedSearch</a:Action>
    <a:MessageID>urn:uuid:8dea48ef-e8ac-4b9e-b301-3cca39cbedd1</a:MessageID>
    <a:ReplyTo>
      <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
    </a:ReplyTo>
  </s:Header>
  <s:Body>
    <AdvancedSearch xmlns="http://ricardo.api">
      <advancedSearchParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <ArticleConditionId i:nil="true" />
        <ArticleType>Auction</ArticleType>
        <AscendingSort>false</AscendingSort>
        <CategoryId>1</CategoryId>
        <CategoryInfos>true</CategoryInfos>
        <EndRange i:nil="true" />
        <Language>SwitzerlandDe</Language>
        <ListingType i:nil="true" />
        <MaxPrice>1000</MaxPrice>
        <MinPrice>10</MinPrice>
        <PageNumber>1</PageNumber>
        <PageSize>10</PageSize>
        <SearchExcludeWords />
        <SearchText>iphone</SearchText>
        <SearchType>AllWords</SearchType>
        <SellerCountryId i:nil="true" />
        <SellerRegionId i:nil="true" />
        <SellerType i:nil="true" />
        <SellerZipCode i:nil="true" />
        <SellerZipRange i:nil="true" />
        <SortBy>Default</SortBy>
        <StartRange i:nil="true" />
        <WithPicture>false</WithPicture>
      </advancedSearchParameter>
    </AdvancedSearch>
  </s:Body>
</s:Envelope></xmp></pre>
                    </div>
				</div><!-- end boxed -->
			</div>
		</div>


        <!-- SEARCH -->
        <div class="row">
            <div class="span12">
                <h3>List an article <a href="#modal-listarticle" role="button" data-toggle="modal" class="icon-question-sign"></a></h3>

                <div id="modal-listarticle" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">List an article</h3>
                  </div>
                  <div class="modal-inner">
                    <img src="img/docu/show-listarticle.png" />
                  </div>
                </div>
                
                <div class="boxed">
                    <h5>Insert a single article</h5>
                    <div class="sectioned">               
                        <p>To insert a single article, you can use the <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_InsertAuction.htm" target="_blank">SellingService.InsertAuction</a> method. Your article will be live immediately. These method return the fee for the listing and the article identifier.</p>
                    <h4>JSON Example</h4>
                    <pre class="prettyprint">POST : https://ws.betaqxl.com/ricardoApi/SellingServiceJson.svc/InsertAuction
Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-f7b6-462f-a9a2-85cd74a47086
 
Body
{
    "insertAuctionParameter": {
        "AcceptEmailContact": true,
        "ArticleConditionId": 0,
        "ArticleInListId": 1,
        "ArticleTitle": "Test .NET",
        "AuctionDescriptions": [
            {
                "ArticleDescription": "TEST AUCTION - .NET",
                "ArticleSubtitle": "SubTitle 1",
                "ArticleTitle": "ArticleTitle 1",
                "DeliveryCost": 10,
                "DeliveryDescription": "Shipping Description 1",
                "Language": 2,
                "PaymentDescription": "Payment Descripion 1",
                "WarrantyDescription": "Warranty Description 1"
            }
        ],
        "AuctionPictures": [],
        "AvailabilityId": 101,
        "AvailableQuantity": 1,
        "BuyNowPrice": 0,
        "CategoryId": 38424,
        "Decrease": 0,
        "DeliveryConditionId": 101,
        "DeliveryCost": 15,
        "Duration": 14400,
        "EurotaxPicturesIndexes": 0,
        "Increment": 1,
        "InternalReference": "Internal Reference 1",
        "IsBike": false,
        "IsBold": false,
        "IsBuyNow": false,
        "IsCar": false,
        "IsCustomerTemplate": false,
        "IsHighlighted": false,
        "IsPremiumCategory": false,
        "IsPremiumHomePage": false,
        "IsPremiumListing": false,
        "IsThumbnail": false,
        "PackageSizeId": 0,
        "PaymentConditionId": 1,
        "PaymentMethodId": [
            1
        ],
        "PersonalHomePage": "",
        "ReminderThreshold": 0,
        "RepostCount": 0,
        "ReservePrice": 0,
        "ShowSellerAddress": false,
        "ShowSellerCompanyName": false,
        "ShowSellerIdentity": true,
        "ShowSellerPhone": true,
        "Showcase": true,
        "StartPrice": 1,
        "Subtitle": false,
        "TemplateId": 0,
        "WarrantyId": 101
    },
    "antiforgeryToken": "BAE00606-2FA3-4CB5-8DE7-2D5322A58DA4"
}</pre>

                    <h4>SOAP Example</h4>
                    <pre class="prettyprint"><xmp><s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
  <s:Header>
    <a:Action s:mustUnderstand="1">http://ricardo.api/ISellingService/InsertAuction</a:Action>
    <a:MessageID>urn:uuid:5d513f22-da15-405e-aed3-fa857be1eb94</a:MessageID>
    <a:ReplyTo>
      <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
    </a:ReplyTo>
  </s:Header>
  <s:Body>
    <InsertAuction xmlns="http://ricardo.api">
      <insertAuctionParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <AcceptEmailContact>true</AcceptEmailContact>
        <ArticleConditionId>0</ArticleConditionId>
        <ArticleInListId>1</ArticleInListId>
        <ArticleTitle>Test .NET</ArticleTitle>
        <AuctionDescriptions>
          <InsertAuctionDescription>
            <ArticleDescription>TEST AUCTION - .NET</ArticleDescription>
            <ArticleSubtitle>SubTitle 1</ArticleSubtitle>
            <ArticleTitle>ArticleTitle 1</ArticleTitle>
            <BeginTemplateText i:nil="true" />
            <DeliveryCost>10</DeliveryCost>
            <DeliveryDescription>Shipping Description 1</DeliveryDescription>
            <EndTemplateText i:nil="true" />
            <Language>SwitzerlandDe</Language>
            <PaymentDescription>Payment Descripion 1</PaymentDescription>
            <WarrantyDescription>Warranty Description 1</WarrantyDescription>
          </InsertAuctionDescription>
        </AuctionDescriptions>
        <AuctionPictures>
          <InsertAuctionPicture>
               <Picture>picture's binary</Picture>
            <PictureId>1</PictureId>
            <Suffixe>.JPG</Suffixe>
          </InsertAuctionPicture>
        </AuctionPictures>
        <AvailabilityId>101</AvailabilityId>
        <AvailableQuantity>1</AvailableQuantity>
        <BuyNowPrice>0</BuyNowPrice>
        <CategoryId>38424</CategoryId>
        <Decrease>0</Decrease>
        <DeliveryConditionId>101</DeliveryConditionId>
        <DeliveryCost>15</DeliveryCost>
        <Duration>14400</Duration>
        <EurotaxPicturesIndexes>0</EurotaxPicturesIndexes>
        <Increment>1</Increment>
        <InternalReference>Internal Reference 1</InternalReference>
        <IsBike>false</IsBike>
        <IsBold>false</IsBold>
        <IsBuyNow>false</IsBuyNow>
        <IsCar>false</IsCar>
        <IsCustomerTemplate>false</IsCustomerTemplate>
        <IsHighlighted>false</IsHighlighted>
        <IsPremiumCategory>false</IsPremiumCategory>
        <IsPremiumHomePage>false</IsPremiumHomePage>
        <IsPremiumListing>false</IsPremiumListing>
        <IsThumbnail>false</IsThumbnail>
        <PackageSizeId>0</PackageSizeId>
        <PaymentConditionId>1</PaymentConditionId>
        <PaymentMethodId xmlns:d5p1="http://schemas.microsoft.com/2003/10/Serialization/Arrays">
          <d5p1:int>0</d5p1:int>
        </PaymentMethodId>
        <PersonalHomePage />
        <ReminderThreshold>0</ReminderThreshold>
        <RepostCount>0</RepostCount>
        <ReservePrice>0</ReservePrice>
        <ShowSellerAddress>false</ShowSellerAddress>
        <ShowSellerCompanyName>false</ShowSellerCompanyName>
        <ShowSellerIdentity>true</ShowSellerIdentity>
        <ShowSellerPhone>true</ShowSellerPhone>
        <Showcase>true</Showcase>
        <StartPrice>1</StartPrice>
        <Subtitle>false</Subtitle>
        <TemplateId>0</TemplateId>
        <WarrantyId>101</WarrantyId>
      </insertAuctionParameter>
      <antiforgeryToken>aeb874a7-00dc-43be-87d2-ca8bdf3c3a1b</antiforgeryToken>
    </InsertAuction>
  </s:Body>
</s:Envelope></xmp></pre>
                    </div>
                    <div class="sectioned">
                        <h5>Insert a list of article</h5>
                        <p class="alert"><strong>NOTE:</strong> Your articles will NOT be live immediately.</p>
                        <ol>
                            <li>
                                <p>You have to use the <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_InsertAuctionList.htm" target="_blank">SellingService.InsertAuctionList</a> method.</p>
                                <p>Each article must be identified in the list using the ArticleInListId. It must be unique per list.</p>
                                <p>This method returns a list identifier (ListId).</p>
                            </li>
                            <li>
                              <p> In a second step, you will have to call the <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetInsertAuctionListStatus.htm" target="_blank">SellingService.GetInsertAuctionListStatus</a> method giving the ListId. It will return an InsertListStatus that can be:</p>
                              <ul>
                                  <li>InProgress: it means that the articles haven’t been inserted yet</li>
                                  <li>Failed: it means that the insert has failed.</li>
                                  <li>Inserted: it means that the articles are live.<br />
                                    The <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/P_Ricardo_Api_Contracts_Dto_Sell_Result_GetInsertAuctionListStatusResult_GetInsertAuctionsStatus.htm" target="_blank">GetInsertAuctionsStatus</a> object gives the list of mappings between the ArticleInListId and the actual ArticleId.
                                  </li>
                              </ul>  
                            </li>
                        </ol>
                    </div>
                </div><!-- end boxed -->
            </div>
        </div>


        <!-- Buy an article -->
        <div class="row">
            <div class="span12">
                <h3>Buy an article <a href="#modal-buyarticle" role="button" data-toggle="modal" class="icon-question-sign"></a></h3>

                <div id="modal-buyarticle" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">List an article</h3>
                    </div>
                    <div class="modal-inner">
                        <img src="img/docu/show-placeBidBuyNow.png" />
                    </div>
                </div>

                <div class="boxed">
                    <h5>Place a bid</h5>
                    <div class="sectioned">               
                        <p>The method to use is <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_PlaceBid.htm" target="_blank">BuyingService.PlaceBid</a>. You can specify:</p>
                        <div class="doc-text">
                            <p><strong>AuctionId</strong>: auction identifier</p>
                            <p><strong>BidQuantity</strong>: number of items</p>
                            <p><strong>MyCurrentBidPrice</strong>: amount for the bid </p>
                        </div>
                    </div>
                    <h5>Buy now</h5>
                    <div class="sectioned">               
                        <p>The method to use is <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_BuyNow.htm" target="_blank">BuyingService.BuyNow</a>. You can specify:</p>
                        <div class="doc-text">
                            <p><strong>AuctionId</strong>: auction identifier</p>
                            <p><strong>BuyNowQuantity</strong>: number of items</p>
                        </div>
                    </div>
                </div><!-- end boxed -->
            </div>
        </div>


        <!-- My pages -->
        <div class="row">
            <div class="span12">
                <h3>My pages <a href="#modal-mySelling" role="button" data-toggle="modal" class="icon-question-sign"></a></h3>

                <div id="modal-mySelling" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">My pages</h3>
                  </div>
                  <div class="modal-inner">
                    <img src="img/docu/show-mySelling.png" />
                  </div>
                </div>

                <div class="boxed">
                    <div class="sectioned">               
                        <p>Here is the list of methods to use to retrieve the articles lists from the MyPages section.</p>
                    <div class="sectioned">
                        <h5>Seller</h5>
                        <ul>
                            <li>Open auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetOpenAuction.htm" target="_blank">SellingService.GetOpenAuction</a></li>
                            <li>Sold auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetSoldAuction.htm" target="_blank">SellingService.GetSoldAuction</a></li>
                            <li>Completed transactions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetCompletedTransaction.htm" target="_blank">SellingService.GetCompletedTransaction</a></li>
                            <li>Unsold auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetUnSoldAuction.htm" target="_blank">SellingService.GetUnSoldAuction</a></li>
                            <li>Planned auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetPlannedAuction.htm" target="_blank">SellingService.GetPlannedAuction</a></li>
                            <li>Open classifieds: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetOpenClassified.htm" target="_blank">SellingService.GetOpenClassified</a></li>
                            <li>Closed classifieds: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_ISellingService_GetClosedClassified.htm" target="_blank">SellingService.GetClosedClassified</a></li>
                        </ul>
                    </div>
                    <div class="sectioned">
                        <h5>Buyer</h5>
                        <ul>
                            <li>Open auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_GetOpenAuction.htm" target="_blank">BuyingService.GetOpenAuction</a></li>
                            <li>Won auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_GetWonAuction.htm" target="_blank">BuyingService.GetWonAuction</a></li>
                            <li>Lost auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_GetLostAuction.htm" target="_blank">BuyingService.GetLostAuction</a></li>
                            <li>Completed auctions: <a href="https://ws.betaqxl.com/ricardoApi/documentation/technical/html/M_Ricardo_Api_Contracts_IBuyingService_GetCompletedAuction.htm" target="_blank">BuyingService.GetCompletedAuction</a></li>
                        </ul>
                    </div>
                    <h4>JSON Example</h4>
                    <pre class="prettyprint">POST: https://ws.betaqxl.com/ricardoApi/SellingServiceJson.svc/GetSoldAuction
Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-f7b6-462f-a9a2-85cd74a47086
 
Body
{
    "soldAuctionParameter": {
        "AscendingSort": false,
        "IsArchived": true,
        "PageNumber": 1,
        "PageSize": 10,
        "MinimumEndDate": "/Date(1363972680000+0100)/"
    }
}</pre>

                    <h4>SOAP Example</h4>
                    <pre class="prettyprint"><xmp><s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
  <s:Header>
    <a:Action s:mustUnderstand="1">http://ricardo.api/ISellingService/GetSoldAuction</a:Action>
    <a:MessageID>urn:uuid:7ecc33a7-fa1e-463f-bb42-a54f8693f6e9</a:MessageID>
    <a:ReplyTo>
      <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
    </a:ReplyTo>
  </s:Header>
  <s:Body>
    <GetSoldAuction xmlns="http://ricardo.api">
      <soldAuctionParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <ArticleTitleFilter i:nil="true" />
        <AscendingSort>false</AscendingSort>
        <AuctionIdFilter i:nil="true" />
        <AuctionTypeFilter>All</AuctionTypeFilter>
        <InternalReferenceFilter i:nil="true" />
        <IsArchived>false</IsArchived>
        <LastnameFilter i:nil="true" />
        <MinimumEndDate>2013-02-19T10:25:22.7349793+01:00</MinimumEndDate>
        <NicknameFilter i:nil="true" />
        <PageNumber>1</PageNumber>
        <PageSize>10</PageSize>
        <SortBy i:nil="true" />
      </soldAuctionParameter>
    </GetSoldAuction>
  </s:Body>
</s:Envelope></xmp></pre>
                    </div>
                    
                </div><!-- end boxed -->
            </div>
        </div>


	</div>
</div><!-- close content -->

<?php $Layout->end(); ?>
