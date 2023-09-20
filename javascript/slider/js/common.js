hljs.highlightAll();

// 모달
const modalBtn = document.querySelector(".modal_btn");
const modalClose = document.querySelector(".modal_close");
const modalCont = document.querySelector(".modal_cont");

modalBtn.addEventListener("click", () => {
    modalCont.classList.add("show");
    modalCont.classList.remove("hide");
})
modalClose.addEventListener("click", () => {
    modalCont.classList.add("hide");
})


// 탭메뉴
const tabBtn = document.querySelectorAll(".modal_box .tabs > div");
const tabCont = document.querySelectorAll(".modal_box .cont > div");

tabBtn.forEach((element, index) => {
    element.addEventListener("click", (e) => {
        e.preventDefault(); // a링크 같은 거 막아줌

        tabBtn.forEach(li => li.classList.remove("active"));
        element.classList.add("active");

        tabCont.forEach(div => div.style.display = "none");
        tabCont[index].style.display = "block";
    })
})