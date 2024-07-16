// this is JavaScript script is for the toggle menu when in mobile mode 


const navMenu = document.getElementById('nav-menu'),
  navToggle = document.getElementById('nav-toggle'),
  navClose = document.getElementById('nav-close')

if(navToggle){
    navToggle.addEventListener('click', () =>{

        navMenu.classList.add('show-menu')
    }) 
}

if(navClose){
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })

}

// SCRIPT 2
// at the following code we will see how to make the BACKGROUND Header change 
// when we scroll so it can be transparent 

const blurHeader = () =>{
    const header = document.getElementById('header')

    this.scrollY >= 50 ? header.classList.add('blur-header')
                       : header.classList.remove('blur-header')

}
window.addEventListener('scroll',blurHeader);

// 

// SCRIPT EMAIL
const contactForm = document.getElementById('contact-form');
const contactMessage = document.getElementById('contact-message');

const sendEmail = (e) =>{
    // for any errors 
    e.preventDefault();

    // show that the message is send
    emailjs.sendForm('service_27e950b','template_fqeqats','#contact-form','Il1jvhSo9Q23_C3UJ').then( ()=>{
        
        // in case that is successful
        contactMessage.textContent = 'Message send Successfully'
        //Remove message after five seconds
        setTimeout(()=>{
            contactMessage.textContent = ''
        },5000)

        //Clear input  fields
        contactForm.reset()
    },() =>{
                // in case that isn't successful

        contactMessage.textContent = 'Message not send X'

    })

}
contactForm.addEventListener('submit',sendEmail);


// all about thr Scroll UP
const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up');

    this.scrollY >= 250 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}
windows.addEventListener('scroll',scrollUp);


// SCROLL SECTION ACTIVE LINK 

// const sections = document.querySelectorAll('section[id]')

// const scrollActive = () => {
//     const scrollDown = window.scrollY

//     sections.forEach(current =>{
//         const sectionHeight = current.offsetHeight,
//         sectionTop = current.offsetTop -58,
//         sectionId = current.getAttribute('id'),
//         sectionsClass = document.querySelector('navMenu a[href+=' + sectionId + ']')

//         if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
//             sectionsClass.classList.add('active-link')
//         }else{
//             sectionsClass.classList.remove('active-link')
//         }
    
//     })
// }

const sr = ScrollReveal({
    origin:'top',
    distance:'60px',
    duration:2500,
    delay:400,
})

sr.reveal('.homeData')
sr.reveal('homeImg',{delay:600})
sr.reveal('homeScroll',{delay:800})
sr.reveal('workCard',{interval:100})