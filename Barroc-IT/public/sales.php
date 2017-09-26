<?php
require ('../app/database.php');
require ('head.php');
?>
    <header>
        <div class="row">
            <div> <ul class="row">
                    <li><a href="">Home</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">customers</a></li>
                </ul>
            </div>
           
            <div class="department">
                <h3>sales department</h3>
            </div>
            
        </div>
    </header>
    <div class="container container-sales">
        <div class="row-projects">
            <div>
                <h5>ordernumber</h5>
                    <ol>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
            </div>

            <div>
                <h5>name customer</h5>
                <ul>
                    <li>jacobs</li>
                    <li>smits</li>
                    <li>jansen</li>
                    <li>tiny</li>
                    <li>lau</li>
                </ul>
            </div>

            <div>
                <h5>project price</h5>
            </div>

            <div>
                <h5>project name</h5>
            </div>

            <div>
                <h5>change</h5>
            </div>

        </div>
    </div>
<?php
require ('foot.php');
?>