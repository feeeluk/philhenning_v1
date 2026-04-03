<?php
    // set the root folder (site root not server root) in relation to this page
    $path = "../";

            // ./ = this page is located in the root directory
            // ../ = this page is located one folder up
            // ../../ = this page is located two folders up, etc.

    // every page can have a different title
    $subTitle = "Projects";

    // include - header
    include($path."assets/includes/header.php");                        
?>
                <!-- page content goes here &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
                <article class="table_container">
                    
                    <!-- HTML nested under 'article' on this indentation -->

                    <div class="right"></div>

                    <table class="standard projects">

                        <tr>
                            <th colspan="1" width="18%">Project</th>
                            <th colspan="1" width="12%">Type</th>
                            <th colspan="1" width="40%">Description</th>
                            <th colspan="1" width="30%"></th>
                        </tr>

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Project
                                <br>Race
                            </td>

                            <td colspan="1">C#</td>

                            <td colspan="1">
                                <p>
                                    This has become my first 'real' C# project, and I am using it as a means of implementing things that I have learned.
                                </p>

                                <p>
                                    This is modelled on race concept (multiple vehicles, multiple teams, multiple race circuits), which allows plenty of scope for create objects, lists, inhertance, polymorphism, interfaces, etc..<br>
                                    Creating a 'larger' project then in turn introduces further challenges, such as menu design, and starts to explore "what does a user of this program want to achieve?".
                                </p>

                                <p>
                                   <a target="_blank" href="https://dev.azure.com/philiphenning/Csharp%20-%20Race/_workitems/recentlyupdated/">Azure DevOps backlog</a>
                                   <br>

                                   <a target="_blank" href="https://miro.com/app/board/uXjVKUNctF8=/?share_link_id=294729311790">Whiteboard</a>
                                   <br>

                                   <a target="_blank" href="https://miro.com/app/board/uXjVKUNYNnA=/?moveToWidget=3458764586915561341&cot=14">Class Diagram</a>
                                   <br>

                                   <a target="_blank" href="https://1drv.ms/o/s!Ag9ZukAL9sZOog6eqf_5CXVrdJhz?e=JpOZvX">Notes</a>
                                   <br>
                                </p>


                            </td>

                            <td colspan="1">
                                <a href="" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/car_race_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>
                     
                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Tutorial
                                <br />C# Fundamentals
                                <br />Pluralsight
                            </td>

                            <td colspan="1">C#</td>

                            <td colspan="1">
                                A tutorial that consists of 11 lessons.
                                <br>
                                <br>Delivered by Scott Alan
                                <br>
                                <br>Including:
                                <br>
                                Visual Studio Code, using CMD to control the CLI, creating methods & classes, creating software that flows through different classes and methods, passing and returning data, creating and running unit tests,

                            </td>

                            <td colspan="1">
                                <a href="https://www.pluralsight.com/courses/csharp-fundamentals-dev" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/pluralsight_cSharpFundamentals_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Project
                                <br />Workout
                            </td>

                            <td colspan="1">C#</td>

                            <td colspan="1">
                                My first attempt at creating a project to solve a simple problem.
                                <br>
                                <br>I wanted a program to be able to generate a list of random excercises for me based on two parameters:
                                <br>1) How much time I have for a workout
                                <br>2) How difficult I want the workout to be

                            </td>

                            <td colspan="1">
                                <a href="" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/workout_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Tutorial
                                <br />C# for beginners
                                <br />Bro Code
                            </td>

                            <td colspan="1">C#</td>

                            <td colspan="1">
                                A tutorial that consists of 50 lessons.
                                <br>
                                <br>Including:
                                <br>
                                variables, type casting, arithmetic operators, string methods, if statements, switches, logical operators, while loops, for loops, nested loops, arrays, foreach loops, methods, return keyword, method overloading, params keyword, exception handling, conditional operator, string interpolation, multidimensional arrays, classes, objects, constructors, static keyword, overloaded constructors, inheritance, abstract classes, array of objects, objects as arguments, method overriding, ToString method, polymorphism, interfaces, lists, list of objects, getters and setters, auto implemented properties, enums, generics, multithreading.

                            </td>

                            <td colspan="1">
                                <a href="https://www.youtube.com/watch?v=wxznTygnRfQ" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/broCode_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Website
                                <br />Proof of concept
                                <br />'TreeData'
                                <br />Keytree Solutions
                            </td>

                            <td colspan="1">PHP, SQL, HTML & CSS</td>

                            <td colspan="1">
                                This is a current Proof Of Concept for a commercial client (although undertaken without recompense).
                                <br>
                                <br>
                                The client wishes to provide his clients with the means to view data about specific trees on a given site. My client 'tags' each tree that he surveys with a physical metal disc that has an identifier - albeit not a universally unique identifier, only unique to the site.
                                <br>
                                The POC is purely based on data, hence there the low-fi visuals.
                                <br> 
                            </td>

                            <td colspan="1">
                                <a href="<?php echo $treedata; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/treedata_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Website
                                <br />Philhenning.co.uk
                            </td>

                            <td colspan="1">PHP, SQL, HTML & CSS</td>

                            <td colspan="1">
                                <p>
                                    The site you are currently looking at is a project of mine that I am still regularly working on. I created it by hand using PHP, MySQL, HTML, CSS, Filezilla and Sublime Text, with support from Trello (backlog management) and Miro (whiteboarding).
                                </p>

                                <p>
                                    I have set up a Trello backlog for this website, which can be found <a href="https://trello.com/invite/b/zOxhDZ5X/ATTI97c5c7803294bddb4c108eec0778f299ED97D35C/philhenningcouk" target="_blank">here</a>
                                </p>
                            </td>

                            <td colspan="1">
                                <a href="<?php echo $philhenning; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/philhenning_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>                        

                        <?php /*
                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Brainstormservices</td>

                            <td colspan="1">Web</td>

                            <td colspan="1">
                                My current webspace for my BA contracting business. It is purely a landing page. There is NOTHING of interest on this site.
                            </td>

                            <td colspan="1">
                                <a href="http://www.brainstormservices.co.uk" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/brainstorm_logo.png" width="60" height="60">
                                </a>
                            </td>
                        </tr>
                        */ ?>
         
                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Website
                                <br />'Snow Compare'
                                <br />MSc @ City
                            </td>

                            <td colspan="1">PHP, SQL, HTML & CSS</td>

                            <td colspan="1">
                                This was my first piece of web development coursework at university. Primarily made to showcase my development skills.
                            </td>

                            <td colspan="1">
                                <a href="<?php echo $snowCompare; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/snowcompare_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>
                       
                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Website
                                <br />'Snow Compare Shop'
                                <br />MSc @ City
                            </td>

                            <td colspan="1">PHP, SQL, HTML & CSS</td>

                            <td colspan="1">
                                This was my second piece of web development coursework at university. Building upon the first project above, the purpose of this project was to focus on an 'e-commerce' back-end.
                            </td>

                            <td colspan="1">
                                <a href="<?php echo $snowCompareShop; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/snowcompareshop_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>               

                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">Website
                                <br />Proof of concept
                                <br />'Portal'
                                <br />BSN Medical
                            </td>

                            <td colspan="1">PHP, SQL, HTML & CSS</td>

                            <td colspan="1">
                                Initially conceived as a short-term tool to help a brand new sales team get up to speed with learning the particulars of various products. It subsequently evolved into a more substantial long-term tool that was regularly used. This first iteration was purely static. The next iteration (SimplePortal System - see below) would take that next evolutionary step.
                            </td>

                            <td colspan="1">
                                <a href="<?php echo $portal; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/ProjectScreenshots/portal_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>

                        <?php /*
                        <!-- ########################################################## -->
                        <tr>
                            <td colspan="1">University</td>

                            <td colspan="1">Web</td>

                            <td colspan="1"></td>

                            <td colspan="1">
                                <a href="<?php echo $university; ?>" target="_blank">
                                    <img src="<?php echo $path; ?>assets/images/university_screenshot.png" width="200">
                                </a>
                            </td>
                        </tr>
                        */ ?>

                    </table>
                &nbsp
                </article>
                <!-- end of content &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<?php
    //footer include
    include($path."assets/includes/footer.php");
?>
