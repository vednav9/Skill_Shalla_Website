const quizData = [
    {
        question: "1) Is Python code compiled or interpreted?",
        a: "Python code is neither compiled nor interpreted",
        b: "Python code is only compiled",
        c: "Python code is both compiled and interpreted",
        d: "Python code is only interpreted",
        correct: "c",
    },
    {
        question: "2) Which of the following character is used to give single-line comments in Python?",
        a: "/*",
        b: "#",
        c: ";;",
        d: "//",
        correct: "b",
    },
    {
        question: "3) What will be the output of the following Python code snippet if x=1? x<<2",
        a: "4",
        b: "2",
        c: "1",
        d: "8",
        correct: "a",
    },
    {
        question: "4) Which of the following functions can help us to find the version of python that we are currently working on?",
        a: "sys.version(1)",
        b: "sys.version(0)",
        c: "sys.version()",
        d: "sys.version",
        correct: "d",
    },
    {
        question: "5) Which of the following functions is a built-in function in python?",
        a: "factorial()",
        b: "sqrt()",
        c: "print()",
        d: "seed()",
        correct: "c",
    },
    {
        question: "6) Which one of the following is not a keyword in Python language?",
        a: "eval",
        b: "pass",
        c: "assert",
        d: "nonlocal",
        correct: "a",
    },
    {
        question: "7) What are the two main types of functions in Python?",
        a: "System function",
        b: "Custom function",
        c: "System and Custom both",
        d: "Built-in and User defined function",
        correct: "b",
    },
    {
        question: "8) Which of the following is a Python tuple?",
        a: "tuple=<1,2,3>",
        b: "tuple=(1,2,3)",
        c: "tuple={1,2,3}",
        d: "tuple=[1,2,3]",
        correct: "b",
    },
    {
        question: "9) Which of this is not a feature of Python",
        a: "Easy and Simple",
        b: "Portable",
        c: "Interpreted Language",
        d: "Case Insensitive",
        correct: "d",
    },
    {
        question: "10) What is the extension of python file?",
        a: ".pyt",
        b: ".pytn",
        c: ".py",
        d: ".python",
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
function myFunction() {
    document.getElementById("AnchorChange").innerHTML = "../courses.php";
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
           <a id="AnchorChange" href="../quiz/py_home.php">Finish</a> 
           `
       }
    }
})