const quizData = [
    {
        question: "Which of the following was used in programming the first computers ?",
        a: "High Level Language",
        b: "Low Level Language",
        c: "Machine Level Language ",
        d: "Assembly Language",
        correct: "c",
    },
    {
        question: "What is the main purpose of coding and programming Language?",
        a: "To communicate with computers",
        b: "To communicate with other user",
        c: "To communicate with database",
        d: "To communicate with Server",
        correct: "a",
    },
    {
        question: "What is coding and programming Language? ",
        a: "A set instructions used to create a software application",
        b: "A set instructions used to create a operating systems",
        c: "Both a and b",
        d: "Only a",
        correct: "c",
    },
    {
        question: "How to learn coding and programming languages ?",
        a: "Understand basic",
        b: "Practice with Tutorials and Projects",
        c: "Join a community",
        d: "All of the above",
        correct: "d",
    },
    {
        question: "How to make Career in coding",
        a: "Increase your knowledge",
        b: "Get certified",
        c: "Join network and find job opportunity",
        d: "All of the above",
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
           <a id="AnchorChange" href="../courses.php">Finish</a> 
           `
       }
    }
})