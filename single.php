<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="David Barisic">
  <meta name="theme-color" content="#4fd1c5" />
  <!--Favicon-->
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/icons/favicon.png" type="image/png" sizes="16x16">
  <!--Tailwind-->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Raleway&display=swap" rel="stylesheet">
  <!--Styles-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <title>David Barisic || <?php the_title(); ?></title>
</head>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <body class="bg-gray-200">
      <div class="header bg-gray-800 flex flex-col justify-center items-center px-4 lg:px-64 py-32">
        <div class="flex flex-col">
          <p class="text-white font-heading text-2xl md:text-4xl"><?php the_title(); ?></p>
          <p class="self-start mt-4 text-white"><span class="opacity-50 text-white">Author:</span> David Barišić</p>
          <p class="self-start mt-4 text-white"><span class="opacity-50 text-white">Posted on:</span> <?php the_time('F jS, Y'); ?></p>
          <a href="<?php echo home_url(); ?>" class="self-start mt-4 text-white">&larr; Return to homepage</a>
        </div>
      </div>
      <div class="post-body px-4 md:px-16 -mt-16 bg-white rounded-lg mx-4 md:mx-16 py-12 md:py-20 shadow-xl leading-loose">
        <?php the_content(); ?>
      </div>
      <!--Comments-->
      <div class="flex my-4 text-2xl text-black px-4 md:px-16">
        Comments
      </div>
      <p class="px-4 md:px-16 leading-loose">
        <?php if (is_single()) : ?>

          <?php foreach (get_comments() as $comment) : ?>
            <div class="shadow-lg mx-4 md:mx-16 my-4 bg-gray-400 flex flex-col py-4 rounded-md">
              <div class="author text-lg px-4 md:px-16 text-blue-500">
                <?php echo $comment->comment_author; ?>
              </div>
              <div class="px-4 md:px-16 text-black">
                <?php echo $comment->comment_content; ?>
              </div>
            </div>
          <?php endforeach; ?>
          <?php comments_template(); ?>

        <?php endif; // close to check single.php
        ?>
      </p>

      <!--Footer-->
      <div class="flex justify-center bg-black text-white py-4 mt-4">
        <p>Copyright &copy;
          <script>
            document.write(new Date().getFullYear())
          </script> David Barišić</p>
      </div>
    </body>
  <?php endwhile; ?>
<?php else : ?>
  <p><?php __('No posts found'); ?></p>
<?php endif; ?>

</html>
