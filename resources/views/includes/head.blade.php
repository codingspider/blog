            <!-- BEGIN #header -->
            @php
                $menus = DB::table('menus')->get(); 
                $breaking = DB::table('posts')->where('breaking', 1)->orderBy('id', 'desc')->get();
            @endphp
            <div id="header">
                <!-- BEGIN .breaking-news -->
                <div class="breaking-news">
                
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <strong class="br-title">Breaking</strong>

                        <div class="br-article-list">
                            <div class="br-article-list-inner">
                                @foreach ($breaking as $element)
                                <div class="br-article">
                                    <a href="{{ URL::to('single/post', $element->id) }}">{{$element->name}}
                                    <a href="#" class="post-title-comment"><i class="po po-portus"></i>{{$element->views}}</a>
                                </div>
                            @endforeach
                            </div>
                        </div>

                    <!-- END .wrapper -->
                    </div>

                <!-- END .breaking-news -->
                </div>
                <div class="wrapper">

                    <div class="header-panels">
                        
                        <!-- BEGIN .header-logo -->
                        <div class="header-logo">
                            <a href="{{ URL::to('/')}}"><img src="{{ asset('uploads/logo.png') }}" data-ot-retina="{{ asset('uploads/logo.png') }}" style="height: 80px; width: 150px;" alt="" /></a>
                        <!-- END .header-logo -->
                        </div>
                        
                        <!-- BEGIN .header-pob -->
                        <div class="header-pob">
                           {{--  <a href="#" target="_blank"><img src="{{ asset('assets/images/pob-1.jpg') }}" alt="" /></a> --}}
                        <!-- END .header-pob -->
                        </div>

                    </div>
                    
                <!-- END .wrapper -->
                </div>


                <!-- BEGIN #main-menu -->
                <nav id="main-menu">

                    <a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i>Show Menu</a>
                    <div class="main-menu-placeholder">

                        <!-- BEGIN .wrapper -->
                        <div class="wrapper">

                            <div class="search-nav right">
                                <form action="{{URL::to('/search/post') }}" method="POST">
                                    @csrf 
                                    <input type="text" name="search" placeholder="Search" />
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            
                            <ul class="load-responsive" rel="Main Menu">
                                 <li><a href="{{ URL::to('/') }}">Home</a></li>
                                @foreach ($menus as $element)
                                <li><a href="{{ $element->slug}}">{{ $element->name }}</a></li>
                                    
                                @endforeach
                               
                            </ul>
                            
                        <!-- END .wrapper -->
                        </div>
                    
                    </div>

                <!-- END #main-menu -->
                </nav>
                
            <!-- END #header -->
            </div>