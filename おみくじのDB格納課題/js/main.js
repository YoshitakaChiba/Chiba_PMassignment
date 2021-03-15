'use strict';

$(document).ready(function(){

    $.ajax({
        url:'php/omi_display.php',
        type:'GET',
        data:{
            response:response 
      }
      .done(function(data){
          console.log(data);
      })
      .fail(function(){
          console.log('$.ajax failed');
      })
    });
});




{
    const btn = document.getElementById('btn');

    $('#btn').on('click',function(){//idを取得する場合は#を用いる　例#btn
        
        const n = Math.random();

        let result;

        //おみくじの結果を変数に格納
        if( n < 0.2){
            result = '大吉'; // 20%
        } else if (n < 0.4){
            result = '中吉'; // 20%
        } else if (n < 0.7){
            result = '小吉'; // 30%
        } else{
            result = '凶'; // 30%
        }
            
        //ボタンの中身を書き換え
        $(this).text(result);

        // console.log(result);

        //php側にデータを送信
        $.ajax({
            url:'php/omi_insert.php',
            type:'POST',
            data:{
                result:result
            }
        })
        .done(function(data){
            console.log(data);
        })
        .fail(function(){
            console.log('$.ajax failed');
        })
    });
}


// ready  get 