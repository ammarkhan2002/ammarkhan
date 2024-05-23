<!DOCTYPE html>
<html lang="en">
<?php 
$title=$_GET['title'];    
 $home_header ='<section id="header">
 <div class="header container">
     <div class="nav-bar">
         <div class="brand">
             <a href="#hero"><h1><span>A</span>mmar <span>K</span>han</h1></a>
         </div>
         <div class="nav-list">
             <div class="hamburger"><div class="bar"></div></div>
                 <ul>
                     <li><a href="#hero" data-after="Home">Home</a></li>
                     <li><a href="#services" data-after="Services">Services</a></li>
                     <li><a href="#projects" data-after="Projects">Projects</a></li>
                     <li><a href="#about" data-after="About">About</a></li>
                     <li><a href="#contact" data-after="Contact">Contact</a></li>
                 </ul>
             </div>
         </div>
     </div>
 </section>';  
 $home_hero ='<section id="hero">
 <div class="hero container">
     <div>
         <h1>Hello, <span></span></h1>
         <h1>My Name is <span></span></h1>
         <h1>Ammar <span></span></h1>
         <a href="#projects" type="button" class="cta">portfolio</a>
     </div>
 </div>
</section>';
$home_services ='<section id="services">
<div class="services container">
    <div class="services-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing
            elit.
            Dicta quos officiis commodi fugiat, autem doloremque
            minus. Quas cum minus delectus dolorem deleniti
            perspiciatis quibusdam, beatae quos dolores
            blanditiis
            tempore sit.</p>
    </div>
    <div class="services-bottom">
        <div class="services-item">
            <div class="icons"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/home-page.png"
                    alt="home-page" /></div>

            <h2>Web Design</h2>
            <p>Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Quas sunt cumque doloremque ad est
                adipisci
                possimus, pariatur et, aspernatur autem soluta.
                Nihil modi id cumque nostrum repudiandae omnis,
                voluptatem aliquam?</p>
        </div>
        <div class="services-item">
            <div class="icons"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/home-page.png"
                    alt="home-page" /></div>

            <h2>Web Design</h2>
            <p>Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Quas sunt cumque doloremque ad est
                adipisci
                possimus, pariatur et, aspernatur autem soluta.
                Nihil modi id cumque nostrum repudiandae omnis,
                voluptatem aliquam?</p>
        </div>
        <div class="services-item">
            <div class="icons"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/home-page.png"
                    alt="home-page" /></div>

            <h2>Web Design</h2>
            <p>Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Quas sunt cumque doloremque ad est
                adipisci
                possimus, pariatur et, aspernatur autem soluta.
                Nihil modi id cumque nostrum repudiandae omnis,
                voluptatem aliquam?</p>
        </div>
        <div class="services-item">
            <div class="icons"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/home-page.png"
                    alt="home-page" /></div>

            <h2>Web Design</h2>
            <p>Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Quas sunt cumque doloremque ad est
                adipisci
                possimus, pariatur et, aspernatur autem soluta.
                Nihil modi id cumque nostrum repudiandae omnis,
                voluptatem aliquam?</p>
        </div>
    </div>
</div>
</section>';
$home_projects ='<section id="projects">
<div class="projects container">
    <div class="project-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
    </div>
    <div class="all-projects">
        <div class="project-item">
            <div class="project-info">
                <h1>Project 1</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nostrum exercitationem sed
                    voluptatibus, temporibus cumque dolores
                    dolore
                    assumenda ab iure tempora cupiditate aliquid
                    incidunt veniam nihil fuga, aspernatur
                    eaque,
                    sint ea.</p>
            </div>
            <div class="project-img">
                <img src="book6.avif">
            </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 2</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nostrum exercitationem sed
                    voluptatibus, temporibus cumque dolores
                    dolore
                    assumenda ab iure tempora cupiditate aliquid
                    incidunt veniam nihil fuga, aspernatur
                    eaque,
                    sint ea.</p>
            </div>
            <div class="project-img">
                <img src="book1.jpg">
            </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 3</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nostrum exercitationem sed
                    voluptatibus, temporibus cumque dolores
                    dolore
                    assumenda ab iure tempora cupiditate aliquid
                    incidunt veniam nihil fuga, aspernatur
                    eaque,
                    sint ea.</p>
            </div>
            <div class="project-img">
                <img src="book7.jpg">
            </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 4</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nostrum exercitationem sed
                    voluptatibus, temporibus cumque dolores
                    dolore
                    assumenda ab iure tempora cupiditate aliquid
                    incidunt veniam nihil fuga, aspernatur
                    eaque,
                    sint ea.</p>
            </div>
            <div class="project-img">
                <img src="book7.jpg">
            </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 5</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Nostrum exercitationem sed
                    voluptatibus, temporibus cumque dolores
                    dolore
                    assumenda ab iure tempora cupiditate aliquid
                    incidunt veniam nihil fuga, aspernatur
                    eaque,
                    sint ea.</p>
            </div>
            <div class="project-img">
                <img src="book6.avif">
            </div>
        </div>
    </div>
