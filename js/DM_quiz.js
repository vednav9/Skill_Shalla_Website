const quizData = [
    {
        question: "1) What should you do after you have analyzed the competition ?",
        a: "Develop a plan",
        b: "Implement the plan",
        c: "Encode the strategy",
        d: "Moniter the aspects",
        correct: "a",
    },
    {
        question: "2) What should you do once you have learned the basics of digital marketing ?",
        a: "Develop a plan",
        b: "Implement the plan",
        c: "Analyze the competition",
        d: "Execute the Strategy",
        correct: "c",
    },
    {
        question: "3) What is the first step to mastering the digital marketing ?",
        a: "Analyze the plan",
        b: "Create a strategy",
        c: "Execute the plan",
        d: "Learn the basic",
        correct: "d",
    },
    {
        question: "4) Types of Digital Marketing __________",
        a: "SEO",
        b: "Content Marketing",
        c: "Social Media Marketing",
        d: "all of the above",
        correct: "d",
    },
    {
        question: "5) In digital marketing which channels are used to market the product ?",
        a: "Analog",
        b: "Digital",
        c: "Both a and b",
        d: "None of the above",
        correct: "b",
    },
    {
        question: "6) The term Digital Marketing was first used in the _____",
        a: "1990's",
        b: "1980's",
        c: "1970's",
        d: "2000's",
        correct: "a",
    },
    {
        question: "7) Who is the father of digital marketing? ",
        a: "Bruce Clay India",
        b: "Justin Hall",
        c: "Philip Kotler",
        d: "None of the above",
        correct: "c",
    },
    {
        question: "8) Marketing information includes ___.",
        a: "Knowledge of Customer Requirement",
        b: "Knowledge of peers",
        c: "Knowledge of Market",
        d: "Both a and c",
        correct: "d",
    },
    {
        question: "9) What is not true about digital marketing?",
        a: "It can be done online",
        b: "It can not be done online",
        c: "It is referred as online marketing",
        d: "all of the above",
        correct: "b",
    },
    {
        question: "10) Which of the following is not a type of digital marketing activity?",
        a: "Email Marketing ",
        b: "Social Media Marketing",
        c: "Content Marketing",
        d: "Print Marketing",
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
           <a id="AnchorChange" href="../quiz/DM_home.php">Finish</a> 
           `
       }
    }
})