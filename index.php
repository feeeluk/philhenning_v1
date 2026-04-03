<?php
    
    // SET PAGE SPECIFIC VARIABLES

    // set the root folder (site root not server root) in relation to this page
    $path = "./";       
            // ./ = this page is located in the root directory
            // ../ = this page is located one folder up
            // ../../ = this page is located two folders up, etc.
    
    // every page can have a different title
    $subTitle = "Home";

    // include - site details
    include($path."assets/includes/site_details.php"); 

    // include - header
    include($path."assets/includes/header.php");                        
?>
                <!-- page content goes here &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
                <article id="philhenning">
                    
                    <section id="profileSection">
                        
                        <p class="profileParagraph">
                        I am an experienced business analyst with 10+ years of industry experience, wishing to change my career to become a software developer. I have undertaken several web development projects using PHP & SQL, I am currently attending a software bootcamp using JavaScript, and I am learning C# independently.</p>
                        
                        <p class="profileParagraph">I have been interested in coding ever since my undergraduate degree, where I took several modules of software development and web development, and (more recently) in my postgraduate degree, where I took modules in web development, and database design.</p>
                    
                    </section>                                 
                            
                    <section id="developmentSkills">

                        <table class="skillsTable">
                            
                            <colgroup>

                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 20%;">
                                <col style="width: 50%;">
                                <col style="width: 10%;">

                            </colgroup>

                            <tr>

                                <th></th>
                                <th colspan="3" class="th">Software Development Skills</th>
                                <th></th>

                            </tr>

                            <tbody>

                                <!-- ******************************************************************************** -->
                                <!-- C# -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/CSharp.png">
                                    </td>

                                    <td class="td">
                                        C Sharp
                                    </td>

                                    <td class="td">
                                        Learning - 6 months – several tutorials and projects. See <a href="<?php echo $path; ?>pages/projects.php">projects</a> for more detail.

                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- Entity Framework -->
                                <tr>

                                    <td></td>                     

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/EntityFramework.png">
                                    </td>

                                    <td class="td">
                                        Entity Framework
                                    </td>

                                    <td class="td">                                
                                        Learning - I have just built an application that has many tables using 'code first'.                                 
                                    </td>

                                    <td></td>                     

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- GIT -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/GIT.png">
                                    </td>

                                    <td class="td">
                                        GIT
                                    </td>

                                    <td class="td right">                               
                                        Learning – Currently working within a team (bootcamp) = using branching & pull requests
                                    </td>

                                    <td></td>

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- SQL -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/SQL.png">
                                    </td>

                                    <td class="td">
                                        SQL
                                    </td>

                                    <td class="td">                                    
                                        Somewhat experienced – created several dbs, for web and for applications (MySQL & SQL Server), including this website (see <a href="<?php echo $path; ?>pages/blog.php">blog</a>), university projects, PoC, experience as a BA. See <a href="<?php echo $path; ?>pages/projects.php">projects</a> for more details. 
                                    </td>

                                    <td></td>                     

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- JavaScript -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/js.png">      
                                    </td>

                                    <td class="td">
                                        JavaScript
                                    </td>                                  
                                    
                                    <td class="td right">
                                        Learning – currently attending a 12-week webdev bootcamp, which will include a variety of frameworks, libraries, and tools, such as Node.js, Vite, Express, and VS Code.
                                    </td>

                                    <td></td>

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- PHP -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/PHP.png">      
                                    </td>

                                    <td class="td">
                                        PHP
                                    </td>                                  
                                    
                                    <td class="td">
                                        Somewhat experienced – created several db driven sites (such as this one), including several university projects + a PoC (see <a href="<?php echo $path; ?>pages/blog.php">blog</a>), university projects, PoC, experience as a BA. See <a href="<?php echo $path; ?>pages/projects.php">projects</a> page for more info.)
                                    </td>

                                    <td></td>

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- HTML -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/HTML.png">
                                    </td>

                                    <td class="td">
                                        HTML
                                    </td>

                                    <td class="td">                                                              
                                        Experienced – created several web sites.
                                    </td>

                                    <td></td>

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- CSS -->
                                <tr>

                                    <td></td>

                                    <td class="td">
                                        <img class="DevLogo" src="<?php echo $path; ?>assets/images/DevLogos/CSS.png">
                                    </td>

                                    <td class="td">
                                        CSS
                                    </td>

                                    <td class="td">                                                                   
                                        Experienced – created several web sites.                                
                                    </td>

                                    <td></td>

                                </tr>

                            </tbody>

                        </table>

                    </section>

                    <section id="agileMethodlogies">

                        <table class="experienceTable">

                            <colgroup>

                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 20%;">
                                <col style="width: 50%;">
                                <col style="width: 10%;">

                            </colgroup>

                            <tr>

                                <th></th>
                                <th colspan="3" class="th">Experience with Agile Methodologies</th>
                                <th></th>

                            </tr>

                            <tbody>

                                <!-- ******************************************************************************** -->
                                <!-- SCRUM -->
                                <tr>

                                    <td></td>

                                    <td class="td" colspan="2">
                                        SCRUM
                                    </td>

                                    <td class="td">
                                        Experienced (5+ years) - I am a SCRUM advocate, experience with various levels (mature / immature).
                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- SAFE -->
                                <tr>

                                    <td></td>                     

                                    <td class="td" colspan="2">
                                        SAFE
                                    </td>

                                    <td class="td">                                
                                        Learning - I have just built an application that has many tables using 'code first'.                                 
                                    </td>

                                    <td></td>                     

                                </tr>

                            </tbody>

                        </table>

                    </section>

                    

                    <section id="tools">

                        <table class="experienceTable">

                            <colgroup>

                                <col style="width: 10%;">
                                <col style="width: 10%;">
                                <col style="width: 20%;">
                                <col style="width: 50%;">
                                <col style="width: 10%;">

                            </colgroup>

                            <tr>

                                <th></th>
                                <th colspan="3" class="th">Experience with communication and development tools</th>
                                <th></th>

                            </tr>

                            <tbody>

                                <!-- ******************************************************************************** -->
                                <!-- Trello -->
                                <tr>

                                    <td></td>

                                    <td class="td" colspan="2">
                                        Trello
                                    </td>

                                    <td class="td">
                                        Experienced - daily use.
                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- MIRO -->
                                <tr>

                                    <td></td>                     

                                    <td class="td" colspan="2">
                                        Miro
                                    </td>

                                    <td class="td">                                
                                        Experienced - regular use.                                 
                                    </td>

                                    <td></td>                     

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- VISUAL STUDIO -->
                                <tr>

                                    <td></td>

                                    <td class="td" colspan="2">
                                        Visual Studio
                                    </td>

                                    <td class="td">
                                        Learning – alongside C#.
                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- VISUAL STUDIO CODE -->
                                <tr>

                                    <td></td>                     

                                    <td class="td" colspan="2">
                                        Visual Studio Code
                                    </td>

                                    <td class="td">                                
                                        Learning as part of bootcamp.
                                    </td>

                                    <td></td>                     

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- SQL MANAGEMENT STUDIO -->
                                <tr>

                                    <td></td>

                                    <td class="td" colspan="2">
                                        SQL Management Studio
                                    </td>

                                    <td class="td">
                                        Some professional use as a BA.
                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- PHPMYADMIN -->
                                <tr>

                                    <td></td>                     

                                    <td class="td" colspan="2">
                                        phpMyAdmin
                                    </td>

                                    <td class="td">                                
                                        Used as part of deploying db driven sites - see projects for more details.                                 
                                    </td>

                                    <td></td>                     

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- AZURE DEVOPS BOARDS -->
                                <tr>

                                    <td></td>

                                    <td class="td" colspan="2">
                                        Azure DevOps (boards)
                                    </td>

                                    <td class="td">
                                        Experienced - daily use.
                                    </td>

                                    <td></td>                            

                                </tr>

                                <!-- ******************************************************************************** -->
                                <!-- TEAMS / SLACK / DISCORD -->
                                <tr>

                                    <td></td>                     

                                    <td class="td" colspan="2">
                                        Teams / Slack / Discord
                                    </td>

                                    <td class="td">                                
                                        Experienced - daily use.                                 
                                    </td>

                                    <td></td>                     

                                </tr>

                            </tbody>

                        </table>

                    </section>

                </article>
                <!-- end of content &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

<?php
    //footer include
    include($path."assets/includes/footer.php");
?>
