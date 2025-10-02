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
document.querySelectorAll(".toggle-btn").forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();

    const content = btn.previousElementSibling;
    const moreText = btn.getAttribute("data-more") || "Show More";
    const lessText = btn.getAttribute("data-less") || "Show Less";

    content.classList.toggle("expanded");
    content.classList.toggle("collapsed");

    btn.textContent = content.classList.contains("expanded")
      ? lessText
      : moreText;
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

// ================== Product Detail ==================
// Price
const select = document.getElementById("finish");
const priceBox = document.querySelector(".price");
const priceDel = priceBox.querySelector("del");
const priceSale = priceBox.querySelector(".sale");
const actions = document.querySelector(".actions");
const paypalBtn = document.querySelector(".btn-paypal");

function updatePrice() {
  const value = select.value;

  if (value === "non-foil") {
    priceBox.style.display = "block";
    priceDel.textContent = "$86.00";
    priceSale.textContent = "$76.00";
    actions.classList.remove("disabled");
    paypalBtn.classList.remove("disabled");
  } else if (value === "foil") {
    priceBox.style.display = "block";
    priceDel.textContent = "$172.00";
    priceSale.textContent = "$159.00";
    actions.classList.remove("disabled");
    paypalBtn.classList.remove("disabled");
  } else {
    // Chưa chọn
    priceBox.style.display = "none";
    actions.classList.add("disabled");
    paypalBtn.classList.add("disabled");
  }
}

// chạy lúc load trang
updatePrice();

// chạy khi select thay đổi
select.addEventListener("change", updatePrice);

// Ảnh sản phẩm + gallery
let images = [
  "/ANIME-PHP/img/1.webp",
  "/ANIME-PHP/img/2.webp",
  "/ANIME-PHP/img/3.webp",
  "/ANIME-PHP/img/4.webp",
  "/ANIME-PHP/img/5.webp",
  "/ANIME-PHP/img/6.webp",
  "/ANIME-PHP/img/7.webp",
  "/ANIME-PHP/img/8.webp",
  "/ANIME-PHP/img/9.webp",
  "/ANIME-PHP/img/10.webp",
  "/ANIME-PHP/img/11.webp",
];

let currentIndex = 0;
let windowStart = 0;
const mainImg = document.getElementById("currentImage");
const thumbsContainer = document.getElementById("thumbs");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightboxImg");

// render 4 thumb
function renderThumbs() {
  thumbsContainer.innerHTML = "";
  for (let i = 0; i < 4; i++) {
    let idx = (windowStart + i) % images.length;
    let thumb = document.createElement("img");
    thumb.src = images[idx];
    thumb.onclick = () => {
      currentIndex = idx;
      animateWindowTo(idx); // hiệu ứng về idx
      updateMain(false); // update main nhưng ko reset windowStart ngay
    };
    if (idx === currentIndex) {
      thumb.classList.add("active");
    } else {
      thumb.classList.add("inactive");
    }
    thumbsContainer.appendChild(thumb);
  }
}

function updateMain(resetWindow = true) {
  mainImg.src = images[currentIndex];
  if (resetWindow) windowStart = currentIndex;
  renderThumbs();
}

// === hiệu ứng cuộn từ từ ===
function animateWindowTo(target) {
  let steps = 3; // số bước cuộn
  let count = 0;
  let start = windowStart;

  let diff = (target - start + images.length) % images.length;
  if (diff > images.length / 2) diff -= images.length; // chọn đường đi ngắn

  let timer = setInterval(() => {
    count++;
    windowStart =
      (start + Math.round((diff * count) / steps) + images.length) %
      images.length;
    renderThumbs();
    if (count >= steps) {
      clearInterval(timer);
      windowStart = target;
      renderThumbs();
    }
  }, 50); // tốc độ (ms) → chỉnh để nhanh/chậm
}

// ==== điều khiển main ====
function prevMain() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  windowStart = currentIndex;
  updateMain();
}
function nextMain() {
  currentIndex = (currentIndex + 1) % images.length;
  windowStart = currentIndex;
  updateMain();
}

