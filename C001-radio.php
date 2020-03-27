<?php
  if( isset($_GET['submit'] )){ 
 //採点ボタンを押していたら
    $seikai = 0;
    $trueAns = [0,5,8,10,14];
  for ( $i=0; $i<5; $i++) {
    $q=$i+1 ;//Qは1から始まるので
  if(isset($_GET["Q$q"]) && 
  $_GET["Q$q"] == $trueAns[$i]) 
    $seikai++;
  }
  echo "あなたは",$seikai*20,"点でした！";
  }
?>
  <form name="radioB">
<?php
    $city = ["オタワ","トロント","モントリオール","ジュネーブ","チューリッヒ","ベルン","ハンブルク","ブレーメン","ベルリン","バルセロナ",">マドリード",">リスボン",">シドニー",">メルボルン",">キャンベラ"];
    $country =["カナダ","スイス","ドイツ","スペイン","オーストラリア"];
    //この配列をループして問題を作りたい。
    $c =0;
   foreach ($city as $key => $value ){
   if ($key % 3 == 0)
   echo "<br>"$country [$c++],"の首都は？<br>"；
   echo "<input type= 'radio' name='Q$c' value='$key'>$value <br>";
}
?>

カナダの首都は？<br>
<input type="radio" name="Q1" value="0">オタワ<br>
<input type="radio" name="Q1" value="1">トロント<br>
<input type="radio" name="Q1" value="2">モントリオール<br>
<br>
スイスの首都は？<br>
<input type="radio" name="Q2" value="3">ジュネーブ<br>
<input type="radio" name="Q2" value="4">チューリッヒ<br>
<input type="radio" name="Q2" value="5">ベルン<br>
<br>
ドイツの首都は？<br>
<input type="radio" name="Q3" value="6">ハンブルク<br>
<input type="radio" name="Q3" value="7">ブレーメン<br>
<input type="radio" name="Q3" value="8">ベルリン<br>
<br>
スペインの首都は？<br>
<input type="radio" name="Q4" value="9">バルセロナ<br>
<input type="radio" name="Q4" value="10">マドリード<br>
<input type="radio" name="Q4" value="11">リスボン<br>
<br>
オーストラリアの首都は？<br>
<input type="radio" name="Q5" value="12">シドニー<br>
<input type="radio" name="Q5" value="13">メルボルン<br>
<input type="radio" name="Q5" value="14">キャンベラ<br>
<br>
<input type="button" value="js採点" onclick="saiten()" />
<input type="submit" name="submit" value="php採点" />
</form>



<script>
function saiten(){
  var seikai=0; //正解数を入れる変数
  //答えの番号を配列に入れる
  var trueAns = new Array(0,5,8,10,14);
  //正解のラジオボタンがチェックされているか確認
  for (i=0 ; i<5 ; i++)  {
    if( document.radioB.elements[trueAns[i]].checked )
      seikai++;
  }
  
  alert("あなたは"+seikai*20+"点でした！");
}
</script>

