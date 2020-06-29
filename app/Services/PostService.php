<?php
namespace App\Services;

use Illuminate\Support\Collection;

class PostService {

  /**
   * @param $homePosts the last 6 posts
   * @param $isDetailedDate if TRUE then form the date like (Created: 2020-06-22,  at 14:08)
   * @return a readable created at like (3 days ago)
   *         of more detailed like (Created: 2020-06-22,  at 14:08)
   */
  function getReadableCreatedAt ($homePosts) {
    
    // in case one post object
    if(!$homePosts instanceof Collection){
      // clean the home posts created_at and updated_at strings
      // but first check if timestamps are objects instead of string
      $created_at = is_object($homePosts['created_at']) ?
                                  date('d-m-Y H:s:i', strtotime($homePosts['created_at']))
                                  : $this->cleanDateStr($homePosts['created_at']);
      $updated_at = is_object($homePosts['updated_at']) ?
                                  date('d-m-Y H:s:i', strtotime($homePosts['updated_at']))
                                  : $this->cleanDateStr($homePosts['updated_at']);
      return [
        'myPost' => $homePosts,
        'readableCreatedAt' => $this->formDate($created_at)['compact'],
        'readableCreatedAtDetailed' => $this->formDate($created_at)['detailed']
      ];
    }

    // in case posts collection
    $homePosts = array_map(function ($post) {
      // clean the home posts created_at and updated_at strings
      $post['created_at'] = $this->cleanDateStr($post['created_at']);
      $post['updated_at'] = $this->cleanDateStr($post['updated_at']);

      $post['readableCreatedAt'] = $this->formDate($post['created_at'])['compact'];
      $post['readableCreatedAtDetailed'] = $this->formDate($post['created_at'])['detailed'];

      return $post;
    },$homePosts->toArray());
    
    return collect($homePosts);  
  }

  /**
   * @param
   * @return [$compact, $detailed] readable date
   */
  public function formDate($date)
  {
    // not detailed date like (3 days ago)
    $date = $this->cleanDateStr($date);
    $diff =  time() > strtotime($date) ? time() - strtotime($date) : strtotime($date) - time();
    $compact = $this->getCompactDate($diff);
    
    // detailed date like (Created : 2020-06-22 , at 14:08)
    $detailed = "تاريخ " . str_replace(' ', ', الساعة ', substr($date, 0, -3));
    
    return [
      'compact' => $compact,
      'detailed' => $detailed
    ];
  }

  /**
   * get the compact date
   * @param $dif the difference time between now and the created date
   * @return $compact the compat readable date 
   */
  public function getCompactDate($diff)
  {
    $compact = '';

    // Years
    $years = floor($diff / (365*60*60*24));
    if($years) {
      $compact = $years === 1.0 ? '1 year ago' : $years . ' years ago';
    } else {
      // Months
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      if($months) {
        $compact = $months === 1.0 ? '1 month ago' : $months . ' months ago';
      } else {
        // Days
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        if($days) {
          $compact = $days === 1.0 ? '1 day ago' :
                                  ($days >= 21.0 ? 'last 3 week' :
                                  ($days >= 14.0 ? 'last 2 week' :
                                  ($days >= 14.0 ? 'last week' : $days.' days ago')));
        } else {
          $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
          if($hours) {
            $compact = $hours === 1.0 ? '1 hour ago' : $hours . ' hours ago';
          } else {
            // Minutes (Just Now)
            $justNow = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ (60));
            if($justNow) {
              $compact = 'just now';
            }
          }
        }
      }
    }
    return $compact;
  }

  /**
   * should strip unwanted characters from the date string (it is custom, not generalized yet)
   * @param $date string like ("2020-06-23T19:55:44.000000Z")
   * @return $cleanDate string like ("2020-06-2019:55:44")
   */
  public function cleanDateStr($date)
  {
    $cleanDate = str_replace('T', ' ', $date);
    $cleanDate = str_replace('.000000Z', '', $cleanDate);
    return $cleanDate;
  }
}
