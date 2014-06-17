<?php

class basex {

    private $basex;
    private $resolver;

    public function __construct(mdl_basex $mdl, resolver $resolver) {
        $this->basex = $mdl;
        $this->resolver = $resolver;
    }
   
    public function select() {
        include_once 'view/view_search.php';
    }

    public function delete() {
        include("./settings.php");
        $this->basex->execute("open " . $db_name);
        $shoeid = $_GET['shoeid'];
        $this->basex->execute("xquery delete node //shoe[shoeid='" . $shoeid. "']");
      //  include_once '../index.php?ctrl=basex&action=viewall';
        include_once 'view/start.php';
    }

    public function viewall() {
        include("./settings.php");
        $this->basex->execute("open " . $db_name);
        $result = $this->basex->execute("xquery .");
        $result = "<root>" . $result . "</root>";
        $result = simplexml_load_string($result);

        include_once 'view/view_all.php';
    }

    public function search() {
        include("./settings.php");
        $this->basex->execute("open " . $db_name);
        $keyword = $_POST['keyword'];
        $result = array();
        $result = $this->basex->execute("xquery /shoe[(shoebrand='" . $keyword . "')"
                . "                                or (shoemodel='" . $keyword . "')"
                . "                                or (shoetype='" . $keyword . "')"
                . "                                or (shoecolor='" . $keyword . "')"
                . "                                or (shoesize='" . $keyword . "')"
                . "                                or (shoeheel='" . $keyword . "')"
                . "                                or (shoestorage='" . $keyword . "')"                
                . "]");
        
        $result = "<root>" . $result . "</root>";
        $result = simplexml_load_string($result);

        include_once 'view/view_all.php';
    }
    
    public function create() {
        include_once 'view/view_create.php';
    }

    public function modify() {
        include_once 'mdl/class.xml.php';
        include_once("/settings.php");
        $add = new XmlClass();
        $add->AddElement("shoeid", uniqid());
        $add->AddElement("shoebrand", $_POST['shoebrand']);
        $add->AddElement("shoemodel", $_POST['shoemodel']);
        $add->AddElement("shoetype", $_POST['shoetype']);
        $add->AddElement("shoecolor", $_POST['shoecolor']);
        $add->AddElement("shoesize", $_POST['shoesize']);
        $add->AddElement("shoeheel", $_POST['shoeheel']);
        $add->AddElement("shoestorage", $_POST['shoestorage']);
        $add->AddElement("shoenotice", $_POST['shoenotice']);
        $result = $add->getXml();
        $xml = new DOMDocument();
        $xml->loadXML($result);
        if ($xml->schemaValidate("schema.xsd")) {
            $this->basex->execute("open shoes");
            $this->basex->add("shoes", $result);
        }
        include_once 'view/view_create_result.php';
    }

}

?>