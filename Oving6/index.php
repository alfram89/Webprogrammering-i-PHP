<?php session_start() ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Startsiden; <?php echo date("d.m.Y");?></title>
        <meta charset="UTF-8">
        <meta name="description" content="Startside for faget Webprogrammering i PHP">
        <meta name="keywords" content="PHP, Tutorials, Øving, Webprogrammering, NTNU">
        <meta http-equiv="refresh" content="60">
    </head>
    <body>
      <form action="" method="post" target="_self">
        <select class="font" name="font">
          <option value="ariel">Ariel</option>
          <option value="conic Sans">Comic Sans</option>
        </select>
        <select class="fsize" name="fsize">
          <option value="12">12</option>
          <option value="16">16</option>
        </select>
        <select class="bfarge" name="bfarge">
          <option value="hvit">Hvit</option>
          <option value="gronn">Grønn</option>
        </select>
        <input type="text" name="navn" value="Navnet ditt">
        <input type="submit" name="submit">
      </form>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet sapien hendrerit, fermentum ipsum et, laoreet odio.
         Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin commodo tellus ultricies nibh molestie,
         in commodo nunc interdum. Vivamus elit risus, luctus at arcu sit amet, lacinia porta neque. Aliquam mattis vitae sem sed tristique.
         Nullam semper ultrices nisi commodo condimentum. Pellentesque eu elit ultricies, dapibus elit ac, luctus justo. Quisque et ligula imperdiet,
         blandit lectus sed, eleifend eros. Praesent porttitor risus ac lorem gravida, non convallis erat blandit. Orci varius natoque penatibus et magnis dis parturient montes,
         nascetur ridiculus mus. Maecenas lectus felis, pellentesque vitae interdum vitae, ornare in ante. Vivamus dictum lacus a dolor sagittis, sed egestas ante porta</p>

    </body>
</html>
