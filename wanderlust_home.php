<!DOCTYPE html>
<html>
    <head>
        <title>Wanderlust</title>
        <link rel="stylesheet" href="style/main.css" media="all"/>
    </head>
    <body>
        <!-----------------------------------------------------------------Header Start-->
        <header>
            <div class="logo">
                <img src="images/wanderlust_white.png">
            </div>
            <nav>
                <ul>
                    <li>LOG IN</li>
                    <li>REGISTER</li>
                </ul>
            </nav>
            <div class="footer">
                &copy; 2015 Wanderlust
            </div>
        </header>
        <!-----------------------------------------------------------------Header end-->
        <!-----------------------------------------------------------------Content start-->
        <div id="content">
            <div>
                <img src="images/image.png" style="float:left; margin-left:-40px;"/>
            </div>
            <div id="form2">
                <form action="" method="post">
                    <h2>Sign Up Today!</h2>
                    <table>
                        <tr>
                            <td align="right">Name:</td>
                            <td>
                                <input type="text" name="u_name" placeholder="Enter your name" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Password:</td>
                            <td>
                                <input type="password" name="u_pass" placeholder="Enter your password" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Email:</td>
                            <td>
                                <input type="email" name="u_email" placeholder="Enter your email" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Country:</td>
                            <td>
                                <select name="u_country" required="required">
                                    <option>Select a country</option>
                                    <option>Afghanistan</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>United States</option>
                                    <option>United Arab Emirates</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Gender:</td>
                            <td>
                                <select name="u_gender" required="required">
                                    <option>Select a Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Birthday:</td>
                            <td>
                                <input type="date" name="u_birthday" required="required"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <button name="sign_up">Sign Up</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php include("user_insert.php"); ?>
            </div>
        </div>
<!-----------------------------------------------------------------------------------Content end-->
        <section>
            <div class="post">
                <img src="images/image1.jpg">
            </div>
            <div class="post">
                <img src="images/image2.jpg">
            </div>
            <div class="post">
                <img src="images/image3.jpg">
            </div>
            <div class="post">
                <img src="images/image1.jpg">
            </div>
            <div class="post">
                <img src="images/image2.jpg">
            </div>
            <div class="post">
                <img src="images/image3.jpg">
            </div>
            
        </section>
    </body>
</html>
        