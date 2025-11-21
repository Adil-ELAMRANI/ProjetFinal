document.addEventListener("DOMContentLoaded", () => {
    const addToCellarBtns = document.querySelectorAll(".add-to-cellar-btn");
    addToCellarBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            const bottleId = e.currentTarget.dataset.bottleId;
            const userId = e.currentTarget.dataset.userId;
            
            
        });
    });
});
