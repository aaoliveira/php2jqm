<?php

namespace pages\Site;

class QuickStartGuide extends \Mobile\Page {
 
    public function __construct() {
        parent::__construct("PHP2JQM Quick Start");
        
        
        $text="

     
    <h3>Open config.php file</h3>
    <p>After install, open index.php file</p>
    
    <p>Find the main_page entry. Default value is Main, it means: \"Access the Main class at folder pages\"

    <p>Change to \"&lt;your_project_name&gt;\\Main\". Now, the Main class at project_name folder will be loaded.

    <h3>Create a Main class</h3>
    
    <p> The Main classe MUST be extend \Mobile\Page, like it:<p>
    
<pre>
namespace MyProjectName;
class Main extends \Mobile\Page
{
    public function __construct() {
      parent::__construct(\"The Page Title\");
    }
    
}
</pre>
    
<h3>Add controls</h3>

<p>Use the \$this->add() method to add controls to the page.</p>

<p>
<pre>
namespace MyProjectName;
class Main extends \Mobile\Page
{
    public function __construct() {
      parent::__construct(\"The Page Title\");
      <b>\$this->add(new \Controls\Form\TextInput());</b>
    }
    
}
</pre>
</p>


";

        $this->add($text);
        
        
    }       
    
}