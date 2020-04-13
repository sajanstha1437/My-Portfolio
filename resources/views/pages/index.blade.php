@extends('layouts.app')

@section('content')

        <div class="sliderdiv">
               <h1 class="heading1"> {{$title}} </h1>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height:500px;" src="/storage/images/coding.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img style="height:500px;" src="/storage/images/webjpg.jpg" class="w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                                <img style="height:500px;" src="/storage/images/front-end-engineer.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                                <img style="height:500px;" src="/storage/images/back-end-engineer.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                    </a>
                </div>
                <br/><br/><br/><br/><br/>
        </div>
            
        <div id="aboutdiv">

                <h1 class="heading1"> About Me</h1>
                <div class="about-left">
                    <p> 
                       
                    Hello Everyone!!! Welcome to my portfolio. This is me, Sajan Shrestha citizen of Nepal.
                    Currently, I am residing in Hakusan, Bunkyo ku, Tokyo. May 15, 1990 is my date of birth, as of now, I am 29 years Old.
                    I am from Damauli, small city of Tanahun district, located in Western region of Nepal.
                    <br/>
                    </p>
                    <p>
                    <u class="education">About my education,</u> I completed my <u><b>Bachelor's in the year 2014 in Electronics and Communication Enginerering</b></u> 
                    from Pokhara Engineering College, one of the finest Engineering Colleges in Nepal. From the student life, I have
                    been fascinated about the technologies. My final project in the bachelor was also related to the technology that helps
                    blind people to migrate from one place to another without any obstacles.
                    I completed my <u><b>Master's degree in Information Technology from The Kyoto College of Graduate Stduies for Informatics, Kyoto, Japan in the year 2019.</b></u>
                    In this tenure, I developed a project,"Tourist Management System", which was obviously targeted for the Tourism sector.
                    This project keeps the records of the tourists visiting to Nepal and collects the responses from them about their stay and 
                    adventures in Nepal which would be helpful for those who are plannig to visit Nepal.
                    </p>
                    <p> 
                    <u class="education">To describe about My Hobbies,</u> Besides programming, I am fond of singing and Playing guitar. In sports, I like soccer the most.
                    Every weekend I got to the nearest Park with my friends and play soccer. When I am alone in room I usually surf about the programming
                    tutorials over the internet.
                    
                    <br/><br/><br/>
                    </p>
                </div>

                <div class="about-right">
                    <img class="img" src="/storage/images/sajan.jpg">
                </div>
        </div>
<br/><br/>
        
<br/><br/><br/>
        <div id="skills">
           <h1 class="heading1"> My Skills</h1>
                <div class="row header-container justify-content-center" style="width:100%;">
                        <div class="card" style="width:22%;">
                                <img src="/storage/images/php.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">PHP</h5>
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Experience: 2 years</li>
                                        <li class="list-group-item">Framework: Laravel, PHP5</li>
                                        
                                </ul>
                                </div>
                        </div> 
                        <div class="card" style="width: 22%;">
                                <img src="/storage/images/html.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">HTML/ CSS</h5>
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Experience: 2+ years</li>
                                        <li class="list-group-item">HTML5, CSS3</li>
                                        
                                </ul>
                                </div>
                        </div> 
                        <div class="card" style="width: 22%;">
                                <img src="/storage/images/react.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">React.js</h5>
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Experience: 3 months</li>                                        
                                        <li class="list-group-item">Node.js</li>
                                        
                                        
                                </ul>
                                </div>
                        </div> 
                        <div class="card" style="width: 22%;">
                                <img src="/storage/images/java.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">JAVA</h5>
                                        <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Experience: 3 months</li>
                                        <li class="list-group-item">Framework: Springboot</li>
                                        
                                </ul>
                                </div>
                        </div> 
                        
                                
                </div>
        </div>

        <footer id="footer">
                <div id="footer-content">
                        This is footer
                </div>
        </footer>
        

@endsection