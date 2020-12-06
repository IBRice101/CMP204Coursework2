<?php
    echo "<footer>
            <div class=\"logo\">
                <!-- Guy-Manuel de Homem-Christo, Public domain, via Wikimedia Commons -->
                <img src=\"media\Logo\Daft_Punk_Logo_Black.png\" alt=\"Daft Punk Logo\" width=\"70px\" height=\"50px\"/>
                <br/>
            </div>
            <br/>
            <li><a href=\"UserAccount.php\">User Account</a></li>
            <br/>
            <p>Website Submitted 15/12/2020 by Isaac Basque-Rice
            <br/>
            <li><a href=\"req.html\">Requirements Specification</a></li>
            <br/>
            <div class=\"themeSwitchButtonDiv\">
                <label>Theme Switcher:</label> 
                <br/>
                <button type=\"button\" class=\"themeSwitchButton\" id=\"themeSwitchLight\"
                onclick=\"ChangeThemeLight()\">Light Theme</button>
                <button type=\"button\" class=\"themeSwitchButton\" id=\"themeSwitchDark\"
                onclick=\"ChangeThemeDark()\">Dark Theme</button>
            </div>
        </footer>"
?>