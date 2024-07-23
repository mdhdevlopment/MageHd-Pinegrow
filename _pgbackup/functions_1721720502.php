<?php
if ( ! function_exists( 'mage_hd_theme_setup' ) ) :

function mage_hd_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'mage_hd_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mage_hd_theme' ),
        'social'  => __( 'Social Links Menu', 'mage_hd_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'quick_links', __( 'Quick links', 'mage_hd_theme' )  );

    register_nav_menu(  'tools', __( 'Tools', 'mage_hd_theme' )  );

    register_nav_menu(  'clients_links', __( 'Clients Links', 'mage_hd_theme' )  );

    register_nav_menu(  'digital_marketing', __( 'Digital Marketing', 'mage_hd_theme' )  );

    register_nav_menu(  'web_design_development', __( 'Web Design & Development', 'mage_hd_theme' )  );

    register_nav_menu(  'mobile_app_development', __( 'Mobile App Development', 'mage_hd_theme' )  );

    register_nav_menu(  'uiux_design_services', __( 'UI/UX Design Services', 'mage_hd_theme' )  );

    register_nav_menu(  'digital_marketing_industry', __( 'Digital Marketing by Industry', 'mage_hd_theme' )  );

    register_nav_menu(  'web_design_services_industry', __( 'Web Design Services by Industry', 'mage_hd_theme' )  );

    register_nav_menu(  'mobile_app_development_type', __( 'Mobile App Development by Type', 'mage_hd_theme' )  );

    register_nav_menu(  'ui-ux-by-type', __( 'UI/UX by Type', 'mage_hd_theme' )  );

    register_nav_menu(  'privacy-terms', __( 'Privacy & Terms', 'mage_hd_theme' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // mage_hd_theme_setup

add_action( 'after_setup_theme', 'mage_hd_theme_setup' );


if ( ! function_exists( 'mage_hd_theme_init' ) ) :

function mage_hd_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('newsletter', array(
        'labels' => 
            array(
                'name' => __( 'Subscribe Newsletter', 'mage_hd_theme' ),
                'singular_name' => __( 'Subscribe Newsletter', 'mage_hd_theme' )
            ),
        'public' => false,
        'supports' => array( 'title', 'editor', 'author' ),
        'show_in_rest' => false,
        'show_ui' => true,
        'show_in_menu' => true
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // mage_hd_theme_setup

add_action( 'init', 'mage_hd_theme_init' );


if ( ! function_exists( 'mage_hd_theme_custom_image_sizes_names' ) ) :

function mage_hd_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'mage_hd_theme_custom_image_sizes_names' );
endif;// mage_hd_theme_custom_image_sizes_names



if ( ! function_exists( 'mage_hd_theme_widgets_init' ) ) :

function mage_hd_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'mage_hd_theme_widgets_init' );
endif;// mage_hd_theme_widgets_init



if ( ! function_exists( 'mage_hd_theme_customize_register' ) ) :

function mage_hd_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'contact_info', array(
        'title' => __( 'Contact Infromation', 'mage_hd_theme' )
    ));

    $wp_customize->add_section( 'social_link', array(
        'title' => __( 'Social Link', 'mage_hd_theme' )
    ));

    $wp_customize->add_section( 'social_link', array(
        'title' => __( 'Social Link', 'mage_hd_theme' )
    ));

    $wp_customize->add_section( 'contact_info', array(
        'title' => __( 'Contact Infromation', 'mage_hd_theme' )
    ));

    $wp_customize->add_section( 'social_link', array(
        'title' => __( 'Social Link', 'mage_hd_theme' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'contact_info_location', array(
        'type' => 'theme_mod',
        'default' => __( '610 E Zack St. Ste 110-2177Tampa, FL 33602', 'mage_hd_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_location', array(
        'label' => __( 'Location', 'mage_hd_theme' ),
        'type' => 'text',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'contact_info_phone', array(
        'type' => 'theme_mod',
        'default' => __( '800-344-5345', 'mage_hd_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_phone', array(
        'label' => __( 'Contact No', 'mage_hd_theme' ),
        'type' => 'textarea',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'contact_info_email', array(
        'type' => 'theme_mod',
        'default' => __( 'hello@magehd.com', 'mage_hd_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'contact_info_email', array(
        'label' => __( 'Email', 'mage_hd_theme' ),
        'type' => 'textarea',
        'section' => 'contact_info'
    ));

    $wp_customize->add_setting( 'facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'facebook', array(
        'label' => __( 'Facebook', 'mage_hd_theme' ),
        'type' => 'url',
        'section' => 'social_link'
    ));

    $wp_customize->add_setting( 'twitter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'twitter', array(
        'label' => __( 'Twitter', 'mage_hd_theme' ),
        'type' => 'url',
        'section' => 'social_link'
    ));

    $wp_customize->add_setting( 'linkedin', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'linkedin', array(
        'label' => __( 'LinkedIn', 'mage_hd_theme' ),
        'type' => 'url',
        'section' => 'social_link'
    ));

    $wp_customize->add_setting( 'instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'instagram', array(
        'label' => __( 'Instagram', 'mage_hd_theme' ),
        'type' => 'url',
        'section' => 'social_link'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'mage_hd_theme_customize_register' );
endif;// mage_hd_theme_customize_register


if ( ! function_exists( 'mage_hd_theme_enqueue_scripts' ) ) :
    function mage_hd_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', [], '1.0.0', false);

    wp_deregister_script( 'mage_hd_theme-theme' );
    wp_enqueue_script( 'mage_hd_theme-theme', get_template_directory_uri() . '/assets/js/theme.js', [], '1.0.0', false);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', [], '1.0.0', false);

    wp_deregister_script( 'mage_hd_theme-owlcarousel' );
    wp_enqueue_script( 'mage_hd_theme-owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [], '1.0.0', false);

    wp_register_script( 'inline-script-1', '', [], '1.0.0', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '// document.addEventListener(\'DOMContentLoaded\', function() {
                    document.getElementById(\'page-speed-form\').addEventListener(\'submit\', function(event) {
                        event.preventDefault();
                        const url = document.getElementById(\'urlInput\').value;
                        const apiKey = \'AIzaSyCIq-J9QUOn9_32dtsAZEETXlpkR9085U4\';
                        const desktopUrl = `https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=${encodeURIComponent(url)}&key=${apiKey}&strategy=desktop`;
                        const mobileUrl = `https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=${encodeURIComponent(url)}&key=${apiKey}&strategy=mobile`;
            
                        Promise.all([fetchPageSpeedData(desktopUrl, \'desktop\'), fetchPageSpeedData(mobileUrl, \'mobile\')])
                            .then(() => {
                                 //window.location.href = \'http://localhost/magehd/page-speed/\';
                                window.location.href = \'/page-speed/\';
                            })
                            .catch(error => console.error(\'Error:\', error));
                    });
            
                    function fetchPageSpeedData(apiUrl, strategy) {
                        return fetch(apiUrl)
                            .then(response => response.json())
                            .then(data => {
                            const fullPageImg = data.lighthouseResult.fullPageScreenshot.screenshot[\'data\'];
                                const performance = data.lighthouseResult.categories.performance.score * 100;
                                const firstContentfulPaint = data.lighthouseResult.audits[\'first-contentful-paint\'].displayValue;
                                const speedIndex = data.lighthouseResult.audits[\'speed-index\'].displayValue;
                                const largestContentfulPaint = data.lighthouseResult.audits[\'largest-contentful-paint\'].displayValue;
                                const timeToInteractive = data.lighthouseResult.audits[\'interactive\'].displayValue;
                                const totalBlockingTime = data.lighthouseResult.audits[\'total-blocking-time\'].displayValue;
                                const cumulativeLayoutShift = data.lighthouseResult.audits[\'cumulative-layout-shift\'].displayValue;
            
                                const result = {
                                    fullPageImg,
                                    performance,
                                    firstContentfulPaint,
                                    speedIndex,
                                    largestContentfulPaint,
                                    timeToInteractive,
                                    totalBlockingTime,
                                    cumulativeLayoutShift
                                };
            
                                localStorage.setItem(strategy, JSON.stringify(result));
                            });
                    }
                //});');

    wp_deregister_script( 'mage_hd_theme-chart' );
    wp_enqueue_script( 'mage_hd_theme-chart', 'https://cdn.jsdelivr.net/npm/chart.js', [], '1.0.0', true);

    wp_register_script( 'inline-script-2', '', [], '1.0.0', true );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '$(\'.mobile-content.speed-content\').hide();
    $(\'.speed-view-btn\').click(function () {
      $(\'.speed-view-btn\').removeClass(\'active\');
      $(this).addClass(\'active\');
      const btnActiveId = $(\'.speed-view-btn.active\').attr(\'id\');
      $(\'.speed-content\').hide();
      $(\'.speed-content#\' + btnActiveId).show();
    });

    function fetchPageSpeedData(apiUrl, strategy) {
      return fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          const fullPageImg = data.lighthouseResult.fullPageScreenshot.screenshot[\'data\'];
          const performance = data.lighthouseResult.categories.performance.score * 100;
          const firstContentfulPaint = data.lighthouseResult.audits[\'first-contentful-paint\'].displayValue;
          const speedIndex = data.lighthouseResult.audits[\'speed-index\'].displayValue;
          const largestContentfulPaint = data.lighthouseResult.audits[\'largest-contentful-paint\'].displayValue;
          const timeToInteractive = data.lighthouseResult.audits[\'interactive\'].displayValue;
          const totalBlockingTime = data.lighthouseResult.audits[\'total-blocking-time\'].displayValue;
          const cumulativeLayoutShift = data.lighthouseResult.audits[\'cumulative-layout-shift\'].displayValue;

          const result = {
            fullPageImg,
            performance,
            firstContentfulPaint,
            speedIndex,
            largestContentfulPaint,
            timeToInteractive,
            totalBlockingTime,
            cumulativeLayoutShift
          };

          localStorage.setItem(strategy, JSON.stringify(result));
        });
    }

    document.addEventListener(\'DOMContentLoaded\', function () {
      const desktopResult = JSON.parse(localStorage.getItem(\'desktop\'));
      const mobileResult = JSON.parse(localStorage.getItem(\'mobile\'));

      if (desktopResult) {
        document.getElementById(\'desktopResult\').innerHTML = generateResultHtml(
          desktopResult,
          \'desktopChart1\',
          \'desktopChart2\',
          \'desktopChartText1\',
          \'desktopChartText2\'
        );
        createPerformanceChart(\'desktopChart1\', desktopResult.performance, \'desktopChartText1\');
        createPerformanceChart(\'desktopChart2\', desktopResult.performance, \'desktopChartText2\');
      }
      if (mobileResult) {
        document.getElementById(\'mobileResult\').innerHTML = generateResultHtml(
          mobileResult,
          \'mobileChart1\',
          \'mobileChart2\',
          \'mobileChartText1\',
          \'mobileChartText2\'
        );
        createPerformanceChart(\'mobileChart1\', mobileResult.performance, \'mobileChartText1\');
        createPerformanceChart(\'mobileChart2\', mobileResult.performance, \'mobileChartText2\');
      }
    });

    document.addEventListener(\'DOMContentLoaded\', function() {
      const textValue = document.querySelector(\'.chart-text\');

      let value = parseFloat(textValue.textContent).toFixed(0);
      textValue.textContent = value;
      console.log(\'Updated textValue:\', textValue);

    });
    function generateResultHtml(data, chartId1, chartId2, chartTextId1, chartTextId2) {
      return `
              <div class="flex performance-chart">
                <div class="chart-content-wrap sm:w-12/12 md:w-6/12">
                  <div class="chart-container">
                    <div class="performace-chart-wrpper">
                      <canvas id="${chartId1}" class="performace-chart"></canvas>
                      <div class="chart-text" id="${chartTextId1}"></div>
                    </div>
                    <h3>Performance</h3>
                    <h5>Values are estimated and may vary. The performance score is calculated directly from these metrics.See calculator.</h5>
                    <div class="chart-color-info">
                      <div class="gray-dot-icon">0-49</div>
                      <div class="orange-dot-icon">50-80</div>
                      <div class="blue-dot-icon">90-100</div>
                    </div>
                  </div>
                </div>
                <div class="page-ss sm:w-12/12 md:w-6/12"> 
                  <img src="${data.fullPageImg}" alt="Full Page" class="full-page-img">
                </div>
              </div>

                <div class="scores-wrapper">
                  <div class="score-list">
                    <div class="chart-container">
                      <canvas id="${chartId2}"></canvas>
                      <div class="chart-text" id="${chartTextId2}"></div>
                    </div>
                    <h4>Performance</h4>
                  </div>
                    <div class="score-list">
                    <div class="chart-container">
                      <canvas id="${chartId2}"></canvas>
                      <div class="chart-text" id="${chartTextId2}"></div>
                    </div>
                    <h4>Accessibility</h4>
                  </div>
                    <div class="score-list">
                    <div class="chart-container">
                      <canvas id="${chartId2}"></canvas>
                      <div class="chart-text" id="${chartTextId2}"></div>
                    </div>
                    <h4>Best Practice</h4>
                  </div>
                    <div class="score-list">
                    <div class="chart-container">
                      <canvas id="${chartId2}"></canvas>
                      <div class="chart-text" id="${chartTextId2}"></div>
                    </div>
                    <h4>Performance</h4>
                  </div>
                </div>


                <div class="metric-wrapper">
                  <h3>Metrics</h3>
                   <div class="metric-list">
                    <div class="metric first-contentful-paint">
                      <div class="metric-dot">
                      </div>
                      <div class="metric-info">
                        <h4>First Contentful Paint</h4>
                        <p id="first-contentful-paint" class="metric-text">${data.firstContentfulPaint}</p>
                        <a href="#" class="speed-read-more">Read</a>
                      </div>
                    </div>
                    <div class="metric total-blocking-time">
                      <div class="metric-dot">
                      </div>
                      <div class="metric-info">
                        <h4>Total Blocking Time</h4>
                        <p id="total-blocking-time" class="metric-text">${data.totalBlockingTime}</p>
                        <a href="#" class="speed-read-more">Read</a>
                      </div>
                    </div>
                    <div class="metric speed-index">
                      <div class="metric-dot">
                      </div>
                      <div class="metric-info">
                        <h4>Speed Index</h4>
                        <p id="speed-index" class="metric-text">${data.speedIndex}</p>
                        <a href="#" class="speed-read-more">Read</a>
                      </div>
                    </div>
                    <div class="metric largest-contentful-paint">
                      <div class="metric-dot">
                      </div>
                      <div class="metric-info">
                        <h4>Largest Contentful Paint</h4>
                        <p id="largest-contentful-paint" class="metric-text">${data.largestContentfulPaint}</p>
                        <a href="#" class="speed-read-more">Read</a>
                      </div>
                    </div>
                    <div class="metric cumulative-layout-shift">
                      <div class="metric-dot">
                      </div>
                      <div class="metric-info">
                        <h4>Cumulative Layout Shift</h4>
                        <p id="cumulative-layout-shift" class="metric-text">${data.cumulativeLayoutShift}</p>
                        <a href="#" class="speed-read-more">Read</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="get-help-issue">
                  <p>Get help to resolve your issue</p>
                  <a href="/contact-us/" class="blue-btn"> <span>Get Start</span> <i class="fa-solid fa-arrow-right"></i> </a>
                </div>
            `;
    }

    // metric dot color

    //First Contentful Paint
    document.addEventListener(\'DOMContentLoaded\', function () {
      const fcpValue = parseFloat(document.getElementById(\'first-contentful-paint\').innerText);
      const metricDot = document.querySelector(\'.first-contentful-paint .metric-dot\');
      const metricText = document.querySelector(\'.first-contentful-paint .metric-text\');
      if (fcpValue > 0.6) {
        metricDot.classList.add(\'blue-dot-icon\');
        metricText.classList.add(\'blue-text\');
      } else if (fcpValue > 0.3) {
        metricDot.classList.add(\'orange-dot-icon\');
        metricText.classList.add(\'orange-text\');
      } else {
        metricDot.classList.add(\'gray-dot-icon\');
        metricText.classList.add(\'gray-text\');
      }
    });

    //Total Blocking Time
    document.addEventListener(\'DOMContentLoaded\', function () {
      const fcpValue = parseFloat(document.getElementById(\'total-blocking-time\').innerText);
      console.log(fcpValue);
      const metricDot = document.querySelector(\'.total-blocking-time .metric-dot\');
      const metricText = document.querySelector(\'.total-blocking-time .metric-text\');
      if (fcpValue < 200) {
        metricDot.classList.add(\'blue-dot-icon\');
        metricText.classList.add(\'blue-text\');
      } else if (fcpValue < 500) {
        metricDot.classList.add(\'orange-dot-icon\');
        metricText.classList.add(\'orange-text\');
      } else {
        metricDot.classList.add(\'gray-dot-icon\');
        metricText.classList.add(\'gray-text\');
      }
    });

    //Speed Index
    document.addEventListener(\'DOMContentLoaded\', function () {
      const fcpValue = parseFloat(document.getElementById(\'speed-index\').innerText);
      const metricDot = document.querySelector(\'.speed-index .metric-dot\');
      const metricText = document.querySelector(\'.speed-index .metric-text\');
      if (fcpValue > 6) {
        metricDot.classList.add(\'blue-dot-icon\');
        metricText.classList.add(\'blue-text\');
      } else if (fcpValue > 3) {
        metricDot.classList.add(\'orange-dot-icon\');
        metricText.classList.add(\'orange-text\');
      } else {
        metricDot.classList.add(\'gray-dot-icon\');
        metricText.classList.add(\'gray-text\');
      }
    });

    //Largest Contentful Paint
    document.addEventListener(\'DOMContentLoaded\', function () {
      const fcpValue = parseFloat(document.getElementById(\'largest-contentful-paint\').innerText);
      const metricDot = document.querySelector(\'.largest-contentful-paint .metric-dot\');
      const metricText = document.querySelector(\'.largest-contentful-paint .metric-text\');
      if (fcpValue > 6) {
        metricDot.classList.add(\'blue-dot-icon\');
        metricText.classList.add(\'blue-text\');
      } else if (fcpValue > 3) {
        metricDot.classList.add(\'orange-dot-icon\');
        metricText.classList.add(\'orange-text\');
      } else {
        metricDot.classList.add(\'gray-dot-icon\');
        metricText.classList.add(\'gray-text\');
      }
    });

    // Cumulative Layout Shift
    document.addEventListener(\'DOMContentLoaded\', function () {
      const fcpValue = parseFloat(document.getElementById(\'cumulative-layout-shift\').innerText);
      const metricDot = document.querySelector(\'.cumulative-layout-shift .metric-dot\');
      const metricText = document.querySelector(\'.cumulative-layout-shift .metric-text\');
      if (fcpValue < 0.3) {
        metricDot.classList.add(\'blue-dot-icon\');
        metricText.classList.add(\'blue-text\');
      } else if (fcpValue < 0.6) {
        metricDot.classList.add(\'orange-dot-icon\');
        metricText.classList.add(\'orange-text\');
      } else {
        metricDot.classList.add(\'gray-dot-icon\');
        metricText.classList.add(\'gray-text\');
      }
    });

    function createPerformanceChart(chartId, performanceScore, textId) {
      const ctx = document.getElementById(chartId).getContext(\'2d\');
      const chartText = document.getElementById(textId);
      chartText.textContent = `${performanceScore}`;

      let backgroundColor;
      if (performanceScore >= 90) {
        backgroundColor = \'#3B65AF\';
      } else if (performanceScore >= 50) {
        backgroundColor = \'#FF5622\';
      } else {
        backgroundColor = \'#666666\';
      }

      new Chart(ctx, {
        type: \'doughnut\',
        data: {
          labels: [\'Performance Score\', \'Remaining\'],
          datasets: [{
            data: [performanceScore, 100 - performanceScore],
            backgroundColor: [backgroundColor, \'#F2F2F2\'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            tooltip: {
              enabled: false
            },
            legend: {
              display: false
            }
          },
          cutout: \'70%\'
        }
      });
    }');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'mage_hd_theme-tailwind' );
    wp_enqueue_style( 'mage_hd_theme-tailwind', get_template_directory_uri() . '/tailwind_theme/tailwind.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-theme' );
    wp_enqueue_style( 'mage_hd_theme-theme', get_template_directory_uri() . '/theme.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-owlcarousel' );
    wp_enqueue_style( 'mage_hd_theme-owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-owlthemedefault' );
    wp_enqueue_style( 'mage_hd_theme-owlthemedefault', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-all' );
    wp_enqueue_style( 'mage_hd_theme-all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-style' );
    wp_enqueue_style( 'mage_hd_theme-style', get_bloginfo('stylesheet_url'), [], '1.0.0', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'mage_hd_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Smart_Walker_Nav_Menu' ) ) { require_once "inc/wp_smart_navwalker.php"; }
if( !class_exists( 'PG_Simple_Form_Mailer' ) ) { require_once "inc/wp_simple_form_mailer.php"; }

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

if ( ! function_exists('mage_hd_theme_blocks_init') ) :
function mage_hd_theme_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'mage_hd_theme_blocks_init');
endif;

/* End of creating Editor Blocks with Pinegrow */

?>