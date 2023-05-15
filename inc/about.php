<main id="main">
    <section id="about" class="about">
      <div class="container">

      <div class="introduction section-title">
        <h2>Welcome!</h2>
        <p>Welcome! Thank you for taking the time to read my website. Here you will find plenty of information about me, my work and my personal achievements.</p>
      </div>

        <div class="section-title">
          <h2>About</h2>
            <p>After working as a website and software developer previously I have a keen interest in designing and building web applications. I find constantly creating
            new ideas and projects for myself which mostly require me to learn something new in order to complete. I always like to push my ideas as far as I can, never settling
            for minimum, always pushing to go beyond maximum.
            </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Website Designer &amp; Developer.</h3>
            <p class="font-italic">
            Finding my passion in website design and development development in 2018, I have surrounded myself with as much information and learning material as I can. 
            Determined to make it as a successful developer I plan to become an experienced full stack developer as quickly as I can.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.robhowdle.co.uk</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Town:</strong> Darlington, UK</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                <?php
                    $bDay = new DateTime('8.10.1994');
                    $today = new Datetime(date('d.m.y'));
                    $diff = $today->diff($bDay);

                    $startDate = new DateTime('1.1.2018');
                    $yearsInInd = $today->diff($startDate);
                ?>
                  <li><i class="icofont-rounded-right"></i> <strong>Age: </strong><?php print_r($diff->y) ;?> </li>
                  <li><i class="icofont-rounded-right"></i> <strong>Years in the Industry: </strong><?php print_r($yearsInInd->y);?> </li>
                </ul>
              </div>
            </div>
            <p>
                Currently, I am taking time to study various programming languages in order to enhance my skills and further my knowledge of the industry whilst
                looking for new work that is exciting as well as challenging.
              <br><br>
                You can view my portfolio <a href="https://www.robhowdle.co.uk/portfolio">here.</a>
            </p>
          </div>
        </div>

      </div>
    </section>

