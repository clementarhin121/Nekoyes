const bodytag = document.body;
const popupBody = document.querySelector(".popBody");

const burgery = document.querySelector(".burger");
const userIcon = document.querySelector(".userIcon");
const usersbody = document.querySelector(".usersbody");
const sino = document.querySelector(".sino");

burgery.addEventListener("click", () => {
    popupBody.classList.toggle("activate");
});

usersbody.addEventListener("click", () => {
    sino.classList.toggle("engage");
});

bodytag.addEventListener("click", (e) => {
    !popupBody.contains(e.target) &&
    !burgery.contains(e.target) &&
    popupBody.classList.contains("activate")
        ? popupBody.classList.remove("activate")
        : "nothing";
    sino.classList.contains("engage") &&
    !userIcon.contains(e.target) &&
    !sino.contains(e.target)
        ? sino.classList.remove("engage")
        : "nothing";
});
