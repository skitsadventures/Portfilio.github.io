document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".expandable-image");
    const modal = document.getElementById("imageModal");
    const modalImg = document.getElementById("modalImg");

    images.forEach(img => {
        img.addEventListener("click", () => {
            modalImg.src = img.src;
            modal.style.display = "flex";
        });
    });

    modal.addEventListener("click", () => {
        modal.style.display = "none";
        modalImg.src = "";
    });
});
