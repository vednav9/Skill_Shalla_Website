const quizData = [
    {
        question: "1) What is the first step when beginning to learn python programming?",
        a: "Learn basic syntax",
        b: "Create a project",
        c: "Intall a web server",
        d: "Install a python interpreter",
        correct: "d",
    },
    {
        question: "2) What language as python programming written in ?",
        a: "C++",
        b: "C Language",
        c: "Assembly Language ",
        d: "Java",
        correct: "b",
    },
    {
        question: "3) What is the main purpose of Python Programming Language ?",
        a: "Create Website",
        b: "Create Mobile Application",
        c: "To develop Machine Learning Algorithm",
        d: "Create Desktop Application",
        correct: "c",
    },
    {
        question: "4) What year was Python launched?",
        a: "1996",
        b: "1991",
        c: "1994",
        d: "none of the above",
        correct: "b",
    },
    {
        question: "5) Python was created by ?",
        a: "James Gosling",
        b: "Guido van Rossum",
        c: "Dennis Ritchie ",
        d: "None of the above",
        correct: "b",
    },
    {
        question: "6) What will be the value of the following Python expression? 4 + 3 % 5",
        a: "7",
        b: "2",
        c: "4",
        d: "1",
        correct: "a",
    },
    {
        question: "7) What does pip stand for python?",
        a: "Pip Installs Python",
        b: "Pip Installs Packages",
        c: "Preferred Installer Program",
        d: "All of the mentioned",
        correct: "c",
    },
    {
        question: "8) What arithmetic operators cannot be used with strings in Python? ",
        a: "*",
        b: "+",
        c: "-",
        d: "All of the mentioned",
        correct: "c",
    },
    {
        question: "9) Which of the following is not a core data type in Python programming? ",
        a: "Tuples",
        b: "Class",
        c: "Set",
        d: "Dictionary",
        correct: "b",
    },
    {
        question: "10) To add a new element to a list we use which Python command? ",
        a: "list1.addEnd(5)",
        b: "list1.addLast(5)",
        c: "list1.add(5)",
        d: "list1.append(5)",
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