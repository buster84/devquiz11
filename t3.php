<?php


class puzzle {
  public $width;
  public $height;
  public $now_puzzle;
  public $sace_position;

  public $operations = "";
  public $before_ope = "";
  
  public $max_point   = 0;

  public $point       = 0;
  public $ope_count = array(
                        'ALL' => 0,
                        'U' => 0,
                        'D' => 0,
                        'L' => 0,
                        'R' => 0,
                      );

  public $save_data = array();

  public static $ope_kind = array( 'U','D','L','R' );
  public static $reverce_ope_map = array(
                              'U' => 'D',
                              'D' => 'U',
                              'L' => 'R',
                              'R' => 'L',
                            );
  public static $ope_position_map = array(
                                      'U' => array( -1, 0 ),
                                      'D' => array( 1, 0 ),
                                      'L' => array( 0, -1 ),
                                      'R' => array( 0, 1 ),
                                    );
  public static $seq = array(
         '33' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => '9',
                   ),
                 ),
         '34' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'C',
                   ),
                 ),
         '35' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'F',
                   ),
                 ),
         '36' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 5, 0 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 5, 1 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 5, 2 ),
                     'panel'    => 'I',
                   ),
                 ),
         '43' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'C',
                   ),
                 ),
         '44' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'G',
                   ),
                 ),
         '45' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'K',
                   ),
                 ),
         '46' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 5, 0 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 5, 1 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 5, 2 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 5, 3 ),
                     'panel'    => 'O',
                   ),
                 ),
         '53' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'F',
                   ),
                 ),
         '54' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'K',
                   ),
                 ),
         '55' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'O',
                   ),
                   array(
                     'position' => array( 4, 4 ),
                     'panel'    => 'P',
                   ),
                 ),
         '56' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 5, 0 ),
                     'panel'    => 'Q',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 5, 1 ),
                     'panel'    => 'R',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 5, 2 ),
                     'panel'    => 'S',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'O',
                   ),
                   array(
                     'position' => array( 5, 3 ),
                     'panel'    => 'T',
                   ),
                   array(
                     'position' => array( 4, 4 ),
                     'panel'    => 'P',
                   ),
                   array(
                     'position' => array( 5, 4 ),
                     'panel'    => 'U',
                   ),
                 ),
         '63' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 0, 5 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 1, 5 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 2, 5 ),
                     'panel'    => 'I',
                   ),
                 ),
         '64' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 0, 5 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 1, 5 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 2, 5 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 3, 5 ),
                     'panel'    => 'O',
                   ),
                 ),
         '65' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'P',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 0, 5 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'Q',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 1, 5 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'R',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 2, 5 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'S',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 3, 5 ),
                     'panel'    => 'O',
                   ),
                   array(
                     'position' => array( 4, 4 ),
                     'panel'    => 'T',
                   ),
                   array(
                     'position' => array( 4, 5 ),
                     'panel'    => 'U',
                   ),
                 ),
         '66' => array(
                   array(
                     'position' => array( 0, 0 ),
                     'panel'    => '1',
                   ),
                   array(
                     'position' => array( 1, 0 ),
                     'panel'    => '7',
                   ),
                   array(
                     'position' => array( 2, 0 ),
                     'panel'    => 'D',
                   ),
                   array(
                     'position' => array( 3, 0 ),
                     'panel'    => 'J',
                   ),
                   array(
                     'position' => array( 4, 0 ),
                     'panel'    => 'P',
                   ),
                   array(
                     'position' => array( 5, 0 ),
                     'panel'    => 'V',
                   ),
                   array(
                     'position' => array( 0, 1 ),
                     'panel'    => '2',
                   ),
                   array(
                     'position' => array( 0, 2 ),
                     'panel'    => '3',
                   ),
                   array(
                     'position' => array( 0, 3 ),
                     'panel'    => '4',
                   ),
                   array(
                     'position' => array( 0, 4 ),
                     'panel'    => '5',
                   ),
                   array(
                     'position' => array( 0, 5 ),
                     'panel'    => '6',
                   ),
                   array(
                     'position' => array( 1, 1 ),
                     'panel'    => '8',
                   ),
                   array(
                     'position' => array( 2, 1 ),
                     'panel'    => 'E',
                   ),
                   array(
                     'position' => array( 3, 1 ),
                     'panel'    => 'K',
                   ),
                   array(
                     'position' => array( 4, 1 ),
                     'panel'    => 'Q',
                   ),
                   array(
                     'position' => array( 5, 1 ),
                     'panel'    => 'W',
                   ),
                   array(
                     'position' => array( 1, 2 ),
                     'panel'    => '9',
                   ),
                   array(
                     'position' => array( 1, 3 ),
                     'panel'    => 'A',
                   ),
                   array(
                     'position' => array( 1, 4 ),
                     'panel'    => 'B',
                   ),
                   array(
                     'position' => array( 1, 5 ),
                     'panel'    => 'C',
                   ),
                   array(
                     'position' => array( 2, 2 ),
                     'panel'    => 'F',
                   ),
                   array(
                     'position' => array( 3, 2 ),
                     'panel'    => 'L',
                   ),
                   array(
                     'position' => array( 4, 2 ),
                     'panel'    => 'R',
                   ),
                   array(
                     'position' => array( 5, 2 ),
                     'panel'    => 'X',
                   ),
                   array(
                     'position' => array( 2, 3 ),
                     'panel'    => 'G',
                   ),
                   array(
                     'position' => array( 2, 4 ),
                     'panel'    => 'H',
                   ),
                   array(
                     'position' => array( 2, 5 ),
                     'panel'    => 'I',
                   ),
                   array(
                     'position' => array( 3, 3 ),
                     'panel'    => 'M',
                   ),
                   array(
                     'position' => array( 4, 3 ),
                     'panel'    => 'S',
                   ),
                   array(
                     'position' => array( 5, 3 ),
                     'panel'    => 'Y',
                   ),
                   array(
                     'position' => array( 3, 4 ),
                     'panel'    => 'N',
                   ),
                   array(
                     'position' => array( 3, 5 ),
                     'panel'    => 'O',
                   ),
                   array(
                     'position' => array( 4, 4 ),
                     'panel'    => 'T',
                   ),
                   array(
                     'position' => array( 5, 4 ),
                     'panel'    => 'Z',
                   ),
                   array(
                     'position' => array( 4, 5 ),
                     'panel'    => 'U',
                   ),
                 ),
       );

  public function __construct( $line ){
    $wall_num = 0;
    list( $width, $height, $puzzle ) = explode( ',', $line );
    $strs = str_split( $puzzle );
    $puzzle = array();
    $space_position = array();
    for( $i = 0, $height = (int) $height; $i < $height; $i++ ){
      $x = array();
      for( $n = 0, $width = (int) $width; $n < $width; $n++ ){
        $x[] = array_shift( $strs );
        if( '0' === $x[$n] ){
          $space_position = array( $i, $n );
        }
        if( '=' === $x[$n] ){
          $wall_num++;
        }
      }
      $puzzle[] = $x;
    }

    $this->max_point = $width * $height - $wall_num - 1;
    $this->width = $width;
    $this->height = $height;
    $this->now_puzzle = $puzzle;
    $this->space_position = $space_position;
    $this->point = $this->eval_state();

    $this->save();
  }

  public function save(){
    $this->save_data = array(
                         'point'          => $this->point,
                         'now_puzzle'     => $this->now_puzzle,
                         'space_position' => $this->space_position,
                         'ope_count'      => $this->ope_count,
                         'operations'     => $this->operations,
                         'before_ope'     => $this->before_ope,
                       );
  }

  public function show( $puzzle = NULL ){
    if( NULL === $puzzle ){
      $puzzle = $this->now_puzzle;
    }
    foreach( $puzzle as $i => $x ){
      foreach( $x as $str ){
        echo $str;
      }
      echo "\n";
    }
  }

  public function slide( $ope, $flg = 1 ){
    $now_position = array(
                      0 => $this->space_position[0] + self::$ope_position_map[$ope][0],
                      1 => $this->space_position[1] + self::$ope_position_map[$ope][1],
                    );
    if( ! $this->check_ope( $ope, $now_position) ){
      return false;
    }
    
    $panel = $this->now_puzzle[$now_position[0]][$now_position[1]];

    $this->now_puzzle[$now_position[0]][$now_position[1]] = '0';
    $this->now_puzzle[$this->space_position[0]][$this->space_position[1]] = $panel;
    $this->space_position = $now_position;
    $this->before_ope = $ope;
    $this->operations .= $ope;
    
    $this->ope_count['ALL']++;
    $this->ope_count[$ope]++;
    if( $flg > 0 ){
      $this->point = $this->eval_state();
    }

    return true;
  }


  public function back_slide(){
   // echo $this->before_ope . "\n";
    $ret = $this->before_ope;
    $ope = self::$reverce_ope_map[$this->before_ope];
    
    $now_position = array(
                      0 => $this->space_position[0] + self::$ope_position_map[$ope][0],
                      1 => $this->space_position[1] + self::$ope_position_map[$ope][1],
                    );
    $panel = $this->now_puzzle[$now_position[0]][$now_position[1]];

    $this->now_puzzle[$now_position[0]][$now_position[1]] = '0';
    $this->now_puzzle[$this->space_position[0]][$this->space_position[1]] = $panel;
    $this->space_position = $now_position;
    $this->ope_count['ALL']--;
    $this->ope_count[$this->before_ope]--;
    $this->operations = substr( $this->operations, 0 , -1 );
    $this->before_ope = substr( $this->operations, -1 );

    return $ret;
  }

  public function check_ope( $ope, $now_position ){
    if( $this->before_ope === self::$reverce_ope_map[$ope] ){
      return false;
    } 
    if( 0 > $now_position[1] 
       || $this->width <= $now_position[1] ){
      return false;
    }
    if( 0 > $now_position[0] 
       || $this->height <= $now_position[0] ){
      return false;
    }

    if( '=' === $this->now_puzzle[$now_position[0]][$now_position[1]] ){
      return false;
    }

    return true;
    
  }

  public function eval_state(){
    $point = 0;
    $key = $this->width . $this->height;
    $seq = self::$seq[$key];
    foreach( $seq as $array ){
      if( $this->now_puzzle[$array['position'][0]][$array['position'][1]] === $array['panel'] ){
        $point++;
      } else {
        if( '=' === $this->now_puzzle[$array['position'][0]][$array['position'][1]] ){
          continue;
        } else {
          break;
        }
      }
    }

    return $point;
  }
  
  public function get_now_puzzle(){
    return array( $this->now_puzzle, $this->operations );
  }
  public function set_puzzle( $data ){
    $this->point          = $data['point'];
    $this->now_puzzle     = $data['now_puzzle'];
    $this->space_position = $data['space_position'];
    $this->ope_count      = $data['ope_count'];
    $this->operations     = $data['operations'];
    $this->before_ope     = $data['before_ope'];

    $this->save();
    return $this;
  }

  public function compare_and_save(){
    if( $this->point < $this->save_data['point'] ){
      return false;
    } else if( $this->point === $this->save_data['point'] ) {
      if( $this->ope_count['ALL'] < $this->save_data['ope_count']['ALL'] ){
        $this->save();
        return true;
      } else {
        return false;
      }
    } else {
     $this->save();
     return true;
    }
  }

  public function explorer( $depth, $not_best = 0, $ignore_depth = 0 ){
    $can_ope = self::$ope_kind;
    $now_depth = 0;
    while(1){
      if( $depth > $now_depth ){
        foreach( $can_ope as $ope ){
          if( $this->slide( $ope, $now_depth - $ignore_depth ) ){
            if( $this->compare_and_save() && $not_best ){
              break 2;
            }
            $now_depth++;
            $can_ope = self::$ope_kind;
            continue 2;
          }
        }
      }


      while( 1 ){
        if( 0 === $now_depth ){
          break 2;
        }
        $slided_ope = $this->back_slide();
        $now_depth--;
        $can_ope = array_slice( self::$ope_kind, array_search( $slided_ope, self::$ope_kind ) + 1 );
        if( !empty( $can_ope ) ){
          continue 2;
        }
      }
    }

 
  }

}

file_put_contents( "./result.txt", "" );
$lines = file('./test.txt');
foreach( $lines as $line ){
  $depth = 11;
  $p1 = new puzzle( $line );
  $point = $p1->point;
  //if( $p1->max_point >= 27 ){
  //  file_put_contents( "./result.txt", "\n", FILE_APPEND );
  //  continue;
  //}
  
  for( $i = 0; $i < 100; $i++ ){
    $p1->explorer( $depth );
    if( $point === $p1->save_data['point'] ){
      $p1->explorer( $depth + 5, 1 );
    } 
  
    if( $point === $p1->save_data['point'] ){
      file_put_contents( "./result.txt", "\n", FILE_APPEND );
      continue 2;
    }
  
    
  
    $p1->set_puzzle( $p1->save_data );
    $point = $p1->point;
    if( $p1->max_point === $p1->point ){
      file_put_contents( "./result.txt", $p1->save_data['operations'] . "\n", FILE_APPEND );
      continue 2;
    }
  }

  file_put_contents( "./result.txt", "\n", FILE_APPEND );
}
