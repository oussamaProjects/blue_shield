<?php

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
include 'pdf.fpdf.blade.php';

$pdf = '';
$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 0);
$pdf->SetFont('arial', 'B', 10);

$pdf->Cell(40, 40, $pdf->Image('onestopfactory.png', 6, 3, -320), 0, 'C', true);
$pdf->Cell(189, 38, '', 0, 1);

// $pdf->Cell(130 ,5, 'GENIWORKS.COM',0,0);
// $pdf->Cell(59 ,5,'Supply Request Form',0,1);
if ('$rapport->id' == 'MT') {
    $pdf->setFillColor(184, 204, 228);
    $pdf->Cell(160, 12, "PROCES VERBAL D'EXAMEN PAR MAGNETOSCOPIE ", 1, 0, 'C', 1);
} elseif ('$rapport->id' == 'VT') {
    $pdf->setFillColor(184, 204, 228);
    $pdf->Cell(160, 12, "PROCES VERBAL D'EXAMEN VISUEL", 1, 0, 'C', 1);
} else {
    $pdf->setFillColor(184, 204, 228);
    $pdf->Cell(160, 12, "PROCES VERBAL D'EXAMEN PAR ULTRASONS", 1, 0, 'C', 1);
}
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(30, 12, '10/09/2019', 1, 0, 'C');
$pdf->SetX($pdf->GetX() - 115);
$pdf->SetFont('arial', '', 9);

if ('$rapport->id' == 'MT') {
    $pdf->Cell(10, 20, 'MAGNETIC PARTICLE EXAMINATION TEST REPORT ', 0, 0, 'C', 0);
} elseif ('$rapport->id' == 'VT') {
    $pdf->Cell(10, 20, 'VISUAL EXAMINATION TEST REPORT ', 0, 0, 'C', 0);
} else {
    $pdf->Cell(10, 20, 'ULTRASONIC EXAMINATION TEST REPORT ', 0, 0, 'C', 0);
}

$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(189, 12, '', 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Client / Customer', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, 'EUROGATE SA', 1, 0, 1);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Rapport N# / Report N#', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, 'CND R' . '$rapport->id' . '-EGT-' . '$rapport->id' . '-00' . '$rapport->id' . ' ', 1, 1, 1);

$pdf->Cell(189, 0, '', 0, 1);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Affaire / Project', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, iconv('UTF-8', 'ISO-8859-2', 'CND DE 4 STS ET 10 RTG - Accés facile'), 1, 0, 1);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Commande / Order', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, '3620190629', 1, 1, 1);

$pdf->Cell(189, 0, '', 0, 1);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Sujet / Subject', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, '$rapport->id' . '' . '$rapport->id', 1, 0, 1);
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(35, 5, 'Plan / Dwg', 1, 0, 1);
$pdf->SetFont('arial', '', 8);
$pdf->Cell(60, 5, '', 1, 1, 1);

$pdf->Cell(189, 0, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->setFillColor(184, 204, 228);
$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-2', 'Matériel Examiné / Inspected Material'), 1, 0, 'C', 1);

$pdf->Cell(189, 5, '', 0, 1);

if ('$rapport->id' == 'QC') {
    if ('$rapport->id' == '01') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-1.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-2.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '03') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-3.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '04') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-4.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '05') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-5.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '06') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-6.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '07') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-7.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '08') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-8.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '09') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-9.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '010') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-10.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'L');
    } elseif ('$rapport->id' == '011') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-11.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '012') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-12.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '013') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-13.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '014') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-14.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '014') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-14.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '015') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-15.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '016') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-16.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '017') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-17.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '018') {
        // $image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-18.png";
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } else {
        $pdf->SetTextColor(255, 0, 0);
        $pdf->Cell(190, 36, 'No Area Selected!', 1, 0, 'C');
        $pdf->SetTextColor(0, 0, 0);
    }
}

