    <?php


    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    

	function markers($lat , $lng) {

        $url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=" . $lat . "," . $lng . "&radius=5000&type=bank&keyword=bank&key=AIzaSyDEFYZV7hfzWR8flJQ_xi_WJ0hh6vDaesk";
        $opts = array(
        'http'=>array(
        'method'=>"GET"
        )
        );
        $context = stream_context_create($opts);
        // make the request using the context
        $json_data = file_get_contents($url, false, $context);




        return $json_data;

        }
		
		$result = markers($lat , $lng);
		header('Access-Control-Allow-Origin: *');
		header('Content-type: application/json');
        echo $result;
        



