<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
require_once  dirname(__FILE__).'/../../../vendor/spipu/html2pdf/src/Html2Pdf.php';
require_once  dirname(__FILE__).'/../../../vendor/spipu/html2pdf/src/Exception/Html2PdfException.php';
require_once  dirname(__FILE__).'/../../../vendor/spipu/html2pdf/src/Exception/ExceptionFormatter.php';
require_once dirname(__FILE__).'/../../../public/pages/fija/Carta.php';
ob_start();
ob_get_clean();
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Pages\Fija\Carta;
class Html2PdfController extends Controller
{
    //
    protected $html;
    
    public function __construct(){
        //$this->html=;
    }
    
    public function index(){
        try {                        
                
               /* $html = view('cartas.pdf.index')->render();
                $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(15, 5, 15, 5));
                $html2pdf->pdf->SetDisplayMode('fullpage');
                $html2pdf->writeHTML($html);
                $html2pdf->output();*/
                return view('cartas.pdf.index');
                
            } catch (Html2PdfException $e) {
                $html2pdf->clean();
            
                $formatter = new ExceptionFormatter($e);
                return $formatter->getHtmlMessage();
            }

    }
    
    
}
