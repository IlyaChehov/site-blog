const buttonThemeToggle = document.querySelector('#theme-toggle');
const body = document.body;
const saveTheme = localStorage.getItem('theme');

if (saveTheme === 'dark') {
    body.classList.remove('light-theme');
    body.classList.add('dark-theme');
} else {
    body.classList.remove('dark-theme');
    body.classList.add('light-theme');
}


buttonThemeToggle.addEventListener('click', () => {
    if (body.classList.contains('light-theme')) {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
        localStorage.setItem('theme', 'dark')
    } else {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
        localStorage.setItem('theme', 'light')
    }
})