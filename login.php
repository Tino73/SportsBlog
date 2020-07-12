<!DOCTYPE HTML>
<html>

<head>
  <title>Football Blogs, Log in</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <script src="loginstyle.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="homepage.html"><span class="logo_colour">Best Sports Blogs: The Best Sport Sites to Read</span></a></h1>
          <h2>Last Updated May 14th, 2020</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="homepage.html">Home</a></li>      
          <li><a href="footlab.html">The Football Lab</a></li>
          <li><a href="transfertavern.html">Transfer Tavern</a></li>
		  <li><a href="footparadise.html">Football Paradise</a></li>
          <li class="selected"><a href="login.html">Log in</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Member Benefits</h3>
        <h4>Connect with other sports fans</h4>
        <h5>May 14th, 2020</h5>
        <p>Chat with other sports fans 24 /7, where ever you are! </p>
        <p></p>
        <h4>Never miss any news</h4>
        <h5>May 14th, 2020</h5>
        <p>The first page to post latest news, and never fake ones!</p>
             
      </div>
	 </div>
    
		<div class="loginbox">
			<h1 id="loginhere">Log in Here<h1> 
			<form action="LoginUser.php" method="post">
			<div class="movethis">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input  type="password" name="password" placeholder="Enter Password">
				<br><br>
				Type of user:
				<select name="typeofusers">
				<option value="User">User</option>
				<option value="Administrator">Administrator</option>
				</select>
				<input type="submit" value="Login"><br>
				
			</form>
			</div>
		</div>
   <div id="footer">
      <span class = "black_color"> | Projekti Pjesa 1  | Punuan: </span><a href="https://github.com/Tino73/InxhWeb"><span class="green_color"> Altin Thaçi </span></a> <span class = "black_color"> dhe </span><a href="https://github.com/endrit-html/InxhinieriWeb"><span class="green_color"> Endrit Zekaj </span></a> <span class = "black_color"> | </span>
    </div>
  </div>
</body>
</html>
