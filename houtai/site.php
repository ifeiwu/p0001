<?php
//Copyright (c) 2016 iFeiwu.com
 class Site extends Item { function __construct() { $this->table = "\x73\151\164\x65"; parent::__construct(); } protected function getData() { goto J_08E; J_08E: $data = $this->db->select($this->table)->all(); goto QxTT2; N8GZM: foreach ($data as $d) { goto Y0tRo; GpiNU: if (!($value != '')) { goto nstNx; } goto RLln5; ziIKK: CLd_l: goto ok6dP; vxjU1: nstNx: goto ziIKK; Y0tRo: $value = $d["\166\141\154\165\x65"]; goto GpiNU; RLln5: $site[$d["\x6e\x61\155\145"]] = $value; goto vxjU1; ok6dP: } goto aCYN1; m7Pdw: return $this->success($site); goto Otk3o; aCYN1: CLEBX: goto m7Pdw; QxTT2: $site = array(); goto N8GZM; Otk3o: } protected function postSave($request_data) { goto eceTp; NsVbc: return $this->success("\xe5\xb7\xb2\344\277\x9d\xe5\255\x98\xe6\x9b\xb4\xe6\x94\271\357\xbc\x81"); goto HWbZp; DTIhy: $this->db->rollBack(); goto HZktf; Ykx0W: $this->db->commit(); goto XcS59; Y_Y7K: dcYwY: goto Ykx0W; eceTp: $this->_removeFiles2($request_data["\x5f\162\x65\155\157\x76\145\146\x69\x6c\x65\x73"]); goto oS7PE; kOg_g: if (count($error) === 0) { goto dcYwY; } goto DTIhy; P7cxw: goto ZOqkX; goto Y_Y7K; JPkJs: foreach ($request_data as $name => $value) { goto XanT0; tLGlH: ig9jp: goto iypZr; XanT0: $count = $this->db->select($this->table)->where(array("\156\x61\155\145", "\x3d", $name))->count(); goto I65WG; I65WG: $value = $this->_encode($value); goto KEYyb; KEYyb: if ($count <= 0) { goto ig9jp; } goto b_E4a; zqPpK: goto aQWsA; goto tLGlH; iypZr: if (!($this->db->insert($this->table, array("\156\x61\155\145" => $name, "\166\x61\x6c\x75\x65" => $value))->is() === false)) { goto ukO3P; } goto S3yM5; mvy_2: DyuVW: goto pWdUM; S3yM5: $error[] = $name; goto yTVV1; y8QYM: aQWsA: goto mvy_2; b_E4a: if (!($this->db->update($this->table, array("\166\141\154\x75\x65" => $value), array("\x6e\x61\155\145", "\x3d", $name))->is() === false)) { goto m1OEk; } goto f9Jat; f9Jat: $error[] = $name; goto uQxMG; uQxMG: m1OEk: goto zqPpK; yTVV1: ukO3P: goto y8QYM; pWdUM: } goto M3tBm; HZktf: return $this->error("\345\267\xb2\344\xbf\x9d\345\255\x98\345\xa4\261\350\264\xa5\357\xbc\201"); goto P7cxw; Xrq47: $this->db->beginTransaction(); goto JPkJs; HWbZp: ZOqkX: goto aybJp; M3tBm: n1zkY: goto kOg_g; oS7PE: unset($request_data["\x74\157\153\x65\x6e"], $request_data["\141\144\x6d\151\x6e"], $request_data["\x5f\x72\x65\x6d\157\166\x65\146\x69\x6c\145\163"]); goto RMqyG; XcS59: $this->_log("\x75\160\144\141\164\x65", array("\x74\x69\x74\154\145" => "\347\275\x91\xe7\xab\231\350\256\xbe\347\275\256")); goto NsVbc; RMqyG: $error = array(); goto Xrq47; aybJp: } protected function postSkin($request_data) { goto O59y6; m4tJ1: chmod($filename, 420); goto laeqS; ld06Z: return $this->success("\xe5\267\xb2\344\277\235\xe5\255\x98\346\233\264\xe6\224\271\357\274\x81"); goto ZcH2p; rh42O: $request_data["\164\150\x65\x6d\145"] = $skins[0]; goto Z6TV0; k11uv: yrpjC: goto PS2e8; KAnJx: VVRtT: goto ld06Z; laeqS: hG90x: goto XG77k; XG77k: unset($request_data["\164\x6f\x6b\x65\x6e"], $request_data["\x61\144\x6d\151\156"], $request_data["\163\x74\x79\154\145\55\143\x6f\x64\x65"]); goto xutR0; h0AoP: $skins = explode("\55", $request_data["\x74\150\x65\x6d\145\55\163\x6b\x69\x6e"]); goto rh42O; hp5C1: file_put_contents($filename, $request_data["\x73\x74\x79\154\x65\55\143\157\x64\x65"]); goto m4tJ1; Z6TV0: $request_data["\x73\x6b\151\x6e"] = $skins[1]; goto k11uv; xutR0: if (!isset($request_data["\164\150\145\x6d\145\x2d\x73\153\x69\x6e"])) { goto yrpjC; } goto h0AoP; PS2e8: foreach ($request_data as $name => $value) { $this->_saveData($this->table, array("\156\x61\155\145" => $name, "\x76\141\x6c\x75\x65" => $value), array("\x6e\141\x6d\x65", "\x3d", $name)); VOX9l: } goto KAnJx; O59y6: if (!isset($request_data["\x73\x74\x79\154\145\x2d\x63\x6f\x64\145"])) { goto hG90x; } goto q6_2u; q6_2u: $filename = "\x2e\56\x2f\141\163\x73\145\x74\57\143\x73\163\57\x73\x74\x79\154\x65\x2e\143\163\x73"; goto hp5C1; ZcH2p: } protected function getStyleCode() { $code = file_get_contents("\x2e\56\x2f\x61\x73\163\145\x74\57\x63\163\163\x2f\x73\x74\171\x6c\x65\56\143\x73\x73"); return $this->success(array($code)); } }
