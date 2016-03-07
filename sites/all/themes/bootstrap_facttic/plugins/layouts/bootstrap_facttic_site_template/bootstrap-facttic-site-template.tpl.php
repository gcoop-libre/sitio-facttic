<?php

/**
 * @file
 * This layout is designed to be the site template layout when using
 * the Panels Everywhere module.
 */
?>
  <div id="skip-link">
    <a class="element-invisible element-focusable" href="#main-content"><?php print t('Jump to main content'); ?></a>
  </div>
  <?php if (!empty($content['logo'])): ?>
    <header class="header container clearfix">
        <div class="row">
          <div class="col-md-8">
            <?php print render($content['logo']); ?>  
          </div>
          <div class="col-md-4">
            <?php print render($content['search']); ?>  
          </div>
        </div>
        <?php if (!empty($content['nav'])): ?>
          <!-- Navigation -->
          <nav class="navbar" role="navigation">
              <div class="page-nav-inner">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-menu-collapse">
                    <?php print render($content['nav']); ?>
                  </div><!-- /.navbar-collapse -->
              </div>
              <!-- /.container -->
          </nav>
        <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php if (!empty($content['main'])): ?>
    <div class="container">
        <?php print render($content['main']); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
    <div class="container page-closure">
      <div class="row">
        <div class="col-md-12 page-closure-wrapper">
          <div class="enlacesdeinteres">
            <?php print render($content['interest_links']); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3">
        <?php print render($content['members']); ?>            
      </div>
    </div>
  <?php endif; ?>

<!--<div<?php print $css_id ? " id=\"$css_id\"" : ''; ?> class="page-wrapper">

  <?php if (!empty($content['branding'])): ?>
    <div class="page-branding-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-branding grid-48">
          <div class="page-branding-inner clearfix">
          HOLA
            <?php print render($content['branding']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['nav'])): ?>
    <div class="page-nav-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-nav grid-48">
          <div class="page-nav-inner clearfix">
            <?php print render($content['nav']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['main'])): ?>
    <div class="page-body-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-body grid-48">
          <div class="page-body-inner clearfix">
            <?php print render($content['main']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
    <div class="page-closure-wrapper">
      <div class="region container-48 clearfix">
        <div class="page-closure grid-48">
          <div class="page-closure-inner clearfix">
            <?php print render($content['footer']); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>
-->