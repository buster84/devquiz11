var myevent = document.createEvent('MouseEvents');
myevent.initEvent('click', false, true);
var card = [];
var now_open_card = "";
function card_open( i ){

  card[i].ele.dispatchEvent(myevent);
  card[i].color = card[i].ele.style.backgroundColor;


  var ret = "";
  if( "" === now_open_card ){
    now_open_card = i;
    card[i].opened = 0;
    ret = "one";
  } else {
    if( card[i].color == card[now_open_card].color ){
      card[i].opened = 1;
      card[now_open_card].opened = 1;
      ret = "next";
    }
    now_open_card = "";
    ret = "two";
  }
  return ret;
}


for( var i = 0; null != document.getElementById('card'+i); i++ ){
  var tmp_ele = document.getElementById('card'+i);
  card.push({"ele": tmp_ele,
             "opened": 0,
             "color": "",
          });
  var ret = card_open( i );
  if( "" === ret ){
    continue;
  }
  
  for( var n = 0; n < card.length - 1; n++ ){
    if( 0 == card[n].opened && card[n].color == card[i].color ){
      card_open( n );
      if( "two" === ret ){
        card_open( i );
      }
      break;
    }
  }
  
}
