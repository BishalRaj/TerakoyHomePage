(function ($, win) {
  $.fn.inViewport = function (cb) {
    return this.each(function (i, el) {
      function visPx() {
        var H = $(this).height(),
          r = el.getBoundingClientRect(),
          t = r.top,
          b = r.bottom;
        return cb.call(el, Math.max(0, t > 0 ? H - t : b < H ? b : H));
      }
      visPx();
      $(win).on("resize scroll", visPx);
    });
  };
})(jQuery, window);

$(".has-animation").inViewport(function (px) {
  if (px) $(this).addClass("animate-now");
});
