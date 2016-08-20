<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>James Gifford</title>

        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <div id="logo"></div>
            <h1>James Gifford</h1>
            <p>Web Developer</p>
            <a href="#contact" class="glyphicon glyphicon-menu-down"></a>
        </header>

        <section id="about">
            <p>Hello, my name is James Gifford and I am a programmer of web and mobile applications using a wide range of <a href="#skills">modern technologies</a>. My approach to writing code is the same as with <a href=""> my other passions</a> in life: seek out new challenges and never stop learning.</p>
        </section>

        <section id="skills">
            <h2>My Skills</h2>
            <p>Some of the technologies I work with</p>
            <ul>
                <li class="php"><a href="http://php.net" target="_blank" title="PHP">PHP</a></li>
                <li class="laravel"><a href="http://laravel.com" target="_blank" title="Laravel">Laravel</a></li>
                <li class="codeigniter"><a href="http://codeigniter.com" target="_blank" title="CodeIgniter">CodeIgniter</a></li>
                <li class="cakephp"><a href="http://cakephp.org" target="_blank" title="CakePHP">CakePHP</a></li>
                <li class="wordpress"><a href="http://wordpress.org" target="_blank" title="WordPress">WordPress</a></li>
                <li class="python"><a href="http://python.org" target="_blank" title="Python">Python</a></li>
                <li class="html"><a href="http://www.w3schools.com/html/" target="_blank" title="HTML">HTML</a></li>
                <li class="css"><a href="http://www.w3schools.com/css/" target="_blank" title="CSS">CSS</a></li>
                <li class="javascript"><a href="http://www.w3schools.com/js/" target="_blank" title="JavaScript">JavaScript</a></li>
                <li class="jquery"><a href="http://jquery.com" target="_blank" title="jQuery">jQuery</a></li>
                <li class="angular"><a href="http://angularjs.org" target="_blank" title="Angular">Angular</a></li>
                <li class="react"><a href="https://facebook.github.io/react/" target="_blank" title="React">React</a></li>
                <li class="swift"><a href="https://developer.apple.com/swift/" target="_blank" title="Swift">Swift</a></li>
                <li class="phonegap"><a href="http://phonegap.com" target="_blank" title="PhoneGap">PhoneGap</a></li>
                <li class="ionic"><a href="http://ionicframework.com" target="_blank" title="Ionic">Ionic</a></li>
                <li class="sass"><a href="http://sass-lang.com" target="_blank" title="Sass">Sass</a></li>
                <li class="bootstrap"><a href="http://getbootstrap.com" target="_blank" title="Bootstrap">Bootstrap</a></li>
                <li class="git"><a href="http://git-scm.com" target="_blank" title="Git">Git</a></li>
            </ul>
        </section>

        <section id="work">
            <h2>My Work</h2>
            <p>Some of the projects I've been writing code for recently</p>
            <ul>
                <li class="bandrobot"><a href="http://bandrobot.com" target="_blank" title="Band Robot"></a><span>Band Robot</span></li>
                <li class="mightynurse"><a href="http://mightynurse.com" target="_blank" title="Mighty Nurse"></a><span>Mighty Nurse</span></li>
                <li class="traveloregon"><a href="http://traveloregon.com" target="_blank" title="Travel Oregon"></a><span>Travel Oregon</span></li>
            </ul>
        </section>

        <section id="fun">
        </section>

        <section id="social">
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <p>Let me know if you'd like to discuss a project or just shoot the breeze</p>
            <form method="post" action="/contact">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Name" />

                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" /> 

                <label for="content">Message:</label>
                <textarea name="content" placeholder="Message"></textarea>

                <input type="submit" name="submit" value="Submit" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </section>

        <footer>
            <p>Created by James in Oregon</p>
        </footer>

        <script src="/js/scripts.js"></script>
    </body>
</html>