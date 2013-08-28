<?php require('inc/layout.php');

$Layout->title = 'API | How to';

$Layout->start(); ?>


    <div id="content" class="container-fluid">
        <div class="container">
            <h1>How to</h1>
            <div class="row-fluid">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapseOne">
                                Login
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>For external applications, please refer to the “How to obtain a Token?” section of
                                    <a href="http://ticket:8080/display/CORE/Authentication" target="_blank">Authentication
                                        .</a></p>
                                <p>For Ricardo Group internal applications, use the method <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISecurityService_Login.htm" target="_blank">SecurityService.Login</a> to retrieve a Consumer Token.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#collapseTwo">
                                List an article
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>To insert a single article, you can use the <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellService_InsertArticle.htm" target="_blank">SellService.InsertArticle</a> method. Your article will be live immediately. This method return the fees for the listing and the article identifier.</p>
                                <div>
                                    <div class="span6">
                                        <h4>JSON example</h4>
                                        <pre class="prettyprint"><xmp>
POST : https://ws.betaqxl.com/RicardoApi/SellService.Json.svc/InsertArticle

Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-XXXX-462f-XXXX-85cd74a47086

Body
{

    "insertArticleParameter": {
        "AntiforgeryToken": "aeb874a7-00dc-43be-87d2-ca8bdf3c3a1b",
        "ArticleConditionId": "0",
        "ArticleDuration": "14400",
        "AvailabilityId": "101",
        "BuyNowPrice": "0",
        "CategoryId": "38424",
        "Deliveries": {
        "ArticleDeliveryParameter": {
            "DeliveryCost": "15",
            "DeliveryId": "0",
            "DeliveryPackageSizeId": "1",
            "IsDeliveryFree": "false"
        }
    },
    "Descriptions": {
        "ArticleDescriptionParameter": {
            "ArticleDescription": "TEST AUCTION - .NET",
                "ArticleSubtitle": "SubTitle 1",
                "ArticleTitle": "ArticleTitle 1",
                "DeliveryDescription": "Shipping Description 1",
                "LanguageId": "2",
                "PaymentDescription": "Payment Descripion 1",
                "WarrantyDescription": "Warranty Description 1"
            }
    },
    "Increment": "1",
    "InitialQuantity": "1",
    "InternalReferences": {
        "ArticleInternalReferenceParameter": {
            "InternalReferenceTypeId": "1",
            "InternalReferenceValue": "ref value"
        }
    },
    "IsCustomerTemplate": "false",
    "IsRelistSoldOut": "false",
    "MainPictureId": "1",
    "MaxRelistCount": "1",
    "PaymentConditionIds": "cid:874443785754",
    "PaymentMethodIds": [ { "int": "1" } ]
    "Pictures": {
        "ArticlePictureParameter": {
            "PictureBytes": "cid:946294043763",
            "PictureExtension": "1",
            "PictureIndex": "1"
        }
    },
    "PromotionIds": [ { "int": "1" } ]
    "StartPrice": "1",
    "TemplateId": "0",
    "WarrantyId": "101"
    }
}
                                        </xmp></pre>
                                    </div>
                                    <div class="span6">
                                        <h4>SOAP example</h4>
                                        <pre class="prettyprint"><xmp>
