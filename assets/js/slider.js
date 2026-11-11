document.querySelectorAll(".slider").forEach((slider) => {
  const track = slider.querySelector(".slider-track");

  slider.querySelectorAll(".slider-btn").forEach((button) => {
    button.addEventListener("click", () => {
      const dir = Number(button.dataset.dir);
      track.scrollBy({ left: dir * track.clientWidth, behavior: "smooth" });
    });
  });
});
