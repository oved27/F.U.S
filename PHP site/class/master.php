<?php

class Master {

    public function header() {
        $html = <<<HTML
                <html>
<head>
	<title></title>
	<style type="text/css">
	.container{
		border:1px solid black;
	}
	.one{
		border:1px solid black;
	}
	.two{
		border:1px solid black;
	}
	</style>
</head>

<body>
HTML;
        return $html;
    }

    public function getLineNameUser($name) {
        $html = <<<HTML
        name : <span id="name">{$name}</span>
HTML;
        return $html;
    }
    
    public function getAllUsers($arrUser){
         return;
    }

    public function boody() {
        $html = <<<HTML
	<div class="container">
		<div class="one"> 
		 {$this->getAllUsers($arrUser)}
		</div>
		<div class="two">

		</div>
	</div>
HTML;
        return $html;
    }

    public function footer() {
        $html = <<<HTML
</body>
</html>
HTML;
        return $html;
    }

}

?>