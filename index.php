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
  <!--Styles-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <!--Tailwind-->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!--Animate on scroll-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Raleway&display=swap"
    rel="stylesheet">
  <title>David || Software Developer</title>
</head>
<body>
  <!--Hero section-->
  <div
    class="hero flex flex-col bg-black min-h-screen w-full justify-center px-4 md:px-8 rounded-br-full overflow-x-hidden font-heading">
    <div class="text text-white text-2xl md:text-3xl font-semibold mb-32 md:mb-0">
      <h1 class="text-4xl">Hi, my name is David.</h1>
      <h3 class="mb-12 typewriter-1">I am a <span class="rolling-text text-teal-500">Software Developer</span></h3>
      <!-- <a
          href="#about">
      <span
        class="py-4 px-8 border-teal-500 hover:bg-teal-500 text-teal-500 hover:text-white border border-teal-500 transition duration-700 text-2xl rounded cursor-pointer self-center">Learn more</span></a> -->
    </div>
    <div class="mouse bottom-0 absolute left-0 right-0">
      <div class="mouse-icon mx-auto">
        <span class="mouse-wheel"></span>
      </div>
    </div>
  </div>
  <!--About section-->
  <div id="about" class="flex flex-col px-4 md:px-8 pt-4">
    <h2 class="text-2xl mt-8 mb-4 text-xl">About me</h2>
    <div class="grid grid-cols-1 md:grid-cols-2">
      <p data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">Hi and welcome to my
        portfolio webpage. Let me introduce myself. My name is David and I am a <span class="age"></span> years old
        software developer! I started my programming journey when I was 13 years old, and it was a love at first sight.
        Mainly im focused on web technologies like Vue and Laravel but also I like to play around with Machine Learning
        and mobile applications development. In this moment I have around <span class="experience"></span> years of
        experience in a professional IT companies as a software developer, but I code and learn new things almost every
        day! My biggest motivation is programming knowledge and opportunities that programming has to offer. I belive
        that software development can really make world a better place, only limit is our own imagination!</p>
      <div class="flex flex-col justify-center items-center">
        <div style="background-image: url('<?php bloginfo('template_url'); ?>/assets/profile-2.jpg');"
          class="rounded-full w-48 h-48 md:w-64 md:h-64 overflow-hidden block bg-cover bg-no-repeat bg-top bg-center mt-8 md:my-0"
          data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        </div>
      </div>
    </div>
  </div>
  <!--My work section-->
  <div class="flex px-4 md:px-8 flex-col overflow-x-hidden">
    <h2 class="text-2xl mt-8 mb-4 text-xl">My work</h2>
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        <a href="https://poliklinika-fides.com/" target="_blank">
          <div class="relative">
            <img src="<?php bloginfo('template_url'); ?>/assets/fides.PNG" alt="Image not found" class="h-auto block w-full">
            <div
              class="absolute top-0 bottom-0 left-0 right-0 h-full w-full opacity-0 transition duration-700 bg-teal-400 hover:opacity-100 flex justify-center items-center">
              <div class="text-white text-lg">Poliklinika Fides</div>
            </div>
          </div>
        </a>
      </div>
      <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        <a href="http://www.apartments-trogir-ciovo.com/" target="_blank">
          <div class="relative">
            <img src="<?php bloginfo('template_url'); ?>/assets/apartments-vukovic.PNG" alt="Image not found" class="h-auto block w-full">
            <div
              class="absolute top-0 bottom-0 left-0 right-0 h-full w-full opacity-0 transition duration-700 bg-teal-400 hover:opacity-100 flex justify-center items-center">
              <div class="text-white text-lg">Apartmani Vuković - Čiovo</div>
            </div>
          </div>
        </a>
      </div>
      <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        <a href="https://www.andrijanaperkovic.com/" target="_blank">
          <div class="relative">
            <img src="<?php bloginfo('template_url'); ?>/assets/andrijana.png" alt="Image not found" class="h-auto block w-full">
            <div
              class="transition w-full absolute top-0 bottom-0 left-0 right-0 h-full opacity-0 duration-700 bg-teal-400 hover:opacity-100 flex justify-center items-center">
              <div class="text-white text-lg">Andrijana Perković</div>
            </div>
          </div>
        </a>
      </div>
      <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        <a href="https://www.abcbreastcare.hr/" target="_blank">
          <div class="relative">
            <img src="<?php bloginfo('template_url'); ?>/assets/abc.png" alt="Image not found" class="h-auto block w-full">
            <div
              class="absolute top-0 bottom-0 left-0 right-0 h-full w-full opacity-0 transition duration-700 bg-teal-400 hover:opacity-100 flex justify-center items-center">
              <div class="text-white text-lg">ABC BreastCare webshop</div>
            </div>
          </div>
        </a>
      </div>
      <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="false">
        <a href="https://restauro-st.com/" target="_blank">
          <div class="relative">
            <img src="<?php bloginfo('template_url'); ?>/assets/restauro.png" alt="Image not found" class="h-auto block w-full">
            <div
              class="absolute top-0 bottom-0 left-0 right-0 h-full w-full opacity-0 transition duration-700 bg-teal-400 hover:opacity-100 flex justify-center items-center">
              <div class="text-white text-lg">Restauro</div>
            </div>
          </div>
        </a>
      </div>
      <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000"
        data-aos-once="false">
        <p class="uppercase text-xl">More coming soon</p>
      </div>

    </div>
    <div class="flex justify-center my-8">
      <span
        class="py-4 px-8 border-teal-500 hover:bg-teal-500 text-teal-500 hover:text-white border border-teal-500 transition duration-700 text-2xl rounded cursor-pointer self-center"><a
          href="https://github.com/davidbarisic10" target="_blank">Github</a></span>
    </div>
  </div>
  <!--Technologies section-->
  <div class="flex px-4 justify-center bg-gray-200 pt-5 text-3xl">
    <h4>Technologies</h4>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 bg-gray-200 px-4 md:px-8 pb-12">
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://vuejs.org/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/vue.png" alt="Vue.JS" class="cursor-pointer">
      </a>
    </div>
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://reactjs.org/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/react.png" alt="React" class="cursor-pointer">
      </a>
    </div>
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://laravel.com/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/laravel.png" alt="Laravel" class="cursor-pointer">
      </a>
    </div>
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://expressjs.com/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/node.png" alt="Node and Express" class="cursor-pointer">
      </a>
    </div>
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://wordpress.com/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/wp.png" alt="Wordpress" class="cursor-pointer">
      </a>
    </div>
    <div class="transform hover:scale-110 duration-200 w-48 h-48 my-4 mx-auto">
      <a href="https://www.opencart.com/" target="_blank" rel="noopener noreferrer">
        <img src="<?php bloginfo('template_url'); ?>/assets/tech/opencart.png" alt="Opencart" class="cursor-pointer">
      </a>
    </div>
  </div>

  <!--My blog section-->
  <div class="flex px-4 md:px-8 bg-gray-200 justify-center md:justify-start">
    <p class="text-3xl my-4">Blog</p>
  </div>

  <div class="grid grid-cols-1 bg-gray-200 w-full md:px-8">
  <?php $myquery = new WP_Query('category_name=uncategorized'); ?>
