// @codekit-prepend "lib/Modernizr.js"
// @codekit-prepend "../../bower_components/rocket/src/js/kit.js"

ready(function () {
  k('.thumbnail').click(function() {
    k(this).siblings('.video').toggleClass('show');
  });
  k('.video-toggle').click(function() {
    k(this).parent().toggleClass('show');
  });

  k('.site-nav li').click(function() {
    var target = k('.section').eq(k.index(k('.site-nav li'), k(this)[0])).getTop();
    scrollTo(target, 400);
  });
})