<xml version="1.0" encoding="UTF-8">
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:ric="http://ricardo.contracts" xmlns:arr="http://schemas.microsoft.com/2003/10/Serialization/Arrays">
    <soap:Header />
    <soap:Body>
        <ric:InsertArticle>
            <ric:insertArticleParameter>
                <ric:AntiforgeryToken>aeb874a7-00dc-43be-87d2-ca8bdf3c3a1b</ric:AntiforgeryToken>
                <ric:ArticleConditionId>0</ric:ArticleConditionId>
                <ric:ArticleDuration>14400</ric:ArticleDuration>
                <ric:AvailabilityId>101</ric:AvailabilityId>
                <ric:BuyNowPrice>0</ric:BuyNowPrice>
                <ric:CategoryId>38424</ric:CategoryId>
                <ric:Deliveries>
                    <ric:ArticleDeliveryParameter>
                        <ric:DeliveryCost>15</ric:DeliveryCost>
                        <ric:DeliveryId>0</ric:DeliveryId>
                        <ric:DeliveryPackageSizeId>1</ric:DeliveryPackageSizeId>
                        <ric:IsDeliveryFree>false</ric:IsDeliveryFree>
                    </ric:ArticleDeliveryParameter>
                </ric:Deliveries>
                <ric:Descriptions>
                    <ric:ArticleDescriptionParameter>
                        <ric:ArticleDescription>TEST AUCTION - .NET</ric:ArticleDescription>
                        <ric:ArticleSubtitle>SubTitle 1</ric:ArticleSubtitle>
                        <ric:ArticleTitle>ArticleTitle 1</ric:ArticleTitle>
                        <ric:DeliveryDescription>Shipping Description 1</ric:DeliveryDescription>
                        <ric:LanguageId>2</ric:LanguageId>
                        <ric:PaymentDescription>Payment Descripion 1</ric:PaymentDescription>
                        <ric:WarrantyDescription>Warranty Description 1</ric:WarrantyDescription>
                    </ric:ArticleDescriptionParameter>
                </ric:Descriptions>
                <ric:Increment>1</ric:Increment>
                <ric:InitialQuantity>1</ric:InitialQuantity>
                <ric:InternalReferences>
                    <ric:ArticleInternalReferenceParameter>
                        <ric:InternalReferenceTypeId>1</ric:InternalReferenceTypeId>
                        <ric:InternalReferenceValue>ref value</ric:InternalReferenceValue>
                    </ric:ArticleInternalReferenceParameter>
                </ric:InternalReferences>
                <ric:IsCustomerTemplate>false</ric:IsCustomerTemplate>
                <ric:IsRelistSoldOut>false</ric:IsRelistSoldOut>
                <ric:MainPictureId>1</ric:MainPictureId>
                <ric:MaxRelistCount>1</ric:MaxRelistCount>
                <ric:PaymentConditionIds>cid:874443785754</ric:PaymentConditionIds>
                <ric:PaymentMethodIds>
                    <arr:int>1</arr:int>
                </ric:PaymentMethodIds>
                <ric:Pictures>
                    <ric:ArticlePictureParameter>
                        <ric:PictureBytes>cid:946294043763</ric:PictureBytes>
                        <ric:PictureExtension>1</ric:PictureExtension>
                        <ric:PictureIndex>1</ric:PictureIndex>
                    </ric:ArticlePictureParameter>
                </ric:Pictures>
                <ric:PromotionIds>
                    <arr:int>1</arr:int>
                </ric:PromotionIds>
                <ric:StartPrice>1</ric:StartPrice>
                <ric:TemplateId>0</ric:TemplateId>
                <ric:WarrantyId>101</ric:WarrantyId>
            </ric:insertArticleParameter>
        </ric:InsertArticle>
    </soap:Body>
</soap:Envelope>
                                            </xmp></pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#simpleSearch">
                                Simple Search
                            </a>
                        </div>
                        <div id="simpleSearch" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>if you need to perform a simple search, you can use the method <a href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISearchService_SimpleSearch.htm" target="_blank">SearchService
                                    .SimpleSearch</a> which allows you to search for articles taht contain a certain text and are below a given category. You will be able to specify paging values and a sort.</p>
                                <p>SimpleSearchParameter contains the following fields:</p>
                                <ul>
                                    <li><strong>CategoryId</strong>: the root category</li>
                                    <li><strong>SearchText</strong>: the text will be searched into titles and descriptions</li>
                                    <li><strong>Language</strong>: the articles language (ex: Deutsch, French, both)</li>
                                    <li><strong>PageSize</strong>: the number of articles per page</li>
                                    <li><strong>PageNumber</strong>: the page index</li>
                                    <li><strong>SortBy</strong><span>: the column on which the sort will be
                                            apply</span></li>
                                    <li><strong>AscendingSort</strong>: set to true to sort ascending (false for descending)</li><li><strong>CategoryInfos</strong>: set to true to retrieve the number of articles by category</li>
                                </ul>
                                <img src="img/docu/show-search.png" width="100%"/>
                                <div>
                                    <div class="span6">
                                        <h4>JSON example</h4>
                                        <pre class="prettyprint"><xmp>
