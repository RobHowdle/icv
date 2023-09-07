<?php
function truncateText($text, $limit)
{
    if (mb_strlen($text) <= $limit) {
        return $text;
    } else {
        $truncatedText = mb_substr($text, 0, $limit);
        $lastSpace = mb_strrpos($truncatedText, ' ');
        $truncatedText = mb_substr($truncatedText, 0, $lastSpace);
        $truncatedText .= '... <button aria-label="Read More" class="btn" type="button" data-text="' . $text . '">Read More</button>';
        return $truncatedText;
    }
}
?>

<section id="portfolio" data-link="portfolio" class="single-section single-section--pi-2">
  <div class="inner-wrapper--1680">
    <h5 class="h3 section-title">Portfolio</h5>
    <p class="content">I consider myself fortunate to have had the opportunity to collaborate with wonderful clients
      throughout my career. Over the years, I have engaged in diverse projects, encompassing the
      development of Content Management Systems for businesses and gymnastics clubs, the create of
      brochure websites for both new and established businesses, and the creation of e-commerce websites.
      In addition to client projects, I enjoy dedicating my personal time to working on endeavours for
      various communities I am part of, as well as pursuing random project ideas that spark my interest. I
      also enjoy actively participating in Developer Discord Servers, where I provide assistance to fellow
      developers, offering valuable suggestions and provide reviews on people’s projects.
    </p>

    <div class="work-card-wrapper">
      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/spg.webp" class="card-image" alt="Staff Power Group Logo">
        <h5 class="h6 project-title">Staff Power Group</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'At Discovery Design, I created a website for a recruitment company using Wordpress CMS, Custom Post Types, Vue Components and custom Gravity Forms. Overcoming challenges, I successfully implemented the desired functionality. The use of flexible content empowered clients to customise their site across multiple pages, surpassing initial design limitations.';
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://www.staffpowergroup.com/" target="_blank">View <span
              class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/checklist.webp" class="card-image" alt="Printed Parts Checklist">
        <h5 class="h6 project-title">Printed Parts Checklist</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'I developed a personal Laravel project that enables users from my Droid Building Community to create customised checklists for tracking their progress in building a robot. With numerous parts involved in constructing a droid, this web application allows users to create accounts, select the specific droid they are building, and even customise it with different versions to cater to their individual requirements. The application scans the file structure create by the droid creators and automatically generates a checklist divided into sections that mirror the structure. This feature enables users to effortlessly locate the necessary parts they need.';
            
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://checklist.mbprinteddroids.com/" target="_blank">
            View <span class="fa-solid fa-chevron-right"></span>
          </a>
          <a class="button" href="https://github.com/Droid-Builder-Web-Team/ChecklistApp" target="_blank">Github <span
              class="fa-solid fa-chevron-right"></span></a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/discord_bot.webp" class="card-image" alt="Artoo Discord Bot">
        <h5 class="h6 project-title">Artoo Discord Bot</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'I contributed to the development of a custom Discord Server Bot called Artoo. Built using JavaScript, this bot offers a range of features that are both useful to users and provide some entertaining games to play. Artoo can assign roles to users, respond to user input based on its pre-set mood, tell jokes, play games, and even search a wiki for user-specified content.';
            
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://github.com/Droid-Builder-Web-Team/discord_bot" target="_blank">Github <span
              class="fa-solid fa-chevron-right"></span></a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/musician.webp" class="card-image" alt="Studious Eureka">
        <h5 class="h6 project-title">Studious Eureka</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'I am currently working on an ongoing project using Laravel and Vue 3. This platform enables musicians to search, advertise and connect with other musicians nationwide who are looking for bands, band members, or shows. Users can set their location, post their requirements, and receive alerts when their criteria match with other users. Additionally the project includes plans for implementing paid subscription tiers that offer enhanced features and spotlight searches.';
            
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://github.com/RobHowdle/studious-eureka" target="_blank">Github
            <span class="fa-solid fa-chevron-right"></span></a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/victoriahotel.webp" class="card-image" alt="Victoria Hotel">
        <h5 class="h6 project-title">Victoria Hotel</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'At Discovery Design, I constructed a website for a client using the Wordpress CMS and Custom Post Types, with a strong emphasis on achieving an elegant look and seamless functionality. This project stands out as one of my best works, as the website not only meets the client’s current requirements but is also highly adaptable to accommodate future changes. It incorporatesparallax scrolling, subtle yet sophisticated animations, and showcases high-quality photography. The adaptation of Contact Form 7 to accommodate various values enables users to imply click onan option, resulting in a pre-populated contact form with the corresponding details.';
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://www.victoriarhb.com/" target="_blank">View <span
              class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/wiki.webp" class="card-image" alt="Droid Builder Wiki">
        <h5 class="h6 project-title">Droid Builder Wiki</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'I developed an information wiki specifically designed for the Droid Builder Community. This wiki serves as a centralised hub, compiling extensive information on droid building and making it easily accessible. Utilising the open-source Media Wiki platform with custom styling, I createda user-friendly environment where individuals can create accounts, contribute to and updatevarious pages with relevant information, and access helpful resources such as purchase links for parts and tutorials. The primary objective of this wiki is to assist new builders in navigating the intricacies of this complex hobby, simplifying their journey.';
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://wiki.robsrobots.co.uk/wiki/index.php/Main_Page" target="_blank">View
            <span class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/decorator.webp" class="card-image" alt="Kane Decorators">
        <h5 class="h6 project-title">Kane Decorators</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'During my tenure at Discovery Design, I developed this website that effectively reflects the essence of the company. Unlike standard brochure websites, this project went beyond technical functionality. By leveraging the power of the Wordpress CMS and utilising Custom Post Types for archive pages and dedicated service pages, I ensure that all the facets of the company were prominently showcased for prospective customers. To enhance the user experience, I implemented contact forms that dynamically pre-populated based on the selected service and the specific page the user was visiting. This thoughtful feature contributed to a seamless and enjoyable user experience.';
            
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://kanedecorators.co.uk/" target="_blank">View
            <span class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/jrb.webp" class="card-image" alt="JRB Charted Surveyors">
        <h5 class="h6 project-title">JRB Charted Surveyors</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'While working on this website project at Discovery Design, I encountered a few changes, which led me to discover and utilise Gravity Forms. Built within the Wordpress CMS and incorporating Custom Post Types, this website featured a more tailored SASS styling compared to previous projects. Notably, the website incorporated PDF Generation functionality based on user-submitted forms. Being the first within my company to implement these kind of features using our new structure, I embraced the challenge of learning and successfully achieved their implementation.';
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://jrbsurveyors.co.uk/" target="_blank">View
            <span class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/vanfit.webp" class="card-image" alt="Vanfit Solutions">
        <h5 class="h6 project-title">Vanfit Solutions</h5>
        <div class="content">
          <p class="content">
            <?php
            $text = 'During my tenure at Discovery Design, I developed another website that utilises the Wordpress CMS and incorporates Woocommerce. This particular project involved a client who desired both standard product sales functionality and the option for customers to customise certain product. To meet this requirement, we implemented a configurator feature that enables customers to selecta specific service and customise it according to their needs. The configurator dynamically generates an instant price quote based on the customer’s selections. I integrated various payment methods, including Klarna, to offer a seamless checkout experience.';
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://vanfitsolutions.co.uk/" target="_blank">View
            <span class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <div class="card">
        <div class="overlay"></div>
        <img src="assets/img/portfolio/cards/paradise.webp" class="card-image" alt="Paradise School, Goa">
        <h5 class="h6 project-title">Paradise School, Goa</h5>
        <div class="content">
          <p class="contents">
            <?php
            $text = 'Working on the Paradise School project at Discovery Design was a highly enjoyable experience. The project demanded a balance between a fun and professional design, allowing me the creative freedom to make it truly exceptional. This project held a significant milestone for me as it was the first time I completed a project for a client in another country. Overcoming the challenges of time differences and very bespoke requirements, I strived to effectively communicate and meet the clients needs. The website boasts a range of notable features including custom image sliders, section animations and various custom post types.';
            
            echo truncateText($text, 200);
            ?>
          </p>
        </div>
        <div class="links">
          <a class="button" href="https://paradiseschoolgoa.com/" target="_blank">View
            <span class="fa-solid fa-chevron-right"></span>
          </a>
        </div>
      </div>

      <button id="loadmore">Load More</button>
    </div>

    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade portfolio-modal" id="" tab-index="-1" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="h5"></h2>
            <i class="fa-solid fa-x close"></i>
          </div>
          <div class="modal-text">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
