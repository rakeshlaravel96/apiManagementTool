<div class="side-bar">

    <div class="logo-title">
        <div class="logo-container">
            <img src="{{asset('img/logo.png')}}" alt="" srcset="">
        </div>
        <h3>
           API Management Tool
        </h3>
        <p>
            by <a href="http://"> DBM</a>
        </p>


    </div>

    <div class="detail">
           
        <li class="module-list">
            <a href="http://">Basic Information</a>
        </li>
        @foreach ($modules as $item)
        <li class="module-list">
            <a href="#m{{$item->id}}">{{$item->name}}</a>
            <ul class="api-list">
                @foreach ($item->apis as $api)
                <li class="api">
                    <a href="#a{{$api->id}}"><span class="{{$api->method}}">{{$api->method}}</span> <div>
                       {{$api->name}}  </div></a>
                </li>
                @endforeach
            
            </ul>
        </li>
        @endforeach
       
        <li class="module-list">
            <a href="http://">Contact</a>
            <ul class="api-list">
                <li class="api">
                    <a href="http://"><span class="post">POST</span> <div>
                        Add New Contact
                    </div></a>
                </li>
                <li class="api ">
                    <a href="http://"><span class="delete">DEL</span> <div>
                        Delete Contact
                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        List all Contacts of a Customer
                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Search Contact Information

                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="put">PUT</span> <div>
                        Update Contact Information
                    </div></a>
                </li>
            </ul>
        </li>

        <li class="module-list">
            <a href="http://">Invoice</a>
            <ul class="api-list">
                <li class="api">
                    <a href="http://"><span class="post">POST</span> <div>
                        Add New invoice

                    </div></a>
                </li>
                <li class="api ">
                    <a href="http://"><span class="delete">DEL</span> <div>
                        Delete invoice

                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Request invoice information

                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Search invoice information


                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="put">PUT</span> <div>
                        Update invoice

                    </div></a>
                </li>
            </ul>
        </li>


        <li class="module-list">
            <a href="http://">Items</a>
            <ul class="api-list">
              
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Request items information

                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Search invoice item information
                    </div></a>
                </li>
                
            </ul>
        </li>


        <li class="module-list">
            <a href="http://">Milestone</a>
            <ul class="api-list">
                <li class="api">
                    <a href="http://"><span class="post">POST</span> <div>
                        Add New Milestone
                    </div></a>
                </li>
                <li class="api ">
                    <a href="http://"><span class="delete">DEL</span> <div>
                        Delete a Milestone
                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Request Milestones information
                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="get">GET</span> <div>
                        Search Milestones Information

                    </div></a>
                </li>
                <li class="api">
                    <a href="http://"><span class="put">PUT</span> <div>
                        Update a Milestone
                    </div></a>
                </li>
            </ul>
        </li>



    </div>
       
</div>