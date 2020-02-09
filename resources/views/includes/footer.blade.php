<!-- BEGIN #footer -->
@php
  $top_donwload_list = DB::table('post_category')
    ->selectRaw("categories.name, COUNT('post_category.*') as post_category")
    ->join('categories', 'categories.id', '=', 'post_category.category_id')
    ->groupBy('categories.name')
    ->orderBy('post_category', 'desc')
    ->take(5)
    ->get();

     $tags = DB::table('post_tag')
    ->selectRaw("tags.name, COUNT('post_tag.*') as post_tag")
    ->join('tags', 'tags.id', '=', 'post_tag.tag_id')
    ->groupBy('tags.name')
    ->orderBy('post_tag', 'desc')
    ->take(7)
    ->get();


@endphp
<div id="footer">

<div id="footer-widgets">
<div class="wrapper">
    <div class="paragraph-row">

        <div class="column3">
            <div class="widget">
                <div>
                    <p><img src="{{ asset('uploads/logo2.png') }}" alt="" /></p>
                    <p>Est ut minim postea necessitatibus.</p>
                    <p>Decore eligendi at nec. Vel ea quem persius eleifend, est ne appetere molestiae, est ut minim postea necessitatibus.</p>
                    <div class="short-icon-text">
                        <i class="fa fa-phone"></i>
                        <span>+88 01312 808289</span>
                    </div>
                    <div class="short-icon-text">
                        <i class="fa fa-location-arrow"></i>
                        <span>Dhaka Bangladesh</span>
                    </div>
                    <div class="short-icon-text">
                        <i class="fa fa-envelope"></i>
                        <span>engrokon.rok@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="column3">
           
        </div>

        <div class="column3">
            <div class="widget">
                <h3>Popular Categories</h3>
                <ul class="menu">
                   @foreach ($top_donwload_list as $category)
                        <li>{{ $category->name }} ({{ $category->post_category }})  </li>
                    @endforeach
                </ul>
            </div>
        </div><div class="column3">
            <div class="widget">
                <h3>Popular Tags</h3>
                <ul class="menu">
                   @foreach ($tags as $category)
                        <li>{{ $category->name }} ({{ $category->post_tag }})  </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="column3">
            <div class="widget">
               
            </div>
        </div>

    </div>

</div>
</div>

<div id="footer-info">
<div class="wrapper">
    <ul class="right">
                <li><a href="{{ URL::to('/faq/page') }}">FAQ</a></li>
                <li><a href="{{ URL::to('/terms/and/condition') }}">Terms and Condition</a></li>
                <li><a href="{{ URL::to('/privacy/policy') }}">Privacy Policy</a></li>
                <li><a href="{{ URL::to('/contact-us') }}">Contact us</a></li>
    </ul>
    <p>&copy; <strong>Copyright Codingspider 2020. All rights reserved.</strong> 
</div>
</div>

<!-- END #footer -->
</div>