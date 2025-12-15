function moveSlide(direction) {
  const container = document.getElementById("productContainer");
  const cardWidth = 200; // kích thước card + khoảng cách
  container.scrollLeft += direction * cardWidth;
}
