@extends('welcome')
@section('title', 'Home')
@section('content')
   <!-- BEGIN #content -->
   <div id="content">

    
    <!-- BEGIN .wrapper -->
    <div class="wrapper">

        <!-- BEGIN .portus-main-content-panel -->
        <div class="paragraph-row portus-main-content-panel">
            <div class="column12">
                <div class="block-category-list">
                     <div class="widget">
                            <div class="tagcloud">
                                @foreach ($categories as $element)
                                     <a href="{{ URL::to('post/by/categories', $element->id) }}">{{ $element->name }}</a>
                                @endforeach
                               

                            </div>

                        <!-- END .widget -->
                        </div>
                </div>
            </div>
        <!-- ENd .portus-main-content-panel -->
        </div>

        <!-- BEGIN .portus-main-content-panel -->
        <div class="paragraph-row portus-main-content-panel">
            <div class="column12">
                <div class="portus-main-content-s-block">

                    <aside class="sidebar portus-sidebar-small">
                        <div class="theiaStickySidebar">

                            <!-- BEGIN .widget -->
                            <div class="widget">

                                <h3>Popular</h3>
                                <div class="w-article-list-num">
                                    @foreach ($popular_posts as $element)
                                   
                                    <div class="item">
                                        
                                        <div class="item-content">
                                            <div class="item-categories">
                                                <a href="{{ URL::to('/post/by/category', $element->cid) }}" data-ot-css="color: #2558b8;">{{ $element->cname }}</a>
                                            </div>
                                            <h4><a href="{{ URL::to('single/post', $element->id) }}">{{ $element->name }}</a><a href="#" class="post-title-comment"><i class="po po-portus"></i>{{ $element->views }}</a></h4>
                                            <div class="item-meta">
                                                <a href="#"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($element->created_at))->diffForHumans() }}</a>
                                            </div>
                                            <p>{{ $element->description }}</p>
                                             <div class="item-helper-a">
                                                    <a href="{{ URL::to('single/post', $element->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                     @endforeach
                                </div>

                            <!-- END .widget -->
                            </div>

                        </div>
                    </aside>

                    <aside class="sidebar portus-sidebar-small">
                        <div class="theiaStickySidebar">

                            <!-- BEGIN .widget -->
                            <div class="widget">

                                <h3>Hottest</h3>
                                <div class="w-article-list">
                                    @foreach ($hot_posts as $element)
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="{{ URL::to('/post/by/category', $element->cid) }}"><img src="{{ asset($element->image) }}" alt="{{ $element->cname}}" /></a>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-categories">
                                                <a href="{{ URL::to('/post/by/category', $element->cid) }}" data-ot-css="color: #f37326;">{{ $element->cname}}</a>
                                            </div>
                                            <h4><a href="{{ URL::to('single/post', $element->id) }}">{{ $element->name}}</a><a href="#" class="post-title-comment"><i class="po po-portus"></i>{{ $element->views }}</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            <!-- END .widget -->
                            </div>

                            <!-- BEGIN .widget -->
                            <div class="widget">

                                <div class="do-space">
                                   {{--  <a href="#" target="_blank"><img src="{{ asset('assets/images/pob-2.jpg') }}" alt=""></a> --}}
                                   <script data-cfasync='false' type='text/javascript' src='//p364297.clksite.com/adServe/banners?tid=364297_718707_0'></script>
                                </div>

                            <!-- END .widget -->
                            </div>

                        </div>
                    </aside>

                    <!-- BEGIN .portus-main-content -->
                    <div class="portus-main-content portus-main-content-s-2">
                        <div class="theiaStickySidebar">
                            
                            <!-- BEGIN .portus-content-block -->
                            <div class="portus-content-block">
                          
                                <div class="article-grid-default">
                                    <div class="article-grid-layout-2">
                                        @foreach ($latest_posts as $post)
                                          <div class="item">
                                            <div class="item-header item-header-hover">
                                                <div class="item-header-hover-buttons">
                                                    <span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $post->id) }}" class="fa fa-mail-reply"></a></span>
                                            
                                                    <span data-hover-text-me="Leave a Comment"><a href="{{ URL::to('single/post', $post->id) }}" class="po po-portus"></a></span>
                                                </div>
                                                <a href="{{ route('public.single', $post->id) }}"><img src="{{ asset($post->image) }}"  alt="{{ $post->name }}" style="height: 250px;" /></a>
                                            </div>
                                            <div class="item-content">
                                                <h3><a href="{{ URL::to('single/post', $post->id) }}">{{ $post->name }}</a></h3>
                                                <div class="item-meta">
                                                    <a href="#" class="item-meta-i"><i class="po po-head"></i>{{ $post->uname }}</a>
                                                    <span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</span>
                                                    <a href="#" class="item-meta-i"><i class="po po-portus"></i>{{ $post->views }}</a>
                                                </div>
                                                <p>{{ $post->description }}</p>
                                                <div class="item-helper-a">
                                                    <a href="{{ URL::to('single/post', $post->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                       

                                    </div>
                                    
                                    <div class="article-grid-layout-3">
                                        @foreach ($latest_posts_all as $element)
                                        <div class="item">
                                            <div class="item-header item-header-hover">
                                                <div class="item-header-hover-buttons">
                                                    <span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $element->id) }}" class="fa fa-mail-reply"></a></span>
                                                   
                                                </div>
                                                <a href="{{ URL::to('single/post', $element->id) }}"><img style="height: 150px;" src="{{ asset($element->image) }}" alt="{{ $element->name }}" /></a>
                                            </div>
                                            <div class="item-content">
                                                <h3><a href="{{ URL::to('single/post', $element->id) }}">{{ $element->name }}</a></h3>
                                                <div class="item-meta">
                                                    <a href="#" class="item-meta-i"><i class="po po-head"></i>{{ $element->uname}}</a>
                                                    <span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($element->created_at))->diffForHumans() }}</span>
                                                    <a href="#" class="item-meta-i"><i class="po po-portus"></i>{{$element->views}}</a>
                                                </div>
                                                <p>{{ $element->description }}</p>
                                                <div class="item-helper-a">
                                                    <a href="{{ URL::to('single/post', $element->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    
                                    </div>
                                    
                                    <div class="article-grid-layout-2">
                                        @foreach ($latest_posts_mid as $post)
                                        <div class="item">
                                            <div class="item-header item-header-hover">
                                                <div class="item-header-hover-buttons">
                                                    <span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $post->id) }}" class="fa fa-mail-reply"></a></span>
                                              
                                                    <span data-hover-text-me="Leave a Comment"><a href="{{ URL::to('single/post', $post->id) }}" class="po po-portus"></a></span>
                                                </div>
                                                <a href="{{ route('public.single', $post->id) }}"><img src="{{ asset($post->image) }}"  alt="{{ $post->name }}" style="height: 250px;" /></a>
                                            </div>
                                            <div class="item-content">
                                                <h3><a href="{{ URL::to('single/post', $post->id) }}">{{ $post->name }}</a></h3>
                                                <div class="item-meta">
                                                    <a href="#" class="item-meta-i"><i class="po po-head"></i>{{ $post->uname }}</a>
                                                    <span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</span>
                                                    <a href="{{ URL::to('single/post', $post->id) }}" class="item-meta-i"><i class="po po-portus"></i>{{ $post->views}}</a>
                                                </div>
                                                <p>{{ $post->description }}</p>
                                                <div class="item-helper-a">
                                                    <a href="{{ URL::to('single/post', $post->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                    <div class="article-grid-layout-3">
                                        @foreach ($latest_posts_botom as $value)
                                              <div class="item">
                                            <div class="item-header item-header-hover">
                                                <div class="item-header-hover-buttons">
                                                    <span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $value->id) }}" class="fa fa-mail-reply"></a></span>
                                                    </span>
                                                </div>
                                                <a href="{{ URL::to('single/post', $value->id) }}"><img src="{{ asset($value->image) }}" style="height: 150px;" alt="{{$value->name}}" /></a>
                                            </div>
                                            <div class="item-content">
                                                <h3><a href="{{ URL::to('single/post', $value->id) }}">{{$value->name}}</a></h3>
                                                <div class="item-meta">
                                                    <a href="#" class="item-meta-i"><i class="po po-head"></i>{{ $value->name}}</a>
                                                    <span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($value->created_at))->diffForHumans() }}</span>
                                                    <a href="post.html#comments" class="item-meta-i"><i class="po po-portus"></i>{{ $value->views}}</a>
                                                </div>
                                                <p>{{ $value->description}}</p>
                                                <div class="item-helper-a">
                                                    <a href="{{ URL::to('single/post', $value->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <br>
                                </div>
                            <!-- BEGIN .portus-content-block -->
                            </div>

                        </div>

                    <!-- END .portus-main-content -->
                    </div>

                </div>
            </div>
        <!-- ENd .portus-main-content-panel -->

        </div>
        <!-- BEGIN .portus-main-content-panel -->
        <div class="paragraph-row portus-main-content-panel">
            <div class="column12">
                <div class="article-list-full-width">
                 {{--   <script data-cfasync='false' type='text/javascript' src='//p364297.clksite.com/adServe/banners?tid=364297_718707_3&tagid=9'></script> --}}
                </div>
            </div>
        <!-- ENd .portus-main-content-panel -->
        </div>

       
        </div>

    <!-- END .wrapper -->
    </div>
    <div class="wrapper">
    <div class="widget">

    <h3>Tag Cloud</h3>
    <div class="tagcloud">
        @foreach ($tags as $element)
             <a href="{{ URL::to('post/by/tag', $element->id) }}">{{ $element->name }}</a>
        @endforeach
       

    </div>

    <!-- END .widget -->
    </div> 
    </div>

<!-- BEGIN #content -->
</div>
@endsection