<?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
<!--Single post-->
<div class="max-w-sm w-full lg:max-w-full lg:flex mb-4" data-aos="fade-up" data-aos-offset="200"
      data-aos-duration="1000" data-aos-once="false">
      <div
        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
        style="background-image: url('<?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail_url(); ?>
            <?php endif; ?>')">
      </div>
      <div
        class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal ">
        <div class="mb-8">
          <p class="text-sm text-gray-600 flex items-center">
            Category name
          </p>
          <div class="text-gray-900 font-bold text-xl mb-2"><?php the_title(); ?></div>
          <p class="text-gray-700 text-base"><?php the_excerpt(); ?></p>
          <div class="mt-2 flex">
            <a href="<?php the_permalink(); ?>">Read more...</a>
          </div>
        </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="<?php bloginfo('template_url'); ?>/assets/profile-1.jpg" alt="Profile image">
          <div class="text-sm">
            <p class="text-gray-900 leading-none">David Barišić</p>
            <p class="text-gray-600"><?php the_time('F jS, Y'); ?></p>
          </div>
        </div>
      </div>
    </div>
<?php endwhile; ?>
  </div>
  <!--Contact-->
  <div class="bg-gray-200 text-3xl flex justify-center">
    <p>Contact me</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 px-4 md:px-8 bg-gray-200">
    <form action="<?php bloginfo('template_url'); ?>/mail.php" method="POST" class="bg-white p-8 md:shadow-xl rounded-lg md:w-3/4 md:mx-auto my-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Full name
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name" type="text" placeholder="Enter your full name" name="name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
          Email
        </label>
        <input
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="email" type="email" placeholder="Enter your email" name="email">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
          Message
        </label>
        <textarea name="message" class="outline-none w-full border rounded px-4" maxlength="1200" rows="4"
          placeholder="Enter your message"></textarea>
        <div class="flex justify-center mt-4">
          <button type="submit"
            class="bg-teal-400 uppercase text-md text-white rounded px-4 py-2 hover:bg-teal-500 transform duration-700">Send</button>
        </div>
      </div>
    </form>
    <div class="info mt-12">
      <p class="mb-2 flex items-center"><img class="w-4 h-4" src="<?php bloginfo('template_url'); ?>/assets/icons/email.png" alt="Mobile:">&nbsp;<a
          href="mailto:davidbarisic10@gmail.com">davidbarisic10@gmail.com</a></p>
      <p class="my-4 flex items-center"><img class="w-4 h-4" src="<?php bloginfo('template_url'); ?>/assets/icons/phone.png" alt="Email:">&nbsp;<a
          href="tel:+385923479443">092 374 9443</a></p>
      <p class="my-4 flex items-center"><img class="w-4 h-4" src="<?php bloginfo('template_url'); ?>/assets/icons/linkedin.png" alt="LinkeIn:">&nbsp;<a
          href="">My LinkedIn profile</a></p>
    </div>
  </div>
  <!--Footer-->
  <div class="flex justify-center bg-black text-white py-4">
    <p>Copyright &copy;
      <script>document.write(new Date().getFullYear())</script> David Barišić</p>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
  <script>
    AOS.init();
    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 400, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  </script>
</body>

</html>
