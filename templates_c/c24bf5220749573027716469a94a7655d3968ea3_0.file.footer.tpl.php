<?php
/* Smarty version 3.1.33, created on 2019-02-14 17:44:57
  from '/home1/rafalxpl/public_html/v3d/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c65fd794cb236_49430322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c24bf5220749573027716469a94a7655d3968ea3' => 
    array (
      0 => '/home1/rafalxpl/public_html/v3d/templates/footer.tpl',
      1 => 1550187786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65fd794cb236_49430322 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="content-wrapper" class="full-width-grid-wrapper">
  <section class="portfolio-full-width-grid">

  </section>
      <div class="footerline">
    <a href="https:/visual3design.com">visual3design.com</a> 2019
    </div>
</div>
<?php echo '<script'; ?>
>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#scroll').fadeIn();
      } else {
        $('#scroll').fadeOut();
      }
    });
    $('#scroll').click(function () {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
  });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  new SmoothScroll();

  function SmoothScroll(el) {
    var t = this,
      h = document.documentElement;
    el = el || window;
    t.rAF = false;
    t.target = 0;
    t.scroll = 0;
    t.animate = function () {
      t.scroll += (t.target - t.scroll) * 0.1;
      if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
        cancelAnimationFrame(t.rAF);
        t.rAF = false;
      }
      if (el == window) scrollTo(0, t.scroll);
      else el.scrollTop = t.scroll;
      if (t.rAF) t.rAF = requestAnimationFrame(t.animate);
    };
    el.onmousewheel = function (e) {
      e.preventDefault();
      e.stopPropagation();
      var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
      t.target += (e.wheelDelta > 0) ? -70 : 70;
      if (t.target < 0) t.target = 0;
      if (t.target > scrollEnd) t.target = scrollEnd;
      if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);
    };
    el.onscroll = function () {
      if (t.rAF) return;
      t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
      t.scroll = t.target;
    };
  }
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
