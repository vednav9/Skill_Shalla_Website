<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Skill Shalla
</title>
<link rel="stylesheet" href="../css/quiz.css">
</head>
<body>
   
<div class="quiz-container" id="quiz">
    <div class="quiz-header">
      <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> <img src="../images/title.PNG" class="center"> Skill Shalla</h2>
      <h4 id="question">Question Text</h4>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer">
          <label for="b" id="b_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="c" class="answer">
          <label for="c" id="c_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer">
          <label for="d" id="d_text">Answer</label>
        </li>
      </ul>
    </div>
    <button id="submit">Submit</button>
  </div>
</body>
<script src="../js/bsc_quiz.js">
   
</script>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>