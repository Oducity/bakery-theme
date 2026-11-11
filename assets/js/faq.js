document.querySelectorAll(".faq-question").forEach((button) => {
  button.addEventListener("click", () => {
    const isOpen = button.getAttribute("aria-expanded") === "true";
    const panel = document.getElementById(button.getAttribute("aria-controls"));

    button.setAttribute("aria-expanded", String(!isOpen));
    panel.hidden = isOpen;
  });
});
