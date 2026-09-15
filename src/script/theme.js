// (function () {
//   const t = localStorage.getItem('crt-theme');
//   if (t === 'light') document.documentElement.classList.add('light-theme');
// })();

const BUTTON = document.querySelector('.button_day_night');
const BODY = document.body;
const STORAGE_KEY = 'crt-theme';

function applyTheme(theme) {
  if (theme === 'light') {
    BODY.classList.add('light-theme');
    BUTTON.textContent = 'DAY';
  } else {
    BODY.classList.remove('light-theme');
    BUTTON.textContent = 'NIGHT';
  }
}

const saved = localStorage.getItem(STORAGE_KEY);
applyTheme(saved || 'dark');

BUTTON.addEventListener('click', () => {
  const isLight = BODY.classList.toggle('light-theme');
  const newTheme = isLight ? 'light' : 'dark';
  BUTTON.textContent = isLight ? 'DAY' : 'NIGHT';
  localStorage.setItem(STORAGE_KEY, newTheme);
});
