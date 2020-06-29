@extends('front-layout.layout')
@section('content')
      <div class="vmagazine-home-wrapp">
        <div id="pl-38" class="panel-layout">
          <div id="pg-38-0" class="panel-grid panel-has-style">
            <div class=" panel-row-style panel-row-style-for-38-0" data-stretch-type="full-stretched">
              <div id="pgc-38-0-0" class="panel-grid-cell">
                <div id="panel-38-0-0-0"
                  class="so-panel widget widget_vmagazine_tab_posts_list vmagazine_tab_posts_list panel-first-child panel-last-child"
                  data-index="0">
                  <div class="panel-widget-style panel-widget-style-for-38-0-0-0">
                    <div class="vmagazine-fullwid-slider block-post-wrapper block_layout_2" data-count="6">
                      <div class="slick-wrap sl-before-load slick-initialized slick-slider">
                        <div class="slick-list draggable">
                          <div class="slick-track" style="opacity: 1; width: 7020px;">
                            
                            
                            
                            <!-- Print the last Article here -->
                            <div class="single-post clearfix slick-slide"
                              data-slick-index="0" aria-hidden="true" tabindex="-1"
                              style="width: 1170px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                              <div class="post-thumb">
                                <img
                                  src="images/{{$posts[0]['thumbnail']}}"
                                  alt="{{$posts[0]['title']}}"
                                  title="{{$posts[0]['title']}}">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/ss" class="cat-53" rel="category tag"
                                    tabindex="0">{{$posts[0]['category']['name']}}</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>{{$posts[0]['readableCreatedAt']}}</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>{{$posts[0]['likes_count']}}</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>{{$posts[0]['views_count']}}</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="/{{$posts[0]['slug']}}"
                                    tabindex="0">{{$posts[0]['title']}}
                                  </a>
                                </h3>
                              </div>
                            </div>
                          <!-- ./Print the last Article here -->



                            <div class="single-post clearfix slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false"
                              tabindex="0"
                              style="width: 1170px; position: relative; left: -1170px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/4d8f7f02-d77d-4cc0-aab1-5517f709899a.jpg"
                                  alt="القطاع الصناعي بريطانيا " title="القطاع الصناعي بريطانيا ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/fg" class="cat-53" rel="category tag"
                                    tabindex="-1">جراف العملات</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>4 hours ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>39</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="#"
                                    tabindex="-1">القطاع الصناعي في بريطانيا يعود إلى النمو</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="2" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -2340px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/40fc0813-5901-4450-b831-bb721280f324.jpg"
                                  alt="منطقة اليورو" title="منطقة اليورو ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/fc" class="cat-53" rel="category tag"
                                    tabindex="-1">التحليل الأساسي</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>5 hours ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>36</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="#"
                                    tabindex="-1">تعافي كبير في مستويات اليورو بعد تقلص انكماش منطقة اليورو</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="3" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -3510px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/aa2897bf-3450-45f3-8e9c-81bbdfe1d2ed.jpg"
                                  alt="اليوان الرقمي الصيني " title="اليوان الرقمي الصيني ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/cc" class="cat-53" rel="category tag"
                                    tabindex="-1">العملات الرقمية</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>90</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="#"
                                    tabindex="-1">اليوان الرقمي الصيني قد يخرج إلى النور قريبًا</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="4" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -4680px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/90eb55a9-ac64-45a3-ad66-85a0068e7752.jpg"
                                  alt="المركزي الصيني " title="المركزي الصيني ">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/fn" class="cat-53" rel="category tag"
                                    tabindex="-1">اخبار العملات</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>53</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="#"
                                    tabindex="-1">عودة تفشي كورونا يدفع المركزي الصيني إلى تثبيت سعر الفائدة</a>
                                </h3>
                              </div>
                            </div>
                            <div class="single-post clearfix slick-slide" data-slick-index="5" aria-hidden="true"
                              tabindex="-1"
                              style="width: 1170px; position: relative; left: -5850px; top: 0px; z-index: 998; opacity: 0;">
                              <div class="post-thumb">
                                <img
                                  src="images/d470861e-e44f-4dae-988c-04af738641fb.jpg"
                                  alt="شركة فوري لتكنولوجيا البنوك والمدفوعات الإلكترونية"
                                  title="شركة فوري لتكنولوجيا البنوك والمدفوعات الإلكترونية">
                                <div class="image-overlay"></div>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <span class="cat-links">
                                  <a href="/category/es" class="cat-53" rel="category tag"
                                    tabindex="-1">السوق المصري</a></span>
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>1 days ago</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>43</span>
                                </div>

                                <h3 class="extra-large-font">
                                  <a href="#"
                                    tabindex="-1">فوري يحقق مستهدفنا ويسجل أعلى سعر في تاريخه </a>
                                </h3>
                              </div>
                            </div>
                          </div>
                        </div>











                      </div>
                      <div class="vmagazine-container">
                        <div
                          class="posts-tab-wrap sl-before-load slick-initialized slick-slider slick-vertical mCustomScrollbar _mCS_1">
                          <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical"
                            style="max-height: none;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                              dir="ltr">
                              <div class="slick-list draggable" style="height: 672px;">
                                <div class="slick-track"
                                  style="opacity: 1; height: 672px; transform: translate3d(0px, 0px, 0px);">
                                  
                                  <!-- Render the side bar posts dynamically -->
                                  
                                @if(!$posts->isEmpty())
                                  @foreach($posts as $key => $post)
                                    @if($key < 6)
                                      <div class="single-post clearfix slick-slide slick-active" data-slick-index="{{$loop->index+1}}"
                                        aria-hidden="false" tabindex="0" style="width: 356px;">
                                        <div class="slider-nav-inner-wrapper">
                                          <div class="post-thumb">
                                            <a href="javascript:void(0)" class="thumb-zoom" rel="noreferrer" tabindex="0">
                                              <img src="images/{{$post['thumbnail']}}"
                                                alt="{{$post['title']}}"
                                                title="{{$post['title']}}"
                                                class="mCS_img_loaded">
                                              <div class="image-overlay"></div>
                                            </a>
                                          </div>

                                          <div class="post-caption-wrapper">
                                            <span class="posted-on"><i class="far fa-clock"></i>{{$post['readableCreatedAt']}}</span>
                                            <h2 class="large-font"><a
                                                href="/{{$post['slug']}}"
                                                tabindex="0">{{$post['title']}}</a></h2>
                                          </div>
                                        </div>
                                      </div>
                                    @endif
                                  @endforeach
                                @endif
                                <!-- ./Render the side bar posts dynamically -->
                             
                                </div>
                              </div>
                            </div>
                            <!-- <div id="mCSB_1_scrollbar_vertical"
                              class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
                              style="display: block;">
                              <div class="mCSB_draggerContainer">
                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                  style="position: absolute; min-height: 30px; display: block; height: 200px; max-height: 380px; top: 0px;">
                                  <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-1" class="panel-grid panel-has-style" style="direction: rtl;">
            <div class="panel-row-style panel-row-style-for-38-1">
              <div id="pgc-38-1-1" class="panel-grid-cell">
                <div id="panel-38-1-1-0"
                  class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child"
                  data-index="2">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-0">
                    <div class="wrapper-vmagazine-post-col block_layout_1">
                      <h4 class="block-title"><span class="title-bg">التحليل الفني</span></h4>
                      <div class="vmagazine-post-col block-post-wrapper block_layout_1 wow zoomIn"
                        data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
                        <div class="block-header clearfix">
                        </div>
                        @php
                          $category = null;
                          $firstPost = null;
                          $catPosts = null;
                          if(!$categories->isEmpty()) {
                            foreach($categories as $cat) {
                              if($cat->name === 'التحليل الفني') {
                                $category = $cat;
                                if(!$category->posts->isEmpty()) {
                                  $firstPost = $category->posts[0];
                                  $catPosts = $category->posts;
                                }
                              }
                            }
                          }
                        @endphp

                        @if($firstPost)
                        <div class="single-post first clearfix">
                          <div class="post-thumb">
                            <a class="thumb-zoom"
                              href="/{{$firstPost['slug']}}"
                              title="{{$firstPost['title']}}">
                              <img
                                src="images/{{$firstPost['thumbnail']}}"
                                alt="{{$firstPost['title']}}" title="{{$firstPost['title']}}">
                              <div class="image-overlay"></div>
                            </a>
                          </div>
                          <div class="content-wrapper">
                            <div class="post-meta clearfix">
                              <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                              <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                              <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                            </div>

                            <h2 class="large-font">
                              <a
                                href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                            </h2>
                          </div>
                        </div>
                        @endif

                        @if($catPosts && !$catPosts->isEmpty())
                          @foreach($catPosts as $key => $catPost)
                            @if($key > 0 && $key < 5)
                              <div class="single-post bottom-post clearfix">
                                <div class="content-wrapper">
                                  <h2 class="small-font">
                                    <a
                                      href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                  </h2>
                                </div>

                              </div>
                            @endif
                          @endforeach
                        @endif
                        
                        <span class="view-all"><a href="/category/ta">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad"
                  data-index="3">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-1">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="#" target="_blank">
                        <img src="images/4a.png" alt="Home" title="Home">
                        <p>أعلان</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-2" class="so-panel widget widget_vmagazine_featured_slider panel-last-child"
                  data-index="4">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-2">
                    <div class="wrapper-vmagazine-post-col block_layout_1">
                      <h4 class="block-title"><span class="title-bg">التحليل الأساسي</span></h4>
                      <div class="vmagazine-post-col block-post-wrapper block_layout_1 wow zoomIn"
                        data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: zoomIn;">
                        <div class="block-header clearfix">
                        </div>
                        
                        @php
                          $category = null;
                          $firstPost = null;
                          $catPosts = null;
                          if(!$categories->isEmpty()) {
                            foreach($categories as $cat) {
                              if($cat->name === 'التحليل الاساسي') {
                                $category = $cat;
                                if(!$category->posts->isEmpty()) {
                                  $firstPost = $category->posts[0];
                                  $catPosts = $category->posts;
                                }
                              }
                            }
                          }
                        @endphp
                        
                        @if($firstPost)
                          <div class="single-post first clearfix">
                            <div class="post-thumb">
                              <a class="thumb-zoom"
                                href="/{{$firstPost['slug']}}"
                                title="{{$firstPost['title']}} ">
                                <img
                                  src="images/{{$firstPost['thumbnail']}}"
                                  alt="{{$firstPost['title']}}" title="{{$firstPost['title']}} ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>
                            <div class="content-wrapper">
                              <div class="post-meta clearfix">
                                <span class="post-view"><i class="far fa-eye"></i>{{$firstPost['views_count']}}</span>
                                <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                                <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                              </div>

                              <h2 class="large-font">
                                <a
                                  href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                              </h2>
                            </div>

                          </div>
                        @endif
                        @if($catPosts && !$catPosts->isEmpty())
                          @foreach($catPosts as $key => $catPost)
                            @if($key > 0 && $key < 5)
                            <div class="single-post bottom-post clearfix">
                              <div class="content-wrapper">
                                <h2 class="small-font">
                                  <a
                                    href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                </h2>
                              </div>

                            </div>
                            @endif
                          @endforeach
                        @endif  

                        <span class="view-all"><a href="/category/fc">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
                <div id="panel-38-1-1-3" class="so-panel widget widget_vmagazine_featured_slider panel-last-child"
                  data-index="4">
                  <div class="panel-widget-style panel-widget-style-for-38-1-1-2">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="#" target="_blank">
                        <img src="images/4a.png" alt="Home" title="Home">
                        <p>أعلان</p>
                      </a>

                    </div>

                  </div>
                </div>
              </div>
              <div id="pgc-38-1-2" class="panel-grid-cell">
                <div id="panel-38-1-2-0"
                  class="block_layout_2 so-panel widget widget_vmagazine_category_posts_slider vmagazine_category_posts_slider panel-first-child"
                  data-index="5">
                  <div class="block_layout_2 panel-widget-style panel-widget-style-for-38-1-2-0"
                    style=" direction: ltr; ">
                    <div class="vmagazine-cat-slider block-post-wrapper block_layout_2 no-bg">
                      <h4 class="block-title"><span class="title-bg">الأكثر مشاهدة</span></h4>
                      <div class="lSSlideOuter">
                        <div class="lSSlideWrapper usingCss"
                          style="transition-duration: 700ms; transition-timing-function: ease;">
                          <div class="lSSlideOuter">
                            <div class="lSSlideWrapper usingCss">
                              <ul class="featuredSlider widget-cat-slider lightSlider lsGrab lSSlide"
                                style="width: 2268px; transform: translate3d(-1134px, 0px, 0px); height: 230px; padding-bottom: 0%;">
                                
                                <li class="slide single-post clearfix clone left lslide"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/0d913edc-e208-46dd-9b9c-b825c5c20997.jpg"
                                      alt="شركة سي أي كابيتال القابضة للاستثمارات المالية"
                                      title="شركة سي أي كابيتال القابضة للاستثمارات المالية">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>91</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="#">سي
                                        أي كابيتال تختبر مقاومة رئيسية وفي حالة اختراقها يستهدف السهم هذه المستويات </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix lslide" style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/3f6afd62-8334-40ef-9f00-4541ae879eb2.jpg"
                                      alt="الاحتياطي الفيدرالي " title="الاحتياطي الفيدرالي ">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>111</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="#">الاحتياطي
                                        الفيدرالي يبقي على أسعار الفائدة ويستمر في التحفيز</a>
                                    </h3>
                                  </div>

                                </li>
                                <!-- Most Viewed the First Image only -->
                                <li class="slide single-post clearfix clone left lslide active"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img src="images/{{$mostViewed[0]['thumbnail']}}"
                                      alt="{{$mostViewed[0]['title']}}"
                                      title="{{$mostViewed[0]['title']}}">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta" style="color:white;">
                                      <span class="posted-on"><i class="far fa-clock"></i>{{$mostViewed[0]['readableCreatedAt']}}</span>
                                      <span class="likes"><i class="far fa-thumbs-up">{{$mostViewed[0]['likes_count']}}</i></span>
                                      <span class="post-view"><i class="fa fa-eye"></i>{{$mostViewed[0]['views_count']}}</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="/{{$mostViewed[0]['slug']}}">{{$mostViewed[0]['title']}}</a>
                                    </h3>
                                  </div>

                                </li>
                                <!-- Most Viewed the First Image only -->
                                <li class="slide single-post clearfix lslide active"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/6bdb9bc2-668c-44c4-9c41-ac1e3a4f8330.jpg"
                                      alt="شركة السويدي إليكتريك" title="شركة السويدي إليكتريك">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>6 days ago</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>93</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="#">السويدي
                                        إليكتريك وحزمه من الاخبار الايجابية ولكن السهم يستقبلها بمزيد من الهبوط </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix lslide" style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/0d913edc-e208-46dd-9b9c-b825c5c20997.jpg"
                                      alt="شركة سي أي كابيتال القابضة للاستثمارات المالية"
                                      title="شركة سي أي كابيتال القابضة للاستثمارات المالية">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>91</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="#">سي
                                        أي كابيتال تختبر مقاومة رئيسية وفي حالة اختراقها يستهدف السهم هذه المستويات </a>
                                    </h3>
                                  </div>

                                </li>
                                <li class="slide single-post clearfix clone right lslide"
                                  style="width: 378px; margin-right: 0px;">
                                  <div class="post-thumb">
                                    <img
                                      src="images/3f6afd62-8334-40ef-9f00-4541ae879eb2.jpg"
                                      alt="الاحتياطي الفيدرالي " title="الاحتياطي الفيدرالي ">
                                  </div>
                                  <div class="post-caption">
                                    <div class="post-meta">
                                      <span class="posted-on"><i class="far fa-clock"></i>last week</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>0</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>111</span>
                                    </div>

                                    <h3 class="small-font">
                                      <a
                                        href="#">الاحتياطي
                                        الفيدرالي يبقي على أسعار الفائدة ويستمر في التحفيز</a>
                                    </h3>
                                  </div>

                                </li>
                              </ul>
                              <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                            </div>
                            <ul class="lSPager lSpg" style="margin-top: 5px;">
                              <li class=""><a href="#">1</a></li>
                              <li class=""><a href="#">2</a></li>
                              <li class="active"><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li class=""><a href="#">5</a></li>
                              <li><a href="#">6</a></li>
                            </ul>
                          </div>
                          <div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div>
                        </div>
                        <ul class="lSPager lSpg" style="margin-top: 5px;">
                          <li><a href="#">undefined</a></li>
                          <li><a href="#">undefined</a></li>
                          <li><a href="#">undefined</a></li>
                          <li><a href="#">undefined</a></li>
                          <li><a href="#">undefined</a></li>
                          <li><a href="#">undefined</a></li>
                        </ul>
                      </div>

                    </div>

                  </div>
                </div>
                <div id="panel-38-1-2-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad"
                  data-index="6">
                  <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                    <a href="#" target="_blank">
                      <img src="images/3a.png" alt="Home" title="Home">
                      <p>أعلان</p>
                    </a>
                  </div>
                </div>
                <div id="panel-38-1-2-2" class="widget_text so-panel widget widget_custom_html" data-index="7">
                  <div class="widget_text sty-con-less-padd panel-widget-style panel-widget-style-for-38-1-2-2">
                    <h2 class="widget-title"><span class="title-bg">تواصل معنا</span></h2>
                    <div class="textwidget custom-html-widget">
                      <div class="apsc-icons-wrapper  apsc-theme-13" data-hover-color="0">
                        <div class="apsc-each-profile ">
                          <a class="apsc-facebook-icon apsc-icon-soc clearfix"
                            href="#" target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="fab fa-facebook fa-3x apsc-facebook"></i></span><span
                                  class="media-name"><span class="apsc-social-name">Facebook</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="#" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-twitter-icon apsc-icon-soc clearfix" href="https://twitter.com/"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="fab fa-twitter fa-3x apsc-twitter"></i></span><span class="media-name"><span
                                    class="apsc-social-name">Twitter</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://twitter.com/" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-youtube-icon apsc-icon-soc clearfix"
                            href="https://www.youtube.com/"
                            target="_blank">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-youtube fab fa-youtube fa-3x "></i></span><span class="media-name"><span
                                    class="apsc-social-name">Youtube</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">subscribe</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg"
                            href="https://www.youtube.com/"
                            target="_blank">
                            <div class="apsc_bttn">subscribe</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-linkedin-icon apsc-icon-soc clearfix"
                            href="https://www.linkedin.com/" target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-linkedin fab fa-linkedin fa-3x"></i></span><span
                                  class="media-name"><span class="apsc-social-name">linkedin</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://www.linkedin.com/" target="_blank"
                            rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-vk-icon apsc-icon-soc clearfix" href="https://vk.com/"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon"><i
                                    class="apsc-vk fab fa-vk fa-3x"></i></span><span class="media-name"><span
                                    class="apsc-social-name">linkedin</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="https://vk.com/" target="_blank" rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                        <div class="apsc-each-profile ">
                          <a class="apsc-github-icon apsc-icon-soc clearfix" href="#"
                            target="_blank" rel="noreferrer">
                            <div class="apsc-inner-block">
                              <span class="social-icon"><span class="apsc-fa-icon">
                                  <svg id="New_Text_Document" xmlns="http://www.w3.org/2000/svg" width="51.817"
                                    height="33" viewBox="0 0 51.817 36.376">
                                    <g id="Group_184">
                                      <path id="Path_760"
                                        d="M20.091,28.83h5.49C26,30.955,27.287,32.1,30.138,32.1c1.7,0,2.709-.793,2.709-2.032,0-1.284-2.1-1.659-4.624-2.265-3.506-.817-7.686-2.127-7.686-6.611,0-4.393,3.853-7.431,9.321-7.431,5.934,0,8.994,2.967,9.321,7.5h-5.4c-.351-2.125-1.379-3.2-3.971-3.2-1.612,0-2.616.817-2.616,2.056,0,1.47,2.312,1.8,4.975,2.383,3.433.793,7.36,1.985,7.36,6.518,0,4.508-3.575,7.36-9.369,7.36-6.307,0-9.647-3.458-10.069-7.546Zm26.4,7.126c-3.435-.258-4.066-1.87-4.088-4.883V24.3h-1.87V20.511H42.4V17.4l6.1-2.638v5.77h2.43V24.32H48.406v6.8c0,.56.3.84.888.84H50.86v4H46.492Zm5.326-7.71c0-4.954,0,5,0,0ZM15.559,19.063,0,11.053V8.106L15.49,0l.022,5.232-9.041,4.3,9.065,4.275Z"
                                        fill="#fff"></path>
                                      <path id="Path_761"
                                        d="M15.559,17.651.071,25.779.047,20.571l8.808-4.324L.024,12.019,0,6.716l15.534,8.015Z"
                                        transform="translate(0 6.904)" fill="#fff"></path>
                                    </g>
                                  </svg>
                                </span><span class="media-name"><span
                                    class="apsc-social-name">StockTwits</span></span></span>
                              <div class="apsc-count-wrapper"><span class="apsc-media-type">follow</span></div>
                            </div>
                          </a>
                          <a class="apsc-bttn-bg" href="#" target="_blank" rel="noreferrer">
                            <div class="apsc_bttn">follow</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-2-4" class="so-panel widget widget_vmagazine_recent_post panel-last-child"
                  data-index="8">
                  <div class="panel-widget-style panel-widget-style-for-38-1-2-4">
                    <h4 class="block-title"><span class="title-bg">اخبار العملات</span></h4>
                    <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
                      @if(!$categories->isEmpty())
                        @foreach($categories as $cat)
                          @if($cat->name === 'اخبار العملات')
                            @php
                              if(!$cat->posts->isEmpty()) {
                                $catPosts = $cat->posts; 
                              }
                            @endphp
                            @if($catPosts && !$catPosts->isEmpty())
                              @foreach($catPosts as $key => $catPost)
                                @if($key < 3)
                                  <div class="recent-posts-content wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="image-recent-post post-thumb">
                                      <a href="/{{$catPost['slug']}}"
                                        class="thumb-zoom">
                                        <img
                                          src="images/{{$catPost['thumbnail']}}"
                                          alt="{{$catPost['title']}} " title="{{$catPost['title']}}">
                                        <div class="image-overlay"></div>
                                      </a>
                                    </div>
                                    <div class="recent-post-content">
                                      <a style=" font-size: 1rem !important; "
                                        href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                    </div>
                                  </div>
                                @endif
                              @endforeach
                            @endif
                          @endif
                        @endforeach
                      @endif
                      <span class="view-all"><a href="/category/fn">شاهد المزيد</a></span>
                    </div>
                  </div>
                </div>
                <div id="panel-38-1-2-3" class="so-panel widget widget_vmagazine_recent_post panel-last-child"
                  data-index="8">
                  <div class="panel-widget-style panel-widget-style-for-38-1-2-3">
                    <h4 class="block-title"><span class="title-bg">العملات الرقمية</span></h4>
                    <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
                      

                      @php
                        $category = null;
                        $catPosts = null;
                        if(!$categories->isEmpty()) {
                          foreach($categories as $cat) {
                            if($cat->name === 'العملات الرقمية') {
                              $category = $cat;
                              if(!$category->posts->isEmpty()) {
                                $catPosts = $category->posts;
                              }
                            }
                          }
                        }
                      @endphp
                      
                      @if($catPosts && !$catPosts->isEmpty())
                        @foreach($catPosts as $key => $catPost)
                          @if($key < 3)
                          <div class="recent-posts-content wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="image-recent-post post-thumb">
                              <a href="/{{$catPost['slug']}}"
                                class="thumb-zoom">
                                <img
                                  src="images/{{$catPost['thumbnail']}}"
                                  alt="{{$catPost['title']}} " title="{{$catPost['title']}} ">
                                <div class="image-overlay"></div>
                              </a>
                            </div>
                            <div class="recent-post-content">
                              <a style=" font-size: 1rem !important; "
                                href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                            </div>
                          </div>
                          @endif
                        @endforeach
                      @endif

                      
                      <span class="view-all"><a href="/category/cc">شاهد المزيد</a></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-6" class="panel-grid panel-has-style">
            <div class=" panel-row-style-for-38-6" data-stretch-type="full-stretched">
              <div id="pgc-38-6-0" class="panel-grid-cell">
                <div id="panel-38-6-0-0"
                  class="so-panel widget widget_vmagazine_category_slider_tab vmagazine_category_slider_tab panel-first-child panel-last-child"
                  data-index="18">
                  <div class="panel-widget-style panel-widget-style-for-38-6-0-0">
                    <div class="vmagazine-slider-tab slider-tab-wrapper">
                      <div class="block-post-wrapper block_layout_1">
                        <div class="block-header clearfix">
                          <h4 class="block-title"><span class="title-bg">الفديوهات</span></h4>
                        </div>

                        <div class="block-content-wrapper">
                          <div class="block-loader" style="display: none;">
                            <div class="sampleContainer">
                              <div class="loader">
                                <span class="dot dot_1"></span>
                                <span class="dot dot_2"></span>
                                <span class="dot dot_3"></span>
                                <span class="dot dot_4"></span>
                              </div>
                            </div>
                          </div>
                          <div class="block-cat-content 3" data-slug="3">
                            <div class="tab-cat-slider sl-before-load omanymagdy slick-initialized slick-slider">
                              <div class="slick-list draggable" style="padding: 0px;">
                                <div class="slick-track"
                                  style="opacity: 1; width: 25908px; transform: translate3d(-1143px, 0px, 0px);">
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-4"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-3"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع "
                                          title="بعض من نتائج قسم التحليل الفني في موقع "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="-2"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned slick-active" data-slick-index="-1"
                                    aria-hidden="false" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="0"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-current slick-active slick-center"
                                    data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="0"><img
                                          src="images/sddefault(4).jpg"
                                          alt="حجم الاقتصاد غير الرسمي في مصر؟ "
                                          title="حجم الاقتصاد غير الرسمي في مصر؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-active" data-slick-index="1"
                                    aria-hidden="false" tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="0"><img
                                          src="images/sddefault(5).jpg"
                                          alt=" بطاقات الائتمان في البنك الأهلي وأنواعها؟"
                                          title=" بطاقات الائتمان في البنك الأهلي وأنواعها؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="2" aria-hidden="true"
                                    tabindex="0" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(6).jpg"
                                          alt="5 أسهم مرشحة للصعود في البورصة المصرية "
                                          title="5 أسهم مرشحة للصعود في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="3" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(7).jpg"
                                          alt=" من هو الأحمق الأكبر في البورصة ؟"
                                          title=" من هو الأحمق الأكبر في البورصة ؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="4" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(8).jpg"
                                          alt="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"
                                          title="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="5" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(9).jpg"
                                          alt="بالخطوات كيفية فتح حساب في البنك الأهلي "
                                          title="بالخطوات كيفية فتح حساب في البنك الأهلي "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="6" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(10).jpg"
                                          alt="حجم استثمارات السوريين في مصر "
                                          title="حجم استثمارات السوريين في مصر "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="7" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(11).jpg"
                                          alt="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات "
                                          title="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="8" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(12).jpg"
                                          alt="هل ينخفض سعر الفائدة في مصر ؟ "
                                          title="هل ينخفض سعر الفائدة في مصر ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="9" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(13).jpg"
                                          alt="تعرف علي ثروة مصر من الغاز الطبيعي ؟ "
                                          title="تعرف علي ثروة مصر من الغاز الطبيعي ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="10" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(14).jpg"
                                          alt="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة "
                                          title="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="11" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(15).jpg"
                                          alt=" ما هو البيع على المكشوف Short Selling"
                                          title=" ما هو البيع على المكشوف Short Selling"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="12" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(16).jpg"
                                          alt="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى "
                                          title="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="13" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(17).jpg"
                                          alt="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ "
                                          title="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="14" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(18).jpg"
                                          alt="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة "
                                          title="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="15" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(19).jpg"
                                          alt="6 مبادئ هامة يعتمد عليها التحليل المالي "
                                          title="6 مبادئ هامة يعتمد عليها التحليل المالي "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="16" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(20).jpg"
                                          alt="4 حلول للتغلب علي الأزمة العقارية "
                                          title="4 حلول للتغلب علي الأزمة العقارية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="17" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(21).jpg"
                                          alt="نظرة عامة على أداء مؤشرات البورصة المصرية "
                                          title="نظرة عامة على أداء مؤشرات البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="18" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(22).jpg"
                                          alt="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية "
                                          title="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="19" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(23).jpg"
                                          alt="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية "
                                          title="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="20" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(24).jpg"
                                          alt="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ "
                                          title="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="21" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(25).jpg"
                                          alt="اهم 6 نصائح لكل من يريد الاستثمار في البورصة "
                                          title="اهم 6 نصائح لكل من يريد الاستثمار في البورصة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="22" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(26).jpg"
                                          alt="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية "
                                          title="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="23" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(27).jpg"
                                          alt="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 "
                                          title="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="24" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(28).jpg"
                                          alt="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية "
                                          title="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="25" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(29).jpg"
                                          alt="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) "
                                          title="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="26" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(30).jpg"
                                          alt="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها "
                                          title="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="27" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(31).jpg"
                                          alt="الداو جونز والسوق المصري 2019" title="الداو جونز والسوق المصري 2019"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="28" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="29" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع "
                                          title="بعض من نتائج قسم التحليل الفني في موقع "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="30" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/Zb4qZtBcLq4" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide" data-slick-index="31" aria-hidden="true"
                                    tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="32"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(4).jpg"
                                          alt="حجم الاقتصاد غير الرسمي في مصر؟ "
                                          title="حجم الاقتصاد غير الرسمي في مصر؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="33"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(5).jpg"
                                          alt=" بطاقات الائتمان في البنك الأهلي وأنواعها؟"
                                          title=" بطاقات الائتمان في البنك الأهلي وأنواعها؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="34"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(6).jpg"
                                          alt="5 أسهم مرشحة للصعود في البورصة المصرية "
                                          title="5 أسهم مرشحة للصعود في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="35"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(7).jpg"
                                          alt=" من هو الأحمق الأكبر في البورصة ؟"
                                          title=" من هو الأحمق الأكبر في البورصة ؟"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="36"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(8).jpg"
                                          alt="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"
                                          title="الحقيقة وراء انخفاض سعر الدولار في مصر وهل يعاود الأرتفاع"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="37"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(9).jpg"
                                          alt="بالخطوات كيفية فتح حساب في البنك الأهلي "
                                          title="بالخطوات كيفية فتح حساب في البنك الأهلي "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="38"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(10).jpg"
                                          alt="حجم استثمارات السوريين في مصر "
                                          title="حجم استثمارات السوريين في مصر "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="39"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(11).jpg"
                                          alt="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات "
                                          title="تعرف علي كيفية حساب العلاوات الخمسة لاصحاب المعاشات "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="40"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(12).jpg"
                                          alt="هل ينخفض سعر الفائدة في مصر ؟ "
                                          title="هل ينخفض سعر الفائدة في مصر ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="41"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(13).jpg"
                                          alt="تعرف علي ثروة مصر من الغاز الطبيعي ؟ "
                                          title="تعرف علي ثروة مصر من الغاز الطبيعي ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="42"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(14).jpg"
                                          alt="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة "
                                          title="مصر وأمم أفريقيا 2019 جدوي اقتصادية وأرباح متوقعة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="43"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(15).jpg"
                                          alt=" ما هو البيع على المكشوف Short Selling"
                                          title=" ما هو البيع على المكشوف Short Selling"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="44"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(16).jpg"
                                          alt="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى "
                                          title="صدمات مستثمري البورصة المصرية وحلول انعاشها مرى اخرى "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="45"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(17).jpg"
                                          alt="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ "
                                          title="تعرف علي حجم أموال المعاشات وما هي الفئة المستفيدة من العلاوة؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="46"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(18).jpg"
                                          alt="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة "
                                          title="لماذا ينخفض سعر الدولار في مصر؟ وما المتوقع الفترة القادمة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="47"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(19).jpg"
                                          alt="6 مبادئ هامة يعتمد عليها التحليل المالي "
                                          title="6 مبادئ هامة يعتمد عليها التحليل المالي "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="48"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(20).jpg"
                                          alt="4 حلول للتغلب علي الأزمة العقارية "
                                          title="4 حلول للتغلب علي الأزمة العقارية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="49"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(21).jpg"
                                          alt="نظرة عامة على أداء مؤشرات البورصة المصرية "
                                          title="نظرة عامة على أداء مؤشرات البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="50"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(22).jpg"
                                          alt="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية "
                                          title="الرؤية الفنية لأداء أبرز 5 أسهم في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="51"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(23).jpg"
                                          alt="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية "
                                          title="4 مُحفزات تنعش آمال المستثمرين في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="52"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(24).jpg"
                                          alt="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ "
                                          title="ما مصير سعر الفائدة في الاجتماع القادم للمركزي المصري؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="53"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(25).jpg"
                                          alt="اهم 6 نصائح لكل من يريد الاستثمار في البورصة "
                                          title="اهم 6 نصائح لكل من يريد الاستثمار في البورصة "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="54"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(26).jpg"
                                          alt="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية "
                                          title="نظرة على أداء الربع الأول وتوقعات الربع الثاني للبورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="55"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(27).jpg"
                                          alt="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 "
                                          title="تعرّف على سبب أكبر اقبال للاجانب في البورصة المصرية منذ 2014 "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="56"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(28).jpg"
                                          alt="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية "
                                          title="تعرف على أهم عوامل نجاح الطروحات الحكومية في البورصة المصرية "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="57"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(29).jpg"
                                          alt="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) "
                                          title="إجعل صفقة رابحة تعادل 10 صفقات خاسرة (صفقة لايف) "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="58"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(30).jpg"
                                          alt="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها "
                                          title="كيفية عمل باك تيست لاستراتيجيات التداول التي تريد اختبارها "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="59"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(31).jpg"
                                          alt="الداو جونز والسوق المصري 2019" title="الداو جونز والسوق المصري 2019"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned slick-center" data-slick-index="60"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault.jpg"
                                          alt="في رفع الفائدة : العلم ضد التاريخ"
                                          title="في رفع الفائدة : العلم ضد التاريخ"></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="61"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(1).jpg"
                                          alt="بعض من نتائج قسم التحليل الفني في موقع "
                                          title="بعض من نتائج قسم التحليل الفني في موقع "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="62"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(2).jpg"
                                          alt="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "
                                          title="كيف تقوم بإعداد خطة متاجرة ناجحه في سوق الفوركس ؟ "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                  <div class="single-post slick-slide slick-cloned" data-slick-index="63"
                                    aria-hidden="true" tabindex="-1" style="width: 381px;">
                                    <div class="post-thumb"><a href="https://youtu.be/" tabindex="-1"><img
                                          src="images/sddefault(3).jpg"
                                          alt="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "
                                          title="اهم نصائح لابد ان تفعلها في البورصة والفوركس إذا اردت النجاح "></a>
                                      <div class="image-overlay"></div><span class="post-format-icon video-icon"><i
                                          class="icon_film"></i></span>
                                      <div class="post-caption"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-2" class="panel-grid panel-has-style" style="direction: rtl;">
            <div class="panel-row-style panel-row-style-for-38-2">
              <div id="pgc-38-2-0" class="panel-grid-cell">
                <div id="panel-38-2-0-0"
                  class="so-panel widget widget_vmagazine_block_posts_ajax vmagazine_block_posts_ajax panel-first-child panel-last-child"
                  data-index="9">
                  <div class="panel-widget-style panel-widget-style-for-38-2-0-0">
                    <div class="vmagazine-mul-cat block-post-wrapper layout-two clearfix">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">الاسواق العربية</span></h4>
                        <div class="child-cat-tabs">
                          <ul class="vmagazine-tab-links">
                            <li class="active">
                              <a href="javascript:void(0)" data-meta="show" data-id="1" data-slug="1" data-link="SS"
                                data-layout="block_layout_2" data-count="6" data-length="0" data-btn="شاهد المزيد"
                                rel="noreferrer">السوق السعودي</a>
                            </li>
                            <li>
                              <a href="javascript:void(0)" data-meta="show" data-id="2" data-slug="2" data-link="ES"
                                data-layout="block_layout_2" data-count="6" data-length="0" data-btn="شاهد المزيد"
                                rel="noreferrer">السوق المصري</a>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="block-content-wrapper">
                        <div class="block-loader" style="display: none;">
                          <div class="sampleContainer">
                            <div class="loader">
                              <span class="dot dot_1"></span>
                              <span class="dot dot_2"></span>
                              <span class="dot dot_3"></span>
                              <span class="dot dot_4"></span>
                            </div>
                          </div>
                        </div>
                        <div class="block-cat-content 1">

                          @php
                            $category = null;
                            $firstPost = null;
                            $catPosts = null;
                            if(!$categories->isEmpty()) {
                              foreach($categories as $cat) {
                                if($cat->name === 'السوق السعودي') {
                                  $category = $cat;
                                  if(!$category->posts->isEmpty()) {
                                    $firstPost = $category->posts[0];
                                    $catPosts = $category->posts;
                                  }
                                }
                              }
                            }
                          @endphp
                         
                          @if($firstPost)
                            <div class="left-post-wrapper wow fadeInDown" data-wow-duration="0.7s"
                              style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInDown;">
                              <div class="single-post clearfix">
                                <div class="post-thumb">
                                  <a class="thumb-zoom"
                                    href="/{{$firstPost['slug']}}"
                                    title="{{$firstPost['title']}}">
                                    <img
                                      src="images/{{$firstPost['thumbnail']}}"
                                      alt="{{$firstPost['title']}}"
                                      title="{{$firstPost['title']}}">
                                    <div class="image-overlay"></div>
                                  </a>
                                  <span class="post-format-icon video-icon "><i class="icon_film"></i></span>
                                </div>

                                <div class="post-caption-wrapper">
                                  <div class="post-caption-inner">
                                    <div class="post-meta clearfix">
                                      <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                                      <span class="posted-on"><i class="fa fa-clock-o"></i>{{explode(' ', $firstPost['created_at'])[0]}}</span>
                                    </div>
                                    <h2 class="small-font">
                                      <a
                                        href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                                    </h2>
                                  </div>
                                </div>

                              </div>

                            </div>
                          @endif
                          <div class="right-posts-wrapper wow fadeInUp" data-wow-duration="0.7s"
                            style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                            @if($catPosts && !$catPosts->isEmpty())
                              @foreach($catPosts as $key => $catPost)
                                @if($key > 0 && $key < 5)
                                <div class="single-post clearfix">
                                  <div class="post-thumb">
                                    <a class="thumb-zoom"
                                      href="/{{$catPost['slug']}}"
                                      title="{{$catPost['title']}}">
                                      <img
                                        src="images/{{$catPost['thumbnail']}}"
                                        alt="{{$catPost['title']}}" title="{{$catPost['title']}}">
                                      <div class="image-overlay"></div>
                                    </a>
                                  </div>

                                  <div class="post-caption-wrapper">
                                    <div class="post-caption-inner">
                                      <div class="post-meta clearfix">
                                        <span class="comments"><i class="far fa-thumbs-up"></i>{{$catPost['likes_count']}}</span>
                                        <span class="post-view"><i class="fa fa-eye"></i>{{$catPost['views_count']}}</span>
                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{explode(' ', $catPost['created_at'])[0]}}</span>
                                      </div>
                                      <h2 class="small-font">
                                        <a
                                          href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                      </h2>
                                    </div>
                                  </div>

                                </div>
                                @endif
                              @endforeach
                            @endif


                            <span class="view-all"><a href="/category/ss">شاهد
                                المزيد</a></span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="pgc-38-2-1" class="panel-grid-cell">
                <div id="panel-38-2-1-0"
                  class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad panel-first-child panel-last-child"
                  data-index="10">
                  <div class="panel-widget-style panel-widget-style-for-38-2-1-0">
                    <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                      <a href="#" target="_blank">
                        <img src="images/5a.png" alt="Home" title="Home"
                          style="height: 600px;">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pg-38-4" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-38-4">
              <div id="pgc-38-4-0" class="panel-grid-cell">
                <div id="panel-38-4-0-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="12">
                  <div class="panel-widget-style panel-widget-style-for-38-4-0-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">انفوجرافيك</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">
                          @php
                            $category = null;
                            $firstPost = null;
                            $catPosts = null;
                            if(!$categories->isEmpty()) {
                              foreach($categories as $cat) {
                                if($cat->name === 'انفوجرافيك') {
                                  $category = $cat;
                                  if(!$category->posts->isEmpty()) {
                                    $firstPost = $category->posts[0];
                                    $catPosts = $category->posts;
                                  }
                                }
                              }
                            }
                          @endphp
                          @if($firstPost)
                            <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                              style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="/{{$firstPost['slug']}}"
                                  title="{{$firstPost['title']}}">
                                  <img
                                    src="images/{{$firstPost['thumbnail']}}"
                                    alt="{{$firstPost['title']}}" title="{{$firstPost['title']}}">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                                </div>

                                <h2 class="large-font">
                                  <a
                                    href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                                </h2>
                              </div>

                            </div>
                          @endif
                          
                          @if($catPosts && !$catPosts->isEmpty())
                            @foreach($catPosts as $key => $catPost)
                              @if($key > 0 && $key < 3)
                                <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                                  style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                                  <div class="post-thumb">
                                    <a class="thumb-zoom"
                                      href="/{{$catPost['slug']}}"
                                      title="{{$catPost['title']}}">
                                      <img
                                        src="images/{{$catPost['thumbnail']}}"
                                        alt="{{$catPost['title']}}" title="{{$catPost['title']}}">
                                      <div class="image-overlay"></div>
                                    </a>
                                  </div>

                                  <div class="post-content-wrapper clearfix">
                                    <div class="post-meta clearfix">
                                      <span class="posted-on"><i class="far fa-clock"></i>{{$catPost['readableCreatedAt']}}</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>{{$catPost['likes_count']}}</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>{{$catPost['views_count']}}</span>
                                    </div>

                                    <h2 class="large-font">
                                      <a
                                        href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                    </h2>
                                  </div>

                                </div>
                              @endif
                            @endforeach
                          @endif

                        </div>
                        <span class="view-all"><a href="/category/fc">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="pgc-38-4-1" class="panel-grid-cell">
                <div id="panel-38-4-1-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="13">
                  <div class="panel-widget-style panel-widget-style-for-38-4-1-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">جراف العملات</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">
                          
                          @php
                            $category = null;
                            $firstPost = null;
                            $catPosts = null;
                            if(!$categories->isEmpty()) {
                              foreach($categories as $cat) {
                                if($cat->name === 'جراف العملات') {
                                  $category = $cat;
                                  if(!$category->posts->isEmpty()) {
                                    $firstPost = $category->posts[0];
                                    $catPosts = $category->posts;
                                  }
                                }
                              }
                            }
                          @endphp

                          @if($firstPost)
                            <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                              style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="/{{$firstPost['slug']}}"
                                  title="{{$firstPost['title']}}">
                                  <img
                                    src="images/{{$firstPost['thumbnail']}}"
                                    alt="{{$firstPost['title']}}" title="{{$firstPost['title']}}">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                                </div>

                                <h2 class="large-font">
                                  <a
                                    href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                                </h2>
                              </div>

                            </div>
                          @endif
                          @if($catPosts && !$catPosts->isEmpty())
                            @foreach($catPosts as $key => $catPost)
                              @if($key > 0 && $key < 3)
                                <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                                  style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                                  <div class="post-thumb">
                                    <a class="thumb-zoom"
                                      href="/{{$catPost['slug']}}"
                                      title="{{$catPost['title']}}">
                                      <img
                                        src="images/{{$catPost['thumbnail']}}"
                                        alt="{{$catPost['title']}}" title="{{$catPost['title']}}">
                                      <div class="image-overlay"></div>
                                    </a>
                                  </div>

                                  <div class="post-content-wrapper clearfix">
                                    <div class="post-meta clearfix">
                                      <span class="posted-on"><i class="far fa-clock"></i>{{$catPost['readableCreatedAt']}}</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>{{$catPost['likes_count']}}</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>{{$catPost['views_count']}}</span>
                                    </div>

                                    <h2 class="large-font">
                                      <a
                                        href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                    </h2>
                                  </div>

                                </div>
                              @endif
                            @endforeach
                          @endif

                        </div>
                        <span class="view-all"><a href="/category/fg">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div id="pgc-38-4-2" class="panel-grid-cell">
                <div id="panel-38-4-2-0"
                  class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child"
                  data-index="14">
                  <div class="panel-widget-style panel-widget-style-for-38-4-2-0">
                    <div class="vmagazine-grid-list-wrapp grid no-desc">
                      <div class="block-header clearfix">
                        <h4 class="block-title"><span class="title-bg">القسم التعليمي</span></h4>
                      </div>

                      <div class="vmagazine-grid-list block-post-wrapper grid">
                        <div class="posts-wrap">

                          @php
                            $category = null;
                            $firstPost = null;
                            $catPosts = null;
                            if(!$categories->isEmpty()) {
                              foreach($categories as $cat) {
                                if($cat->name === 'القسم التعليمي') {
                                  $category = $cat;
                                  if(!$category->posts->isEmpty()) {
                                    $firstPost = $category->posts[0];
                                    $catPosts = $category->posts;
                                  }
                                }
                              }
                            }
                          @endphp

                          @if($firstPost)
                            <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s"
                              style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                              <div class="post-thumb">
                                <a class="thumb-zoom"
                                  href="/{{$firstPost['slug']}}"
                                  title="{{$firstPost['title']}} ">
                                  <img
                                    src="images/{{$firstPost['thumbnail']}}"
                                    alt="{{$firstPost['title']}} " title="{{$firstPost['title']}} ">
                                  <div class="image-overlay"></div>
                                </a>
                              </div>

                              <div class="post-content-wrapper clearfix">
                                <div class="post-meta clearfix">
                                  <span class="posted-on"><i class="far fa-clock"></i>{{$firstPost['readableCreatedAt']}}</span>
                                  <span class="comments"><i class="far fa-thumbs-up"></i>{{$firstPost['likes_count']}}</span>
                                  <span class="post-view"><i class="fa fa-eye"></i>{{$firstPost['views_count']}}</span>
                                </div>

                                <h2 class="large-font">
                                  <a
                                    href="/{{$firstPost['slug']}}">{{$firstPost['title']}}</a>
                                </h2>
                              </div>

                            </div>
                          @endif
                          
                          @if($catPosts && !$catPosts->isEmpty())
                            @foreach($catPosts as $key => $catPost)
                              @if($key > 0 && $key < 3)
                                <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s"
                                  style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;">
                                  <div class="post-thumb">
                                    <a class="thumb-zoom"
                                      href="/{{$catPost['slug']}}"
                                      title="{{$catPost['title']}}">
                                      <img
                                        src="images/{{$catPost['thumbnail']}}"
                                        alt="{{$catPost['title']}}" title="{{$catPost['title']}}">
                                      <div class="image-overlay"></div>
                                    </a>
                                  </div>

                                  <div class="post-content-wrapper clearfix">
                                    <div class="post-meta clearfix">
                                      <span class="posted-on"><i class="far fa-clock"></i>{{$catPost['readableCreatedAt']}}</span>
                                      <span class="comments"><i class="far fa-thumbs-up"></i>{{$catPost['likes_count']}}</span>
                                      <span class="post-view"><i class="fa fa-eye"></i>{{$catPost['views_count']}}</span>
                                    </div>

                                    <h2 class="large-font">
                                      <a
                                        href="/{{$catPost['slug']}}">{{$catPost['title']}}</a>
                                    </h2>
                                  </div>

                                </div>
                              @endif
                            @endforeach
                          @endif

                        </div>
                        <span class="view-all"><a href="/category/lf">شاهد المزيد</a></span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection