<?php
/*
Nama Class : Form
Deskripsi : Class untuk membuat form inputan text sederhana
*/

class Form {
    var $fields = array();
    var $action;
    var $submit;
    var $jumField = 0;

    function __construct($action, $submit) {
        $this->action = $action;
        $this->submit = $submit;
    }

    function displayForm() {
        echo "<form action='".$this->action."' method='POST' ENCTYPE='multipart/form-data'>";
        echo "<table width='100%'>";

        for ($j=0; $j<count($this->fields); $j++) {
            echo "<tr><td align='right'>".$this->fields[$j]['label']."</td>";
            echo "<td><input type='".$this-> fields[$j]['type']."' name='".$this-> fields[$j]['name']."'></td></tr>";
        }

        echo "<tr><td colspan='2'>";
        echo "<input type='submit' name='".$this->submit. "' value='".$this->submit. "' onclick=''></td></tr>";
        echo "<tr><td colspan='2'>";
        echo "</table>";
    }

    function addField($name, $label, $type) {
        $this->fields [$this->jumField]['name'] = $name;
        $this->fields [$this->jumField]['label'] = $label;
        $this->fields [$this->jumField]['type'] = $type;
        $this->jumField ++;
    }
}
?>