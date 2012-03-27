<?php

namespace pages\Site;

class Install extends \Mobile\Page {
 
    public function __construct() {
        parent::__construct("PHP2JQM Install");
        
        $p1 = new \Controls\CollapsiblePanel("Express install");
        
        $text = "<h4>1) Download php2jqm</h4>";
	$text .= "<p>Download and extract the content files to a webserver (Apache+PHP or IIS+PHP).</p>";

	$text .= "<h4>2) Access the php2jqm folder</h4>";
	$text .= "<p>Access the html folder, ex: http://localhost/php2jqm  </p>";
        
        $p1->add($text);
        
        $this->add($p1);
        
        $p2 = new \Controls\CollapsiblePanel("Advanced Install");
        
        $text = "<h4>1) Download php2jqm</h4>";
	$text .= "<p>Download and extract the content files to disk.</p>";

	$text .= "<h4>2) Create a virtual host on http.conf file</h4>";
	$text .= "<p>Add a virtual host to html folder on zenmo instalation, ex:</p>";
	$text .= '<pre>

Alias /php2jqm "c:/php2jqm/html/"


&lt;Directory "c:/php2jqm/html/"&gt;
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
        Order Deny,Allow
	Deny from all
	Allow from 127.0.0.1
&lt;/Directory&gt;
	</pre>';

	$text .= "<h4>3) Restart Apache</h4> <p>Restart the apache webserver to activate the virtual host.</p>";

	$text .= "<h4>3) Access the virtual host</h4> <p>Access http://localhost/php2jqm</p><p>Files outside html folder will be inacessible.</p>";
        
        $p2->add($text);
        
        $this->add($p2);
        
    }       
    
}