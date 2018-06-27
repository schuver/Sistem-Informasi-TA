<?php

class ModelUi extends CI_Model
{
    function alert($isi, $alert)
    {
        return " <div class=\"alert alert-$alert alert-dismissible fade show\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                $isi</div>";
    }    

    function alert2($isi, $alert)
    {
        return " <div class=\"alert alert-$alert alert-dismissible fade in\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
                $isi</div>";
    }

}

?>