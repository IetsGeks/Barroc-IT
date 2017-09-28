<?php
require ('../app/database.php');
require ('head.php');
?>
    <header class="header-sales">
        <div class="row">
            <div> <ul class="row">
                    <li><a href="sales.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="">customers</a></li>
                </ul>
            </div>
           
            <div class="department">
                <h3>sales department</h3>
            </div>
            
        </div>
    </header>
    <div class="container container-sales">
        <h3>projects</h3>
        <div class="row-projects">
            <div>
                <h4>ordernumber</h4>
                    <ol>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
            </div>

            <div>
                <h4>name customer</h4>
                <ul>
                    <li>jacobs</li>
                    <li>smits</li>
                    <li>jansen</li>
                    <li>tiny</li>
                    <li>lau</li>
                </ul>
            </div>

            <div>
                <h4>project price</h4>
                <ul>
                    <li>€1200,-</li>
                    <li>€900,-</li>
                    <li>€450,-</li>
                    <li>€680,-</li>
                    <li>€740,-</li>
                </ul>
            </div>

            <div>
                <h4>project name</h4>
                <ul>
                    <li>pc4u</li>
                    <li>barroc-it</li>
                    <li>deze drie</li>
                    <li>fifa</li>
                    <li>de gokker</li>
                </ul>
            </div>

            <div>
                <h4>change</h4>
                <ul>
                    <li><a href="">change</a></li>
                    <li><a href="">change</a></li>
                    <li><a href="">change</a></li>
                    <li><a href="">change</a></li>
                    <li><a href="">change</a></li>
                </ul>
            </div>

        </div>
    </div>
<?php
require ('foot.php');
?>