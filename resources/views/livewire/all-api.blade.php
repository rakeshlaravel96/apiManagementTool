<div>
    @foreach ($modules as $item)
    <div class="api-detail">
      <h2 id="m{{$item->id}}">
          {{$item->name}}
      </h2>
    
      @foreach ($item->apis as $api)
      <div class="api-detailed {{$api->method}}-api" id="a{{$api->id}}">
        <div class="api-left">
          <div class="title-btn-section">
            <h3 class="title" >
              {{$api->module->name}} - {{$api->name}}
            </h3>
            <div class="btn-container">
              <button class="btn log" onclick="showDetail(this)" data-type="{{$api->id}}">Change Logs</button>
              <button class="btn comment" onclick="showComment(this)" data-type-comment="{{$api->id}}"   wire:click="commentapi({{$api->id}})">Comments</button>
            </div>
          </div>
         
          <div class="api-type {{$api->method}}-api">
            <button class="btn {{$api->method}}-api"> {{$api->method}}</button> <div class="hosting">
              {{$api->hosting->name}}/{{$api->endpoint}}
            </div>
          </div>
    
          <div class="header">
            <div class="title-json">
                <h4 class="title">
                    Header
                </h4>
                <h6 >{{$api->responseformat}}</h6>
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
                  @foreach ($api->header as $head)
                  <tr>
                    <td class="code" >{{$head['field']}}</td>
                      <td>
                        {{$head['type']}}
                      </td>
                    <td>
                      {{$head['description']}}
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
           
          </div>
    
    
    
          <div class="header">
            <div class="title-json">
                <h4 class="title">
                    Parmeter
                </h4>
                <h6 >{{$api->responseformat}}</h6>
               
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
                  @foreach ($api->parameter as $head)
                  <tr>
                    <td class="code" >{{$head['field']}}</td>
                      <td>
                        {{$head['type']}}
                      </td>
                    <td>
                      {{$head['description']}}
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
          </div>
    
    
    
          <div class="header">
            <div class="title-json">
                <h4 class="title">
                   {!!$api->apiresponse!!}
                </h4>
                <h6 >{{$api->responseformat}}</h6>
               
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
                  @foreach ($api->success as $head)
                  <tr>
                    <td class="code" >{{$head['field']}}</td>
                      <td>
                        {{$head['type']}}
                      </td>
                    <td>
                      {{$head['description']}}
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
    
    
              
           
          </div>
    
          <div class="header">
            <div class="title-json">
                <h4 class="title">
                   {!!$api->failresponse!!}
    
                </h4>
                <h6 >{{$api->responseformat}}</h6>
               
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
                  @foreach ($api->error as $head)
                  <tr>
                    <td class="code" >{{$head['field']}}</td>
                      <td>
                        {{$head['type']}}
                      </td>
                    <td>
                      {{$head['description']}}
                    </td>
                  </tr>
                  @endforeach
                   
             
                  </tbody>
              </table>
    
    
              
           
          </div>
    
        </div>
        <div class="api-right">
           
                <h3>
                    Success-Response
                  </h3>
    
                  <div class="result">
                 {!!$api->successresponse!!}
                  </div>
              <h3>
                Error-Response
              </h3>
    
              <div class="result">
                {!!$api->errorresponse!!}
              </div>
        </div>
    </div>
    
    
      @endforeach
      
    </div>
    
    
    
    @endforeach
    </div>
