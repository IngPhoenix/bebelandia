<?php
function showMenu(bool $static)
{
    if ($static)
        $classFixed="<header>"; 
    else
        $classFixed='<header class="pb">';
echo $classFixed . '
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="#" title=""><img src="images/logo.png" alt=""></a>
            </div><!--logo end-->
            <nav>
                <ul>
                    <li>
                        <a href="index.php" title="" class="hm">
                            <i class="fa fa-home"></i>
                            <b>Inicio</b>
                        </a>
                        <ul>
                            <li><a href="index.html" title="">Home 1</a></li>
                            <li><a href="index2.html" title="">Home 2</a></li>
                        </ul>
                    </li>
                  
                   
                    <li>
                        <a href="contact.php" title="" class="hm">
                            <i class="fa fa-phone"></i>
                            <b>Contáctanos</b>
                        </a>
                    </li>
                    <li>
                        <a href="sign.php" title="" class="hm">
                        <i class="fa fa-users" aria-hidden="true"></i>
                            <b>Plataforma</b>
                        </a>
                    </li>
                </ul>
            </nav><!--nav end-->
            <div class="menu-btn">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </div><!--menu-btn end-->
        </div><!--header-data end-->
    </div>
    </header><!--header end-->
    <div class="responsive-mobile-menu">
			<ul>
				<li><a href="index.html" title="">Inicio</a>
					<ul>
						<li><a href="index.html" title="">Home 1</a></li>
						<li><a href="index2.html" title="">Home 2</a></li>
					</ul>
				</li>
				
				<li><a href="contact.php" title="">Contáctanos</a></li>
                <li><a href="sign.php" title="">Plataforma</a></li>
			</ul>
		</div><!--responsive-mobile-menu end-->';
}
?>