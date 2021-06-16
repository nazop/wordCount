#入力例
#red green new red
#出力例
#red 2
#green 1
#new 1
#つまり単語が何回出たか数える、単語の並びは出た順

#入力を貰ってくる
inputs = input();

#入力を切り分けてリストにする(タプルの方がスマートっぽいが)
input_list = inputs.split(" ");

#辞書(連想配列)として"文字":出現回数
word_count_list = {};

#入力数分ループして文字の出現回数をカウント
for i in range(len(input_list)):
    #今回の文字
    current_word = input_list[i];
    #もし既に出現していれば
    if current_word in word_count_list:
        #数を増やす
        word_count_list[current_word] += 1;
    else:
        #まだ出現していない場合
        #1個目を追加する
        word_count_list[current_word] = 1;

#文字の出現回数を表示
for i in word_count_list:
    #今回の文字
    current_word_count = word_count_list[i];
    #「文字 n回」と出る
    print(i + " " + str(current_word_count) + "回");

