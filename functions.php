<?php

function boilerplate_load_assets() {
  $js_path = get_theme_file_path('/build/index.js');
  $css_path = get_theme_file_path('/build/index.css');
  $js_ver = file_exists($js_path) ? filemtime($js_path) : '1.0';
  $css_ver = file_exists($css_path) ? filemtime($css_path) : '1.0';

  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), $js_ver, true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'), array(), $css_ver);
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');


/**
 * Floating Call Button, visible en todo el sitio
 */
function bc_floating_call_button() {
  ?>
  <a href="tel:+14802294950" class="bc-float-call" aria-label="Llamar a BC Landscaping & Hardscape">
    <span class="bc-float-call__icon" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="currentColor"/>
      </svg>
    </span>
    <span class="bc-float-call__label">Llámanos ahora<br><small>(480) 229-4950</small></span>
  </a>

<style>
  .bc-float-call{
    position: fixed;
    right: 20px;
    bottom: 20px;
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 0;
    width: 58px;
    height: 58px;
    padding: 0;
    background: #BCBF60;
    color: #2A0111;
    border-radius: 999px;
    box-shadow: 0 14px 34px rgba(42,1,17,.28);
    text-decoration: none;
    overflow: hidden;
    transition: box-shadow .3s ease, width .35s cubic-bezier(.16,1,.3,1), padding .35s cubic-bezier(.16,1,.3,1);
  }
  .bc-float-call__icon{
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 58px;
    height: 58px;
    border-radius: 50%;
  }
  .bc-float-call__icon svg{
    width: 24px;
    height: 24px;
    animation: bcFloatRing 2.4s ease-in-out infinite;
  }
  .bc-float-call__label{
    max-width: 0;
    white-space: nowrap;
    overflow: hidden;
    font-size: .82rem;
    font-weight: 800;
    line-height: 1.3;
    letter-spacing: .01em;
    opacity: 0;
    transition: max-width .35s cubic-bezier(.16,1,.3,1), opacity .25s ease .05s;
  }
  .bc-float-call__label small{
    font-size: .72rem;
    font-weight: 700;
    opacity: .85;
  }
  .bc-float-call:hover,
  .bc-float-call:focus-visible{
    width: auto;
    padding-right: 20px;
    box-shadow: 0 18px 40px rgba(42,1,17,.36);
  }
  .bc-float-call:hover .bc-float-call__label,
  .bc-float-call:focus-visible .bc-float-call__label{
    max-width: 220px;
    opacity: 1;
    margin-left: .75rem;
  }

  @keyframes bcFloatRing{
    0%, 100% { transform: rotate(0deg); }
    5%  { transform: rotate(-15deg); }
    10% { transform: rotate(12deg); }
    15% { transform: rotate(-8deg); }
    20% { transform: rotate(0deg); }
  }

  @media (max-width: 640px){
    .bc-float-call{ right: 14px; bottom: 14px; width: 52px; height: 52px; }
    .bc-float-call__icon{ width: 52px; height: 52px; }
  }

  @media (prefers-reduced-motion: reduce){
    .bc-float-call__icon svg{ animation: none; }
  }
</style>
  <?php
}

add_action('wp_footer', 'bc_floating_call_button');