if ('$rapport->id' == 'RTG') {
    if ('$rapport->id' == '01' || '$rapport->id' == 'trolley') {
        // $image1 = '../controls/img/sub/rtg/trolley.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-1' || '$rapport->id' == 'GIRDER') {
        // $image1 = '../controls/img/sub/rtg/girder.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-2' || '$rapport->id' == 'GIRDER : Welds on the side plates') {
        // $image1 = '../controls/img/sub/rtg/Welds-on-the-side-plates.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-3' || '$rapport->id' == 'GIRDER :Welds of the rail and rail and Top') {
        // $image1 = '../controls/img/sub/rtg/Girder-Welds-of-the-rail-and-rail-and-Top-Plate.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-4' || '$rapport->id' == 'GIRDER :Assembling welds on the frame') {
        // $image1 = '../controls/img/sub/rtg/Girder-Assembling-welds-on-the-frame.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-5' || '$rapport->id' == 'COLUMN') {
        // $image1 = '../controls/img/sub/rtg/columns.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-6' || '$rapport->id' == 'COLUMN: End Beams') {
        // $image1 = '../controls/img/sub/rtg/columns-end-beam.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '02-7' || '$rapport->id' == 'Sill Beam') {
        // $image1 = '../controls/img/sub/rtg/Sill-Beam.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '08' || '$rapport->id' == 'Sill Beam: Welding of wheel forks') {
        // $image1 = '../controls/img/sub/rtg/Sill-Beam-Welding-of-wheel-forks.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '01-2' || '$rapport->id' == 'Drum') {
        // $image1 = '../controls/img/sub/rtg/drums.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'L');
    } elseif ('$rapport->id' == '01-3' || '$rapport->id' == 'Drum :Shaft and Flange') {
        // $image1 = '../controls/img/sub/rtg/Drum-Shaft-and-Flange.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } elseif ('$rapport->id' == '04' || '$rapport->id' == 'Rope adjustment screws') {
        // $image1 = '../controls/img/sub/rtg/Rope-adjustment-screws.png';
        $pdf->Cell(190, 36, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169), 1, 0, 'C');
    } else {
        $pdf->SetTextColor(255, 0, 0);
        $pdf->Cell(190, 36, 'No Area Selected!', 1, 0, 'C');
        $pdf->SetTextColor(0, 0, 0);
    }
}

$pdf->SetFont('Arial', '', 12);

// $pdf->Cell(130 ,5,'[Street Adress]',0,0);
// $pdf->Cell(59 ,5,'',0,1);

// $pdf->Cell(130 ,5,'[TANGIER, MOROCCO, 90000]',0,0);
// $pdf->Cell(25 ,5,'Date',0,0);
// $pdf->Cell(34 ,5,'[17/06/2019]',0,1);

// $pdf->Cell(130 ,5,'Phone [+1234567890]',0,0);
// $pdf->Cell(25 ,5,'SRF #',0,0);
// $pdf->Cell(34 ,5,'[1234567]',0,1);

// $pdf->Cell(130,5,'FAX [+1234567]',0,0);
// $pdf->Cell(25,5,'Customer ID',0,0);
// $pdf->Cell(34,5,'[123456789]',0,1);

$pdf->Cell(189, 36, '', 0, 1);

$pdf->setFillColor(184, 204, 228);

$pdf->setFillColor(184, 204, 228);

$pdf->SetFont('Arial', 'B', 10);

