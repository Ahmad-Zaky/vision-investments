@extends('front-layout.layout')
@section('content')
<style>
  .text {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* number of lines to show */
    -webkit-box-orient: vertical;
  } 
</style>
<div id="content" class="site-content" style="transform: none;">
      <div class="vmagazine-breadcrumb-wrapper ">
        <div class="vmagazine-bread-home">
          <div class="vmagazine-bread-wrapp vmagazine-container">
            <div class="breadcrumb-title">
            </div>
            <div class="vmagazine-breadcrumb">
              <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items">
                  <li class="trail-item trail-begin"><a href="{{asset('/')}}"
                      rel="home"><span>الرئيسية</span></a></li>
                  <li class="trail-item"><a href="/category/{{$category['cat_code']}}"><span>{{$category['name']}}</span></a></li>
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
              <div class="vmagazine-related-wrapper" style="margin-top: 0rem;">
                <h4 class="related-title">
                  <span class="title-bg">{{$category['name']}}</span>
                </h4>
                <div class="related-posts-wrapper clearfix">
                  <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 ofeedAM">
                        <div id="zero-configuration_filter" class="dataTables_filter"><label><input type="search"
                              class="form-control form-control-sm" placeholder="Search..."
                              aria-controls="zero-configuration"></label></div>
                      </div>
                      <div class="col-sm-12 col-md-6 ofeedAM">
                        <div class="dataTables_length" id="zero-configuration_length"><label><select
                              name="zero-configuration_length" aria-controls="zero-configuration"
                              class="custom-select custom-select-sm form-control form-control-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> </label></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="zero-configuration" class="dataTable no-footer" style="width: 100%;" role="grid"
                          aria-describedby="zero-configuration_info">
                          <thead>
                            <tr role="row">
                              <th style="display: none; width: 0px;" class="sorting_desc" tabindex="0"
                                aria-controls="zero-configuration" rowspan="1" colspan="1" aria-sort="descending"
                                aria-label="#: activate to sort column ascending">#</th>
                              <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1"
                                colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(!$categoryPosts->isEmpty())
                              @foreach($categoryPosts as $catPost)
                                <tr role="row" class="odd">
                                  <!-- <td style="display: none" class="sorting_1">2020-06-23T12:52:24</td> -->
                                  <td>
                                    <div class="single-post">
                                      <div class="post-thumb">
                                        <a
                                          href="/{{$catPost['slug']}}">
                                          <img
                                            src="/images/{{$catPost['thumbnail']}}"
                                            alt="{{$catPost['title']}}" title="{{$catPost['title']}} ">
                                        </a>
                                        <span class="cat-links"><a href="/category/{{$category['cat_code']}}"
                                            class="cat-30" rel="category tag">{{$category['name']}}</a></span>
                                      </div>
                                      <div class="related-content-wrapper">
                                        <div class="post-meta">
                                          <span class="comments"><i class="fa fa-thumbs-up"></i>{{$catPost['likes_count']}}</span>
                                          <span class="post-view"><i class="fa fa-eye"></i>{{$catPost['views_count']}}</span>
                                          <span class="posted-on"><i class="fas fa-clock"></i>{{$catPost['readableCreatedAt']}}</span>
                                          <h3 class="small-font">
                                            <a
                                              href="/{{$catPost['slug']}}">{{$catPost['title']}}
                                            </a>
                                          </h3>
                                          <div class="post-contents text">{{$catPost['excerpt']}}</div>
                                          <a href="/{{$catPost['slug']}}"
                                            class="vmagazine-related-more">اقرأ المزيد</a>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12 col-md-5 ofeedAM">
                        <div class="dataTables_info" id="zero-configuration_info" role="status" aria-live="polite"> (1 ~
                          10 ) | 727</div>
                      </div>
                      <div class="col-sm-12 col-md-7 ofeedAM">
                        <div class="dataTables_paginate paging_simple_numbers" id="zero-configuration_paginate"
                          style="float: right; width: auto;">
                          <ul class="pagination">
                            <li class="paginate_button page-item scrollup previous disabled"
                              id="zero-configuration_previous"><a href="https://vision-tgi.com/Catnew?Catagory=FC#"
                                aria-controls="zero-configuration" data-dt-idx="0" tabindex="0" class="page-link"><i
                                  class="fa fa-chevron-circle-left" aria-hidden="true"></i></a></li>
                            <li class="paginate_button page-item scrollup active"><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item scrollup "><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item scrollup "><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item scrollup "><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item scrollup "><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item scrollup disabled" id="zero-configuration_ellipsis"><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                            <li class="paginate_button page-item scrollup "><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="7" tabindex="0" class="page-link">73</a></li>
                            <li class="paginate_button page-item scrollup next" id="zero-configuration_next"><a
                                href="https://vision-tgi.com/Catnew?Catagory=FC#" aria-controls="zero-configuration"
                                data-dt-idx="8" tabindex="0" class="page-link"><i class="fa fa-chevron-circle-right"
                                  aria-hidden="true"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </article>

          </main>

        </div>

        <aside id="secondary" class="widget-area vmagazine-sidebar" role="complementary"
          style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
          <div class="theiaStickySidebar"
            style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
            <div id="panel-38-1-2-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad"
              data-index="6" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                <a href="https://vision-tgi.com/price_plansar" target="_blank">
                  <img class="lazy" src="/images/3a.png" alt="ofeed" title="ofeed">
                  <p>أعلان</p>
                </a>
              </div>
            </div>
          </div>
        </aside>

      </div>
    </div>
@endsection