const quizData = [
    {
        question: "1)What is the extension of java code files?",
        a: ".txt",
        b: ".js",
        c: ".java",
        d: ".class",
        correct: "c",
    },
    {
        question: "14)	Which of the following is not a decision making statement?",
        a: "if",
        b: "if-else",
        c: "switch",
        d: "do-while",
        correct: "d",
    },
    {
        question: "3) What is the extension of compiled java classes?",
        a: ".js",
        b: ".class",
        c: ".java",
        d: ".classes",
        correct: "b",
    },
    {
        question: "4) Which of these cannot be used for a variable name in Java? ",
        a: "indetifier",
        b: "constant",
        c: "keyword",
        d: "none of the above",
        correct: "c",
    },
    {
        question: "5) Which is not an arithmatic operator",
        a: "+",
        b: "-",
        c: "*",
        d: "#",
        correct: "d",
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