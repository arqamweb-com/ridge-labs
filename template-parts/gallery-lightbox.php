<?php
/**
 * Shared gallery lightbox markup.
 *
 * Included by the Gallery page and the home "The Product" section. The JS in
 * assets/js/theme.js collects every [data-gallery-item] on the page and drives
 * this single #gallery-lightbox overlay. Inline-styled so it never depends on
 * compiled Tailwind classes being present.
 */
defined('ABSPATH') || exit;
?>
<style>
  #gallery-lightbox{position:fixed;inset:0;z-index:100;display:none;align-items:center;justify-content:center;
    padding:1.25rem;background:rgba(12,14,18,.92);backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);}
  #gallery-lightbox.is-open{display:flex;}
  #gallery-lightbox .glb-btn{position:absolute;z-index:10;display:inline-flex;align-items:center;justify-content:center;
    height:2.75rem;width:2.75rem;border-radius:9999px;color:#fff;background:rgba(255,255,255,.10);
    border:1px solid rgba(255,255,255,.18);backdrop-filter:blur(6px);cursor:pointer;transition:background .25s,transform .25s;}
  #gallery-lightbox .glb-btn:hover{background:rgba(255,255,255,.22);}
  #gallery-lightbox .glb-close{top:1.25rem;right:1.25rem;height:2.5rem;width:2.5rem;}
  #gallery-lightbox .glb-prev{left:1rem;top:50%;transform:translateY(-50%);}
  #gallery-lightbox .glb-next{right:1rem;top:50%;transform:translateY(-50%);}
  #gallery-lightbox .glb-frame{position:relative;margin:0 auto;width:100%;max-width:60rem;text-align:center;}
  #gallery-lightbox .glb-frame img{display:block;margin:0 auto;max-width:100%;max-height:80vh;width:auto;height:auto;
    border-radius:1rem;border:1px solid rgba(255,255,255,.10);}
  #gallery-lightbox .glb-caption{margin-top:1rem;font-size:.875rem;color:rgba(255,255,255,.7);}
  @media (min-width:640px){
    #gallery-lightbox .glb-close{top:1.5rem;right:1.5rem;}
    #gallery-lightbox .glb-prev{left:1.5rem;}
    #gallery-lightbox .glb-next{right:1.5rem;}
  }
</style>
<div id="gallery-lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">

  <button type="button" class="glb-btn glb-close" data-lightbox-close aria-label="Close">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 6 6 18" /><path d="m6 6 12 12" /></svg>
  </button>

  <button type="button" class="glb-btn glb-prev" data-lightbox-prev aria-label="Previous image">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6" /></svg>
  </button>

  <button type="button" class="glb-btn glb-next" data-lightbox-next aria-label="Next image">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6" /></svg>
  </button>

  <div class="glb-frame">
    <img id="gallery-lightbox-img" src="" alt="" />
    <p id="gallery-lightbox-caption" class="glb-caption"></p>
  </div>
</div>
