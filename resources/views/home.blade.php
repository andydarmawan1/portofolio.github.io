<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Andy DevOps</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Engrave Inscriptions
      <div class="bangga"></div>
      </div>
      
      <div>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#portofolio">Portofolio</a></li>
          <li><a href="#tadabbur">Tadabbur Day</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Andy Darmawan</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#home" onclick="toggleMenu()">Home</a></li>
          <!-- <li><a href="#experience" onclick="toggleMenu()">Experience</a></li> -->
          <li><a href="#portofolio" onclick="toggleMenu()">Portofolio</a></li>
          <li><a href="#tadabbur" onclick="toggleMenu()">Tadabbur Day</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="{{ asset('asset/image/andy.png') }}" alt="Andy profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Andy Darmawan</h1>
        <p class="section__text__p2">DevOps Engineer</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('/assets/image/cvandy.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="{{ asset('asset/image/linkedin.png') }}"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://www.linkedin.com/in/andy-darmawan-6429351b3/'"
          />
          <img
            src="{{ asset('asset/image/github.png') }}"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/andydarmawan1/'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="{{ asset('asset/image/andyabout.jpg') }}"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="{{ asset('asset/image/experience.png') }}"
                alt="Experience icon"
                class="icon"
              />
              <h3>Experience</h3>
              <p>3+ years <br />System Administrator</p>
            </div>
            <div class="details-container">
              <img
                src="{{ asset('asset/image/education.png') }}"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p><b>A.Md.Kom</b> Teknologi Informasi | Politeknik Negeri Malang <br /> <b>S.Kom.</b> Computer Science | BINUS University</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              I am Andy Darmawan, interested about server side, like DevOps and System Administration or back-end. 
              I willing to learn new things and hard-worker
            </p>
          </div>
        </div>
      </div>
      <img
        src="{{ asset('asset/image/arrow.png') }}"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">DevOps Engineer</h2>
            <div class="article-container">
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Automation</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Scripting</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CI / CD</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Ansible</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Linux</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Github</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">DevOps Engineer</h2>
            <div class="article-container">
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Container</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Jenkins</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Google Cloud</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Nginx</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Apache</h3>
                  <p>Expert</p>
                </div>
              </article>
              <article>
                <img
                  src="{{ asset('asset/image/checkmark.png') }}"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Proxmox</h3>
                  <p>Expert</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img
        src="{{ asset('asset/image/checkmark.png') }}"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
    <section id="portofolio">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Portofolio</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/automation.png') }}"
                alt="Portofolio 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 1</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/andydarmawan1/adduserubuntu-scripting-python.git'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/andydarmawan1/adduserubuntu-scripting-python.git'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-2.png') }}"
                alt="Portofolio 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 2</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/andydarmawan1/one-liner-commandubuntu-automation.git'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/andydarmawan1/one-liner-commandubuntu-automation.git'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-3.png') }}"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 3</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-4.png') }}"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 4</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-5.png') }}"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 5</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-6.png') }}"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 6</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-7.png') }}"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 7</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-8.png') }}"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 8</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-9.png') }}"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 9</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-10.png') }}"
                alt="Project 1"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 10</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-11.png') }}"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 11</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="{{ asset('asset/image/portofolio-12.png') }}"
                alt="Project 3"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">Portofolio 12</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
      <img
        src="{{ asset('asset/image/arrow.png') }}"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="{{ asset('asset/image/email.png') }}"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:andydarmawan243@gmail.com">andydarmawan243@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="{{ asset('asset/image/linkedin.png') }}"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#portofolio">Portofolio</a></li>
          <li><a href="#tadabbur">Tadabbur Day</a></li>
          <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <!-- <p>Copyright &#169; 2023 John Doe. All Rights Reserved.</p> -->
    </footer>
    <link rel="stylesheet" href="{{asset('asset/js/script.js')}}">
  </body>
</html>
