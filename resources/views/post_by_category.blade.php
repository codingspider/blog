@extends('welcome')

@section('title', 'Post by category')
@section('content')
<div class="wrapper">
<div class="paragraph-row portus-main-content-panel">
				<div class="column12">
					<div class="portus-main-content-s-block">

						<!-- BEGIN .portus-main-content -->
						<div class="portus-main-content portus-main-content-s-2">
							<div class="theiaStickySidebar">
								
								<!-- BEGIN .portus-content-block -->
								<div class="portus-content-block">
									<div class="article-grid-default">
									
										<div class="article-grid-layout-3">
											@forelse ($latest_posts as $element)
											
											<div class="item">
												<div class="item-header item-header-hover">
													<div class="item-header-hover-buttons">
														<span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $element->id) }}" class="fa fa-mail-reply"></a></span>
													</div>
													<a href="{{ URL::to('single/post', $element->id) }}"><img src="{{$element->image}}" alt="{{$element->name}}" /></a>
												</div>
												<div class="item-content">
													<h3><a href="{{ URL::to('single/post', $element->id) }}">{{$element->name}}</a></h3>
													<div class="item-meta">
														<a href="blog.html" class="item-meta-i"><i class="po po-head"></i>Rokon</a>
														<span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($element->created_at))->diffForHumans() }}</span>
														<a href="#" class="item-meta-i"><i class="po po-portus"></i>{{$element->views}}</a>
													</div>
													<p>{{$element->description}}</p>
													<div class="item-helper-a">
														<a href="{{ URL::to('single/post', $element->id) }}" class="button-alt button-alt-frame"><i class="fa fa-reply"></i>Read more</a>
														
													</div>
												</div>
											</div>
											@empty
											<h1>There is no post with this category.</h1>
											@endforelse
										</div>

										<div class="portus-pagination">
											{!! $latest_posts->render() !!}
										</div>

									</div>
								<!-- BEGIN .portus-content-block -->
								</div>

							</div>
						<!-- END .portus-main-content -->
						</div>

						<aside class="sidebar portus-sidebar-large">
				<div class="theiaStickySidebar">

					<!-- BEGIN .widget -->
					<div class="widget">

						<h3>Latest Post</h3>
						<div class="w-review-articles">
							@foreach ($posts as $element)
								<div class="item item-large">
								<div class="item-header item-header-hover">
									<div class="item-header-hover-buttons">
										<span data-hover-text-me="Read This Article"><a href="{{ URL::to('single/post', $element->id) }}" class="fa fa-mail-reply"></a></span>
									</div>
									<a href="{{ URL::to('single/post', $element->id) }}"><img src="{{ $element->image }}" alt="" /></a>
								</div>
								<div class="item-content">
									<h4><a href="{{ URL::to('single/post', $element->id) }}">{{$element->name}}</a><a href="#" class="post-title-comment"><i class="po po-portus"></i>{{$element->views}}</a></h4>
									<div class="item-meta">
										<div class="item-meta-inner">
											<span class="item-meta-i"><i class="po po-head"></i>{{$element->uname}}</span>
											<span class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($element->created_at))->diffForHumans() }}</span>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							

					<!-- END .widget -->
					</div>

					<!-- BEGIN .widget -->
					<div class="widget">

						<div class="do-space">
							<a href="#" target="_blank"><img src="images/pob-3.jpg" alt="" /></a>
						</div>

					<!-- END .widget -->
					</div>
						<div class="widget">
						<div class="widget-subscribe">
							@include('includes.subscribe')
						</div>
					</div>

					<!-- BEGIN .widget -->
					<div class="widget">

						<h3>Tag Cloud</h3>
						<div class="tagcloud">
							@foreach ($tags as $element)
								<a href="{{ URL::to('post/by/tag', $element->id) }}">{{ $element->name }}</a>
							@endforeach
							
							
						</div>

						<h3>All Categories</h3>
						<div class="tagcloud">
							@foreach ($categories as $element)
								<a href="{{ URL::to('post/by/categories', $element->id) }}">{{ $element->name }}</a>
							@endforeach
							
							
						</div>

					<!-- END .widget -->
					</div>
				</div>
			</aside>

					</div>
				</div>
			<!-- ENd .portus-main-content-panel -->
			</div>
			</div>

@endsection