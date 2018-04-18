<?php

function sendData1(){			
			
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('CEO', 'comite_dir', 'salarie_parts', 'salarie_sans_part', 'consult_ext', 'investisseur', 'struct_acc');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
							
	$req = $bdd->prepare('INSERT INTO repondant(ID, nom, prenom, profession, anciennete, genre, CEO, comite_dir, salarie_parts, salarie_sans_part, consult_ext, investisseur, struct_acc) 
	VALUES(:ID, :nom, :prenom, :profession, :anciennete, :genre, :CEO, :comite_dir, :salarie_parts, :salarie_sans_part, :consult_ext, :investisseur, :struct_acc)');
	
	$req->execute(array(
		'ID' => $_SESSION['id'],
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'profession' => $_POST['profession'],
		'anciennete' => $_POST['anciennete'],
		'genre' => $_POST['genre'],
		'CEO' => $_POST['CEO'],
		'comite_dir' => $_POST['comite_dir'],
		'salarie_parts' => $_POST['salarie_parts'],
		'salarie_sans_part' => $_POST['salarie_sans_part'],
		'consult_ext' => $_POST['consult_ext'],
		'investisseur' => $_POST['investisseur'],
		'struct_acc' => $_POST['struct_acc']
	));
	
	$req -> closeCursor();
		
	$_SESSION['avancement'] = 1;
			
}

function sendData2(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('gd_villes', 'moy_villes', 'zone_rurale', 'etranger');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
						
	$req2 = $bdd->prepare('INSERT INTO global(ID, nom_startup, age_startup, comm_proj, etape_proj, das, siren, CAn, CAn_1, gd_villes, moy_villes, zone_rurale, etranger, local_societe, local_eq_travail, nb_personnes) 
	VALUES(:ID, :nom_startup, :age_startup, :comm_proj, :etape_proj, :das, :siren, :CAn, :CAn_1, :gd_villes, :moy_villes, :zone_rurale, :etranger, :local_societe, :local_eq_travail, :nb_personnes)');
	
	$req2->execute(array(
		'ID' => $_SESSION['id'],
		'nom_startup' => $_POST['nom_startup'],
		'age_startup' => $_POST['age_startup'],
		'comm_proj' => $_POST['comm_proj'],
		'etape_proj' => $_POST['etape_proj'],
		'das' => $_POST['das'],
		'siren' => $_POST['siren'],
		'CAn' => $_POST['CAn'],
		'CAn_1' => $_POST['CAn_1'],
		'gd_villes' => $_POST['gd_villes'],
		'moy_villes' => $_POST['moy_villes'],
		'zone_rurale' => $_POST['zone_rurale'],
		'etranger' => $_POST['etranger'],
		'local_societe' => $_POST['local_societe'],
		'local_eq_travail' => $_POST['local_eq_travail'],
		'nb_personnes' => $_POST['nb_personnes']
	));
			
	$req2 -> closeCursor();
	
	$_SESSION['avancement'] = 2;
	
}

function sendData3(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('commerciale', 'technique', 'financiere', 'juridique', 'design', 'gestion', 'nv_pdt', 'repondre_pb', 'nv_technologie',
	'analyse_env', 'opp_prof', 'div_fondateurs', 'div_fond_genres', 'div_fond_formations', 'div_fond_ages', 'div_fond_orig_soc', 'div_fond_langues',
	'div_fond_experiences', 'lead_fondateurs', 'div_equipe', 'div_eq_genres', 'div_eq_formations', 'div_eq_ages', 'div_eq_orig_soc', 'div_eq_langues',
	'div_eq_experiences', 'besoin_comm', 'besoin_tech', 'besoin_fina', 'besoin_juri', 'besoin_desi', 'besoin_gest', 'besoin_mana');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
										
	$req3 = $bdd->prepare('INSERT INTO equipes(ID, nb_fondateurs, commerciale, technique, financiere, juridique, design, gestion, nv_pdt, 
	repondre_pb, nv_technologie, analyse_env, opp_prof, div_fondateurs, div_fond_genres, div_fond_formations, div_fond_ages, div_fond_orig_soc, 
	div_fond_langues, div_fond_experiences, dev_reseau, lead_fondateurs, comp_pression, exp_inv, votre_pq, ambition_fond, att_collab, impact_val, 
	att_equipe, div_equipe, div_eq_genres, div_eq_formations, div_eq_ages, div_eq_orig_soc, div_eq_langues, div_eq_experiences, agi_equipe,
	aut_equipe, syst_val, adapt_recrue, repart_market_vente, org_int, chgt_org, nom_invest, phys_invest, nb_stagiaire, resultats, diff_obj,
	besoin_comm, besoin_tech, besoin_fina, besoin_juri, besoin_desi, besoin_gest, besoin_mana, pres_dir, cons_dir)
	
	VALUES(:ID, :nb_fondateurs, :commerciale, :technique, :financiere, :juridique, :design, :gestion, :nv_pdt, :repondre_pb, :nv_technologie, 
	:analyse_env, :opp_prof, :div_fondateurs, :div_fond_genres, :div_fond_formations, :div_fond_ages, :div_fond_orig_soc, :div_fond_langues, 
	:div_fond_experiences, :dev_reseau, :lead_fondateurs, :comp_pression, :exp_inv, :votre_pq, :ambition_fond, :att_collab, :impact_val, 
	:att_equipe, :div_equipe, :div_eq_genres, :div_eq_formations, :div_eq_ages, :div_eq_orig_soc, :div_eq_langues, :div_eq_experiences, :agi_equipe,
	:aut_equipe, :syst_val, :adapt_recrue, :repart_market_vente, :org_int, :chgt_org, :nom_invest, :phys_invest, :nb_stagiaire, :resultats, :diff_obj,
	:besoin_comm, :besoin_tech, :besoin_fina, :besoin_juri, :besoin_desi, :besoin_gest, :besoin_mana, :pres_dir, :cons_dir)');

	$req3->execute(array(
		'ID' => $_SESSION['id'],
		'nb_fondateurs' => $_POST['nb_fondateurs'],
		'commerciale' => $_POST['commerciale'],
		'technique' => $_POST['technique'],
		'financiere' => $_POST['financiere'],
		'juridique' => $_POST['juridique'],
		'design' => $_POST['design'],
		'gestion' => $_POST['gestion'],
		'nv_pdt' => $_POST['nv_pdt'],
		'repondre_pb' => $_POST['repondre_pb'],
		'nv_technologie' => $_POST['nv_technologie'],
		'analyse_env' => $_POST['analyse_env'],
		'opp_prof' => $_POST['opp_prof'],
		'div_fondateurs' => $_POST['div_fondateurs'],
		'div_fond_genres' => $_POST['div_fond_genres'],
		'div_fond_formations' => $_POST['div_fond_formations'],
		'div_fond_ages' => $_POST['div_fond_ages'],
		'div_fond_orig_soc' => $_POST['div_fond_orig_soc'],
		'div_fond_langues' => $_POST['div_fond_langues'],
		'div_fond_experiences' => $_POST['div_fond_experiences'],
		'dev_reseau' => $_POST['dev_reseau'],
		'lead_fondateurs' => $_POST['lead_fondateurs'],
		'comp_pression' => $_POST['comp_pression'],
		'exp_inv' => $_POST['exp_inv'],
		'votre_pq' => $_POST['votre_pq'],
		'ambition_fond' => $_POST['ambition_fond'],
		'att_collab' => $_POST['att_collab'],
		'impact_val' => $_POST['impact_val'],
		'att_equipe' => $_POST['att_equipe'],		
		'div_equipe' => $_POST['div_equipe'],
		'div_eq_genres' => $_POST['div_eq_genres'],
		'div_eq_formations' => $_POST['div_eq_formations'],
		'div_eq_ages' => $_POST['div_eq_ages'],
		'div_eq_orig_soc' => $_POST['div_eq_orig_soc'],
		'div_eq_langues' => $_POST['div_eq_langues'],
		'div_eq_experiences' => $_POST['div_eq_experiences'],
		'agi_equipe' => $_POST['agi_equipe'],
		'aut_equipe' => $_POST['aut_equipe'],
		'syst_val' => $_POST['syst_val'],
		'adapt_recrue' => $_POST['adapt_recrue'],
		'repart_market_vente' => $_POST['repart_market_vente'],
		'org_int' => $_POST['org_int'],
		'chgt_org' => $_POST['chgt_org'],		
		'nom_invest' => $_POST['nom_invest'],
		'phys_invest' => $_POST['phys_invest'],
		'nb_stagiaire' => $_POST['nb_stagiaire'],
		'resultats' => $_POST['resultats'],
		'diff_obj' => $_POST['diff_obj'],
		'besoin_comm' => $_POST['besoin_comm'],
		'besoin_tech' => $_POST['besoin_tech'],
		'besoin_fina' => $_POST['besoin_fina'],
		'besoin_juri' => $_POST['besoin_juri'],
		'besoin_desi' => $_POST['besoin_desi'],
		'besoin_gest' => $_POST['besoin_gest'],
		'besoin_mana' => $_POST['besoin_mana'],
		'pres_dir' => $_POST['pres_dir'],
		'cons_dir' => $_POST['cons_dir']
	));
			
	$req3 -> closeCursor();
	
	$_SESSION['avancement'] = 3;
	
}

function sendData4(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('intuition', 'etude_marche', 'exp_perso', 'autre_mesure', 'brevet_nat', 'brevet_int', 'env_sol', 'non_protege', 'marche_hypo',
	'nv_marche', 'marche_niche', 'marche_masse', 'marche_div', 'marche_seg', 'marche_multi', 'recherches', 'prospection', 'quali', 'quanti', 'barr_marche', 
	'barr_metier', 'personna', 'hypo_val', 'hypo_no_val', 'cust_int', 'app_soc', 'att_marche_quali', 'att_marche_quanti', 'int_perso', 'cercle_perso', 
	'imp_local_concu', 'copie_sol_delai');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
									
	$req4 = $bdd->prepare('INSERT INTO marche(ID, imp_pb, intuition, etude_marche, exp_perso, autre_mesure, struct_idee, val_pb, bouleversement, business_model,
	pivot, brevet_nat, brevet_int, env_sol, non_protege, marche_hypo, nv_marche, marche_niche, marche_masse, marche_div, marche_seg, marche_multi, dim_marche,
	recherches, prospection, quali, quanti, val_marche, evol_marche, barr_marche, imp_barr, barr_metier, imp_barr_metier, plan_strat, part_marche, connu_marche,
	reconnu_marche, personna, hypo_val, hypo_no_val, cust_int, id_profil, id_att, id_sens, timing, app_soc, att_marche_quali, att_marche_quanti, int_perso, 
	cercle_perso, prem_client, prem_client_paye, methode_seg, seg_quanti, choix_seg, nb_concu, id_concu, imp_local_concu, prox_concu, diff_concu, prox_sol_concu, 
	prox_prix_concu, copie_sol_concu, copie_sol_delai)
	
	VALUES(:ID, :imp_pb, :intuition, :etude_marche, :exp_perso, :autre_mesure, :struct_idee, :val_pb, :bouleversement, :business_model,
	:pivot, :brevet_nat, :brevet_int, :env_sol, :non_protege, :marche_hypo, :nv_marche, :marche_niche, :marche_masse, :marche_div, :marche_seg, :marche_multi, :dim_marche,
	:recherches, :prospection, :quali, :quanti, :val_marche, :evol_marche, :barr_marche, :imp_barr, :barr_metier, :imp_barr_metier, :plan_strat, :part_marche, :connu_marche,
	:reconnu_marche, :personna, :hypo_val, :hypo_no_val, :cust_int, :id_profil, :id_att, :id_sens, :timing, :app_soc, :att_marche_quali, :att_marche_quanti, :int_perso, 
	:cercle_perso, :prem_client, :prem_client_paye, :methode_seg, :seg_quanti, :choix_seg, :nb_concu, :id_concu, :imp_local_concu, :prox_concu, :diff_concu, :prox_sol_concu, 
	:prox_prix_concu, :copie_sol_concu, :copie_sol_delai)');

	$req4->execute(array(
		'ID' => $_SESSION['id'],
		'imp_pb' => $_POST['imp_pb'],
		'intuition' => $_POST['intuition'],
		'etude_marche' => $_POST['etude_marche'],
		'exp_perso' => $_POST['exp_perso'],
		'autre_mesure' => $_POST['autre_mesure'],
		'struct_idee' => $_POST['struct_idee'],
		'val_pb' => $_POST['val_pb'],
		'bouleversement' => $_POST['bouleversement'],
		'business_model' => $_POST['business_model'],
		'pivot' => $_POST['pivot'],
		'brevet_nat' => $_POST['brevet_nat'],
		'brevet_int' => $_POST['brevet_int'],
		'env_sol' => $_POST['env_sol'],
		'non_protege' => $_POST['non_protege'],
		'marche_hypo' => $_POST['marche_hypo'],
		'nv_marche' => $_POST['nv_marche'],
		'marche_niche' => $_POST['marche_niche'],
		'marche_masse' => $_POST['marche_masse'],
		'marche_div' => $_POST['marche_div'],
		'marche_seg' => $_POST['marche_seg'],
		'marche_multi' => $_POST['marche_multi'],
		'dim_marche' => $_POST['dim_marche'],
		'recherches' => $_POST['recherches'],
		'prospection' => $_POST['prospection'],
		'quali' => $_POST['quali'],
		'quanti' => $_POST['quanti'],
		'val_marche' => $_POST['val_marche'],
		'evol_marche' => $_POST['evol_marche'],
		'barr_marche' => $_POST['barr_marche'],
		'imp_barr' => $_POST['imp_barr'],
		'barr_metier' => $_POST['barr_metier'],
		'imp_barr_metier' => $_POST['imp_barr_metier'],
		'plan_strat' => $_POST['plan_strat'],
		'part_marche' => $_POST['part_marche'],
		'connu_marche' => $_POST['connu_marche'],
		'reconnu_marche' => $_POST['reconnu_marche'],
		'personna' => $_POST['personna'],
		'hypo_val' => $_POST['hypo_val'],
		'hypo_no_val' => $_POST['hypo_no_val'],
		'cust_int' => $_POST['cust_int'],
		'id_profil' => $_POST['id_profil'],
		'id_att' => $_POST['id_att'],
		'id_sens' => $_POST['id_sens'],
		'timing' => $_POST['timing'],
		'app_soc' => $_POST['app_soc'],
		'att_marche_quali' => $_POST['att_marche_quali'],
		'att_marche_quanti' => $_POST['att_marche_quanti'],
		'int_perso' => $_POST['int_perso'],
		'cercle_perso' => $_POST['cercle_perso'],
		'prem_client' => $_POST['prem_client'],
		'prem_client_paye' => $_POST['prem_client_paye'],
		'methode_seg' => $_POST['methode_seg'],
		'seg_quanti' => $_POST['seg_quanti'],
		'choix_seg' => $_POST['choix_seg'],
		'nb_concu' => $_POST['nb_concu'],
		'id_concu' => $_POST['id_concu'],
		'imp_local_concu' => $_POST['imp_local_concu'],
		'prox_concu' => $_POST['prox_concu'],
		'diff_concu' => $_POST['diff_concu'],
		'prox_sol_concu' => $_POST['prox_sol_concu'],
		'prox_prix_concu' => $_POST['prox_prix_concu'],
		'copie_sol_concu' => $_POST['copie_sol_concu'],
		'copie_sol_delai' => $_POST['copie_sol_delai']
		
	));
			
	$req4 -> closeCursor();
	
	$_SESSION['avancement'] = 4;
	
}

function sendData5(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('btob', 'btoc', 'ctoc', 'btobtoc', 'btog', 'concept', 'rd', 'poc', 'proto_maquette', 'brevet', 'beta_test', 'mise_marche', 
	'lean_startup', 'chaine_pdt_soc', 'chaine_pdt_tiers');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
								
	$req5 = $bdd->prepare('INSERT INTO produit(ID, btob, btoc, ctoc, btobtoc, btog, comb_market_vente, inno_projet, exp_fonct, concept, rd, poc, proto_maquette,
	brevet, beta_test, mise_marche, pdt_derive, lean_startup, chaine_pdt_soc, chaine_pdt_tiers, mode_dist, reseau_dist)
	
	VALUES(:ID, :btob, :btoc, :ctoc, :btobtoc, :btog, :comb_market_vente, :inno_projet, :exp_fonct, :concept, :rd, :poc, :proto_maquette,
	:brevet, :beta_test, :mise_marche, :pdt_derive, :lean_startup, :chaine_pdt_soc, :chaine_pdt_tiers, :mode_dist, :reseau_dist)');

	$req5->execute(array(
		'ID' => $_SESSION['id'],
		'btob' => $_POST['btob'],
		'btoc' => $_POST['btoc'],
		'ctoc' => $_POST['ctoc'],
		'btobtoc' => $_POST['btobtoc'],
		'btog' => $_POST['btog'],
		'comb_market_vente' => $_POST['comb_market_vente'],
		'inno_projet' => $_POST['inno_projet'],
		'exp_fonct' => $_POST['exp_fonct'],
		'concept' => $_POST['concept'],
		'rd' => $_POST['rd'],
		'poc' => $_POST['poc'],
		'proto_maquette' => $_POST['proto_maquette'],
		'brevet' => $_POST['brevet'],
		'beta_test' => $_POST['beta_test'],
		'mise_marche' => $_POST['mise_marche'],
		'pdt_derive' => $_POST['pdt_derive'],
		'lean_startup' => $_POST['lean_startup'],
		'chaine_pdt_soc' => $_POST['chaine_pdt_soc'],
		'chaine_pdt_tiers' => $_POST['chaine_pdt_tiers'],
		'mode_dist' => $_POST['mode_dist'],
		'reseau_dist' => $_POST['reseau_dist']

	));
			
	$req5 -> closeCursor();
	
	$_SESSION['avancement'] = 5;
	
}

function sendData6(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('monde_franco', 'ue', 'europe', 'amerique_nord', 'amerique_sud', 'asie', 'afrique', 'oceanie');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
						
	$req6 = $bdd->prepare('INSERT INTO developpement(ID, plan_dev, int_plan_dev, interna, monde_franco, ue, europe, amerique_nord, amerique_sud, asie, oceanie,
	risque_present, risque_futur, sol_risque, sol_traite)
	
	VALUES(:ID, :plan_dev, :int_plan_dev, :interna, :monde_franco, :ue, :europe, :amerique_nord, :amerique_sud, :asie, :oceanie,
	:risque_present, :risque_futur, :sol_risque, :sol_traite)');

	$req6->execute(array(
		'ID' => $_SESSION['id'],
		'plan_dev' => $_POST['plan_dev'],
		'int_plan_dev' => $_POST['int_plan_dev'],
		'interna' => $_POST['interna'],
		'monde_franco' => $_POST['monde_franco'],
		'ue' => $_POST['ue'],
		'europe' => $_POST['europe'],
		'amerique_nord' => $_POST['amerique_nord'],
		'amerique_sud' => $_POST['amerique_sud'],
		'asie' => $_POST['asie'],
		'oceanie' => $_POST['oceanie'],
		'risque_present' => $_POST['risque_present'],
		'risque_futur' => $_POST['risque_futur'],
		'sol_risque' => $_POST['sol_risque'],
		'sol_traite' => $_POST['sol_traite']
		
	));
			
	$req6 -> closeCursor();
	
	$_SESSION['avancement'] = 6;
	
}

function sendData7(){
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
		
	catch (Exception $e){			
		die('Erreur : ' . $e->getMessage());
	}
	
	$array_bool = array ('fds_priv', 'love_money', 'fina_public', 'seed_capital', 'serie_a', 'serie_b', 'calcul_avant_levee', 'affect_avant');
	
	foreach($array_bool as $element){
		
		if (!isset($_POST[$element])){
			$_POST[$element]=0;
		}
	}
						
	$req7 = $bdd->prepare('INSERT INTO financement(ID, aide_finan, fds_priv, love_money, fina_public, seed_capital, serie_a, serie_b, levee_fds, calcul_levee,
	calcul_avant_levee, affect_fds, affect_avant, invest_fds, affect_6_mois, affect_1_an, affect_3_ans, plan_treso_6_mois, plan_treso_1_an, plan_treso_3_ans,
	treso_complete, sol_treso_complete, sortie_invest, bfr, calcul_bfr, gene_bene, fins_mois, survivre, delai_vente, delai_vivre, taille_struct,
	vente_startup, rester_startup, affaire_pipe, ca_pipe, vol_prospect, ca_prospect)
	
	VALUES(:ID, :aide_finan, :fds_priv, :love_money, :fina_public, :seed_capital, :serie_a, :serie_b, :levee_fds, :calcul_levee,
	:calcul_avant_levee, :affect_fds, :affect_avant, :invest_fds, :affect_6_mois, :affect_1_an, :affect_3_ans, :plan_treso_6_mois, :plan_treso_1_an, :plan_treso_3_ans,
	:treso_complete, :sol_treso_complete, :sortie_invest, :bfr, :calcul_bfr, :gene_bene, :fins_mois, :survivre, :delai_vente, :delai_vivre, :taille_struct,
	:vente_startup, :rester_startup, :affaire_pipe, :ca_pipe, :vol_prospect, :ca_prospect)');

	$req7->execute(array(
		'ID' => $_SESSION['id'],
		'aide_finan' => $_POST['aide_finan'],
		'fds_priv' => $_POST['fds_priv'],
		'love_money' => $_POST['love_money'],
		'fina_public' => $_POST['fina_public'],
		'seed_capital' => $_POST['seed_capital'],
		'serie_a' => $_POST['serie_a'],
		'serie_b' => $_POST['serie_b'],
		'levee_fds' => $_POST['levee_fds'],
		'calcul_levee' => $_POST['calcul_levee'],
		'calcul_avant_levee' => $_POST['calcul_avant_levee'],
		'affect_fds' => $_POST['affect_fds'],
		'affect_avant' => $_POST['affect_avant'],
		'invest_fds' => $_POST['invest_fds'],
		'affect_6_mois' => $_POST['affect_6_mois'],
		'affect_1_an' => $_POST['affect_1_an'],
		'affect_3_ans' => $_POST['affect_3_ans'],
		'plan_treso_6_mois' => $_POST['plan_treso_6_mois'],
		'plan_treso_1_an' => $_POST['plan_treso_1_an'],
		'plan_treso_3_ans' => $_POST['plan_treso_3_ans'],		
		'treso_complete' => $_POST['treso_complete'],
		'sol_treso_complete' => $_POST['sol_treso_complete'],
		'sortie_invest' => $_POST['sortie_invest'],
		'bfr' => $_POST['bfr'],
		'calcul_bfr' => $_POST['calcul_bfr'],
		'gene_bene' => $_POST['gene_bene'],
		'fins_mois' => $_POST['fins_mois'],
		'survivre' => $_POST['survivre'],
		'delai_vente' => $_POST['delai_vente'],
		'delai_vivre' => $_POST['delai_vivre'],
		'taille_struct' => $_POST['taille_struct'],		
		'vente_startup' => $_POST['vente_startup'],
		'rester_startup' => $_POST['rester_startup'],
		'affaire_pipe' => $_POST['affaire_pipe'],
		'ca_pipe' => $_POST['ca_pipe'],
		'vol_prospect' => $_POST['vol_prospect'],
		'ca_prospect' => $_POST['ca_prospect']
		
	));
			
	$req7 -> closeCursor();
	
	$_SESSION['avancement'] = 7;
	
}

?>