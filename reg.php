<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.png" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
<title>Lake MUN - Registration</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: 'Roboto Slab Bold',serif;
  <!--
  disables scroll
  -->
  overflow-x: hidden;
  overflow-y: auto;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {box-sizing: border-box;}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  z-index: 10;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  padding-right: 100px;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #1875D1;
  color: white;
}

.h1 a {
  white-space: nowrap;
  font-size:50px;
}

/*
.header-right {
  float: right;
}
*/

.footer {
  left: 0;
  bottom: 0;
  padding-top: 5px;
  width: 100%;
  background-color: #1875D1;
  color: white;
  text-align: center;
  font-size:20px;
}

@media screen and (max-width: 650px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header {
    position: static;
  }
}

.header img {
  float: left;
  width: 58px;
  height: 49px;
  background: #;
}

.container {
  padding-top: 20px;
}

.contact {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 200%;
}
</style>
</head>
<body>

<div class="header">
  <img href="index.html" src="logo.png" alt="logo" />
  <a href="index.html" class="logo">Lake MUN</a>
  <div class="header-right">
    <a href="index.html">About Us</a>
    <a href="com.html">Committees</a>
    <a href="staff.html">Staff</a>
    <a class="active" href="reg.html">Registration</a>
  </div>
</div>

<div class="contact">
  <p>Contact us at email@gmail.com</p>
  <p>Add embeded Google Form Registration thing here</p>
</div>


<div class="footer">
  <p style="display:inline; padding-left:100px">MUN Footer Text</p>
</div>

</body>
</html>
