const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});


// EMAILJS SETUP
(function () {
    emailjs.init("kouuyB_mtqP1EmgY0");
})();


// CONTACT FORM
const form = document.getElementById("contact-form");

form.addEventListener("submit", function (e) {

    e.preventDefault();

    emailjs.sendForm(
        "service_8md7eky",
        "template_5l7yxec",
        this
    )
    .then(() => {

        alert("Message sent successfully!");

        form.reset();

    })
    .catch((error) => {

        alert("Failed to send message.");

        console.log(error);

    });



});