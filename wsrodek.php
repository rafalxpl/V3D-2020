<?php
  require_once("head.php");
  require_once("footer.php");
  if (isset($_GET['wid'])) // Check id has been passed in URL
  $id = mysql_real_escape_string($_GET['wid']); // Prevent injection
  $order = mysql_query("SELECT * FROM strona_wtm WHERE wid='$id'");
  $result = mysql_fetch_array($order);
  $tresc = $result['Tresc'];
  $project = $result['Inne'];
  $smarty->display("srodek.tpl");
?>
<!-- <div id="content-wrapper" class="full-width-grid-wrapper">
</div> -->
<div id="content-wrapper" class="full-width-grid-wrapper">
  <div class="r-srodek-img">
    <div class="r-tytul">
   
      <?php echo $project; ?>
    </div>
    <?php echo $tresc; ?><br>
  </div>
</div>
<script>
    const section = document.querySelector('section');
    let currentPos = window.pageYOffset;
    const update = () => {
        const newPos = window.pageYOffset;
        const diff = newPos - currentPos;
        const speed = diff * 0.35;
        section.style.transform = `skewY(${ speed }deg)`;
        currentPos = newPos;
        requestAnimationFrame(update);
    }
    update();
</script>


<script>
ScrollReveal().reveal('.headline', { delay: 400 });
</script>
