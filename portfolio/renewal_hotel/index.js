
// Mobile nav toggle
const toggleBtn = document.querySelector('.nav__toggle');
// const nav = document.getElementById('navMenu');
const header = document.getElementById('header');

// function setNav(open) {
//   if (!toggleBtn || !nav) return;
//   toggleBtn.setAttribute('aria-expanded', String(open));
//   nav.style.display = open ? 'flex' : '';
//   if (open) {
//     nav.classList.add('nav--open');
//   } else {
//     nav.classList.remove('nav--open');
//   }
// }

// if (toggleBtn) {
//   toggleBtn.addEventListener('click', () => {
//     const open = toggleBtn.getAttribute('aria-expanded') === 'true';
//     setNav(!open);
//   });
// }

// 모바일 전체 메뉴 토글
const navToggle = document.querySelector('.nav__toggle');
const nav = document.getElementById('navMenu');
if (navToggle && nav) {
  navToggle.addEventListener('click', () => {
    const open = nav.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
}

// 모바일 서브메뉴 토글
document.querySelectorAll('.has-sub .nav__link--btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    const li = e.currentTarget.closest('.has-sub');
    const open = li.classList.toggle('is-open-sub');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
});


// Sticky header shadow on scroll
function onScroll() {
  if (!header) return;
  const scrolled = window.scrollY > 8;
  header.style.boxShadow = scrolled ? '0 6px 18px rgba(0,0,0,.08)' : 'none';
}
window.addEventListener('scroll', onScroll);
onScroll();

// Current year in footer
const yearSpan = document.querySelector('[data-year]');
if (yearSpan) {
  yearSpan.textContent = new Date().getFullYear();
}

// Smooth scroll for same-page links
const links = document.querySelectorAll('a[href^="#"]');
links.forEach((a) => {
  a.addEventListener('click', (e) => {
    const id = a.getAttribute('href');
    if (id && id.length > 1) {
      const el = document.querySelector(id);
      if (el) {
        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setNav(false);
      }
    }
  });
});
