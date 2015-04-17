<?php namespace helpers;

class exportpdf extends \fpdf\FPDF{

	public static function export($header, $entries){
 			$pdf = new \fpdf\FPDF('L','mm','A4');
      $pdf->AddPage();
	    // Colors, line width and bold font
	    $pdf->SetFillColor(0, 177, 172);
	    $pdf->SetTextColor(255,255,255);
	    $pdf->SetDrawColor(255,255,255);
	    $pdf->SetLineWidth(.1);
	    $pdf->SetFont('Arial','B', '9');
	    // Header
	   
			for($i=0;$i<count($header);$i++)
	        $pdf->Cell(35,7,$header[$i],1,0,'C',true);
	    $pdf->Ln();
	    $pdf->SetFillColor(247, 247, 247);
	    $pdf->SetDrawColor(255,255,255);
	    $pdf->SetTextColor(94,94,94);
	    $pdf->SetFont('Arial','B', '8');
	    foreach($entries as $row){
	        $pdf->Cell(35,6,$row->asistenteName,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistentePrimerApellido." ".$row->asistenteSegundoApellido,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteCiudad,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteCentro,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteCargo,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteEmail,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteTelefono,1,0,'L',true);
	        $pdf->Cell(35,6,$row->asistenteTelefonoSecundario,1,0,'L',true);	        
	        $pdf->Ln();
	    }

	    	    // Closing line
	    $pdf->Cell(35*8,0,'','T');

      $pdf->Output('bdSeminario'.date("d-m_H.i").'.pdf', 'D');
      exit;
	}
}

?>