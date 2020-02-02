@extends('welcome')

@section('title', 'Single Post View')

@section('content')
<div class="wrapper">
<!-- BEGIN .portus-main-content-panel -->
<div class="paragraph-row portus-main-content-panel">
	<div class="column12">
		<div class="portus-main-content-s-block">

			<!-- BEGIN .portus-main-content -->
			<div class="portus-main-content">
				<div class="theiaStickySidebar">
					<div class="portus-main-article-block col-md-10">
						<h2>{{ $latest_posts->name }}</h2>

						<p class="portus-main-article-intro">{{ $latest_posts->description }}</p>

						<span class="portus-main-article-meta">
							<a href="blog.html" class="item-meta-i"><i class="po po-head"></i>{{$latest_posts->uname}}</a>
							<a href="blog.html" class="item-meta-i"><i class="po po-clock"></i>{{\Carbon\Carbon::createFromTimeStamp(strtotime($latest_posts->created_at))->diffForHumans() }}</a>
							<a href="#comments" class="item-meta-i"><i class="po po-portus"></i>{{$latest_posts->views }}</a>
							
						</span>

						<div class="wp-caption aligncenter">
							<a href="images/photos/image-43.jpg" class="lightbox-photo" title="Photo by Modestas Urbonas, CC0 License"><img src="{{$latest_posts->image }}" alt="" /></a>
							
						</div>

						<p style="text-decoration-color: black;">{!! $latest_posts->content !!}</p>

					   <div class="widget">
				    <h3>Tag Cloud</h3>
				    <div class="tagcloud">
				        @foreach ($post_tag as $element)
				             <a href="{{ URL::to('post/by/tag', $element->id) }}">{{ $element->tname }}</a>
				        @endforeach
				    </div>
				    </div> 
					</div>

					<!-- BEGIN .portus-content-block -->
					<div class="portus-content-block">
						<div id="disqus_thread"></div>
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
					@include('includes.subscribe')
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

<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://codingspider.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection 