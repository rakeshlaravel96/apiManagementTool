


        <aside class="left-sidebar bg-sidebar" >
            <div id="sidebar" class="sidebar sidebar-with-footer">
              <!-- Aplication Brand -->
              <div class="app-brand" >
                <a href="/index.html">

                  <span class="brand-name">Api Management Tool</span>
                </a>
              </div>
              <!-- begin sidebar scrollbar -->
              <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li  class="has-sub active expand" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                        aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Admin Dashboard</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse show"  id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">

{{-- //start --}}
                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedetail"
                              aria-expanded="false" aria-controls="pagedetail">
                              <span class="nav-text">Module</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="pagedetail">
                              <div class="sub-menu">

                                <li >
                                  <a href="{{route('module.index')}}">Index</a>
                                </li>
                               

{{-- //end --}}

                              </div>
                            </ul>
                          </li>

                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedetai"
                              aria-expanded="false" aria-controls="pagedetai">
                              <span class="nav-text">Hosting</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="pagedetai">
                              <div class="sub-menu">

                                <li >
                                  <a href="{{route('hosting.index')}}">Index</a>
                                </li>
                              

{{-- //end --}}

                              </div>
                            </ul>
                          </li>


                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pagedeta"
                              aria-expanded="false" aria-controls="pagedeta">
                              <span class="nav-text">Api</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="pagedeta">
                              <div class="sub-menu">

                                <li >
                                  <a href="{{route('api.index')}}">Index</a>
                                </li>
                                <li >
                                  <a href="{{route('api.create')}}">Create</a>
                                </li>

                              </div>
                            </ul>
                          </li>



                        </div>
                      </ul>
                    </li>


                    <li  class="has-sub" >
                      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Pages</span> <b class="caret"></b>
                      </a>
                      <ul  class="collapse"  id="pages"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">



                          <li  class="has-sub" >
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#aboutpage"
                              aria-expanded="false" aria-controls="aboutpage">
                              <span class="nav-text">Eduction & Guides</span> <b class="caret"></b>
                            </a>
                            <ul  class="collapse"  id="aboutpage">
                              <div class="sub-menu">

                                <li >
                                  <a href="">Index</a>
                                </li>

                           




                              </div>
                            </ul>
                          </li>

                </ul>

              </div>




            </div>
          </aside>
