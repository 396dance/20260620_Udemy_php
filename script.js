function quizAnswer(targetId, correctAnswer) {
  console.log(targetId);
  console.log(correctAnswer);
  // 選択した答えと正解の選択肢が一致しているか判定
  if (targetId === correctAnswer)
    // 正解か不正解か判定したい
    return alert("正解です！！");
  else {
    return alert("不正解");
  }
}
