<?php
	
	function header1(){
?>
<div id="main">
	<div id="header">
                <div id="logo">
                    <a href="#"><img src="Public/Layouts/images/logo.png" width="200px"></a>
                </div>
                <div id="lang">
                    <a href="#"><img src="Public/Layouts/images/russian.png"></a>
                    <a href="#"><img src="Public/Layouts/images/english.png"></a>
                    <a href="#"><img src="Public/Layouts/images/france.png"></a>
                </div>
    </div>
<?php		
	}
	function nav(){
?>
	 <div id="nav">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contacts">Contacts</a></li>
                    <li><a href="Login">Login</a></li>
                    <li><a href="Logout">Logout</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
<?php
	}
	function sidebar(){
?>
	<div id="sidebar">
                <h1>Sidebar</h1>
            </div>
			<div class="clear"></div>
<?php
	}
	function footer(){
?>
	<div id="footer">
                <span>All right reserved</span>
            </div>
</div>
<?php
	}
?>

