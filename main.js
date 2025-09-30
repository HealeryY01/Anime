// ================== Swiper ==================
const swiper = new Swiper(".mySwiper", {
  loop: true,
  slidesPerView: 4, // Hiện 4 card cùng lúc
  spaceBetween: 20, // khoảng cách giữa card
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// ================== Review Card Toggle ==================
document.querySelectorAll(".toggle-btn").forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    const reviewText = btn.previousElementSibling;
    reviewText.classList.toggle("expanded");
    btn.textContent = reviewText.classList.contains("expanded")
      ? "Show Less"
      : "Show More";
  });
});

// Cân bằng chiều cao các review-card
function equalizeHeights() {
  const cards = document.querySelectorAll(".review-card");
  let maxHeight = 0;

  // reset height trước
  cards.forEach((c) => (c.style.height = "auto"));

  // tìm chiều cao max
  cards.forEach((c) => {
    if (c.offsetHeight > maxHeight) {
      maxHeight = c.offsetHeight;
    }
  });

  // gán lại cho tất cả
  cards.forEach((c) => (c.style.height = maxHeight + "px"));
}

// chạy khi load
window.addEventListener("load", equalizeHeights);
// chạy khi resize
window.addEventListener("resize", equalizeHeights);
// chạy lại khi bấm Show More / Show Less
document.querySelectorAll(".toggle-btn").forEach((btn) => {
  btn.addEventListener("click", function () {
    setTimeout(equalizeHeights); // đợi animation xong rồi cân bằng lại
  });
});

// ================== FAQ Toggle ==================
document.querySelectorAll(".faq-icon").forEach((icon) => {
  icon.addEventListener("click", () => {
    const parent = icon.closest(".faq-item");
    const answer = parent.querySelector(".faq-answer");

    // Đóng tất cả faq khác
    document.querySelectorAll(".faq-item").forEach((faq) => {
      if (faq !== parent) {
        faq.classList.remove("active");
        faq.querySelector(".faq-answer").style.maxHeight = null;
      }
    });

    // Mở cái vừa click (nếu chưa active)
    if (!parent.classList.contains("active")) {
      parent.classList.add("active");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }
  });
});

// ================== Blog Hover Effect ==================
document.addEventListener("DOMContentLoaded", () => {
  const blogItems = document.querySelectorAll(".blog-item");

  blogItems.forEach((item) => {
    const heading = item.querySelector(".blog-heading");
    const content = item.querySelector(".blog-content");

    // Hover vào toàn bộ .blog-content (bao gồm heading, date, description)
    content.addEventListener("mouseenter", () => {
      heading.style.color = "#0077b6";
    });

    content.addEventListener("mouseleave", () => {
      heading.style.color = "";
    });
  });
});
// ================== Hamburger ==================
const menuToggle = document.querySelector(".menu-toggle");
const navMenu = document.querySelector(".nav-menu");

menuToggle.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});
