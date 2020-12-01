const navSlide = () => {
    const burger = document.querySelector('nav .burger');
    const nav = document.querySelector('nav .nav-links');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        burger.classList.toggle('burger-active');
    });
}

const app = ()=> {
    navSlide();
}

app();