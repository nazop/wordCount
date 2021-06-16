<?php
    /* 単語が何回出たか数える、単語の並びは出た順
     * 入力例
     * red green new red
     * 出力例
     * red 2
     * green 1
     * new 1
     */

    // 入力を取ってくる
    $input_line = fgets(STDIN);

    // 単語ごとに切り分けて配列に突っ込む
    $stringArray = explode(" ", $input_line);
    
    // どの単語が何回出たか入れる連想配列
    // redが2回出た場合
    // $newWordArray["red"] = 2
    // のように入れる
    $newWordArray = Array();
    
    // 入力された単語全部を見ていく
    for($i = 0; $i < count($stringArray); $i++) {

        // 今の単語を入れておく(一々配列から出すと時間がかかるし可読性に欠けるので変数に代入しておく)
        $currentWord = $stringArray[$i];
    
        // もし単語が配列上に記憶されていない=単語が今まで出ていなかったら        
        if(!isset($newWordArray[$currentWord])) {

            // 1個目なので連想配列の形で記憶する
            $newWordArray[$currentWord] = 1;    
        } else {
            // もし単語が既に出ていたら

            // 単語のカウントを増やす
            $newWordArray[$currentWord] += 1;
        }
    
    }
    
    // 最後に出た単語と回数を出力していく
    // $keyには連想配列のキー("red"部分)、$valueには連想配列の値(1とか3とか出現回数)が代入されている
    foreach($newWordArray as $key => $value) {

        // 答えを出力する
        // red 2 (改行文字\n)
        // のように出力する
        echo $key . " " . $value . "\n";
    }
    
?>