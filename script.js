function quizAnswer(targetId, correctAnswer) {
  console.log(targetId);
  console.log(correctAnswer);
  document.getElementById("answerArea").style.display = "block";
  // 選択した答えと正解の選択肢が一致しているか判定
  if (targetId === correctAnswer)
    // 正解か不正解か判定したい
    return alert("正解！すばらしい！！");
  else {
    return alert("残念！！不正解です。。");
  }
}
