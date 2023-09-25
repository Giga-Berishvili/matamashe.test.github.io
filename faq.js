document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.faq__questions__section div');
    const answerLayout = document.querySelector('.faq__answers');
    const questionShow = document.querySelector('.faq__answers span');
    const asnwerShow = document.querySelector('faq__answers h1');

    questions.forEach(question => {
        const questionsR = question.querySelector('.faq__questions__section div span');
        const answersR = question.querySelector('.faq__questions__section div p');
        
        question.addEventListener('click', () => {
            // Remove the activeInstallBtn class from all buttons
            answerLayout.style.display = "flex";
            document.getElementById('answer').textContent = `${answersR.textContent}`;
            questionShow.textContent = `${questionsR.textContent}`;

        });

        answerLayout.addEventListener('click', () => {
            // Remove the activeInstallBtn class from all buttons
            answerLayout.style.display = "none";
        });
    });
});