POST: https://ws.betaqxl.com/ricardoApi/SearchServiceJson.svc/SimpleSearch

Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-XXXX-462f-XXXX-85cd74a47086

Body

{
    "simpleSearchParameter": {
        "AscendingSort": true,
        "CategoryId": 1,
        "CategoryInfos": true,
        "Language": 1,
        "PageNumber": 1,
        "PageSize": 10,
        "SearchText": "test",
        "SortBy": 0
    }
}
                                        </xmp></pre>
                                    </div>
                                    <div class="span6">
                                        <h4>SOAP example</h4>
                                        <pre class="prettyprint"><xmp>
<s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
    <s:Header>
        <a:Action s:mustUnderstand="1">http://ricardo.contracts/ISearchService/SimpleSearch</a:Action>
        <a:MessageID>urn:uuid:adab8010-4de1-450c-9d04-8b6e9f0a1d57</a:MessageID>
        <a:ReplyTo>
            <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
        </a:ReplyTo>
    </s:Header>
    <s:Body>
        <SimpleSearch xmlns="http://ricardo.contracts">
            <simpleSearchParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                <AscendingSort>true</AscendingSort>
                <CategoryId>1</CategoryId>
                <CategoryInfos>true</CategoryInfos>
                <Language>SwitzerlandFrAndDe</Language>
                <PageNumber>1</PageNumber>
                <PageSize>10</PageSize>
                <SearchText>test</SearchText>
                <SortBy>Default</SortBy>
            </simpleSearchParameter>
        </SimpleSearch>
    </s:Body>
</s:Envelope>
                                        </xmp></pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- END ACCORDION -->

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#displayArticle">
                                Display an article (View Item)
                            </a>
                        </div>
                        <div id="displayArticle" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>First of all, you need an Article Id.</p>
                                <img src="img/docu/show-viewItem.png" width="100%"/>
                                <h3>I don’t need to display some sections</h3>
                                <p>To reduce the amount of data retrieved by the method GetArticle, you can specify which sections you need:</p>
                                <p>GetArticleParameter</p>
                                <ul>
                                    <li>ArticleId : the article id</li>
                                    <li>ArticleInformation : True to get the article information section (false otherwise)</li>
                                    <li>Pictures : True to get the pictures section (false otherwise)</li>
                                    <li>InternalReferences : True to get the internal references section (false otherwise)</li>
                                    <li>Deliveries : True to get the deliveries section (false otherwise)</li>
                                    <li>Descriptions : True to get the descriptions section (false otherwise)</li>
                                    <li>RelistInformation : True to get the relist information section (false otherwise)</li>
                                    <li>BidInformation : True to get the bid information section (false otherwise)</li>
                                    <li>BidHistoryMaxSize : To set the size of bid information section</li>
                                    <li>QuestionsAnswers: True to get the question answers section (false otherwise)</li>
                                </ul>
                                <div>
                                    <div class="span6">
                                        <h4>JSON example</h4>
                                        <pre class="prettyprint"><xmp>
POST: https://ws.betaqxl.com/ricardoApi/ArticleServiceJson.svc/GetArticle

Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-XXXX-462f-XXXX-85cd74a47086

Body

{
    "getArticleParameter": {
        "ArticleId": 711595700,
        "ArticleInformation": true,
        "BidHistoryMaxSize": 10,
        "BidInformation": true,
        "Deliveries": true,
        "Descriptions": true,
        "InternalReferences": true,
        "Pictures": true,
        "QuestionsAnswers": true,
        "RelistInformation": true
    }
}
                                        </xmp></pre>
                                    </div>
                                    <div class="span6">
                                        <h4>SOAP example</h4>
                                        <pre class="prettyprint"><xmp>
