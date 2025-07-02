const bodytag = document.body;
const popupBody = document.querySelector(".popBody");

const burgery = document.querySelector(".burger");

burgery.addEventListener("click", () => {
    popupBody.classList.toggle("activate");
});

bodytag.addEventListener("click", (e) => {
    !popupBody.contains(e.target) &&
    !burgery.contains(e.target) &&
    popupBody.classList.contains("activate")
        ? popupBody.classList.remove("activate")
        : "nothing";
});
