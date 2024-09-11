let slideIndex = 0;  
const itemsPerSlide = 1; // Số sản phẩm hiển thị trên mỗi slide (không thay đổi)  
const totalItems = document.querySelectorAll('.detail_info_product_hot').length;  

// Hiển thị slide hiện tại  
function showSlide(index) {  
    const slides = document.querySelector('.infomation_product_hot');  
    const totalSlides = Math.ceil(totalItems / itemsPerSlide); // Tổng số slide cần thiết  
    slideIndex = (index + totalSlides) % totalSlides; // Đảm bảo chỉ số trong phạm vi hợp lệ  

    const offset = -slideIndex * 100; // Tính toán vị trí  
    slides.style.transform = `translateX(${offset}%)`;  
}  

function changeSlide(n) {  
    showSlide(slideIndex + n);  
}  

// Tự động chuyển slide mỗi 3 giây  
setInterval(() => {  
    changeSlide(1);  
}, 3000);  

// Khởi động ban đầu  
showSlide(slideIndex);  