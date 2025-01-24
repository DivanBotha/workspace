<?php 
class program {  
    public $releasedate;
    public $program;
    public $version; 
    public $fullname; 
    public $filesize; // New property for file size
  
    function __construct($progtype) {
        $latest_ctime = 0;
        $latest_filename = '';
        $files = glob($_SERVER['DOCUMENT_ROOT'] . '/private/setups/*.*');
        $programs = preg_grep("/exe/i", $files);
        $list = preg_grep("/".$progtype."_/i", $programs);
        
        foreach ($list as $filename) {
            if (file_exists($filename)) {
                if (filemtime($filename) > $latest_ctime) {
                    $latest_ctime = filemtime($filename);
                    $latest_filename = $filename;
                }                     
            }
        }   
        
        $this->fullname = $latest_filename;
        $this->releasedate = $latest_ctime;
        $this->program = basename($latest_filename, ".exe"); 
        
        // Extract version if available
        if (strrpos($this->program,"_") > 0) {
            $this->version = substr($this->program, strrpos($this->program, "_") + 1);
        } else {
            $this->version = "";
        }

        // Get file size
        $this->filesize = filesize($latest_filename); // Get size in bytes
    }       
}
?>
