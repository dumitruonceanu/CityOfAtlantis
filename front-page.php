<?php 

/*
  Template Name: HOME Page, No Sidebar
*/ 

get_header(); ?>
<div class="section">
  <div class="landing" id="home_top">
    <div class="banner">
      <h1>Dumitru Onceanu</h1>
      <div class="button">
        <a href="#about_top">Learn more about me and my work</a>
      </div>
    </div>

  </div>
        
  <section class="mainSection aboutSection" id="about_top">
    <div class="sectionContainer clearfix">
      <div class="sectionInnerContainer clearfix">
        <div class="aboutLeft">
          <?php $image = get_field('about_headshot'); ?>
          <img src=<?php echo $image['sizes']['medium'] ?> alt="">
        </div>

        <div class="aboutCenter">
          <h1><?php the_field('about_title') ?></h1>
          <p><?php the_field('about_paragraph') ?></p>
        </div>

        <div class="aboutRight">
          <p></p>
        </div>
      </div>

    </div>
  </section>

  <section class="mainSection webSkillsSection" id="web_skills_top">
    <div class="sectionContainer clearfix">
      
      <h1><?php the_field('web_skills_title') ?></h1>
      <p><?php the_field('web_skills_paragraph') ?></p>
      
      <?php while( has_sub_field('skill_group') ): ?>
        <div class="col-1-3">
          <h2><?php the_sub_field('skill_group_title') ?></h2>

          <?php $image = get_sub_field('skill_group_icon'); ?>
          <!-- <pre><?php print_r($image);?></pre> -->
          <img src="<?php echo $image['sizes']['medium'] ?>">

          <ul>
            <li><?php the_sub_field('list_item_one') ?></li>
            <li><?php the_sub_field('list_item_two') ?></li>
            <li><?php the_sub_field('list_item_three') ?></li>
          </ul>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

  <section class="mainSection webSkillsSection_test" id="web_skills_test_top">
    <div class="sectionContainer clearfix">
      <h1>The Toolkit I'll Use To Built Your Website</h1>

      <div class="col-1-3 box_1">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="92.166px" height="100px" viewBox="3.917 0 92.166 100" enable-background="new 3.917 0 92.166 100" xml:space="preserve">
            <path d="M88.939,0H20.853h-9.562C7.374,0,3.917,3.226,3.917,7.028c0,0,0,0,0,0.115c0,0.231,0.346,0.576,0.346,0.807l7.834,70.276
              c0.115,1.037,0.46,1.958,1.037,2.766c0.691,1.382,1.843,2.419,3.226,3.109l30.991,15.208c1.037,0.459,2.073,0.691,3.11,0.691
              c1.036,0,2.074-0.231,3.11-0.691l30.876-15.208c2.534-1.267,4.032-3.916,3.915-6.681l7.605-69.701c0-0.23,0.115-0.576,0.115-0.806
              c0,0,0,0,0-0.115C96.083,3.226,92.857,0,88.939,0z M31.336,47.926l11.751,11.751c2.304,2.305,2.304,6.104,0,8.409
              c-2.304,2.304-6.105,2.304-8.41,0L17.511,50.923c0,0-0.23,0-0.23-0.116c-0.922-0.922-1.843-1.959-1.843-3.111l0,0
              c0-0.345,0.115-0.691,0.115-1.152c0-1.498,0.691-3.111,1.843-4.263c0,0,0.115,0,0.115-0.115l5.53-5.53l11.751-11.75
              c2.304-2.304,6.106-2.304,8.411,0c2.304,2.304,2.304,6.105,0,8.41L30.069,46.659L31.336,47.926z M84.562,50.807
              C84.447,50.807,84.447,50.923,84.562,50.807l-5.53,5.529L67.281,68.087c-2.305,2.304-6.105,2.304-8.41,0
              c-2.304-2.305-2.304-6.104,0-8.409L71.89,46.659l-1.383-1.383L58.755,33.525c-2.304-2.304-2.304-6.106,0-8.41
              c2.305-2.304,6.107-2.304,8.411,0l17.165,17.166c0,0,0.116,0,0.116,0.115c0.923,0.922,1.382,1.959,1.612,3.111
              c0,0.23,0,0.461,0.116,0.576c0,0.115,0,0.345,0,0.461C86.29,48.157,85.714,49.655,84.562,50.807z"/>
            </svg>
          </div>
        </div>
        <h2>Languages</h2>
        <p>HTML5, CSS3, JavaScript.</p>
      </div>

      <div class="col-1-3 box_2">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <g>
              <path fill="none" d="M54.305,70.684h-8.607c-0.376,0-0.681,0.305-0.681,0.68s0.305,0.68,0.681,0.68h8.607   c0.375,0,0.68-0.305,0.68-0.68S54.68,70.684,54.305,70.684z"/>
              <path fill="none" d="M59.675,29.708v36.569h0.175h24.183h0.001V29.708H59.85H59.675z M64.566,32.216h14.225v4.121H64.566V32.216z    M64.566,39h14.225v8.242H64.566V39z M64.566,48.961h7.111v1.551h-7.111V48.961z M64.566,52.184h14.225v1.549H64.566V52.184z    M64.566,55.406h14.225v1.55H64.566V55.406z M64.566,58.63h14.225v1.55H64.566V58.63z"/>
              <circle fill="none" cx="50" cy="27.993" r="0.68"/>
              <path d="M86.629,69.109c0.109-0.227,0.178-0.479,0.178-0.748V28.107c0-0.953-0.772-1.726-1.727-1.726H14.92   c-0.952,0-1.726,0.772-1.726,1.726v40.254c0,0.27,0.067,0.521,0.177,0.748H5v2.783c0,0.953,0.772,1.726,1.726,1.726h86.549   c0.953,0,1.726-0.772,1.726-1.726v-2.783H86.629z M50,27.313c0.376,0,0.68,0.304,0.68,0.68s-0.304,0.681-0.68,0.681   s-0.68-0.305-0.68-0.681S49.624,27.313,50,27.313z M52.975,50.714v1.224H25.213v-1.224H52.975z M45.052,49.877H25.213v-1.224   h19.839V49.877z M37.878,46.637v1.223v0.001H25.213V47.86v-1.223v-0.001L37.878,46.637L37.878,46.637z M20.866,32.17h3.488v1.224   h-3.488V32.17z M20.866,34.23h8.693v1.224h-8.693V34.23z M20.866,36.291h11.593v1.224H20.866V36.291z M20.866,38.352h8.693v1.224   h-8.693V38.352z M20.866,40.411h8.693v1.224h-8.693V40.411z M20.866,42.472h3.488v1.224h-3.488V42.472z M20.866,44.532h5.831v1.224   h-5.831V44.532z M20.866,46.637h3.488v1.224h-3.488V46.637z M20.866,48.653h3.488v1.224h-3.488V48.653z M20.866,50.714h3.488v1.224   h-3.488V50.714z M20.866,52.773h27.791v1.224H20.866V52.773z M48.657,54.834v1.225H25.213v-1.225H48.657z M20.866,54.834h3.488   v1.225h-3.488V54.834z M20.03,64.3L20.03,64.3h-1.058h-0.001v-1.224h0.001h1.057h0.001V64.3z M20.03,62.24h-1.058v-0.002h-0.001   v-1.225h1.058v0.002h0.001V62.24z M20.03,60.178L20.03,60.178h-1.058h-0.001v-1.223h0.001h1.057h0.001V60.178z M20.03,58.119   h-1.058v-0.001h-0.001v-1.224h0.001h1.057h0.001V58.119z M20.03,56.059L20.03,56.059h-1.058h-0.001v-1.225h0.001h1.057h0.001   V56.059z M20.03,53.997L20.03,53.997h-1.058h-0.001v-1.224h0.001h1.057h0.001V53.997z M20.03,51.938L20.03,51.938h-1.058h-0.001   v-1.224h0.001h1.057h0.001V51.938z M20.03,49.877L20.03,49.877h-1.058h-0.001v-1.224h0.001h1.057h0.001V49.877z M20.03,47.817   h-1.058v-0.001h-0.001v-1.224h1.058v0.001h0.001V47.817z M20.03,45.756L20.03,45.756h-1.058h-0.001v-1.224h0.001h1.057h0.001   V45.756z M20.03,43.696h-1.058v-0.001h-0.001v-1.224h1.058v0.001h0.001V43.696z M20.03,41.635L20.03,41.635h-1.058h-0.001v-1.224   h0.001h1.057h0.001V41.635z M20.03,39.576h-1.058v-0.001h-0.001v-1.224h1.058v0.001h0.001V39.576z M20.03,37.515L20.03,37.515   h-1.058h-0.001v-1.224h0.001h1.057h0.001V37.515z M20.03,35.454L20.03,35.454h-1.058h-0.001V34.23h0.001h1.057h0.001V35.454z    M20.03,33.394L20.03,33.394h-1.058h-0.001V32.17h0.001h1.057h0.001V33.394z M26.697,64.3h-5.831v-1.224h5.831V64.3z    M27.999,61.016v1.223v0.002h-7.133v-0.002v-1.223v-0.002h7.133V61.016z M35.133,60.178H20.866v-1.223h14.267V60.178z    M37.878,58.118L37.878,58.118l-17.012,0.001v-0.001v-1.224h17.012V58.118z M54.305,72.043h-8.607c-0.376,0-0.681-0.305-0.681-0.68   s0.305-0.68,0.681-0.68h8.607c0.375,0,0.68,0.305,0.68,0.68S54.68,72.043,54.305,72.043z M57.3,51.938h-3.487v-1.224H57.3V51.938z    M84.033,66.277L84.033,66.277H59.85h-0.175V29.708h0.175h24.184V66.277z"/>
              <rect x="64.566" y="48.961" width="7.111" height="1.551"/>
              <rect x="64.566" y="52.184" width="14.225" height="1.549"/>
              <rect x="64.566" y="55.406" width="14.225" height="1.55"/>
              <rect x="64.566" y="58.63" width="14.225" height="1.55"/>
              <rect x="64.566" y="39" width="14.225" height="8.242"/>
              <rect x="64.566" y="32.216" width="14.225" height="4.121"/>
            </g>
            </svg>
          </div>
        </div>
        <h2>Frameworks</h2>
        <p>jQuery, Sass, API integration, Grunt.</p>
      </div>

      <div class="col-1-3 box_3">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
            <path d="M71.371,50.934L60.475,37.228c-0.525-0.66-1.527-0.663-2.056-0.007l-11.04,13.706c-0.694,0.861-0.081,2.142,1.025,2.142  h3.906c0.729,0,1.335,0.593,1.332,1.322v5.719c-0.002,0.566-0.501,1.024-1.067,1.024H28.27c-9.15,0-16.358-8.474-14.189-17.986  c0.942-4.132,3.731-7.693,7.526-9.579c3.588-1.783,7.507-2.047,11.112-0.893l3.556,1.138l3.556,1.139l1.661-3.344l1.412-2.842  c3.057-6.153,8.559-10.862,15.228-12.51c14.269-3.527,27.597,7.404,28.157,21.16C86.78,49.5,77.793,59.607,66.171,60.955  c-0.602,0.07-1.082-0.422-1.079-1.028V54.38c0.003-0.725,0.573-1.311,1.297-1.311h3.951C71.442,53.069,72.056,51.796,71.371,50.934z   M94.906,35.9C93.753,20.729,81.571,8.374,66.416,7.024c-13.563-1.209-25.503,6.213-31.047,17.373  c-3.268-1.046-6.842-1.407-10.568-0.855C14.355,25.09,6.139,33.707,5.114,44.218C3.759,58.119,14.647,69.825,28.27,69.825h19.215  c0.509,0,0.921-0.412,0.921-0.921V66.4c0-0.509-0.412-0.921-0.921-0.921l-18.809,0c-9.453,0-17.78-6.771-19.128-16.128  c-1.681-11.671,7.369-21.72,18.722-21.72c1.956,0,3.899,0.304,5.774,0.905l3.556,1.139l1.661-3.344  c5.1-10.267,15.891-16.244,27.502-14.903c12.054,1.392,22.475,11.956,23.738,24.024c1.701,16.252-11.054,30.027-26.967,30.027  h-9.893v9.977c0,0.723-0.559,1.309-1.282,1.309h-3.964c-1.102,0-1.716,1.273-1.03,2.136l10.896,13.706  c0.525,0.66,1.526,0.663,2.056,0.007l11.04-13.706c0.694-0.861,0.081-2.142-1.025-2.142h-3.906c-0.729,0-1.338-0.593-1.335-1.322  v-5.7C82.525,68.866,96.27,53.845,94.906,35.9z"/>
            </svg>
          </div>    
        </div>
        <h2>Content Management</h2>
        <p>Custom WordPress themes and seemless back-end content management.</p>
      </div>

      <div class="col-1-3 box_4">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <g>
              <path d="M99.279,18.508L83.756,2.982c-0.923-0.924-2.558-0.924-3.48,0l-9.656,9.659c-0.756-2.6-3.13-4.516-5.968-4.516H6.243   C2.8,8.126,0,10.928,0,14.37v46.522c0,3.443,2.8,6.243,6.243,6.243h10.016l-3.005,3.006c-0.01,0.009-0.019,0.021-0.029,0.029   l-0.055,0.055c-0.078,0.077-0.138,0.164-0.202,0.248c-0.079,0.102-0.147,0.207-0.209,0.32c-0.054,0.1-0.107,0.199-0.146,0.304   c-0.012,0.031-0.033,0.058-0.043,0.09L4.807,94.471c-0.294,0.885-0.064,1.86,0.595,2.519c0.469,0.47,1.098,0.722,1.741,0.722   c0.26,0,0.522-0.042,0.777-0.126l23.287-7.762c0.021-0.007,0.039-0.021,0.061-0.029c0.167-0.061,0.329-0.137,0.48-0.232   c0.01-0.006,0.02-0.009,0.029-0.015c0.142-0.093,0.274-0.198,0.395-0.318L54.26,67.136h10.392c3.442,0,6.241-2.8,6.241-6.243   V50.498l15.009-15.011c0.147-0.148,0.267-0.317,0.37-0.494l13.008-13.006C100.24,21.026,100.24,19.468,99.279,18.508z    M65.971,60.893c0,0.729-0.592,1.321-1.319,1.321h-5.47l6.789-6.792V60.893z M68.494,21.848l4.443,4.442L22.833,76.408   l-4.442-4.441L68.494,21.848z M4.921,60.893V14.37c0-0.729,0.592-1.321,1.321-1.321h58.409c0.728,0,1.319,0.592,1.319,1.321v2.948   L21.174,62.214H6.243C5.514,62.214,4.921,61.621,4.921,60.893z M11.033,91.359l4.946-14.839l9.893,9.893L11.033,91.359z    M66.693,47.738c0,0-0.002,0-0.002,0.002l-2.67,2.671l-33.59,33.597l-4.119-4.12L76.418,29.77l4.121,4.12L66.693,47.738z    M84.1,30.205L72.055,18.166l9.961-9.962l12.043,12.043L84.1,30.205z"/>
              <path d="M22.885,27.229c0-0.652-0.259-1.277-0.721-1.74l-5.917-5.916c-0.961-0.959-2.519-0.96-3.48,0.002   c-0.961,0.96-0.961,2.519,0,3.48l4.176,4.174l-4.176,4.176c-0.962,0.962-0.962,2.52,0,3.48c0.48,0.48,1.11,0.722,1.74,0.722   c0.629,0,1.259-0.241,1.74-0.721l5.917-5.916C22.625,28.508,22.885,27.883,22.885,27.229z"/>
              <path d="M26.482,35.606h7.048c1.359,0,2.461-1.102,2.461-2.461c0-1.358-1.102-2.462-2.461-2.462h-7.048   c-1.359,0-2.46,1.104-2.46,2.462C24.021,34.505,25.123,35.606,26.482,35.606z"/>
            </g>
            </svg>
          </div>    
        </div>
        <h2>Design</h2>
        <p>Responsive and mobile design, accessibility, grid system layout, Illustrator and Photoshop.</p>
      </div>

      <div class="col-1-3 box_5">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="38px" height="31px" viewBox="0 0 38 31" enable-background="new 0 0 38 31" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M34.098,24.095L34.082,31l-5.635-6.376H16.519c-3.548,0-6.425-2.877-6.425-6.426  v-7.476c0-3.548,2.876-6.425,6.425-6.425h15.035c3.548,0,6.425,2.877,6.425,6.425v7.476C37.979,20.843,36.379,23.109,34.098,24.095z   M8.023,10.703v5.354l-4.794,5.357l-0.009-5.805C1.327,14.784,0,12.9,0,10.703V5.354C0,2.396,2.396,0,5.355,0h12.719  c1.743,0,3.277,0.846,4.254,2.135H16.59C11.858,2.135,8.023,5.97,8.023,10.703z"/>
            </svg>
          </div>    
        </div>
        <h2>Communication and Collaboration</h2>
        <p>Git and Github, project management tools including Trello and Basecamp.</p>
      </div>

      <div class="col-1-3 box_6">
        <div class="webSkillIconContainer">
          <div class="webSkillIcon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="99.999px" viewBox="0 0 100 99.999" enable-background="new 0 0 100 99.999" xml:space="preserve">
            <g>
              <rect x="52.084" y="14.583" fill="#000000" width="29.166" height="20.833"/>
              <path fill="#000000" d="M90.238,9.763c-13.016-13.017-34.127-13.017-47.14,0c-0.21,0.21-0.387,0.439-0.59,0.654   c-6.098,6.425-9.174,14.662-9.174,22.917c-6.562,0-13.11,1.945-18.75,5.792c-1.696,1.158-3.316,2.468-4.821,3.971   c-13.018,13.019-13.018,34.122,0,47.141c13.016,13.014,34.126,13.019,47.142,0c0.874-0.875,1.681-1.794,2.438-2.737   c4.875-6.072,7.322-13.452,7.324-20.834c2.094,0,4.187-0.2,6.25-0.594c6.346-1.204,12.409-4.256,17.32-9.168   C103.254,43.884,103.254,22.778,90.238,9.763z M24.064,47.917c3.504,0,6.356,2.849,6.356,6.361c0,3.511-2.854,6.356-6.356,6.356   c-3.522,0-6.354-2.846-6.354-6.356C17.709,50.765,20.542,47.917,24.064,47.917z M62.196,65.32l-9.384,9.383   c0.195,0.406,0.313,0.857,0.313,1.338c0,1.443-0.981,2.645-2.311,3.004l-1.855,0.121h-6.25c0,0-0.676,0-1.042,0   c-1.726,0-3.841-2.547-3.841-2.547l-3.451-3.45V87.5H11.459V70.834c0-4.168,4.203-8.334,8.333-8.334c0,0,9.184,0,11.458,0   c1.392,0,2.897,0.317,3.968,1.424c1.766,1.827,7.491,8.992,7.491,8.992H50c0.483,0,0.932,0.119,1.339,0.314l9.383-9.384   c0.407-0.407,1.066-0.407,1.474,0C62.602,64.254,62.602,64.913,62.196,65.32z M85.417,39.583c0,1.151-0.931,2.083-2.083,2.083   h-12.5v4.167c0,2.303,3.946,4.167,6.25,4.167h4.166c1.153,0,2.084,0.932,2.084,2.084c0,1.15-0.931,2.082-2.084,2.082H66.667H52.084   c-1.152,0-2.084-0.932-2.084-2.082C50,50.932,50.932,50,52.084,50h4.166c2.304,0,6.25-1.864,6.25-4.167v-4.167H50   c-1.151,0-2.083-0.932-2.083-2.083V12.5c0-1.151,0.932-2.083,2.083-2.083h33.334c1.152,0,2.083,0.932,2.083,2.083V39.583z"/>
            </g>
            </svg>
          </div>    
        </div>
        <h2>Learning</h2>
        <p>AngularJS, nodeJS, Bootstrap, Ruby on Rails, Jade, UI/UX.</p>
      </div>

    </div>
  </section>

  <section class="mainSection portfolioSection" id="portfolio_top">
    <div class="sectionContainer">
      <div class="portfolioTestContainer clearfix">
        <h1>Recent Projects</h1>

          <?php
          // First, let's find out what type of project we're dealing with by finding out which terms of our custom 'project_type' taxonomy apply to this post

          $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 

          // Next, let's build our custom query!

          $projectQuery = new WP_Query( 
            array( 
              'posts_per_page' => 4, 
              'post_type' => 'portfolio', 
              'project_type' => $projectTerms, 
              'post__not_in' => array( $post->ID )  
              ) 
          ); ?>

          <?php if ( $projectQuery->have_posts() ) : ?>

            <?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
              <div class="col-1-2">
                <div class="imageWrapper">
                  <?php //the_post_thumbnail('medium'); ?>

                  <?php while( has_sub_field('images') ): ?>
                    <?php $image = get_sub_field('image'); ?>
                    <!-- <pre><?php print_r($image);?></pre> -->
                    <img src="<?php echo $image['sizes']['large'] ?>">
                  <?php endwhile; ?>
                </div>

                <div class="captionDetails">
                  <h2 class="entry-title"><?php the_field('item_name'); ?></h2>
                  <p><?php the_field('short_description'); ?></p>
                  <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>"></a>
                </div>
              </div>

            <?php endwhile; ?>
            
            <?php wp_reset_postdata(); ?>
            
          <?php else:  ?>
            <!-- [stuff that happens if there aren't any posts] -->
          <?php endif; ?>

          <div class="moreButton">
            <a href="<?php echo get_page_link(31); ?>"><div class="goToPortfolioPage">View All</div></a>
          </div>

      </div>
       
    </div>
  </section>

  <section class="mainSection blogSection" id="blog_top">
    <div class="sectionContainer clearfix">
      <h1>Recent Blog Posts</h1>

      <?php
      $projectTerms = wp_get_post_terms( $post->ID, 'project_type' ); 
      $projectQuery = new WP_Query( 
        array( 
          'posts_per_page' => 4, 
          'post_type' => 'post', 
          'project_type' => $projectTerms, 
          'post__not_in' => array( $post->ID )  
          ) 
      ); ?>

      <?php if ( $projectQuery->have_posts() ) : ?>

        <?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>

          <div class="col-1-4">
<!--               <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"></a> -->

                <div class="entryContentBackground">
                  <div class="entry-content">
                    <?php $image = the_post_thumbnail('medium'); ?>
                    <img src="<?php echo $image ?>">

                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <p>
                      <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
                    </p>
                  </div>
                </div>
              
          </div>
           
        <?php endwhile; ?>
        
        <?php wp_reset_postdata(); ?>

      <?php endif; ?>

      <div class="moreButton">
            <a href="<?php echo get_page_link(57); ?>"><div class="goToBlogPage">View All</div></a>
      </div>

    </div>
  </section>

  <section class="mainSection contactSection" id="contact_top">
    <div class="sectionContainer">
      <!-- <h1>Contact Section</h1> -->
      <h1><?php the_field('contact_title') ?></h1>
      <p><?php the_field('contact_paragraph') ?></p>
    </div>
  </section>

      

</div> <!-- /.section -->
<?php get_footer(); ?>