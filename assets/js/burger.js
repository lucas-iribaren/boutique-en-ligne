const hamMenu = document.querySelector('.ham-menu');
const offScreenMenu = document.querySelector('.off-screen-menu');

hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');
    offScreenMenu.classList.toggle('active');
})

document.addEventListener('click', (event) => {
    if (!offScreenMenu.contains(event.target) && !hamMenu.contains(event.target)) {
        hamMenu.classList.remove('active');
        offScreenMenu.classList.remove('active');
    }
});