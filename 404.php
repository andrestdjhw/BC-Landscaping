<?php
/**
 * BC Landscaping & Hardscape - 404
 * Sin este archivo WordPress usaba index.php y la página salía en blanco.
 */

get_header(); ?>

<main class="bg-[#E6DACF]">
  <div class="mx-auto max-w-3xl px-4 py-24 text-center lg:py-32">
    <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Error 404</p>
    <h1 class="mt-3 text-3xl font-black leading-tight tracking-[-0.02em] text-[#2A0111] md:text-5xl">This page took a different path</h1>
    <p class="mx-auto mt-5 max-w-xl text-base leading-7 text-[#2A0111]/70">
      The page you&rsquo;re looking for doesn&rsquo;t exist or has moved. Explore our services or reach out
      and we&rsquo;ll point you in the right direction.
    </p>
    <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="bc-btn bc-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Back to Home</span></a>
      <a href="<?php echo esc_url(home_url('/#services')); ?>" class="inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-[#2A0111] underline underline-offset-4">View Services</a>
      <a href="/contact-us/" class="inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-[#117682] underline underline-offset-4">Contact Us</a>
    </div>
  </div>
</main>

<?php get_footer(); ?>
