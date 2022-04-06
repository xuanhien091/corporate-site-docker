<?php

/**
 * Template Name: Contact
 */

get_header();
get_template_part('template-parts/common/navigation-menu');
?>

<main class="contact">
  <div class="container">
    <h1>CONTACT</h1>
    <form action="">
      <div class="form-input">
        <label for="name">名前</label>
        <input type="text" id="name">
      </div>
      <div class="form-input">
        <label for="company">会社名</label>
        <input type="text" id="company">
      </div>
      <div class="form-input">
        <label for="mail">メールアドレス</label>
        <input type="text" id="mail">
      </div>

      <input type="button" value="送信">
    </form>
  </div>
</main>

<?php get_footer(); ?>