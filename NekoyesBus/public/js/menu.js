const burger = document.querySelector(".burger");
const itemization = document.querySelector(".itemization");
const body = document.body;
const party = document.getElementById("party");
burger.addEventListener("click", () => {
    itemization.classList.toggle("activate");
    itemization.classList.contains("activate")
        ? party.classList.add("active")
        : party.classList.remove("active");
});

body.addEventListener("click", (event) => {
    !burger.contains(event.target)
        ? itemization.classList.remove("activate")
        : null;
    itemization.classList.contains("activate")
        ? party.classList.add("active")
        : party.classList.remove("active");
});
