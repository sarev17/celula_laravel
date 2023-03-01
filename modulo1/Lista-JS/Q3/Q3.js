let tabs = document.querySelectorAll(".tabs h3");

let tabsContent = document.querySelectorAll(".tab-content div");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        tabsContent.forEach((content) => {
            content.classList.remove("ativa");
        });
        
        tabs.forEach((tab) => {
            tab.classList.remove("ativa");
        });
        tabsContent[index].classList.add("ativa");
        tabs[index].classList.add("ativa");
    });
});