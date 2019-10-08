// 0 - both / 1 - blog / 2 - projects
let overviewState = 0;

const postsElement = document.getElementById('posts');

const blogBtns = document.querySelectorAll('.js-blog');
const blogElement = document.getElementById('blog');

const projectsBtns = document.querySelectorAll('.js-projects');
const projectsElement = document.getElementById('projects');

blogBtns.forEach(btn => {
  btn.addEventListener('click', (event) => {
    event.preventDefault();
    overviewState = overviewState !== 1 ? 1 : 0;

    if (overviewState === 1) {
      document.documentElement.classList.add('-blog-expanded');
      document.documentElement.classList.remove('-projects-expanded');
    } else {
      document.documentElement.classList.remove('-blog-expanded');
    }
  });
});

projectsBtns.forEach(btn => {
  btn.addEventListener('click', (event) => {
    event.preventDefault();
    overviewState = overviewState !== 2 ? 2 : 0;

    if (overviewState === 2) {
      document.documentElement.classList.add('-projects-expanded');
      document.documentElement.classList.remove('-blog-expanded');
    } else {
      document.documentElement.classList.remove('-projects-expanded');
    }
  });
});
