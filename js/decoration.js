function setBgImage(id, image) {
  //   alert(image);
  const bg_image = document.getElementById(id);
  bg_image.setAttribute(
    "style",
    "background: linear-gradient(to right,rgba(180, 0, 4, 0.8) 0%,rgba(255, 255, 255, 0.2) 75%,rgba(48, 17, 17, 0.8) 100%),url(" +
      data +
      ");"
  );
}
alert("hello");
