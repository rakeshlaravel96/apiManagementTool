<div class="main">
    <div class="basic-info">
        <div class="title">
            <h1>Perfex CRM REST API</h1>
            <h4>Available commands &amp; examples of REST API for Perfex CRM</h4>
          </div>
    </div>
    <div class="intro">
        <h4>
            Introduction
        </h4>
        <p>
            The Perfex API operates over HTTPS and uses JSON as its data format. <br>
            The API is a RESTful API and utilizes HTTP methods and HTTP status codes to specify requests and responses.<br>
            A token is bound to a whole Perfex installation. To get started using the API you first need an API token, after activating our module.
        </p>
    </div>
    <div class="basic-in">
        <h4>
            Introduction
        </h4>
        <p>
            The Perfex API operates over HTTPS and uses JSON as its data format. <br>
            The API is a RESTful API and utilizes HTTP methods and HTTP status codes to specify requests and responses.<br>
            A token is bound to a whole Perfex installation. To get started using the API you first need an API token, after activating our module.
        </p>
    </div>

  
       <div class="basic-in">
                <h4>
                    Installation
                </h4>
                <p>
                    As long as you download our API module from CodeCanyon, extract its contens.<br>
                    You will notice a folder called "documentation" and a new zip file, called "upload.zip".<br>
                    Since "documentation" folder contains files that are not needed in your Perfex CRM's installation, we will focus on the "upload.zip" file.<br>
                    File upload.zip contains the module files (in a module format) that you upload in Perfex CRM's Modules installation section.
                </p>
     </div>


     <div class="basic-in">
        <h4>
            API activation
        </h4>
        <p>
           <strong>Step 1)</strong>  Go to your Perfex CRM's Admin area and select the following menu item: SETUP → MODULES.<br>
           <strong>Step 2)</strong>  Select the extracted upload.zip at Module installation selection prompt and press INSTALL.<br>
           <strong>Step 3)</strong> Find the newly installed module in the list, press ACTIVATE and enter your license key.
        </p>
      </div>

      
     <div class="basic-in">
        <h4>
            Create an API token
        </h4>
        <p>
           <strong>Step 1)</strong> ign in into Perfex's CRM backend as an admin, go to API → API Management, and create a new token.<br>
           Make sure to copy the token and that you fill all necessary information.
        </p>
      </div>

      <div class="basic-in">
        <h4>
            Create an API token
        </h4>
        <p>
            Available commands of the API are described below, along with their request-response examples.<br>
            We strongly suggest that you hire a professional, in order to have your third party connection done, if you are not familiar with APIs, as we cannot guide you through the basic understanding of REST APIs (that is a requirement in order to use this item and falls completely outside the scope of our support plan terms of it).
        </p>
      </div>


      <div class="custom">
        <h4>
            Custom fields
        </h4>
        <p>
            All commands support custom fields, starting from version 1.0.2 of the module. </p>
            <p>
                Please take a look at the Custom Fields section in order to ensure the correct implementation of each request that includes custom fields</p>
     </div>



    <div class="api-detail">
        <h2>
            Customer
        </h2>
        <div class="api-detailed post-api">
            <div class="api-left">
              <h3 class="title">
                Customer - Add New Customer
              </h3>
              <div class="api-type">
                <button class="btn post"> POST</button> <div class="hosting">
                    yourdomain.com/api/customers
                </div>
              </div>

              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Header
                    </h4>
                    <h6 >json</h6>
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >Authorization</td>
                          <td>
                            String
                          </td>
                        <td>
                        Basic Access Authentication token.
                        </td>
                      </tr>
                    </tbody>
                  </table>
               
              </div>



              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Parmeter
                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                    </tbody>
                  </table>



               
              </div>



              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Success 200
                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >status</td>
                          <td>
                            Boolean
                          </td>
                        <td>
                            Request status.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >message</td>
                          <td>
                            String
                          </td>
                        <td>
                      		
                       Customer add successful.
                        </td>
                      </tr>
               
                    </tbody>
                  </table>


                  
               
              </div>




              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Error 4xx

                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="code" >status</td>
                            <td>
                              Boolean
                            </td>
                          <td>
                              Request status.
                          </td>
                        </tr>
                        <tr>
                          <td class="code" >message</td>
                            <td>
                              String
                            </td>
                          <td>
                                
                         Customer add successful.
                          </td>
                        </tr>
                 
                      </tbody>
                  </table>


                  
               
              </div>

            </div>
            <div class="api-right">
               
                    <h3>
                        Success-Response
                      </h3>
    
                      <div class="result">
                        <p>HTTP/1.1 200 OK</p>
                        <p>{</p>
                        <p>&quot;status&quot;: true,</p>
                        
                        <p>&quot;message&quot;: &quot;Customer Update Successful.&quot;</p>
                        
                        <p>}</p>
                      </div>
                  <h3>
                    Error-Response
                  </h3>

                  <div class="result">
                    <p>HTTP/1.1 200 OK</p>
                    <p>{</p>
                    <p>&quot;status&quot;: true,</p>
                    
                    <p>&quot;message&quot;: &quot;Customer Update Successful.&quot;</p>
                    
                    <p>}</p>
                  </div>
            </div>
        </div>

    </div>

     




    

    <div class="api-detail">
        <h2>
            Customer
        </h2>
        <div class="api-detailed post-api">
            <div class="api-left">
              <h3 class="title">
                Customer - Add New Customer
              </h3>
              <div class="api-type">
                <button class="btn post"> POST</button> <div class="hosting">
                    yourdomain.com/api/customers
                </div>
              </div>

              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Header
                    </h4>
                    <h6 >json</h6>
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >Authorization</td>
                          <td>
                            String
                          </td>
                        <td>
                        Basic Access Authentication token.
                        </td>
                      </tr>
                    </tbody>
                  </table>
               
              </div>



              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Parmeter
                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >company</td>
                          <td>
                            String
                          </td>
                        <td>
                      	
                             Mandatory Customer company.
                        </td>
                      </tr>
                    </tbody>
                  </table>



               
              </div>



              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Success 200
                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="code" >status</td>
                          <td>
                            Boolean
                          </td>
                        <td>
                            Request status.
                        </td>
                      </tr>
                      <tr>
                        <td class="code" >message</td>
                          <td>
                            String
                          </td>
                        <td>
                      		
                       Customer add successful.
                        </td>
                      </tr>
               
                    </tbody>
                  </table>


                  
               
              </div>




              <div class="header">
                <div class="title-json">
                    <h4 class="title">
                        Error 4xx

                    </h4>
                    <h6 >json</h6>
                   
                </div>

                <table >
                    <thead>
                      <tr>
                      <th style="width: 30%">Field</th>
                        <th style="width: 10%">Type</th>
                        <th style="width: 70%">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="code" >status</td>
                            <td>
                              Boolean
                            </td>
                          <td>
                              Request status.
                          </td>
                        </tr>
                        <tr>
                          <td class="code" >message</td>
                            <td>
                              String
                            </td>
                          <td>
                                
                         Customer add successful.
                          </td>
                        </tr>
                 
                      </tbody>
                  </table>


                  
               
              </div>

            </div>
            <div class="api-right">
               
                    <h3>
                        Success-Response
                      </h3>
    
                      <div class="result">
                        <p>HTTP/1.1 200 OK</p>
                        <p>{</p>
                        <p>&quot;status&quot;: true,</p>
                        
                        <p>&quot;message&quot;: &quot;Customer Update Successful.&quot;</p>
                        
                        <p>}</p>
                      </div>
              
                

                  <h3>
                    Error-Response
                  </h3>

                  <div class="result">
                    <p>HTTP/1.1 200 OK</p>
                    <p>{</p>
                    <p>&quot;status&quot;: true,</p>
                    
                    <p>&quot;message&quot;: &quot;Customer Update Successful.&quot;</p>
                    
                    <p>}</p>
                  </div>
            </div>
        </div>

    </div>


       
 </div>