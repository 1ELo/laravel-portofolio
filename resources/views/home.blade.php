<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/home-styles.css')}}">
</head>
<body id="home">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">ELo</div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about-me">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#mywork">My Work</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home-page">
        <div class="home-1">
            <h1>Hi,</h1>
            <h1>I am Daniel</h1>
            <h5>{{$status->description}}</h5>
            <img class="foto-1" src="img/Frame 1.png" alt="daniel" width="35%">
        </div>
    </section>
    <section id="about-me">
    <div class="about-me" >
        <h2 class="menu-header">About Me</h2>
        <div class="about-content">
            <div class="column">
                <div class="card">
                    <h3>{{$currentStatus->description}}</h3>
                </div>
                <div class="card">
                    <h3>Education</h3>
                    @foreach($educations as $education)
                            <p class="content-header">{{ $education->institution }}</h3>
                            <p class="content-body">{{ $education->date }}</p>
                    @endforeach
                </div>
                <div class="card">
                    <h3>Organization Experience</h3>
                     @foreach ($experiences as $experience)
                     <p class="content-header">{{$experience->institution}}</p>
                     <p class="content-body">{{$experience->role}} | {{$experience->date}}</p>
                     @endforeach
                </div>
            </div>
            <div class="column">
                <div class="card no-padding">
                    <img src="img/Group 7.png" alt="daniel" class="full-width">
                </div>
                <div class="card">
                    <h3>Favorite Jam</h3>
                    @foreach ($jam as $jams)
                    <iframe style="border-radius:12px" src="{{$jams->link}}}" width="360px" height="100px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    @endforeach
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <h3>My Background</h3>
                    <p>{{$background->first_paragraf}}</p>
                    <p>{{$background->second_paragraf}}</p>
                </div>
                <div class="card">
                    <h3>My Socials</h3>
                    @foreach ($sosial as $sosials)
                        <div class="sosials">
                            <a href="{{$sosials->link}}"><img src="{{asset('img/' . $sosials->img)}}" width="25px">{{$sosials->username}}</a>
                        </div>
                    @endforeach
                </div>
             </div>
        </div>
    </div>
</section>

    <div class="skills-container" >
        <h3 class="menu-header" id=skills>Skills</h3>
        <div class="skills">
            <div class="column">
                <div class="skills-any">
                    <div class="skills-header">
                        <h3>Programming Skills</h3>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML</span>
                        </div>
                        <div class="skills__bar skills__html"></div>
                        <div><span class="skills__percentage">90%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS</span>
                        </div>
                        <div class="skills__bar skills__css"></div>
                        <div><span class="skills__percentage">60%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JavaScript</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div><span class="skills__percentage">20%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">C</span>
                        </div>
                        <div class="skills__bar skills__C"></div>
                        <div><span class="skills__percentage">60%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">Java</span>
                        </div>
                        <div class="skills__bar skills__java"></div>
                        <div><span class="skills__percentage">65%</span></div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">Golang</span>
                        </div>
                        <div class="skills__bar skills__golang"></div>
                        <div><span class="skills__percentage">40%</span></div>
                    </div>
                </div>
                <div class="skills-any">
                    <div class="skills-header">
                        <h3>Other Skills</h3>
                    </div>
                    @foreach ($otherskill as $otherskills)
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">{{$otherskills->field}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="slider-container">
                <div class="skills-header">
                    <h3>3D Render Showcase</h3>
                </div>
                <div class="slidder-wrapper">
                    <div class="slider">
                        <img id="slide-1" src="img/3.png" alt="studio1">
                        <img id="slide-2" src="img/6.png" alt="studio2">
                        <img id="slide-3" src="img/pokeball.png" alt="pokeball">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                    </div>
                </div>
                <div class="card-1">
                    <div class="card-skills-1">
                        <div class="interest">
                            <h3>Interest</h3>
                            <ul>
                                @foreach ($interest as $interests)
                                <li>{{$interests->field}}</li>
                                @endforeach
                        </div>
                    </div>
                    <div class="card-skills">
                        <div class="interest">
                            <h3>For the future, I will continue to develop my skills, especially in the areas that I am interested in.</h3>
                        </div>
                    </div>
                </div>
                <div class="quotes">
                    <q>Learning is a treasure that will follow its owner everywhere.</q>- Chinese Proverb
                </div>
            </div>
        </div>
    </div>

    <div class="college-project">
      <h3 id="mywork">College Project</h3>
      <div class="centered-bar">
        <h4 class="strip">---------------------------------------------------------------------</h4>
        <h4>&nbspSome of my work at college&nbsp</h4>
        <h4 class="strip">---------------------------------------------------------------------</h4>
       </div>
      <div class="project-container">
        <div class="card-college" style="width: 400px; margin-left: 40px; margin-right: 40px; border-radius: 40px;">
          <img src="img/Post 2 - Mock Up.png" class="card-img-top" alt="dibookingin">
          <div class="card-body">
            <h5 class="card-title">DiBookingin.ID</h5>
            <p class="card-text">A prototype designed using the Figma platform for an online restaurant reservation application. equipped with an AI-based chatbot that utilizes Natural Language Projessing  (NLP) to enhance user interaciton with the reservation system.</p>
          </div>
        </div>

        <div class="card-college" style="width: 400px; margin-left: 40px; margin-right: 40px; border-radius: 40px;">
          <img src="img/perpus.png" class="card-img-top" alt="perpus">
          <div class="card-body">
            <h5 class="card-title">Book lending system in the library</h5>
            <p class="card-text">In the Object Oriented Programming course, we created a Java-based application to process book load and return system for libraries </p>
          </div>
        </div>
      </div>

      <div class="project-container">
        <div class="card-college" style="width: 400px; margin-left: 40px; margin-right: 40px; border-radius: 40px;">
          <img src="img/geomertry.png" class="card-img-top" alt="geometrysolver">
          <div class="card-body">
            <h5 class="card-title">Geometry Solver</h5>
            <p class="card-text">It is an assignment in the Multimedia System course. Geometry Solver is an AR Android application developed using Unity. This application aims to provide an understanding of the formulas of solid geometry, where it will display animations of these solid geometry formulas.</p>
          </div>
        </div>

        <div class="card-college" style="width: 400px; margin-left: 40px; margin-right: 40px; border-radius: 40px;">
          <img src="img/Mockup.png" class="card-img-top" alt="perpus">
          <div class="card-body">
            <h5 class="card-title">Redesign Website - Medium </h5>
            <p class="card-text">At Bina Nusantara Computer Club (BNCC), there is a project that asks us to redesign a website. Here, I am trying to redesign the Medium website because I find the design of the website very appealing.</p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
$(document).ready(function(){
    // Tambahkan event click pada tautan "Home" di navbar
    $('.navbar a[href^="#"]').on('click', function(event) {
        // Pastikan hash tidak kosong
        if (this.hash !== "") {
            // Menghentikan perilaku default dari anchor link
            event.preventDefault();

            // Menyimpan hash
            var hash = this.hash;

            // Menggunakan metode animate() jQuery untuk menambahkan animasi scrolling
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                // Menambahkan hash ke URL setelah scrolling selesai (opsional)
                window.location.hash = hash;
            });
        }
    });
});
</script>
</body>
</html>
