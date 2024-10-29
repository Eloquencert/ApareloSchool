const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function scrollToSection(sectionClass) {
    var section = document.querySelector("." + sectionClass);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

document.querySelectorAll('.blocks').forEach(block => {
    block.addEventListener('mousemove', (e) => {
        const rect = block.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        block.style.boxShadow = `${x}px ${y}px 10px rgba(0, 0, 0, 0.1)`;
    });

    block.addEventListener('mouseleave', () => {
        block.style.boxShadow = 'none';
    });
});

// const texts = document.querySelectorAll(".txt");

// window.addEventListener('scroll', e => {
//   texts.forEach(txt => {
//     if (pageYOffset >= 100) {
//       txt.classList.add("op");
//     } else {
//       txt.classList.remove("op");
//     }
//   });
// });