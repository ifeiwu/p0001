<?php
//Copyright (c) 2016 iFeiwu.com
 class Stats extends Item { function __construct() { $this->table = "\x73\x74\x61\x74\163"; parent::__construct(); } protected function getDays() { goto LwHE3; VEk7l: $days = date("\x6a"); goto KyxSM; MzIGv: iKAyb: goto lzh7Z; TWyRG: TYHIk: goto Imjdn; RP9Ag: $month = $month - $i; goto TTd_6; nyVCR: $day = $days - $i; goto Fqr09; AO0yZ: fbzs7: goto VdcXc; Imjdn: if (!($i <= $days)) { goto iKAyb; } goto nyVCR; Nx44o: $i++; goto A80ip; C428Z: $i++; goto PVKeK; UHwnb: $i = 0; goto JwTIJ; PVKeK: goto l_23S; goto AO0yZ; VdcXc: $data["\x79\x65\141\162\x73"][] = array("\171\145\141\162" => date("\131"), "\x75\x76" => $this->_getYearsCount($table, 0, "\x63\157\157\x6b\151\145"), "\x70\x76" => $this->_getYearsCount($table, 0, "\151\x64"), "\151\x70" => $this->_getYearsCount($table, 0, "\x69\x70")); goto GeKW1; TTd_6: $data["\x6d\157\x6e\164\150\x73"][] = array("\x6d\157\156\164\x68" => $month, "\x75\x76" => $this->_getMonthsCount($table, $i, "\x63\x6f\x6f\x6b\151\145"), "\x70\x76" => $this->_getMonthsCount($table, $i, "\151\x64"), "\x69\160" => $this->_getMonthsCount($table, $i, "\151\160")); goto SeORA; lzh7Z: $month = date("\x6d"); goto UHwnb; GeKW1: return $this->success($data); goto ySDlq; JwTIJ: l_23S: goto aetHd; FM1Ao: $table = $this->prefix . $this->table; goto VEk7l; nt0cF: jh0SR: goto Nx44o; Fqr09: $data["\x64\x61\x79\163"][$i . "\xe6\x97\245"] = array("\165\x76" => $this->_getDaysCount($table, $day, "\143\157\157\153\x69\145"), "\x70\x76" => $this->_getDaysCount($table, $day, "\x69\x64"), "\x69\x70" => $this->_getDaysCount($table, $day, "\x69\160")); goto nt0cF; aetHd: if (!($i <= 1)) { goto fbzs7; } goto RP9Ag; A80ip: goto TYHIk; goto MzIGv; KyxSM: $i = 1; goto TWyRG; SeORA: y1k5U: goto C428Z; LwHE3: $data = array("\171\145\141\162\x73" => array(), "\x6d\157\156\164\x68\x73" => array(), "\x64\x61\171\163" => array()); goto FM1Ao; ySDlq: } private function _getDaysCount($table, $day, $group) { goto vbELq; vbELq: if ($group != "\151\x64") { goto X0kI_; } goto GdhyD; GdhyD: return $this->db->query("\x53\105\x4c\x45\103\x54\40\x43\117\x55\116\124\x28\52\51\x20\156\x75\x6d\x20\x46\x52\x4f\x4d\40{$table}\x20\x57\x48\105\122\x45\40\x64\x61\x74\145\137\146\x6f\x72\155\141\164\50\144\141\164\145\54\x27\x25\131\x2d\x25\155\55\45\144\47\51\x20\x3d\40\144\x61\x74\x65\137\x66\157\x72\x6d\x61\164\50\123\x55\x42\104\101\124\105\x28\156\x6f\167\x28\51\x2c\151\156\x74\145\x72\166\141\x6c\x20{$day}\x20\144\x61\171\51\54\47\x25\131\55\x25\x6d\x2d\45\144\47\x29")->get(0); goto mt99z; FSnLk: F5_3A: goto ts1C4; wIs88: return $this->db->query("\123\105\114\x45\103\x54\x20\x43\117\x55\116\x54\50\164\x2e\x6e\165\x6d\51\x20\106\122\117\x4d\40\50\123\105\114\105\103\124\40\x43\117\125\116\124\50\x2a\x29\40\x6e\x75\155\x20\x46\122\x4f\x4d\40{$table}\x20\127\x48\x45\x52\x45\40\144\x61\x74\x65\137\x66\157\x72\x6d\x61\x74\x28\144\141\x74\145\54\x27\45\x59\55\45\155\55\x25\x64\x27\51\40\x3d\x20\144\x61\x74\x65\x5f\146\157\x72\x6d\141\x74\x28\x53\x55\x42\104\x41\x54\x45\x28\x6e\157\x77\x28\51\x2c\151\156\164\145\x72\166\x61\x6c\40{$day}\x20\144\141\x79\51\x2c\x27\45\131\x2d\x25\x6d\55\x25\x64\x27\51\40\x47\x52\117\125\x50\x20\x42\131\40\140{$group}\x60\x29\40\x74")->get(0); goto FSnLk; fzS3y: X0kI_: goto wIs88; mt99z: goto F5_3A; goto fzS3y; ts1C4: } private function _getMonthsCount($table, $month, $group) { goto PITOY; PITOY: if ($group != "\x69\144") { goto c8jKk; } goto h1Hu1; U9Vxz: c8jKk: goto ngjni; kq6uP: DyycM: goto k0gA0; ngjni: return $this->db->query("\x53\105\114\105\x43\124\40\x43\117\x55\116\124\x28\x74\56\156\165\x6d\x29\x20\106\x52\117\x4d\x20\50\x53\105\x4c\105\x43\124\x20\x43\117\x55\x4e\124\x28\52\x29\40\x6e\x75\155\40\106\x52\x4f\x4d\x20{$table}\x20\x57\x48\x45\x52\105\40\x64\141\164\145\x5f\146\x6f\162\x6d\x61\x74\50\x64\x61\x74\x65\54\x27\x25\x59\x2d\x25\x6d\47\x29\40\x3d\x20\144\x61\x74\x65\x5f\146\157\x72\155\x61\164\x28\123\x55\x42\x44\x41\124\x45\50\156\157\167\x28\x29\54\x69\x6e\164\145\x72\166\x61\x6c\40{$month}\x20\x6d\x6f\x6e\164\x68\51\x2c\x27\45\x59\55\45\155\x27\x29\40\x47\122\x4f\125\x50\40\102\131\x20\140{$group}\140\x29\40\164")->get(0); goto kq6uP; EZ8qH: goto DyycM; goto U9Vxz; h1Hu1: return $this->db->query("\x53\105\x4c\105\x43\x54\40\103\x4f\125\x4e\x54\x28\52\51\x20\156\x75\x6d\x20\x46\122\x4f\x4d\40{$table}\40\127\x48\105\x52\105\40\x64\x61\164\145\137\x66\x6f\162\x6d\141\164\50\x64\x61\x74\145\x2c\x27\45\131\55\x25\155\47\x29\x20\x3d\x20\144\x61\x74\145\x5f\x66\157\162\155\x61\x74\x28\123\125\x42\104\101\124\105\50\156\157\167\50\51\54\x69\x6e\x74\145\162\x76\141\x6c\40{$month}\40\155\157\156\164\150\51\x2c\47\x25\x59\x2d\45\x6d\x27\x29")->get(0); goto EZ8qH; k0gA0: } private function _getYearsCount($table, $year, $group) { goto gUO4M; RuTnm: return $this->db->query("\x53\105\x4c\x45\x43\x54\40\103\117\125\x4e\124\x28\52\51\x20\x6e\x75\155\x20\106\122\117\115\x20{$table}\x20\127\110\x45\x52\105\40\x64\141\164\145\x5f\146\157\x72\x6d\141\164\x28\144\x61\x74\145\x2c\47\x25\131\x27\x29\x20\x3d\40\144\x61\x74\145\x5f\x66\x6f\x72\155\x61\x74\50\123\x55\102\x44\101\x54\105\50\156\157\x77\x28\51\54\x69\156\x74\145\162\166\141\154\40{$year}\x20\171\145\x61\162\x29\54\x27\x25\131\47\51")->get(0); goto qovZz; cDtwE: KTsYd: goto aRac8; qovZz: goto bm3DV; goto cDtwE; MCKev: bm3DV: goto atfTb; aRac8: return $this->db->query("\123\x45\114\x45\103\124\40\103\117\125\116\124\50\164\56\x6e\165\155\x29\40\x46\x52\117\x4d\x20\x28\x53\x45\x4c\x45\103\x54\40\x43\x4f\x55\x4e\124\50\x2a\x29\40\156\x75\x6d\40\106\x52\117\x4d\x20{$table}\x20\127\x48\105\x52\105\x20\x64\141\x74\145\137\x66\x6f\x72\x6d\141\164\x28\144\x61\164\x65\54\47\45\x59\47\x29\x20\x3d\x20\x64\x61\x74\x65\x5f\x66\157\x72\155\141\x74\x28\123\125\102\104\101\x54\x45\50\156\157\167\x28\51\x2c\x69\x6e\164\145\162\x76\141\x6c\40{$year}\x20\171\x65\141\x72\x29\54\x27\45\x59\47\51\40\107\122\x4f\125\120\40\x42\131\x20\x60{$group}\140\51\x20\164")->get(0); goto MCKev; gUO4M: if ($group != "\151\x64") { goto KTsYd; } goto RuTnm; atfTb: } }