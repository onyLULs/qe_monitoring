
<div class="container">
  <div class="row">
  	<?php
  	  /*FFTH*/
  	  $sumBpoBrBsFtth = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsFtth = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsFtth = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsFtth = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsFtth = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsFtth = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSFtth = 0; // ada po, po, selesai
  	  $sumApoBastAsFtth = 0; // ada po, bast, selesai
  	  $sumDropFtth = 0; //drop

  	  /*HEM*/
  	  $sumBpoBrBsHem = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsHem = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsHem = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsHem = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsHem = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsHem = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSHem = 0; // ada po, po, selesai
  	  $sumApoBastAsHem = 0; // ada po, bast, selesai
  	  $sumDropHem = 0; //drop

  	  /*LME NODE B*/
  	  $sumBpoBrBsLmeNB = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsLmeNB = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsLmeNB = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsLmeNB = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsLmeNB = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsLmeNB = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSLmeNB = 0; // ada po, po, selesai
  	  $sumApoBastAsLmeNB = 0; // ada po, bast, selesai
  	  $sumDropLmeNB = 0; //drop

  	  /*LME WIFI*/
  	  $sumBpoBrBsLmeWF = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsLmeWF = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsLmeWF = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsLmeWF = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsLmeWF = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsLmeWF = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSLmeWF = 0; // ada po, po, selesai
  	  $sumApoBastAsLmeWF = 0; // ada po, bast, selesai
  	  $sumDropLmeWF = 0; //drop

  	  /*MG*/
  	  $sumBpoBrBsMG = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMG = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMG = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMG = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMG = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMG = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMG = 0; // ada po, po, selesai
  	  $sumApoBastAsMG = 0; // ada po, bast, selesai
  	  $sumDropMG = 0; //drop

  	  /*MG CCAN*/
  	  $sumBpoBrBsMGCan = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMGCan = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMGCan = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMGCan = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMGCan = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMGCan = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMGCan = 0; // ada po, po, selesai
  	  $sumApoBastAsMGCan = 0; // ada po, bast, selesai
  	  $sumDropMGCan = 0; //drop

  	  /*MG CONS*/
  	  $sumBpoBrBsMGCons = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMGCons = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMGCons = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMGCons = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMGCons = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMGCons = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMGCons = 0; // ada po, po, selesai
  	  $sumApoBastAsMGCons = 0; // ada po, bast, selesai
  	  $sumDropMGCons = 0; //drop

  	  /*MG DATIN*/
  	  $sumBpoBrBsMGDatin = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMGDatin = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMGDatin = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMGDatin = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMGDatin = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMGDatin = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMGDatin = 0; // ada po, po, selesai
  	  $sumApoBastAsMGDatin = 0; // ada po, bast, selesai
  	  $sumDropMGDatin = 0; //drop

  	  /*MG Node B*/
  	  $sumBpoBrBsMGNb = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMGNb = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMGNb = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMGNb = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMGNb = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMGNb = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMGNb = 0; // ada po, po, selesai
  	  $sumApoBastAsMGNb = 0; // ada po, bast, selesai
  	  $sumDropMGNb = 0; //drop

  	  /*MATERIAL PSB*/
  	  $sumBpoBrBsMpsb = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMpsb = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMpsb = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMpsb = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMpsb = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMpsb = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMpsb = 0; // ada po, po, selesai
  	  $sumApoBastAsMpsb = 0; // ada po, bast, selesai
  	  $sumDropMpsb = 0; //drop

  	  /*MATERIAL REMO*/
  	  $sumBpoBrBsMremo = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsMremo = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsMremo = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsMremo = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsMremo = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsMremo = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSMremo = 0; // ada po, po, selesai
  	  $sumApoBastAsMremo = 0; // ada po, bast, selesai
  	  $sumDropMremo = 0; //drop

  	  /*PT2*/
  	  $sumBpoBrBsPt2 = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsPt2 = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsPt2 = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsPt2 = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsPt2 = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsPt2 = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSPt2 = 0; // ada po, po, selesai
  	  $sumApoBastAsPt2 = 0; // ada po, bast, selesai
  	  $sumDropPt2 = 0; //drop

  	  /*QE AKSES*/
  	  $sumBpoBrBsQea = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsQea = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsQea = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsQea = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsQea = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsQea = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSQea = 0; // ada po, po, selesai
  	  $sumApoBastAsQea = 0; // ada po, bast, selesai
  	  $sumDropQea = 0; //drop

  	  /*QE RECOBERY*/
  	  $sumBpoBrBsQer = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsQer = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsQer = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsQer = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsQer = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsQer = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSQer = 0; // ada po, po, selesai
  	  $sumApoBastAsQer = 0; // ada po, bast, selesai
  	  $sumDropQer = 0; //drop

  	  /*QE UTILITAS*/
  	  $sumBpoBrBsQeu = 0; // blm po, blm rekon, blm selesai
  	  $sumApoApoBsQeu = 0; // ada po, po, blm selesai
  	  $sumBpoBrAsQeu = 0; // blm po blm rekon, selesai
  	  $sumBpoArAsQeu = 0; // blm po, sdh rekon, selesai
  	  $sumBpoAcbAsQeu = 0; // blm po, capex board, selesai
  	  $sumBpoApeAsQeu = 0; // blm po, pelimpahan, selesai
  	  $sumApoApoSQeu = 0; // ada po, po, selesai
  	  $sumApoBastAsQeu = 0; // ada po, bast, selesai
  	  $sumDropQeu = 0; //drop

	  $sumMJ = 0;
	  
	  /*ACEH*/
	  foreach($show as $s){
	  	if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSFtth += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsFtth += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropFtth += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSHem += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsHem += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "HEM" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropHem += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsLmeNB += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropLmeNB += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsLmeWF += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropLmeWF += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMG += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMG += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMG += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGCan += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGCan += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGCons += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGCons += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGDatin += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGDatin += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGNb += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGNb += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMpsb += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMpsb += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMremo += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMremo += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMremo += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsPt2 += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropPt2 += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQea += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQea += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQea += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQer += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQer += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQer += $sumMJ;
	  	}

	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQeu += $sumMJ;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQeu += $s->nilai_bast;
	  	}
	  	else if($s->witel == "ACEH" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQeu += $sumMJ;
	  	}


	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSFtth += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsFtth += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "FTTH" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropFtth += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSHem += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsHem += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "HEM" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropHem += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSLmeNB += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsLmeNB += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME NODE B" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropLmeNB += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSLmeWF += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsLmeWF += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "LME WIFI" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropLmeWF += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMG += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMG += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMG += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGCan += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGCan += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CCAN/WIFI-ID" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGCan += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGCons += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGCons += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN CONSUMER" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGCons += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGDatin += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGDatin += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN DATIN" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGDatin += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMGNb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMGNb += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL GANGGUAN NODE B" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMGNb += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMpsb += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMpsb += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL PSB" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMpsb += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSMremo += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsMremo += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "MATERIAL REMO" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropMremo += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSPt2 += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsPt2 += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "PT-2" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropPt2 += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQea += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQea += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE AKSES" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQea += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQer += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQer += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE RECOVERY" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQer += $sumMJ;
	  	}

	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrBsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "BELUM SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoBsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "BELUM REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoBrAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "REKON" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoArAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "CAPEX BOARD" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoAcbAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "BELUM PO" and $s->status_berkas == "PELIMPAHAN" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumBpoApeAsQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "PO" and $s->status_pekerjaan == "SELESAI"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumApoApoSQeu += $sumMJ;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "ADA PO" and $s->status_berkas == "ST" and $s->status_pekerjaan == "SELESAI"){
	  	  //$sumMJ = $s->material + $s->jasa;
	  	  $sumApoBastAsQeu += $s->nilai_bast;
	  	}
	  	else if($s->witel == "BABEL" and $s->paket_pekerjaan == "QE UTILITAS" and $s->status_po == "DROP" and $s->status_berkas == "DROP" and $s->status_pekerjaan == "DROP"){
	  	  $sumMJ = $s->material + $s->jasa;
	  	  $sumDropQeu += $sumMJ;
	  	}



	  }
	?>
  	<div class="table-responsive">
  	  <table class="table table-bordered">
      	<thead valign="middle" align="center">
      	  <tr>
      	  	<th rowspan="2">WITEL</th>
      	  	<th rowspan="2">PAKET PEKERJAAN</th>
      	  	<th colspan="2">BELUM SELESAI</th>
      	  	<th colspan="6">SELESAI</th>
      	  	<th rowspan="2">DROP</th>
      	  	<th rowspan="2">TOTAL</th>
      	  </tr>
      	  <tr>
      	  	<th>BELUM REKON</th>
      	  	<th>PO</th>
      	  	<th>BELUM REKON</th>
      	  	<th>REKON</th>
      	  	<th>CAPEX BOARD</th>
      	  	<th>PELIMPAHAN</th>
      	  	<th>PO</th>
      	  	<th>BAST</th>
      	  </tr>
      	</thead>
      	<tbody>
      	  <tr>
      	  	<?php $sumRowFtth = $sumBpoBrBsFtth + $sumApoApoBsFtth + $sumBpoBrAsFtth + $sumBpoArAsFtth + $sumBpoAcbAsFtth + $sumBpoApeAsFtth + $sumApoApoSFtth + $sumApoBastAsFtth + $sumDropFtth; ?>
      	  	<td>ACEH</td>
      	  	<td>FTTH</td>
      	  	<td><?php if(empty($sumBpoBrBsFtth)) { echo ""; } else { echo $sumBpoBrBsFtth; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsFtth)) { echo ""; } else { echo $sumApoApoBsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsFtth)) { echo ""; } else { echo $sumBpoBrAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsFtth)) { echo ""; } else { echo $sumBpoArAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsFtth)) { echo ""; } else { echo $sumBpoAcbAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsFtth)) { echo ""; } else { echo $sumBpoApeAsFtth; } ?></td>
      	  	<td><?php if(empty($sumApoApoSFtth)) { echo ""; } else { echo $sumApoApoSFtth; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsFtth)) { echo ""; } else { echo $sumApoBastAsFtth; } ?></td>
      	  	<td><?php if(empty($sumDropFtth)) { echo ""; } else { echo $sumDropFtth; } ?></td>
      	  	<td><?php if(empty($sumRowFtth)) { echo ""; } else { echo $sumRowFtth; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowHem = $sumBpoBrBsHem + $sumApoApoBsHem + $sumBpoBrAsHem + $sumBpoArAsHem + $sumBpoAcbAsHem + $sumBpoApeAsHem + $sumApoApoSHem + $sumApoBastAsHem + $sumDropHem; ?>
      	  	<td></td>
      	  	<td>HEM</td>
      	  	<td><?php if(empty($sumBpoBrBsHem)) { echo ""; } else { echo $sumBpoBrBsHem; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsHem)) { echo ""; } else { echo $sumApoApoBsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsHem)) { echo ""; } else { echo $sumBpoBrAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsHem)) { echo ""; } else { echo $sumBpoArAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsHem)) { echo ""; } else { echo $sumBpoAcbAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsHem)) { echo ""; } else { echo $sumBpoApeAsHem; } ?></td>
      	  	<td><?php if(empty($sumApoApoSHem)) { echo ""; } else { echo $sumApoApoSHem; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsHem)) { echo ""; } else { echo $sumApoBastAsHem; } ?></td>
      	  	<td><?php if(empty($sumDropHem)) { echo ""; } else { echo $sumDropHem; } ?></td>
      	  	<td><?php if(empty($sumRowHem)) { echo ""; } else { echo $sumRowHem; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowLmeNB = $sumBpoBrBsLmeNB + $sumApoApoBsLmeNB + $sumBpoBrAsLmeNB + $sumBpoArAsLmeNB + $sumBpoAcbAsLmeNB + $sumBpoApeAsLmeNB + $sumApoApoSLmeNB + $sumApoBastAsLmeNB + $sumDropLmeNB; ?>
      	  	<td></td>
      	  	<td>LME NODE B</td>
      	  	<td><?php if(empty($sumBpoBrBsLmeNB)) { echo ""; } else { echo $sumBpoBrBsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsLmeNB)) { echo ""; } else { echo $sumApoApoBsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsLmeNB)) { echo ""; } else { echo $sumBpoBrAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsLmeNB)) { echo ""; } else { echo $sumBpoArAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsLmeNB)) { echo ""; } else { echo $sumBpoAcbAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsLmeNB)) { echo ""; } else { echo $sumBpoApeAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoApoSLmeNB)) { echo ""; } else { echo $sumApoApoSLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsLmeNB)) { echo ""; } else { echo $sumApoBastAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumDropLmeNB)) { echo ""; } else { echo $sumDropLmeNB; } ?></td>
      	  	<td><?php if(empty($sumRowLmeNB)) { echo ""; } else { echo $sumRowLmeNB; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowLmeWF = $sumBpoBrBsLmeWF + $sumApoApoBsLmeWF + $sumBpoBrAsLmeWF + $sumBpoArAsLmeWF + $sumBpoAcbAsLmeWF + $sumBpoApeAsLmeWF + $sumApoApoSLmeWF + $sumApoBastAsLmeWF + $sumDropLmeWF; ?>
      	  	<td></td>
      	  	<td>LME WIFI</td>
      	  	<td><?php if(empty($sumBpoBrBsLmeWF)) { echo ""; } else { echo $sumBpoBrBsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsLmeWF)) { echo ""; } else { echo $sumApoApoBsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsLmeWF)) { echo ""; } else { echo $sumBpoBrAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsLmeWF)) { echo ""; } else { echo $sumBpoArAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsLmeWF)) { echo ""; } else { echo $sumBpoAcbAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsLmeWF)) { echo ""; } else { echo $sumBpoApeAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoApoSLmeWF)) { echo ""; } else { echo $sumApoApoSLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsLmeWF)) { echo ""; } else { echo $sumApoBastAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumDropLmeWF)) { echo ""; } else { echo $sumDropLmeWF; } ?></td>
      	  	<td><?php if(empty($sumRowLmeWF)) { echo ""; } else { echo $sumRowLmeWF; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMG = $sumBpoBrBsMG + $sumApoApoBsMG + $sumBpoBrAsMG + $sumBpoArAsMG + $sumBpoAcbAsMG + $sumBpoApeAsMG + $sumApoApoSMG + $sumApoBastAsMG + $sumDropMG; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN</td>
      	  	<td><?php if(empty($sumBpoBrBsMG)) { echo ""; } else { echo $sumBpoBrBsMG; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMG)) { echo ""; } else { echo $sumApoApoBsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMG)) { echo ""; } else { echo $sumBpoBrAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMG)) { echo ""; } else { echo $sumBpoArAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMG)) { echo ""; } else { echo $sumBpoAcbAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMG)) { echo ""; } else { echo $sumBpoApeAsMG; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMG)) { echo ""; } else { echo $sumApoApoSMG; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMG)) { echo ""; } else { echo $sumApoBastAsMG; } ?></td>
      	  	<td><?php if(empty($sumDropMG)) { echo ""; } else { echo $sumDropMG; } ?></td>
      	  	<td><?php if(empty($sumRowMG)) { echo ""; } else { echo $sumRowMG; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGCan = $sumBpoBrBsMGCan + $sumApoApoBsMGCan + $sumBpoBrAsMGCan + $sumBpoArAsMGCan + $sumBpoAcbAsMGCan + $sumBpoApeAsMGCan + $sumApoApoSMGCan + $sumApoBastAsMGCan + $sumDropMGCan; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN CCAN/WIFI-ID</td>
      	  	<td><?php if(empty($sumBpoBrBsMGCan)) { echo ""; } else { echo $sumBpoBrBsMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGCan)) { echo ""; } else { echo $sumApoApoBsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGCan)) { echo ""; } else { echo $sumBpoBrAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGCan)) { echo ""; } else { echo $sumBpoArAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGCan)) { echo ""; } else { echo $sumBpoAcbAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGCan)) { echo ""; } else { echo $sumBpoApeAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGCan)) { echo ""; } else { echo $sumApoApoSMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGCan)) { echo ""; } else { echo $sumApoBastAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumDropMGCan)) { echo ""; } else { echo $sumDropMGCan; } ?></td>
      	  	<td><?php if(empty($sumRowMGCan)) { echo ""; } else { echo $sumRowMGCan; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGCons = $sumBpoBrBsMGCons + $sumApoApoBsMGCons + $sumBpoBrAsMGCons + $sumBpoArAsMGCons + $sumBpoAcbAsMGCons + $sumBpoApeAsMGCons + $sumApoApoSMGCons + $sumApoBastAsMGCons + $sumDropMGCons; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN CONSUMER</td>
      	  	<td><?php if(empty($sumBpoBrBsMGCons)) { echo ""; } else { echo $sumBpoBrBsMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGCons)) { echo ""; } else { echo $sumApoApoBsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGCons)) { echo ""; } else { echo $sumBpoBrAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGCons)) { echo ""; } else { echo $sumBpoArAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGCons)) { echo ""; } else { echo $sumBpoAcbAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGCons)) { echo ""; } else { echo $sumBpoApeAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGCons)) { echo ""; } else { echo $sumApoApoSMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGCons)) { echo ""; } else { echo $sumApoBastAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumDropMGCons)) { echo ""; } else { echo $sumDropMGCons; } ?></td>
      	  	<td><?php if(empty($sumRowMGCons)) { echo ""; } else { echo $sumRowMGCons; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGDatin = $sumBpoBrBsMGDatin + $sumApoApoBsMGDatin + $sumBpoBrAsMGDatin + $sumBpoArAsMGDatin + $sumBpoAcbAsMGDatin + $sumBpoApeAsMGDatin + $sumApoApoSMGDatin + $sumApoBastAsMGDatin + $sumDropMGDatin; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN DATIN</td>
      	  	<td><?php if(empty($sumBpoBrBsMGDatin)) { echo ""; } else { echo $sumBpoBrBsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGDatin)) { echo ""; } else { echo $sumApoApoBsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGDatin)) { echo ""; } else { echo $sumBpoBrAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGDatin)) { echo ""; } else { echo $sumBpoArAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGDatin)) { echo ""; } else { echo $sumBpoAcbAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGDatin)) { echo ""; } else { echo $sumBpoApeAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGDatin)) { echo ""; } else { echo $sumApoApoSMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGDatin)) { echo ""; } else { echo $sumApoBastAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumDropMGDatin)) { echo ""; } else { echo $sumDropMGDatin; } ?></td>
      	  	<td><?php if(empty($sumRowMGDatin)) { echo ""; } else { echo $sumRowMGDatin; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGNb = $sumBpoBrBsMGNb + $sumApoApoBsMGNb + $sumBpoBrAsMGNb + $sumBpoArAsMGNb + $sumBpoAcbAsMGNb + $sumBpoApeAsMGNb + $sumApoApoSMGNb + $sumApoBastAsMGNb + $sumDropMGNb; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN NODE B</td>
      	  	<td><?php if(empty($sumBpoBrBsMGNb)) { echo ""; } else { echo $sumBpoBrBsMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGNb)) { echo ""; } else { echo $sumApoApoBsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGNb)) { echo ""; } else { echo $sumBpoBrAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGNb)) { echo ""; } else { echo $sumBpoArAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGNb)) { echo ""; } else { echo $sumBpoAcbAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGNb)) { echo ""; } else { echo $sumBpoApeAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGNb)) { echo ""; } else { echo $sumApoApoSMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGNb)) { echo ""; } else { echo $sumApoBastAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumDropMGNb)) { echo ""; } else { echo $sumDropMGNb; } ?></td>
      	  	<td><?php if(empty($sumRowMGNb)) { echo ""; } else { echo $sumRowMGNb; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMpsb = $sumBpoBrBsMpsb + $sumApoApoBsMpsb + $sumBpoBrAsMpsb + $sumBpoArAsMpsb + $sumBpoAcbAsMpsb + $sumBpoApeAsMpsb + $sumApoApoSMpsb + $sumApoBastAsMpsb + $sumDropMpsb; ?>
      	  	<td></td>
      	  	<td>MATERIAL PSB</td>
      	  	<td><?php if(empty($sumBpoBrBsMpsb)) { echo ""; } else { echo $sumBpoBrBsMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMpsb)) { echo ""; } else { echo $sumApoApoBsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMpsb)) { echo ""; } else { echo $sumBpoBrAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMpsb)) { echo ""; } else { echo $sumBpoArAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMpsb)) { echo ""; } else { echo $sumBpoAcbAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMpsb)) { echo ""; } else { echo $sumBpoApeAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMpsb)) { echo ""; } else { echo $sumApoApoSMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMpsb)) { echo ""; } else { echo $sumApoBastAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumDropMpsb)) { echo ""; } else { echo $sumDropMpsb; } ?></td>
      	  	<td><?php if(empty($sumRowMpsb)) { echo ""; } else { echo $sumRowMpsb; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMremo = $sumBpoBrBsMremo + $sumApoApoBsMremo + $sumBpoBrAsMremo + $sumBpoArAsMremo + $sumBpoAcbAsMremo + $sumBpoApeAsMremo + $sumApoApoSMremo + $sumApoBastAsMremo + $sumDropMremo; ?>
      	  	<td></td>
      	  	<td>MATERIAL REMO</td>
      	  	<td><?php if(empty($sumBpoBrBsMremo)) { echo ""; } else { echo $sumBpoBrBsMremo; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMremo)) { echo ""; } else { echo $sumApoApoBsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMremo)) { echo ""; } else { echo $sumBpoBrAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMremo)) { echo ""; } else { echo $sumBpoArAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMremo)) { echo ""; } else { echo $sumBpoAcbAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMremo)) { echo ""; } else { echo $sumBpoApeAsMremo; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMremo)) { echo ""; } else { echo $sumApoApoSMremo; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMremo)) { echo ""; } else { echo $sumApoBastAsMremo; } ?></td>
      	  	<td><?php if(empty($sumDropMremo)) { echo ""; } else { echo $sumDropMremo; } ?></td>
      	  	<td><?php if(empty($sumRowMremo)) { echo ""; } else { echo $sumRowMremo; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowPt2 = $sumBpoBrBsPt2 + $sumApoApoBsPt2 + $sumBpoBrAsPt2 + $sumBpoArAsPt2 + $sumBpoAcbAsPt2 + $sumBpoApeAsPt2 + $sumApoApoSPt2 + $sumApoBastAsPt2 + $sumDropPt2; ?>
      	  	<td></td>
      	  	<td>PT-2</td>
      	  	<td><?php if(empty($sumBpoBrBsPt2)) { echo ""; } else { echo $sumBpoBrBsPt2; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsPt2)) { echo ""; } else { echo $sumApoApoBsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsPt2)) { echo ""; } else { echo $sumBpoBrAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsPt2)) { echo ""; } else { echo $sumBpoArAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsPt2)) { echo ""; } else { echo $sumBpoAcbAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsPt2)) { echo ""; } else { echo $sumBpoApeAsPt2; } ?></td>
      	  	<td><?php if(empty($sumApoApoSPt2)) { echo ""; } else { echo $sumApoApoSPt2; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsPt2)) { echo ""; } else { echo $sumApoBastAsPt2; } ?></td>
      	  	<td><?php if(empty($sumDropPt2)) { echo ""; } else { echo $sumDropPt2; } ?></td>
      	  	<td><?php if(empty($sumRowPt2)) { echo ""; } else { echo $sumRowPt2; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQea = $sumBpoBrBsQea + $sumApoApoBsQea + $sumBpoBrAsQea + $sumBpoArAsQea + $sumBpoAcbAsQea + $sumBpoApeAsQea + $sumApoApoSQea + $sumApoBastAsQea + $sumDropQea; ?>
      	  	<td></td>
      	  	<td>QE AKSES</td>
      	  	<td><?php if(empty($sumBpoBrBsQea)) { echo ""; } else { echo $sumBpoBrBsQea; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQea)) { echo ""; } else { echo $sumApoApoBsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQea)) { echo ""; } else { echo $sumBpoBrAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQea)) { echo ""; } else { echo $sumBpoArAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQea)) { echo ""; } else { echo $sumBpoAcbAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQea)) { echo ""; } else { echo $sumBpoApeAsQea; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQea)) { echo ""; } else { echo $sumApoApoSQea; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQea)) { echo ""; } else { echo $sumApoBastAsQea; } ?></td>
      	  	<td><?php if(empty($sumDropQea)) { echo ""; } else { echo $sumDropQea; } ?></td>
      	  	<td><?php if(empty($sumRowQea)) { echo ""; } else { echo $sumRowQea; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQer = $sumBpoBrBsQer + $sumApoApoBsQer + $sumBpoBrAsQer + $sumBpoArAsQer + $sumBpoAcbAsQer + $sumBpoApeAsQer + $sumApoApoSQer + $sumApoBastAsQer + $sumDropQer; ?>
      	  	<td></td>
      	  	<td>QE RECOVERY</td>
      	  	<td><?php if(empty($sumBpoBrBsQer)) { echo ""; } else { echo $sumBpoBrBsQer; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQer)) { echo ""; } else { echo $sumApoApoBsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQer)) { echo ""; } else { echo $sumBpoBrAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQer)) { echo ""; } else { echo $sumBpoArAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQer)) { echo ""; } else { echo $sumBpoAcbAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQer)) { echo ""; } else { echo $sumBpoApeAsQer; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQer)) { echo ""; } else { echo $sumApoApoSQer; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQer)) { echo ""; } else { echo $sumApoBastAsQer; } ?></td>
      	  	<td><?php if(empty($sumDropQer)) { echo ""; } else { echo $sumDropQer; } ?></td>
      	  	<td><?php if(empty($sumRowQer)) { echo ""; } else { echo $sumRowQer; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQeu = $sumBpoBrBsQeu + $sumApoApoBsQeu + $sumBpoBrAsQeu + $sumBpoArAsQeu + $sumBpoAcbAsQeu + $sumBpoApeAsQeu + $sumApoApoSQeu + $sumApoBastAsQeu + $sumDropQeu; ?>
      	  	<td></td>
      	  	<td>QE UTILITAS</td>
      	  	<td><?php if(empty($sumBpoBrBsQeu)) { echo ""; } else { echo $sumBpoBrBsQeu; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQeu)) { echo ""; } else { echo $sumApoApoBsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQeu)) { echo ""; } else { echo $sumBpoBrAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQeu)) { echo ""; } else { echo $sumBpoArAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQeu)) { echo ""; } else { echo $sumBpoAcbAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQeu)) { echo ""; } else { echo $sumBpoApeAsQeu; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQeu)) { echo ""; } else { echo $sumApoApoSQeu; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQeu)) { echo ""; } else { echo $sumApoBastAsQeu; } ?></td>
      	  	<td><?php if(empty($sumDropQeu)) { echo ""; } else { echo $sumDropQeu; } ?></td>
      	  	<td><?php if(empty($sumRowQeu)) { echo ""; } else { echo $sumRowQeu; } ?></td>
      	  </tr>
      	  <tr>
      	  	<td colspan="2">TOTAL ACEH</td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  </tr>

      	  <tr>
      	  	<?php $sumRowFtth = $sumBpoBrBsFtth + $sumApoApoBsFtth + $sumBpoBrAsFtth + $sumBpoArAsFtth + $sumBpoAcbAsFtth + $sumBpoApeAsFtth + $sumApoApoSFtth + $sumApoBastAsFtth + $sumDropFtth; ?>
      	  	<td>BABEL</td>
      	  	<td>FTTH</td>
      	  	<td><?php if(empty($sumBpoBrBsFtth)) { echo ""; } else { echo $sumBpoBrBsFtth; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsFtth)) { echo ""; } else { echo $sumApoApoBsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsFtth)) { echo ""; } else { echo $sumBpoBrAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsFtth)) { echo ""; } else { echo $sumBpoArAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsFtth)) { echo ""; } else { echo $sumBpoAcbAsFtth; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsFtth)) { echo ""; } else { echo $sumBpoApeAsFtth; } ?></td>
      	  	<td><?php if(empty($sumApoApoSFtth)) { echo ""; } else { echo $sumApoApoSFtth; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsFtth)) { echo ""; } else { echo $sumApoBastAsFtth; } ?></td>
      	  	<td><?php if(empty($sumDropFtth)) { echo ""; } else { echo $sumDropFtth; } ?></td>
      	  	<td><?php if(empty($sumRowFtth)) { echo ""; } else { echo $sumRowFtth; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowHem = $sumBpoBrBsHem + $sumApoApoBsHem + $sumBpoBrAsHem + $sumBpoArAsHem + $sumBpoAcbAsHem + $sumBpoApeAsHem + $sumApoApoSHem + $sumApoBastAsHem + $sumDropHem; ?>
      	  	<td></td>
      	  	<td>HEM</td>
      	  	<td><?php if(empty($sumBpoBrBsHem)) { echo ""; } else { echo $sumBpoBrBsHem; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsHem)) { echo ""; } else { echo $sumApoApoBsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsHem)) { echo ""; } else { echo $sumBpoBrAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsHem)) { echo ""; } else { echo $sumBpoArAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsHem)) { echo ""; } else { echo $sumBpoAcbAsHem; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsHem)) { echo ""; } else { echo $sumBpoApeAsHem; } ?></td>
      	  	<td><?php if(empty($sumApoApoSHem)) { echo ""; } else { echo $sumApoApoSHem; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsHem)) { echo ""; } else { echo $sumApoBastAsHem; } ?></td>
      	  	<td><?php if(empty($sumDropHem)) { echo ""; } else { echo $sumDropHem; } ?></td>
      	  	<td><?php if(empty($sumRowHem)) { echo ""; } else { echo $sumRowHem; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowLmeNB = $sumBpoBrBsLmeNB + $sumApoApoBsLmeNB + $sumBpoBrAsLmeNB + $sumBpoArAsLmeNB + $sumBpoAcbAsLmeNB + $sumBpoApeAsLmeNB + $sumApoApoSLmeNB + $sumApoBastAsLmeNB + $sumDropLmeNB; ?>
      	  	<td></td>
      	  	<td>LME NODE B</td>
      	  	<td><?php if(empty($sumBpoBrBsLmeNB)) { echo ""; } else { echo $sumBpoBrBsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsLmeNB)) { echo ""; } else { echo $sumApoApoBsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsLmeNB)) { echo ""; } else { echo $sumBpoBrAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsLmeNB)) { echo ""; } else { echo $sumBpoArAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsLmeNB)) { echo ""; } else { echo $sumBpoAcbAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsLmeNB)) { echo ""; } else { echo $sumBpoApeAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoApoSLmeNB)) { echo ""; } else { echo $sumApoApoSLmeNB; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsLmeNB)) { echo ""; } else { echo $sumApoBastAsLmeNB; } ?></td>
      	  	<td><?php if(empty($sumDropLmeNB)) { echo ""; } else { echo $sumDropLmeNB; } ?></td>
      	  	<td><?php if(empty($sumRowLmeNB)) { echo ""; } else { echo $sumRowLmeNB; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowLmeWF = $sumBpoBrBsLmeWF + $sumApoApoBsLmeWF + $sumBpoBrAsLmeWF + $sumBpoArAsLmeWF + $sumBpoAcbAsLmeWF + $sumBpoApeAsLmeWF + $sumApoApoSLmeWF + $sumApoBastAsLmeWF + $sumDropLmeWF; ?>
      	  	<td></td>
      	  	<td>LME WIFI</td>
      	  	<td><?php if(empty($sumBpoBrBsLmeWF)) { echo ""; } else { echo $sumBpoBrBsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsLmeWF)) { echo ""; } else { echo $sumApoApoBsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsLmeWF)) { echo ""; } else { echo $sumBpoBrAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsLmeWF)) { echo ""; } else { echo $sumBpoArAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsLmeWF)) { echo ""; } else { echo $sumBpoAcbAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsLmeWF)) { echo ""; } else { echo $sumBpoApeAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoApoSLmeWF)) { echo ""; } else { echo $sumApoApoSLmeWF; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsLmeWF)) { echo ""; } else { echo $sumApoBastAsLmeWF; } ?></td>
      	  	<td><?php if(empty($sumDropLmeWF)) { echo ""; } else { echo $sumDropLmeWF; } ?></td>
      	  	<td><?php if(empty($sumRowLmeWF)) { echo ""; } else { echo $sumRowLmeWF; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMG = $sumBpoBrBsMG + $sumApoApoBsMG + $sumBpoBrAsMG + $sumBpoArAsMG + $sumBpoAcbAsMG + $sumBpoApeAsMG + $sumApoApoSMG + $sumApoBastAsMG + $sumDropMG; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN</td>
      	  	<td><?php if(empty($sumBpoBrBsMG)) { echo ""; } else { echo $sumBpoBrBsMG; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMG)) { echo ""; } else { echo $sumApoApoBsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMG)) { echo ""; } else { echo $sumBpoBrAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMG)) { echo ""; } else { echo $sumBpoArAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMG)) { echo ""; } else { echo $sumBpoAcbAsMG; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMG)) { echo ""; } else { echo $sumBpoApeAsMG; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMG)) { echo ""; } else { echo $sumApoApoSMG; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMG)) { echo ""; } else { echo $sumApoBastAsMG; } ?></td>
      	  	<td><?php if(empty($sumDropMG)) { echo ""; } else { echo $sumDropMG; } ?></td>
      	  	<td><?php if(empty($sumRowMG)) { echo ""; } else { echo $sumRowMG; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGCan = $sumBpoBrBsMGCan + $sumApoApoBsMGCan + $sumBpoBrAsMGCan + $sumBpoArAsMGCan + $sumBpoAcbAsMGCan + $sumBpoApeAsMGCan + $sumApoApoSMGCan + $sumApoBastAsMGCan + $sumDropMGCan; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN CCAN/WIFI-ID</td>
      	  	<td><?php if(empty($sumBpoBrBsMGCan)) { echo ""; } else { echo $sumBpoBrBsMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGCan)) { echo ""; } else { echo $sumApoApoBsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGCan)) { echo ""; } else { echo $sumBpoBrAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGCan)) { echo ""; } else { echo $sumBpoArAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGCan)) { echo ""; } else { echo $sumBpoAcbAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGCan)) { echo ""; } else { echo $sumBpoApeAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGCan)) { echo ""; } else { echo $sumApoApoSMGCan; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGCan)) { echo ""; } else { echo $sumApoBastAsMGCan; } ?></td>
      	  	<td><?php if(empty($sumDropMGCan)) { echo ""; } else { echo $sumDropMGCan; } ?></td>
      	  	<td><?php if(empty($sumRowMGCan)) { echo ""; } else { echo $sumRowMGCan; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGCons = $sumBpoBrBsMGCons + $sumApoApoBsMGCons + $sumBpoBrAsMGCons + $sumBpoArAsMGCons + $sumBpoAcbAsMGCons + $sumBpoApeAsMGCons + $sumApoApoSMGCons + $sumApoBastAsMGCons + $sumDropMGCons; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN CONSUMER</td>
      	  	<td><?php if(empty($sumBpoBrBsMGCons)) { echo ""; } else { echo $sumBpoBrBsMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGCons)) { echo ""; } else { echo $sumApoApoBsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGCons)) { echo ""; } else { echo $sumBpoBrAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGCons)) { echo ""; } else { echo $sumBpoArAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGCons)) { echo ""; } else { echo $sumBpoAcbAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGCons)) { echo ""; } else { echo $sumBpoApeAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGCons)) { echo ""; } else { echo $sumApoApoSMGCons; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGCons)) { echo ""; } else { echo $sumApoBastAsMGCons; } ?></td>
      	  	<td><?php if(empty($sumDropMGCons)) { echo ""; } else { echo $sumDropMGCons; } ?></td>
      	  	<td><?php if(empty($sumRowMGCons)) { echo ""; } else { echo $sumRowMGCons; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGDatin = $sumBpoBrBsMGDatin + $sumApoApoBsMGDatin + $sumBpoBrAsMGDatin + $sumBpoArAsMGDatin + $sumBpoAcbAsMGDatin + $sumBpoApeAsMGDatin + $sumApoApoSMGDatin + $sumApoBastAsMGDatin + $sumDropMGDatin; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN DATIN</td>
      	  	<td><?php if(empty($sumBpoBrBsMGDatin)) { echo ""; } else { echo $sumBpoBrBsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGDatin)) { echo ""; } else { echo $sumApoApoBsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGDatin)) { echo ""; } else { echo $sumBpoBrAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGDatin)) { echo ""; } else { echo $sumBpoArAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGDatin)) { echo ""; } else { echo $sumBpoAcbAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGDatin)) { echo ""; } else { echo $sumBpoApeAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGDatin)) { echo ""; } else { echo $sumApoApoSMGDatin; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGDatin)) { echo ""; } else { echo $sumApoBastAsMGDatin; } ?></td>
      	  	<td><?php if(empty($sumDropMGDatin)) { echo ""; } else { echo $sumDropMGDatin; } ?></td>
      	  	<td><?php if(empty($sumRowMGDatin)) { echo ""; } else { echo $sumRowMGDatin; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMGNb = $sumBpoBrBsMGNb + $sumApoApoBsMGNb + $sumBpoBrAsMGNb + $sumBpoArAsMGNb + $sumBpoAcbAsMGNb + $sumBpoApeAsMGNb + $sumApoApoSMGNb + $sumApoBastAsMGNb + $sumDropMGNb; ?>
      	  	<td></td>
      	  	<td>MATERIAL GANGGUAN NODE B</td>
      	  	<td><?php if(empty($sumBpoBrBsMGNb)) { echo ""; } else { echo $sumBpoBrBsMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMGNb)) { echo ""; } else { echo $sumApoApoBsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMGNb)) { echo ""; } else { echo $sumBpoBrAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMGNb)) { echo ""; } else { echo $sumBpoArAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMGNb)) { echo ""; } else { echo $sumBpoAcbAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMGNb)) { echo ""; } else { echo $sumBpoApeAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMGNb)) { echo ""; } else { echo $sumApoApoSMGNb; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMGNb)) { echo ""; } else { echo $sumApoBastAsMGNb; } ?></td>
      	  	<td><?php if(empty($sumDropMGNb)) { echo ""; } else { echo $sumDropMGNb; } ?></td>
      	  	<td><?php if(empty($sumRowMGNb)) { echo ""; } else { echo $sumRowMGNb; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMpsb = $sumBpoBrBsMpsb + $sumApoApoBsMpsb + $sumBpoBrAsMpsb + $sumBpoArAsMpsb + $sumBpoAcbAsMpsb + $sumBpoApeAsMpsb + $sumApoApoSMpsb + $sumApoBastAsMpsb + $sumDropMpsb; ?>
      	  	<td></td>
      	  	<td>MATERIAL PSB</td>
      	  	<td><?php if(empty($sumBpoBrBsMpsb)) { echo ""; } else { echo $sumBpoBrBsMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMpsb)) { echo ""; } else { echo $sumApoApoBsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMpsb)) { echo ""; } else { echo $sumBpoBrAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMpsb)) { echo ""; } else { echo $sumBpoArAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMpsb)) { echo ""; } else { echo $sumBpoAcbAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMpsb)) { echo ""; } else { echo $sumBpoApeAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMpsb)) { echo ""; } else { echo $sumApoApoSMpsb; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMpsb)) { echo ""; } else { echo $sumApoBastAsMpsb; } ?></td>
      	  	<td><?php if(empty($sumDropMpsb)) { echo ""; } else { echo $sumDropMpsb; } ?></td>
      	  	<td><?php if(empty($sumRowMpsb)) { echo ""; } else { echo $sumRowMpsb; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowMremo = $sumBpoBrBsMremo + $sumApoApoBsMremo + $sumBpoBrAsMremo + $sumBpoArAsMremo + $sumBpoAcbAsMremo + $sumBpoApeAsMremo + $sumApoApoSMremo + $sumApoBastAsMremo + $sumDropMremo; ?>
      	  	<td></td>
      	  	<td>MATERIAL REMO</td>
      	  	<td><?php if(empty($sumBpoBrBsMremo)) { echo ""; } else { echo $sumBpoBrBsMremo; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsMremo)) { echo ""; } else { echo $sumApoApoBsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsMremo)) { echo ""; } else { echo $sumBpoBrAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsMremo)) { echo ""; } else { echo $sumBpoArAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsMremo)) { echo ""; } else { echo $sumBpoAcbAsMremo; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsMremo)) { echo ""; } else { echo $sumBpoApeAsMremo; } ?></td>
      	  	<td><?php if(empty($sumApoApoSMremo)) { echo ""; } else { echo $sumApoApoSMremo; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsMremo)) { echo ""; } else { echo $sumApoBastAsMremo; } ?></td>
      	  	<td><?php if(empty($sumDropMremo)) { echo ""; } else { echo $sumDropMremo; } ?></td>
      	  	<td><?php if(empty($sumRowMremo)) { echo ""; } else { echo $sumRowMremo; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowPt2 = $sumBpoBrBsPt2 + $sumApoApoBsPt2 + $sumBpoBrAsPt2 + $sumBpoArAsPt2 + $sumBpoAcbAsPt2 + $sumBpoApeAsPt2 + $sumApoApoSPt2 + $sumApoBastAsPt2 + $sumDropPt2; ?>
      	  	<td></td>
      	  	<td>PT-2</td>
      	  	<td><?php if(empty($sumBpoBrBsPt2)) { echo ""; } else { echo $sumBpoBrBsPt2; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsPt2)) { echo ""; } else { echo $sumApoApoBsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsPt2)) { echo ""; } else { echo $sumBpoBrAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsPt2)) { echo ""; } else { echo $sumBpoArAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsPt2)) { echo ""; } else { echo $sumBpoAcbAsPt2; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsPt2)) { echo ""; } else { echo $sumBpoApeAsPt2; } ?></td>
      	  	<td><?php if(empty($sumApoApoSPt2)) { echo ""; } else { echo $sumApoApoSPt2; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsPt2)) { echo ""; } else { echo $sumApoBastAsPt2; } ?></td>
      	  	<td><?php if(empty($sumDropPt2)) { echo ""; } else { echo $sumDropPt2; } ?></td>
      	  	<td><?php if(empty($sumRowPt2)) { echo ""; } else { echo $sumRowPt2; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQea = $sumBpoBrBsQea + $sumApoApoBsQea + $sumBpoBrAsQea + $sumBpoArAsQea + $sumBpoAcbAsQea + $sumBpoApeAsQea + $sumApoApoSQea + $sumApoBastAsQea + $sumDropQea; ?>
      	  	<td></td>
      	  	<td>QE AKSES</td>
      	  	<td><?php if(empty($sumBpoBrBsQea)) { echo ""; } else { echo $sumBpoBrBsQea; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQea)) { echo ""; } else { echo $sumApoApoBsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQea)) { echo ""; } else { echo $sumBpoBrAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQea)) { echo ""; } else { echo $sumBpoArAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQea)) { echo ""; } else { echo $sumBpoAcbAsQea; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQea)) { echo ""; } else { echo $sumBpoApeAsQea; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQea)) { echo ""; } else { echo $sumApoApoSQea; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQea)) { echo ""; } else { echo $sumApoBastAsQea; } ?></td>
      	  	<td><?php if(empty($sumDropQea)) { echo ""; } else { echo $sumDropQea; } ?></td>
      	  	<td><?php if(empty($sumRowQea)) { echo ""; } else { echo $sumRowQea; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQer = $sumBpoBrBsQer + $sumApoApoBsQer + $sumBpoBrAsQer + $sumBpoArAsQer + $sumBpoAcbAsQer + $sumBpoApeAsQer + $sumApoApoSQer + $sumApoBastAsQer + $sumDropQer; ?>
      	  	<td></td>
      	  	<td>QE RECOVERY</td>
      	  	<td><?php if(empty($sumBpoBrBsQer)) { echo ""; } else { echo $sumBpoBrBsQer; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQer)) { echo ""; } else { echo $sumApoApoBsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQer)) { echo ""; } else { echo $sumBpoBrAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQer)) { echo ""; } else { echo $sumBpoArAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQer)) { echo ""; } else { echo $sumBpoAcbAsQer; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQer)) { echo ""; } else { echo $sumBpoApeAsQer; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQer)) { echo ""; } else { echo $sumApoApoSQer; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQer)) { echo ""; } else { echo $sumApoBastAsQer; } ?></td>
      	  	<td><?php if(empty($sumDropQer)) { echo ""; } else { echo $sumDropQer; } ?></td>
      	  	<td><?php if(empty($sumRowQer)) { echo ""; } else { echo $sumRowQer; } ?></td>
      	  </tr>
      	  <tr>
      	  	<?php $sumRowQeu = $sumBpoBrBsQeu + $sumApoApoBsQeu + $sumBpoBrAsQeu + $sumBpoArAsQeu + $sumBpoAcbAsQeu + $sumBpoApeAsQeu + $sumApoApoSQeu + $sumApoBastAsQeu + $sumDropQeu; ?>
      	  	<td></td>
      	  	<td>QE UTILITAS</td>
      	  	<td><?php if(empty($sumBpoBrBsQeu)) { echo ""; } else { echo $sumBpoBrBsQeu; } ?></td>
      	  	<td><?php if(empty($sumApoApoBsQeu)) { echo ""; } else { echo $sumApoApoBsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoBrAsQeu)) { echo ""; } else { echo $sumBpoBrAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoArAsQeu)) { echo ""; } else { echo $sumBpoArAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoAcbAsQeu)) { echo ""; } else { echo $sumBpoAcbAsQeu; } ?></td>
      	  	<td><?php if(empty($sumBpoApeAsQeu)) { echo ""; } else { echo $sumBpoApeAsQeu; } ?></td>
      	  	<td><?php if(empty($sumApoApoSQeu)) { echo ""; } else { echo $sumApoApoSQeu; } ?></td>
      	  	<td><?php if(empty($sumApoBastAsQeu)) { echo ""; } else { echo $sumApoBastAsQeu; } ?></td>
      	  	<td><?php if(empty($sumDropQeu)) { echo ""; } else { echo $sumDropQeu; } ?></td>
      	  	<td><?php if(empty($sumRowQeu)) { echo ""; } else { echo $sumRowQeu; } ?></td>
      	  </tr>
      	  <tr>
      	  	<td colspan="2">TOTAL BABEL</td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  	<td></td>
      	  </tr>
      	</tbody>
  	  </table>
	</div>
  </div>
</div>