@extends('front-layout.layout')
@section('content')
<div id="content" class="site-content" style="transform: none;">
  <div class="vmagazine-breadcrumb-wrapper ">
    <div class="vmagazine-bread-home">
      <div class="vmagazine-bread-wrapp vmagazine-container">
        <div class="vmagazine-breadcrumb">
          <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items">
              <li class="trail-item trail-begin"><a href="{{asset('/')}}" rel="home"><span>الرئيسية</span></a>
              </li>
              <li class="trail-item "><span><a href="/category/{{$post['myPost']['category']['cat_code']}}" class="cat-30"
                    rel="category tag">{{$post['myPost']['category']['name']}}</a></span></li>
              <li class="trail-item trail-end current">
                <span>{{str_replace(' ', '-', $post['myPost']['title'])}}</span></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="vmagazine-container container-wrapp-inner" style="transform: none;">
    <div id="primary" class="content-area post-single-layout1 vmagazine-content">
      <main id="main" class="site-main" role="main">
        <article id="post-496"
          class="post-496 post type-post status-publish format-standard has-post-thumbnail hentry category-fun category-sports tag-fashion tag-trending">
          <span class="cat-links"><a href="/category/{{$post['myPost']['category']['cat_code']}}" class="cat-30"
              rel="category tag">{{$post['myPost']['category']['name']}}</a></span>
          <header class="entry-header">
            <h1 class="entry-title">{{$post['myPost']['title']}}</h1>
          </header>

          <div class="entry-meta clearfix">
            <span class="posted-on"><i class="fas fa-clock"></i>{{$post['readableCreatedAtDetailed']}}</span>
            <span class="posted-on"><i class="fa fa-user"></i><a class="author-title"
                href="https://vision-tgi.com/author_page?ID=955e3a31-a878-4fa5-912b-37254e8f8a17">{{$fullName}}
              </a></span>
            <span class="comments"><i class="fa fa-thumbs-up"
                onclick="if (!window.__cfRLUnblockHandlers) return false; myFunction(this, &#39;3295&#39;, &#39;ar&#39;)">
                {{$post['myPost']['likes_count']}}</i></span>
            <span class="post-view"><i class="fa fa-eye"></i>{{$post['myPost']['views_count']}}</span>
          </div>

          <div class="entry-thumb">
            <img width="1800" height="750"
              src="/images/{{$post['myPost']['thumbnail']}}"
              class="attachment-vmagazine-single-large size-vmagazine-single-large wp-post-image"
              alt="{{$post['myPost']['title']}}">
          </div>
          <div class="entry-content clearfix">
            <div id="idTextPanel" class="jqDnR">
{!!$post['myPost']['body']!!}
            </div>
          </div>
          <div class="entry-content clearfix">
            <div class="vmagazine-author-metabox clearfix">
              <h4 class="box-title">
                <span class="title-bg">شارك المقال
                </span>
              </h4>
              <div class="vmag-author-wrapper">

                <div class="author-desc-wrapper">
                  <div class="author-description" style="text-align: -webkit-center;">
                    <div class="author-social" style="width: 100%;">
                      <span class="social-icon-wrap">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/share?url=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://vkontakte.ru/share.php?url=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          target="_blank"><i class="fab fa-vk"></i></a>
                        <a href="https://web.whatsapp.com/send?text=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          data-action="share/whatsapp/share" target="_blank" class="hidden-xs hidden-sm"><i
                            class="fab fa-whatsapp"></i></a>
                        <a href="https://api.stocktwits.com/widgets/share?body=https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
                          id="embedded_st-share-action" target="_blank" class="hidden-xs hidden-sm"> <svg
                            id="New_Text_Document" data-name="New Text Document" xmlns="http://www.w3.org/2000/svg"
                            width="10" height="15" viewBox="0 0 18.546 38.957">
                            <path id="Path_38" data-name="Path 38"
                              d="M18.546,22.722,0,13.175V9.662L18.464,0l.026,6.236L7.713,11.362l10.805,5.1Z"
                              fill="#fff"></path>
                            <path id="Path_39" data-name="Path 39"
                              d="M18.546,19.75.085,29.438.056,23.231l10.5-5.154L.029,13.037,0,6.716,18.516,16.27Z"
                              transform="translate(0 9.519)" fill="#fff"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="vmagazine-related-wrapper">
              <h4 class="related-title">
                <span class="title-bg">اقرأ ايضا</span>
              </h4>
              <div class="related-posts-wrapper clearfix">
                
                @if($categoryPosts && !$categoryPosts->isEmpty())
                  @foreach($categoryPosts as $key => $categoryPost)
                    @if($key < 4)
                      <div class="single-post">
                        <div class="post-thumb">
                          <a
                            href="{{$categoryPost['slug']}}">
                            <img
                              src="/images/{{$categoryPost['thumbnail']}}"
                              alt="{{$categoryPost['title']}}"
                              title="{{$categoryPost['title']}}">
                          </a>
                          <span class="cat-links"><a href="/category/{{$post['myPost']['category']['cat_code']}}" class="cat-30"
                              rel="category tag">{{$post['myPost']['category']['name']}}</a></span>
                        </div>
                        <div class="related-content-wrapper">
                          <div class="post-meta">
                            <span class="posted-on"><i class="fas fa-clock"></i>{{$categoryPost['readableCreatedAtDetailed']}}</span>
                            <span class="comments"><i class="fa fa-thumbs-up"></i>{{$categoryPost['likes_count']}}</span>
                            <span class="post-view"><i class="fa fa-eye"></i>{{$categoryPost['views_count']}}</span>
                            <h3 class="small-font">
                              <a
                                href="/{{$categoryPost['slug']}}">{{$categoryPost['slug']}}
                              </a>
                            </h3>
                            <div class="post-contents">{{$categoryPost['excerpt']}}</div>
                            <a href="/{{$categoryPost['slug']}}"
                              class="vmagazine-related-more">اقرأ المزيد</a>
                          </div>
                        </div>
                      </div>
                    @endif
                  @endforeach
                @endif
                
              </div>
            </div>


          </div>
        </article>

      </main>

    </div>
    <!-- <aside id="secondary" class="widget-area vmagazine-sidebar" role="complementary"
      style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
      <div class="theiaStickySidebar"
        style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-608px); top: 0px; left: 84.5px; width: 300px;">
        <div id="vmagazine_recent_post-3" class="widget widget_vmagazine_recent_post">
          <h4 class="block-title"><span class="title-bg">اهم المستجدات</span></h4>
          <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <div class="image-recent-post post-thumb">
                <a href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%AB%D9%82%D8%A9-%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D9%81%D9%8A-%D8%A3%D9%84%D9%85%D8%A7%D9%86%D9%8A%D8%A7-%D9%88%D9%81%D8%B1%D9%86%D8%B3%D8%A7-%D8%AA%D8%B4%D9%87%D8%AF-%D8%AA%D8%B9%D8%A7%D9%81%D9%8A-%D8%AD%D8%B0%D8%B1"
                  class="thumb-zoom">
                  <img class="lazy" alt="قطاع الأعمال ألمانيا " "="" title=" قطاع الأعمال ألمانيا " src=" ./OFEED _
                    الدريس يحقق مستهدفنا الأول ويقترب من المستهدف الثاني والان ننصح
                    بالاتي_files/7183c547-4217-4147-843c-820233af4359.png" style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=FN">اخبار العملات</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%AB%D9%82%D8%A9-%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D9%81%D9%8A-%D8%A3%D9%84%D9%85%D8%A7%D9%86%D9%8A%D8%A7-%D9%88%D9%81%D8%B1%D9%86%D8%B3%D8%A7-%D8%AA%D8%B4%D9%87%D8%AF-%D8%AA%D8%B9%D8%A7%D9%81%D9%8A-%D8%AD%D8%B0%D8%B1">ثقة
                  قطاع الأعمال في ألمانيا وفرنسا تشهد تعافي حذر</a>
              </div>
            </div>
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible;">
              <div class="image-recent-post post-thumb">
                <a href="https://%D8%AA%D8%B1%D8%A7%D8%AC%D8%B9-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D8%A7%D8%B1-%D8%A7%D9%84%D9%86%D9%8A%D9%88%D8%B2%D9%8A%D9%84%D9%86%D8%AF%D9%8A-%D8%A8%D8%B9%D8%AF-%D8%A8%D9%8A%D8%A7%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A-%D8%A7%D9%84%D9%86%D9%8A%D9%88%D8%B2%D9%8A%D9%84%D9%86%D8%AF%D9%8A/"
                  class="thumb-zoom">
                  <img class="lazy" alt="الدولار النيوزيلندي " "="" title=" الدولار النيوزيلندي " src=" ./OFEED _ الدريس
                    يحقق مستهدفنا الأول ويقترب من المستهدف الثاني والان ننصح
                    بالاتي_files/8571ac20-7fe8-4f69-833b-4fa2c9cd7e02.jpg" style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=FC">التحليل الأساسي</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%AA%D8%B1%D8%A7%D8%AC%D8%B9-%D8%A7%D9%84%D8%AF%D9%88%D9%84%D8%A7%D8%B1-%D8%A7%D9%84%D9%86%D9%8A%D9%88%D8%B2%D9%8A%D9%84%D9%86%D8%AF%D9%8A-%D8%A8%D8%B9%D8%AF-%D8%A8%D9%8A%D8%A7%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D9%85%D8%B1%D9%83%D8%B2%D9%8A-%D8%A7%D9%84%D9%86%D9%8A%D9%88%D8%B2%D9%8A%D9%84%D9%86%D8%AF%D9%8A">تراجع
                  الدولار النيوزيلندي بعد بيان البنك المركزي النيوزيلندي</a>
              </div>
            </div>
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible;">
              <div class="image-recent-post post-thumb">
                <a href="https://%D8%A7%D9%84%D8%AA%D8%AD%D9%84%D9%8A%D9%84-%D8%A7%D9%84%D9%81%D9%86%D9%8A-%D9%84%D9%8A%D9%88%D9%85-24-%D9%8A%D9%88%D9%86%D9%8A%D9%87-2020-/"
                  class="thumb-zoom">
                  <img class="lazy" alt="التحليل الفني ليوم 24 يونيه 2020 " "="" title=" التحليل الفني ليوم 24 يونيه
                    2020 " src=" ./OFEED _ الدريس يحقق مستهدفنا الأول ويقترب من المستهدف الثاني والان ننصح
                    بالاتي_files/80e09580-d550-475d-8135-a963de077253.jpeg" style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=TA">التحليل الفني</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D8%AA%D8%AD%D9%84%D9%8A%D9%84-%D8%A7%D9%84%D9%81%D9%86%D9%8A-%D9%84%D9%8A%D9%88%D9%85-24-%D9%8A%D9%88%D9%86%D9%8A%D9%87-2020-">التحليل
                  الفني ليوم 24 يونيه 2020 </a>
              </div>
            </div>
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible;">
              <div class="image-recent-post post-thumb">
                <a href="https://%D9%87%D9%84-%D8%AA%D8%AA%D8%AC%D8%A7%D9%87%D9%84-%D8%A7%D9%84%D8%A5%D9%86%D9%85%D8%A7%D8%A1-%D8%B7%D9%88%D9%83%D9%8A%D9%88-%D9%86%D8%AA%D8%A7%D8%A6%D8%AC-%D8%A7%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%B3%D9%84%D8%A8%D9%8A%D8%A9-%D9%88%D8%AA%D8%B1%D8%AA%D9%81%D8%B9-%D8%A7%D9%84%D9%89-%D8%A7%D9%84%D8%AD%D8%AF-%D8%A7%D9%84%D8%B9%D9%84%D9%88%D9%89-%D9%84%D9%84%D9%82%D9%86%D8%A7%D9%87-%D8%A7%D9%84%D8%B5%D8%A7%D8%B9%D8%AF%D9%87-/"
                  class="thumb-zoom">
                  <img class="lazy" alt="شركة الإنماء طوكيو مارين " الإنماء="" طوكيو"""=""
                    title="شركة الإنماء طوكيو مارين " طوكيو""=""
                    src="/images/2510fa54-c3e4-4e1c-97c6-c1299371a4f4.jpg"
                    style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=SS">السوق السعودي</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D9%87%D9%84-%D8%AA%D8%AA%D8%AC%D8%A7%D9%87%D9%84-%D8%A7%D9%84%D8%A5%D9%86%D9%85%D8%A7%D8%A1-%D8%B7%D9%88%D9%83%D9%8A%D9%88-%D9%86%D8%AA%D8%A7%D8%A6%D8%AC-%D8%A7%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%B3%D9%84%D8%A8%D9%8A%D8%A9-%D9%88%D8%AA%D8%B1%D8%AA%D9%81%D8%B9-%D8%A7%D9%84%D9%89-%D8%A7%D9%84%D8%AD%D8%AF-%D8%A7%D9%84%D8%B9%D9%84%D9%88%D9%89-%D9%84%D9%84%D9%82%D9%86%D8%A7%D9%87-%D8%A7%D9%84%D8%B5%D8%A7%D8%B9%D8%AF%D9%87-">هل
                  تتجاهل الإنماء طوكيو نتائج الأعمال السلبية وترتفع الى الحد العلوى للقناه الصاعده </a>
              </div>
            </div>
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible;">
              <div class="image-recent-post post-thumb">
                <a href="https://%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-/"
                  class="thumb-zoom">
                  <img class="lazy" alt="شركة الدريس للخدمات البترولية والنقليات " الدريس"""=""
                    title="شركة الدريس للخدمات البترولية والنقليات " الدريس""=""
                    src="/images/940d914c-5e88-4781-bece-d78fe72f142e.jpg"
                    style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=SS">السوق السعودي</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-">الدريس
                  يحقق مستهدفنا الأول ويقترب من المستهدف الثاني والان ننصح بالاتي </a>
              </div>
            </div>
            <div class="recent-posts-content wow fadeInUp" style="visibility: visible;">
              <div class="image-recent-post post-thumb">
                <a href="https://xn---------fjikabacaei9i4a1e8aj7aei8ppa5cgqc4aljk4dj4aucddc/" class="thumb-zoom">
                  <img class="lazy" alt="القطاع الصناعي بريطانيا " "="" title=" القطاع الصناعي بريطانيا " src=" /images/4d8f7f02-d77d-4cc0-aab1-5517f709899a.jpg" style="display: inline-block;">
                  <div class="image-overlay"></div>
                </a>
              </div>
              <div class="recent-post-content">
                <span class="cat-links"><a href="https://vision-tgi.com/Catnew?Catagory=FG">جراف العملات</a></span>
                <a
                  href="https://vision-tgi.com/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1%20%D8%A7%D9%84%D8%B9%D9%85%D9%84%D8%A7%D8%AA/%D8%A7%D9%84%D9%82%D8%B7%D8%A7%D8%B9-%D8%A7%D9%84%D8%B5%D9%86%D8%A7%D8%B9%D9%8A-%D9%81%D9%8A-%D8%A8%D8%B1%D9%8A%D8%B7%D8%A7%D9%86%D9%8A%D8%A7-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D9%86%D9%85%D9%88">القطاع
                  الصناعي في بريطانيا يعود إلى النمو</a>
              </div>
            </div>
          </div>
        </div>
        <div id="panel-38-1-2-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad" data-index="6">
          <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
            <a href="https://vision-tgi.com/price_plansar" target="_blank">
              <img class="lazy"
                src="/images/3a.png"
                alt="ofeed" title="ofeed">
              <p>أعلان</p>
            </a>
          </div>
        </div>
      </div>
    </aside> -->
  </div>
  <div class="td-container">
    <div id="lightbox" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
      style="margin-top: 0">
      <img class="modal-content" id="img01"
        src="https://vision-tgi.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82%20%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A/%D8%A7%D9%84%D8%AF%D8%B1%D9%8A%D8%B3-%D9%8A%D8%AD%D9%82%D9%82-%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81%D9%86%D8%A7-%D8%A7%D9%84%D8%A3%D9%88%D9%84-%D9%88%D9%8A%D9%82%D8%AA%D8%B1%D8%A8-%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%87%D8%AF%D9%81-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-%D9%88%D8%A7%D9%84%D8%A7%D9%86-%D9%86%D9%86%D8%B5%D8%AD-%D8%A8%D8%A7%D9%84%D8%A7%D8%AA%D9%8A-"
        alt="" style="max-height: 525px;">
    </div>
  </div>
</div>
@endsection