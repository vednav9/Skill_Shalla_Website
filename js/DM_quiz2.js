const quizData = [
    {
        question: "1) 19)	Digital marketing is often referred to as___________.",
        a: "online marketing",
        b: "internet marketing",
        c: "web marketing",
        d: "All of the above",
        correct: "d",
    },
    {
        question: "2) Which of the following is not a traditional from of digital marketing?",
        a: "Telvision",
        b: "Radio",
        c: "Banners",
        d: "All of the above",
        correct: "d",
    },
    {
        question: "3) How many main pillars of digital marketing?",
        a: "2",
        b: "4",
        c: "3",
        d: "1",
        correct: "a",
    },
    {
        question: "4) 22)	The ________ plays a major role in better content creation",
        a: "icon",
        b: "keyword",
        c: "description",
        d: "viewport",
        correct: "b",
    },
    {
        question: "5) The 4Ps of marketing as defined by Philip Kottler are:",
        a: "Price, Product, Place, and Promotion",
        b: "Price, Performance, Place, and Promotion",
        c: "Price, Product, Place, and Positioning",
        d: "PR, Product, Place, and Person",
        correct: "a",
    },
    {
        question: "6) Digital marketing is becoming very popular due to the?",
        a: "increase in internet users",
        b: "increase in mobile users",
        c: "increase in digital content consumption",
        d: "all of the above",
        correct: "d",
    },
    {
        question: "7) What is the best way to promote a business with social media?",
        a: "Choose the Right Platforms",
        b: "Encourage Engagement",
        c: "Provide Value & Don't Over-Promote",
        d: "All of the above",
        correct: "d",
    },
    {
        question: "8) What is the full form of SEO?",
        a: "A.	Search Engine Optimal",
        b: "B.	Social Engine Optimization",
        c: "B.	Search Engine Optimization",
        d: "D.	Social Engine Optimal",
        correct: "c",
    },
    {
        question: "9) ____ is/are part(s) of SEO.",
        a: "Off-Page",
        b: "On-Page",
        c: "Both a and b",
        d: "Something else",
        correct: "c",
    },
    {
        question: "10) What is the full form of SEM?",
        a: "Social Engine Marketing",
        b: "Search Engine Marketing",
        c: "Search Engine Management",
        d: "Social Engine Management",
        correct: "b",
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