// ==== điều khiển thumbs (loop) ====
function prevThumbs() {
  windowStart = (windowStart - 1 + images.length) % images.length;
  currentIndex = windowStart;
  updateMain();
}
function nextThumbs() {
  windowStart = (windowStart + 1) % images.length;
  currentIndex = windowStart;
  updateMain();
}

// init
updateMain();

// hover zoom + lightbox

// Hiệu ứng zoom khi hover
mainImg.addEventListener("mousemove", function (e) {
  const rect = mainImg.getBoundingClientRect();
  const x = ((e.clientX - rect.left) / rect.width) * 100;
  const y = ((e.clientY - rect.top) / rect.height) * 100;
  mainImg.style.transformOrigin = `${x}% ${y}%`;
  mainImg.style.transform = "scale(2)"; // chỉnh độ phóng to ở đây
});

mainImg.addEventListener("mouseleave", function () {
  mainImg.style.transform = "scale(1)";
  mainImg.style.transformOrigin = "center center";
});
let slideshowInterval;
let zoomed = false;
let isDragging = false;
let startY,
  translateY = 0;

// Click trực tiếp vào ảnh để thu nhỏ lại
lightboxImg.addEventListener("click", () => {
  if (zoomed) {
    resetZoom();
  }
});

// Kéo ảnh theo trục Oy
lightboxImg.addEventListener("mousedown", (e) => {
  if (!zoomed) return;
  isDragging = true;
  startY = e.clientY - translateY;
  lightboxImg.style.cursor = "grabbing";
});

document.addEventListener("mousemove", (e) => {
  if (!isDragging) return;
  translateY = e.clientY - startY;
  // chỉ translate theo Oy
  lightboxImg.style.transform = `scale(1.5) translateY(${translateY / 2}px)`;
});

document.addEventListener("mouseup", () => {
  if (!zoomed) return;
  isDragging = false;
  lightboxImg.style.cursor = "grab";
});

// Reset zoom
function resetZoom() {
  zoomed = false;
  translateY = 0;
  lightboxImg.style.transform = "scale(1)";
  lightboxImg.style.cursor = "default";
}

// Close lightbox (reset luôn zoom)
function closeLightbox() {
  lightbox.style.display = "none";
  resetZoom();
  document.querySelector(".main-header").style.zIndex = "1100";
  document.querySelector(".top-marquee").style.zIndex = "1000";
}

// Hiển thị slide
function showSlide(index) {
  lightboxImg.src = images[index];
  document.getElementById("counter").innerText = `${index + 1} / ${
    images.length
  }`;
}

// Chuyển slide
function changeSlide(n) {
  currentIndex = (currentIndex + n + images.length) % images.length;
  showSlide(currentIndex);
}

// Zoom
function toggleZoom() {
  if (!zoomed) {
    // Trạng thái chưa zoom → phóng to
    lightboxImg.style.transform = "scale(1.5)";
    lightboxImg.style.cursor = "move";
    zoomed = true;
  } else {
    // Đang zoom → trở lại bình thường
    lightboxImg.style.transform = "scale(1)";
    lightboxImg.style.cursor = "default";
    zoomed = false;
  }
}

// Slideshow
function toggleSlideshow() {
  const playBtn = document.getElementById("playBtn");
  if (slideshowInterval) {
    clearInterval(slideshowInterval);
    slideshowInterval = null;
    playBtn.innerText = "▶️";
  } else {
    slideshowInterval = setInterval(() => changeSlide(1), 2000);
    playBtn.innerText = "⏸️";
  }
}

//để light-box đè main và top-marquee
mainImg.addEventListener("click", function () {
  openLightbox(mainImg.src);
});

function openLightbox(src) {
  lightbox.style.display = "flex";
  lightboxImg.src = src;

  // Đẩy header & marquee xuống dưới
  document.querySelector(".main-header").style.zIndex = "0";
  document.querySelector(".top-marquee").style.zIndex = "0";
}
// Review Section
document.querySelectorAll(".toggle-btn").forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();

    const content = btn.closest(".reviews-section"); // lấy khối reviews-section
    const moreText = btn.getAttribute("data-more") || "Show More";
    const lessText = btn.getAttribute("data-less") || "Show Less";

    content.classList.toggle("expanded");
    content.classList.toggle("collapsed");

    btn.textContent = content.classList.contains("expanded")
      ? lessText
      : moreText;
  });
});
