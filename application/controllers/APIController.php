<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once __DIR__ . '/vendor/autoload.php';

class APIController extends CI_Controller {

	public function __construct(){
		
        parent::__construct();
    
	}
	
	public function printTrade(){

		if(!isset($_POST['qa']) || !isset($_POST['qatype'])){
			echo json_encode(
				array(
					'success' => false,
					'message' => "there isn't data!"
				)
			);
			return;
		}

		$qa = $_POST['qa'];
		$qatype = $_POST['qatype'];

		$questions = [];
		if($qatype == 'plan'){
			$questions = planQuestions(); 
		}
		else if($qatype == 'recap'){
			$questions = recapQuestions();
		}
		
		$mpdf = new \Mpdf\Mpdf();
		$pdf_content = '<div style="text-align:center;margin-bottom: 20"><img src="'.base_url('assets/images/imarketplan_logo.png').'" style="width: 200px;"></div>';

		foreach($qa as $qindex => $answer){
			if($qindex < count($questions)){
				$pdf_content .= '<h3>'.$questions[$qindex]['text']."</h3><p>".$answer."</p>";
			}			
		}

		$mpdf->WriteHTML($pdf_content);

		$date = new DateTime();
		$file_path = 'uploads/genpdfs/'.$date->getTimestamp().'.pdf';
		
		$mpdf->Output($file_path);

		echo json_encode(
			array(
				'success' => true,
				'path' => base_url($file_path)
			)
		);
	}
}
