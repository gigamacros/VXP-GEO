<html>
    <head>
        
    </head>
    <body style="background-color: black">
        <table width="800" align="center" style="background-color: white">
            <tr><td valign="top" height="600">
                    <h1>Pagina publica</h1>
                    <?php
                    if (!isset($view_file)){
                        $view_file = "";
                    }
                    
                    if (!isset($module)){
                        $module = $this->uri->segment(1);
                    }
                    
                    if (($view_file!="") && ($module!="")){
                        $path = $module."/".$view_file;
                        $this->load->view($path);
                    }
                    ?>
                </td>
            </tr>
        </table>
        
    </body>
</html>