$pdf->Cell(189, 0, '', 0, 1);

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(35, 5, iconv('UTF-8', 'ISO-8859-2', 'Matériel / Material'), 1, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, '$rapport->id', 1, 0);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(75, 5, iconv('UTF-8', 'ISO-8859-2', 'Etat de surface / Surface Condition'), 1, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(53, 5, '$rapport->id', 1, 1);

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(35, 5, 'Stage', 1, 0);
$pdf->Cell(27, 5, '', 1, 0);
$pdf->Cell(75, 5, iconv('UTF-8', 'ISO-8859-2', 'Température de la piece / Part Temperature'), 1, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(53, 5, '$rapport->id', 1, 1);

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Zone controlée / Examinated Area'), 1, 0);
$pdf->SetFont('Arial', 'B', 10);

$ressub = $selsub->get_result();

if ('$rapport->id' == 'QC') {
    if ('$rapport->id' == '01') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-1)', 1, 1);
    }
    if ('$rapport->id' == '02') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-2)', 1, 1);
    }
    if ('$rapport->id' == '03') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-3)', 1, 1);
    }
    if ('$rapport->id' == '04') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-4)', 1, 1);
    }
    if ('$rapport->id' == '05') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-5)', 1, 1);
    }
    if ('$rapport->id' == '06') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-6)', 1, 1);
    }
    if ('$rapport->id' == '07') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-7)', 1, 1);
    }
    if ('$rapport->id' == '08') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-8)', 1, 1);
    }
    if ('$rapport->id' == '09') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-9)', 1, 1);
    }
    if ('$rapport->id' == '10') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-10)', 1, 1);
    }
    if ('$rapport->id' == '011') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-11)', 1, 1);
    }
    if ('$rapport->id' == '012') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-12)', 1, 1);
    }
    if ('$rapport->id' == '013') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-13)', 1, 1);
    }
    if ('$rapport->id' == '014') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-14)', 1, 1);
    }
    if ('$rapport->id' == '015') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-15)', 1, 1);
    }
    if ('$rapport->id' == '016') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-16)', 1, 1);
    }
    if ('$rapport->id' == '017') {
        $pdf->Cell(128, 5, '' . '$showsub' . '(0-17)', 1, 1);
    }
    if ('$rapport->id' == '018') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (0-18)', 1, 1);
    }

    if ('$rapport->id' == '02-1') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-1)', 1, 1);
    }
} elseif ('$rapport->id' == 'RTG') {
    if ('$rapport->id' == '01' || '$rapport->id' == 'trolley') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (01)', 1, 1);
    } elseif ('$rapport->id' == '02-1' || '$rapport->id' == 'GIRDER') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-1)', 1, 1);
    } elseif ('$rapport->id' == '02-2' || '$rapport->id' == 'GIRDER : Welds on the side plates') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-2)', 1, 1);
    } elseif ('$rapport->id' == '02-3' || '$rapport->id' == 'GIRDER :Welds of the rail and rail and Top') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-3)', 1, 1);
    } elseif ('$rapport->id' == '02-4' || '$rapport->id' == 'GIRDER :Assembling welds on the frame') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-4)', 1, 1);
    } elseif ('$rapport->id' == '02-5' || '$rapport->id' == 'COLUMN') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-5)', 1, 1);
    } elseif ('$rapport->id' == '02-6' || '$rapport->id' == 'COLUMN: End Beams') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-6)', 1, 1);
    } elseif ('$rapport->id' == '02-7' || '$rapport->id' == 'Sill Beam') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (02-7)', 1, 1);
    } elseif ('$rapport->id' == '08' || '$rapport->id' == 'Sill Beam: Welding of wheel forks') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (08)', 1, 1);
    } elseif ('$rapport->id' == '01-2' || '$rapport->id' == 'Drum') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (01-2)', 1, 1);
    } elseif ('$rapport->id' == '01-3' || '$rapport->id' == 'Drum :Shaft and Flange') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (01-3)', 1, 1);
    } elseif (('$rapport->id' == '04' || '$rapport->id' == 'Rope adjustment screws') && '$rapport->id' == 'RTG') {
        $pdf->Cell(128, 5, '' . '$showsub' . ' (04)', 1, 1);
    }
}

$pdf->SetFont('Arial', 'B', 9);

$pdf->Cell(189, 0, '', 0, 1);

$pdf->setFillColor(184, 204, 228);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Procédure / Process'), 1, 0, 'c', 1);
$pdf->Cell(66, 5, iconv('UTF-8', 'ISO-8859-2', 'Specification utilisé / Used Specification'), 1, 0, 'c', 1);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Criteres D\'acceptation / Acceptance'), 1, 1, 'c', 1);

$pdf->Cell(62, 10, '$rapport->id', 1, 0, 'C');
$pdf->Cell(66, 10, '$rapport->id', 1, 0, 'C');
$pdf->Cell(62, 10, '$rapport->id', 1, 1, 'c');

$pdf->Cell(189, 0, '', 0, 1);

$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-2', 'Apareillage / Equipment Used'), 1, 0, 'C', 1);

$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Apareil UT marque / UT unit Maker : '), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(33, 5, '$rapport->id', 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(63, 5, 'Type / Type', 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(32, 5, '$rapport->id', 'R', 1);

$pdf->SetFont('Arial', '', 9);

