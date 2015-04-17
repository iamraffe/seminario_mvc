<?php namespace helpers;

//use \PHPExcel;

class ExportExcel{

	public static function export($entries){
		date_default_timezone_set('GMT+1');
		$objPHPExcel = new \PHPExcel();
		//Tamaño Columnas
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('A')
		    ->setWidth(3);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('B')
		    ->setWidth(16);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('C')
		    ->setWidth(20);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('D')
		    ->setWidth(16);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('E')
		    ->setWidth(16);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('F')
		    ->setWidth(16);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('G')
		    ->setWidth(22);		
		$objPHPExcel->getActiveSheet(0)   
		    ->getColumnDimension('H')
		    ->setWidth(16);		
		$objPHPExcel->getActiveSheet(0)
		    ->getColumnDimension('I')
		    ->setWidth(22);

		//Tamaño filas    
		$objPHPExcel->getActiveSheet(0)
    ->getRowDimension('1')
    ->setRowHeight(20);    

		$objPHPExcel->setActiveSheetIndex(0)
		            //->setCellValue('A1', '#')
		            ->setCellValue('B1', 'Nombre')
		            ->setCellValue('C1', 'Apellidos')
		            ->setCellValue('D1', 'Ciudad')
		            ->setCellValue('E1', 'Centro')
		            ->setCellValue('F1', 'Cargo')
		            ->setCellValue('G1', 'Email')
		            ->setCellValue('H1', 'Telefono')
		            ->setCellValue('I1', 'Telefono secundario');
		$line =  2;            
		foreach($entries as $row){
						$objPHPExcel->getActiveSheet(0)
				    ->getRowDimension($line)
				    ->setRowHeight(20);  			
						$objPHPExcel->setActiveSheetIndex(0)
				            //->setCellValue('A'.$line, $row->asistenteID)
				            ->setCellValue('B'.$line, $row->asistenteName)
				            ->setCellValue('C'.$line, $row->asistentePrimerApellido." ".$row->asistenteSegundoApellido)
				            ->setCellValue('D'.$line, $row->asistenteCiudad)
				            ->setCellValue('E'.$line, $row->asistenteCentro)
				            ->setCellValue('F'.$line, $row->asistenteCargo)
				            ->setCellValue('G'.$line, $row->asistenteEmail)
				            ->setCellValue('H'.$line, $row->asistenteTelefono)
				            ->setCellValue('I'.$line, $row->asistenteTelefonoSecundario);
				            $line++;
		}
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
	    // Redirect output to a client’s web browser (Excel5) 
	    ob_end_clean(); 
	    $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
	    header('Content-Type: application/vnd.ms-excel'); 
	    header('Content-Disposition: attachment;filename="bdSeminario'.date("d-m_H.i").'.xls"'); 
	    header('Cache-Control: max-age=0'); 
	    $objWriter->save('php://output');  
	    exit;  
	}
	
}

?>