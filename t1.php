<?php

function get_pattern( $nums ){
  foreach( $nums as $num ){
    if( 0 === $num % 5 ){
      return array( 0, 1 );
    }
  }
  return array( 0 );
}
function get_next_pattern( $all_patterns, $now_pattern ){
  $finish = true;
  for( $i = count( $now_pattern ) - 1; 0 <= $i; $i-- ){
    if( 0 === $now_pattern[$i] && isset( $all_patterns[$i][1] ) ){
      $finish = false;
      $now_pattern[$i] = 1;
      break;
    }
    $now_pattern[$i] = 0;
  }
  if( true === $finish ){
    throw new Exception( 'finish' );
  }

  return $now_pattern;
}
function get_count( $data, $now_pattern, $mini_count ){
  $delete_flg = $data[0];
  $count = 0;
  foreach( $data as $i => $nums ){
    if( 1 === $now_pattern[$i] ){
      $count++;
      $all_delete_flg = 1;
      foreach( $nums as $n => $num ){
        if( 0 === $num % 5 ){
          $delete_flg[$n] = "";
        }
        if( "" !== $delete_flg[$n] ){
          $all_delete_flg = 0;
        }
      }
      if( 1 === $all_delete_flg ){
        if( $count < $mini_count ){
          return $count;
        } else {
          return $mini_count;
        }
      }
    }

    $count++;
    if( $count === $mini_count ){
      return $mini_count;
    }
  }
  
  return $mini_count;
}

$all_data = file( 'test_data.txt', FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES );
array_shift( $all_data );

for( $all_i = 1, $cnt = count( $all_data ); $all_i < $cnt; $all_i = $all_i + 2 ){
  $data = array();
  $all_patterns = array();
  $data[] = explode( ' ', trim( $all_data[$all_i] ) );
  $i = 0;
  $all_patterns[] = get_pattern( $data[$i] );
  $now_pattern = array();
  $now_pattern[] = 0;
  
  while(1){
    $tmp_ar = array();
    $break_flg = 1;
    foreach( $data[$i] as $num ){
      $half_num = (int) floor( $num / 2 );
      $tmp_ar[] = $half_num;
      if( 0 !== $half_num ){
        $break_flg = 0;
      }
    }
  
    $i++;
    $data[] = $tmp_ar;
    $all_patterns[] = get_pattern( $tmp_ar );
    $now_pattern[] = 0;
  
    if( 1 === $break_flg ){
      $all_patterns[$i] = array(1);
      break;
    }
  }
  
  
  $mini_count = $i + 1;
  
  while( 1 ){
    try{
      $mini_count = get_count( $data, $now_pattern, $mini_count );
      $now_pattern = get_next_pattern( $all_patterns, $now_pattern );
    } catch( Exception $e ){
      break;
    }
  }
  echo $mini_count . "\n";

}

