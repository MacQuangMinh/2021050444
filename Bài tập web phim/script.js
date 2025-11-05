let listFilm = [
    {
        id: 1,
        name: "Nụ đỏ",
        type: "Phim chiếu rạp",
        banner: "img/banner/nu-do2-1122.jpg",
        trailer: "https://youtu.be/BD6PozJdt_M?si=xv-bQJUNlp4XLwH"
    },
    {
        id: 2,
        name: "Conan",
        type: "Phim hoạt hình",
        banner: "img/banner/conan-banner.jpg",
        trailer: "https://youtu.be/BD6PozJdt_M?si=xv-bQJUNlp4XLwH"
    }
];

let bannerElement = document.getElementsByClassName("banner")[0];

function viewTrailer() {
    let trailerElement = document.getElementsByClassName("trailer")[0];
    bannerElement.style.display = "none";
    trailerElement.style.display = "block";
}

f// ===== DANH SÁCH PHIM =====
const listFilm = [
  { id: 1, name: "Mưa đỏ",  banner: "img/banner/nu-do2-1122.jpg", year: 2023, time: "1.5 giờ", country: "Nhật Bản" },
  { id: 2, name: "Conan",   banner: "img/banner/conan-banner.jpg", year: 2024, time: "2 giờ",   country: "Việt Nam" }
];

// ===== PHẦN TỬ TRÊN TRANG =====
const bannerImg   = document.querySelector(".banner");
const infoName    = document.querySelector(".info-bar .info-name");
const infoYear    = document.querySelector(".info-bar .info-year");
const infoTime    = document.querySelector(".info-bar .info-time");
const infoCountry = document.querySelector(".info-bar .info-country");

// ===== HÀM CHỌN PHIM =====
function chooseFilm(id){
  const f = listFilm.find(x => x.id === id);
  if (!f) return;

  // Đổi ảnh banner
  bannerImg.src = f.banner;

  // Cập nhật dòng thông tin
  infoName.textContent = f.name;
  infoYear.textContent = f.year;
  infoTime.textContent = f.time;
  infoCountry.textContent = f.country;
}