<s:Envelope xmlns:a="http://www.w3.org/2005/08/addressing" xmlns:s="http://www.w3.org/2003/05/soap-envelope">
    <s:Header>
        <a:Action s:mustUnderstand="1">http://ricardo.contracts/IArticleService/GetArticle</a:Action>
        <a:MessageID>urn:uuid:739efc0c-0f4d-4793-8154-010f47b9af43</a:MessageID>
        <a:ReplyTo>
            <a:Address>http://www.w3.org/2005/08/addressing/anonymous</a:Address>
        </a:ReplyTo>
    </s:Header>
    <s:Body>
        <GetArticle xmlns="http://ricardo.contracts">
            <getArticleParameter xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                <ArticleId>711595700</ArticleId>
                <ArticleInformation>true</ArticleInformation>
                <BidHistoryMaxSize>10</BidHistoryMaxSize>
                <BidInformation>true</BidInformation>
                <Deliveries>true</Deliveries>
                <Descriptions>true</Descriptions>
                <InternalReferences>true</InternalReferences>
                <Pictures>true</Pictures>
                <QuestionsAnswers>true</QuestionsAnswers>
                <RelistInformation>true</RelistInformation>
            </getArticleParameter>
        </GetArticle>
    </s:Body>
</s:Envelope>
                                        </xmp></pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#myPages">
                                My Pages
                            </a>
                        </div>
                        <div id="myPages" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Here is the list of methods to use to retrieve the article lists from the MyPages
                                      section.</p>
                                <ul><li>Open auctions:&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetOpenArticles.htm" rel="nofollow">SellerAccountService.GetOpenArticles</a></li>
                                    <li>Sold auctions:&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetSoldArticles.htm" rel="nofollow">SellerAccountService.GetSoldArticles</a></li>
                                    <li>Completed transactions:&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetCompletedTransactions.htm" rel="nofollow">SellerAccountService.GetCompletedTransactions</a></li>
                                    <li>Unsold auctions:&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetUnsoldArticles.htm" rel="nofollow">SellerAccountService.GetUnsoldArticles</a></li>
                                    <li>Planned auctions:&nbsp;<a class="external-link" href="http://ws.betaqxl.com/RicardoApi/documentation/?topic=html/M_Ricardo_Contracts_ISellerAccountService_GetPlannedArticles.htm" rel="nofollow">SellerAccountService.GetPlannedArticles</a></li>
                                </ul>
                                <img src="img/docu/show-mySelling.png" width="100%"/>
                                <div>
                                    <div class="span6">
                                        <h4>JSON example</h4>
                                        <pre class="prettyprint"><xmp>
POST: https://ws.betaqxl.com/ricardoApi/SellerAccountServiceJson.svc/GetSoldArticles

Headers
Host: ws.betaqxl.com
User-Agent: Your user Agent
Accept-Encoding: gzip, deflate
Referer: https://ws.betaqxl.com/
Connection: keep-alive
Content-Length: 201
Content-Type: application/json
Ricardo-Username: ea8e05d7-XXXX-462f-XXXX-85cd74a47086

Body
{
    "getSoldArticlesParameter": {
        "AscendingSort": false,
        "IsArchived": true,
        "PageNumber": 1,
        "PageSize": 10,
        "MinimumEndDate": "/Date(1363972680000+0100)/"
    }
}
                                        </xmp></pre>
                                    </div>
                                    <div class="span6">
                                        <h4>SOAP example</h4>
                                        <pre class="prettyprint"><xmp>
<xml version="1.0" encoding="UTF-8">
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:ric="http://ricardo.contracts">
    <soap:Header />
    <soap:Body>
        <ric:GetSoldArticles>
            <ric:getSoldArticlesParameter>
                <ric:ArticleIdFilter />
                <ric:ArticleTitleFilter />
                <ric:ArticleTypeFilter>All</ric:ArticleTypeFilter>
                <ric:AscendingSort>false</ric:AscendingSort>
                <ric:InternalReferenceFilter />
                <ric:IsArchived>false</ric:IsArchived>
                <ric:LastnameFilter />
                <ric:MinimumEndDate>2013-02-19T10:25:22.7349793+01:00</ric:MinimumEndDate>
                <ric:NicknameFilter />
                <ric:PageNumber>1</ric:PageNumber>
                <ric:PageSize>10</ric:PageSize>
                <ric:SortBy />
            </ric:getSoldArticlesParameter>
        </ric:GetSoldArticles>
    </soap:Body>
</soap:Envelope>
                                        </xmp></pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- END ACCORDION -->



                </div>
            </div>

        </div>
    </div><!-- close content -->

<?php $Layout->end(); ?>