</div>
</section>';
 $home_about ='<section id="about">
 <div class="about container">
     <div class="col-left">
         <div class="about-img">
             <img src="khan.jpg">
         </div>
     </div>
     <div class="col-right">
         <h1 class="section-title">About <span>Me</span></h1>
         <h2>Front End Developer</h2>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing
             elit.
             Perspiciatis provident dolore, reiciendis optio
             voluptatum ea praesentium magnam quod sunt minus
             assumenda aliquam corrupti facilis, omnis expedita.
             Consectetur at odit possimus.</p>
         <a href="#" class="cta">Download Resume</a>
     </div>
 </div>
</section>';
$home_contact ='<section id="contact">
<div class="contact container">
    <div><h1 class="section-title">Contact <span>Info</span></h1></div>
    <div class="contact-items">
        <div class="contact-item">
            <div class="icon"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/apple-phone.png"
                    alt="apple-phone" /></div>
            <div class="contact-info">
                <h1>Phone</h1>
                <h2>7897907457</h2>
                <h2>7310143656</h2>
            </div>
        </div>
        <div class="contact-item">
            <div class="icon"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/new-post.png"
                    alt="new-post" /></div>
            <div class="contact-info">
                <h1>Email</h1>
                <h2>ammar@1234</h2>
                <h2></h2>
            </div>
        </div>
        <div class="contact-item">
            <div class="icon"><img width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/order-delivered.png"
                    alt="order-delivered" /></div>
            <div class="contact-info">
                <h1>address</h1>
                <h2>Hamidpur</h2>
                <h2>Nadwasarai</h2>
            </div>
        </div>
    </div>
</div>
</section>';
$home_footer ='<section id="footer">
<div class="footer container">
    <div class="brand"><h1><span>A</span>mmar <span>K</span>han</h1></div>
    <h2>Your Complete Web Solution</h2>
    <div class="social-icon">
        <div class="social-item">
            <a href="https://www.facebook.com/"><img width="50"
                    height="50"
                    src="https://img.icons8.com/bubbles/50/facebook-new.png"
                    alt="facebook-new" /></a>
        </div>
        <div class="social-item">
            <a href="https://web.whatsapp.com/"><img width="50"
                    height="50"
                    src="https://img.icons8.com/bubbles/50/whatsapp.png"
                    alt="whatsapp" /></a>
        </div>
        <div class="social-item">
            <a href="https://twitter.com/?lang=en"><img
                    width="50" height="50"
                    src="https://img.icons8.com/bubbles/50/twitter-squared.png"
                    alt="twitter-squared" /></a>
        </div>
        <div class="social-item">
            <a href="https://web.telegram.org/"><img width="50"
                    height="50"
                    src="https://img.icons8.com/bubbles/50/telegram-app.png"
                    alt="telegram-app" /></a>
        </div>                        
    </div>
    <p>Copyright @ 2024 Ammar. All right reserved</p>
</div>
</section>';
?>
    <?php include('head.php');?>
    <body>
        <?php echo $home_header;?>
        <?php echo $home_hero;?>
        <?php echo $home_services;?>
        <?php echo $home_projects;?>
        <?php echo $home_about;?>
        <?php  echo $home_contact;?>
        <?php echo $home_footer;?>    
            <script src="port.js"></script>
        </body>
    </html>