$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Date vérification /Checking Date : '), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(33, 5, '- - - - / - - / - -', 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(63, 5, 'Identification / ID', 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(32, 5, ' A00218092307', 'R', 1);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Bloc de réference / Reference Block : '), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(33, 5, 'V1', 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(63, 5, 'Valable jusqu\'au / Valid Until', 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(32, 5, ' - - - - / - - / - -', 'R', 1);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Bloc d\'étalonnage /Calibration Block: '), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(33, 5, 'V1', 0, 0);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(63, 5, 'Couplant / Couplant : ', 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(32, 5, ' cole a froid', 'R', 1);

$pdf->Cell(189, 0, '', 0, 1);

$pdf->Cell(190, 5, 'Etalonnage / Calibration', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(24, 5, iconv('UTF-8', 'ISO-8859-2', 'Traducteur'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Numéro'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Marque '), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Onde'), 1, 0, 'c');

$pdf->Cell(27, 5, iconv('UTF-8', 'ISO-8859-2', 'Angle théorique'), 1, 0, 'c');
$pdf->Cell(18, 5, iconv('UTF-8', 'ISO-8859-2', 'Angle réel'), 1, 0, 'c');
$pdf->Cell(22, 5, iconv('UTF-8', 'ISO-8859-2', 'Fréquence'), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', 'Dim. piezo'), 1, 1, 'c');

$pdf->Cell(24, 5, '0', 1, 0, 'c');
$pdf->Cell(23, 5, '1809030', 1, 0, 'c');
$pdf->Cell(23, 5, '', 1, 0, 'c');
$pdf->Cell(23, 5, 'OL', 1, 0, 'c');

$pdf->Cell(27, 5, '0', 1, 0, 'c');
$pdf->Cell(18, 5, '0', 1, 0, 'c');
$pdf->Cell(22, 5, '2,5 Mhz', 1, 0, 'c');
$pdf->Cell(30, 5, '20mm', 1, 1, 'c');

$pdf->Cell(24, 5, '', 1, 0, 'c');
$pdf->Cell(23, 5, '1807106', 1, 0, 'c');
$pdf->Cell(23, 5, '', 1, 0, 'c');
$pdf->Cell(23, 5, 'OT', 1, 0, 'c');

$pdf->Cell(27, 5, '60', 1, 0, 'c');
$pdf->Cell(18, 5, '60', 1, 0, 'c');
$pdf->Cell(22, 5, '4 Mhz', 1, 0, 'c');
$pdf->Cell(30, 5, '8x9', 1, 1, 'c');

$pdf->Cell(24, 5, '70', 1, 0, 'c');
$pdf->Cell(23, 5, '1801353', 1, 0, 'c');
$pdf->Cell(23, 5, '', 1, 0, 'c');
$pdf->Cell(23, 5, 'OT', 1, 0, 'c');

$pdf->Cell(27, 5, '70', 1, 0, 'c');
$pdf->Cell(18, 5, '71', 1, 0, 'c');
$pdf->Cell(22, 5, '4 Mhz', 1, 0, 'c');
$pdf->Cell(30, 5, '8x9', 1, 1, 'c');

$pdf->Cell(189, 0, '', 0, 1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(190, 5, 'Traducteurs / Probes', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(24, 5, iconv('UTF-8', 'ISO-8859-2', 'Bloc utilisé'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Prof. Trou'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Vitesse M/s'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', 'Echelle'), 1, 0, 'c');

$pdf->Cell(19, 5, iconv('UTF-8', 'ISO-8859-2', 'Ecran%'), 1, 0, 'c');
$pdf->Cell(18, 5, iconv('UTF-8', 'ISO-8859-2', 'Amplitude'), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', 'Trnsfrt d\'attenuation'), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', 'Seuil de Notation'), 1, 1, 'c');

$pdf->Cell(24, 5, iconv('UTF-8', 'ISO-8859-2', 'V1'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', '1mm'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', '3250'), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', '50'), 1, 0, 'c');

$pdf->Cell(19, 5, iconv('UTF-8', 'ISO-8859-2', '80'), 1, 0, 'c');
$pdf->Cell(18, 5, iconv('UTF-8', 'ISO-8859-2', '85'), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', '+6db'), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', '40%'), 1, 1, 'c');

$pdf->Cell(24, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(23, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');

$pdf->Cell(19, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(18, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 0, 'c');
$pdf->Cell(30, 5, iconv('UTF-8', 'ISO-8859-2', ''), 1, 1, 'c');

$pdf->Cell(189, 0, '', 0, 1);
$pdf->SetFont('Arial', 'B', 9);

$pdf->Cell(190, 5, iconv('UTF-8', 'ISO-8859-2', 'Résultats / Results'), 1, 0, 'C', 1);

$pdf->Cell(189, 5, '', 0, 1);

//$pdf->Cell(190 ,22,'$rapport->id' ,1,'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(31, 5, iconv('UTF-8', 'ISO-8859-2', 'Repére / Mark'), 1, 0, 'c');
$pdf->Cell(31, 5, iconv('UTF-8', 'ISO-8859-2', 'Verdict / Verdict'), 1, 0, 'c');
$pdf->Cell(33, 5, iconv('UTF-8', 'ISO-8859-2', 'Observations'), 1, 0, 'c');

$pdf->Cell(33, 5, iconv('UTF-8', 'ISO-8859-2', 'Repére / Mark'), 1, 0, 'c');
$pdf->Cell(33, 5, iconv('UTF-8', 'ISO-8859-2', 'Verdict / Verdict'), 1, 0, 'c');
$pdf->Cell(29, 5, iconv('UTF-8', 'ISO-8859-2', 'Observations'), 1, 1, 'c');

if ('$rapport->id' != '') {
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(31, 5, '-', 1, 0, 'C');

    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(29, 5, '$rapport->id', 1, 1, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(33, 5, '-', 1, 0, 'C');

    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->Cell(29, 5, '-', 1, 1, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(31, 5, '-', 1, 0, 'C');

    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(29, 5, '$rapport->id', 1, 1, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(33, 5, '-', 1, 0, 'C');

    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->Cell(29, 5, '-', 1, 1, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(29, 5, '$rapport->id', 1, 1, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->Cell(29, 5, '-', 1, 1, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(31, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(31, 5, '-', 1, 0, 'C');
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
}

if ('$rapport->id' != '') {
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(33, 5, '$rapport->id', 1, 0, 'C');
    $pdf->Cell(29, 5, '$rapport->id', 1, 1, 'C');
} elseif ('$rapport->id' == '') {
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(33, 5, '-', 1, 0, 'C');
    $pdf->Cell(29, 5, '-', 1, 1, 'C');
}

$pdf->setFillColor(184, 204, 228);
$pdf->Cell(62, 5, 'Controleur(s) / Technician(s)', 1, 0, 'C', 1);
$pdf->Cell(66, 5, iconv('UTF-8', 'ISO-8859-2', 'Vérificateur / Verificator'), 1, 0, 'C', 1);
$pdf->Cell(62, 5, 'Client / Customer', 1, 1, 'C', 1);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(42, 5, iconv('UTF-8', 'ISO-8859-2', 'Date du contrôle / Test date:'), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 5, date('m/d/y', strtotime($rapport->id)), 0, 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(49, 5, iconv('UTF-8', 'ISO-8859-2', 'Date vérification / Verifying date:'), 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(17, 5, ' / / ', 'R', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(42, 5, 'Date /Date:', 'L', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 5, ' / / ', 'R', 1);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, iconv('UTF-8', 'ISO-8859-2', 'Nom / Name:Ali ELMARHAT'), 'L', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(66, 5, iconv('UTF-8', 'ISO-8859-2', 'Nom / Name: Ali ELMARHAT'), 'L', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, 'Nom / Name: EUROGATE', 'L', 0);
$pdf->Cell(0, 5, '', 'R', 1);

$pdf->SetFont('Arial', '', 9);

$pdf->Cell(31, 5, 'UT Niveau : ', 'L', 0);
$pdf->Cell(31, 5, 'MT Niveau : ', 'R', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(31, 5, 'UT Niveau :', 'L', 0);
$pdf->Cell(35, 5, 'MT Niveau :', 'R', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 5, '', 0, 0);
$pdf->Cell(0, 5, '', 'R', 1);

$pdf->Cell(62, 10, 'Visa :', 'L', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(66, 10, 'Visa :', 'L', 0);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(62, 10, 'Visa :', 'L', 0);
$pdf->Cell(0, 10, '', 'R', 1);

$pdf->Cell(62, 0, '', 1, 0);
$pdf->Cell(66, 0, '', 1, 0);
$pdf->Cell(62, 0, '', 1, 1);

$pdf->Cell(189, 4, '', 0, 1);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-2', 'Ce document est la propriété exclusive de Geniworks Industry.'), 0, 1, 'C', 0);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-2', 'Il ne peut etre communiqué ou dévulgué a des tiers sans son autorisation écrite préalable.'), 0, 1, 'C', 0);

$pdf->Output();
