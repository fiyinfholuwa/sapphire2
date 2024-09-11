<div class="col-lg-3 mt-sm-30">
          <div class="sidebar-widget">
            <!-- <h5>Search</h5>
            <div class="widget-search pt-15">
              <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
              <input type="submit" value="" name="email" id="wid-s-sub">
            </div> -->
          </div>
          <div class="sidebar-widget">
            <h5>Categories</h5>
            <hr>
            <ul class="categories">
              @if(count($categories) > 0)
              @foreach($categories as $category)
              <li> <a href="{{route('blog.category', $category->category_url)}}">{{$category->name}}</a> </li>
              @endforeach
              @else
              @endif
            </ul>
          </div>
          <div class="sidebar-widget">
            <h5>Recent Post</h5>
            <hr>
            <ul class="widget-post pt-15">
            @if(count($posts) > 0)
              @foreach($posts as $post)
              <li> <a href="{{route('blog.detail', $post->post_url)}}" class="widget-post-media"> <img src="{{asset($post->image)}}" alt=""> </a>
                <div class="widget-post-info">
                  <h6><a href="{{route('blog.detail', $post->post_url)}}">{{$post->title}}</a></h6>
                  <div class="post-meta"> <span> <a href="javascript:avoid(0);"></span><span>{{$post->created_at->diffForHumans();}}</span> </div>
                </div>
              </li>
              @endforeach
              @else
              @endif
              
              
            </ul>
          </div>
          
        </div>