const quizData = [
    {
        question: "1) What is the first step in mastering Java ?",
        a: "Learn basic syntax",
        b: "Compile and Run code",
        c: "Work with Java API ",
        d: "Understanding OOP",
        correct: "a",
    },
    {
        question: "2) Which statement is true about Java??",
        a: "Java is a sequence-dependent programming language",
        b: "Java is a code-dependent programming language",
        c: "Java is a platform-dependent programming language",
        d: "Java is a platform-independent programming language",
        correct: "d",
    },
    {
        question: "3) Java is _________?",
        a: "high-level Language",
        b: "class based",
        c: "object oriented",
        d: "All of the above",
        correct: "d",
    },
    {
        question: "4) What year was Java developed?",
        a: "1996",
        b: "1995",
        c: "1994",
        d: "none of the above",
        correct: "b",
    },
    {
        question: "5) Java was created by ?",
        a: "Dennis Ritchie",
        b: "Guido van Rossum",
        c: "James Gosling ",
        d: "Anders Hejlsberg",
        correct: "c",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}

submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> <img src="../images/title.PNG" class="center"> Skill Shalla</h2>
           <h2>You answered ${score}/${quizData.length} questions correctly</h2>
           <button onclick="location.reload()">Reload</button>
           <a id="AnchorChange" href="../quiz/java_home.php">Finish</a> 
           `
       }
    }
})