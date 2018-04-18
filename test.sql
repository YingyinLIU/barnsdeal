-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 28 Février 2018 à 12:15
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE IF NOT EXISTS `authentification` (
  `ID` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `authentification`
--

INSERT INTO `authentification` (`ID`, `password`) VALUES
(1, 'password1'),
(2, 'password2');

-- --------------------------------------------------------

--
-- Structure de la table `developpement`
--

CREATE TABLE IF NOT EXISTS `developpement` (
  `ID` int(11) NOT NULL,
  `plan_dev` int(11) NOT NULL,
  `int_plan_dev` text NOT NULL,
  `interna` int(11) NOT NULL,
  `monde_franco` tinyint(1) NOT NULL,
  `ue` tinyint(1) NOT NULL,
  `europe` tinyint(1) NOT NULL,
  `amerique_nord` tinyint(1) NOT NULL,
  `amerique_sud` tinyint(1) NOT NULL,
  `asie` tinyint(1) NOT NULL,
  `afrique` tinyint(1) NOT NULL,
  `oceanie` tinyint(1) NOT NULL,
  `risque_present` int(11) NOT NULL,
  `risque_futur` int(11) NOT NULL,
  `sol_risque` int(11) NOT NULL,
  `sol_traite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE IF NOT EXISTS `equipes` (
  `ID` int(11) NOT NULL,
  `nb_fondateurs` int(11) NOT NULL,
  `commerciale` tinyint(1) NOT NULL,
  `technique` tinyint(1) NOT NULL,
  `financiere` tinyint(1) NOT NULL,
  `juridique` tinyint(1) NOT NULL,
  `design` tinyint(1) NOT NULL,
  `gestion` tinyint(1) NOT NULL,
  `nv_pdt` tinyint(1) NOT NULL,
  `repondre_pb` tinyint(1) NOT NULL,
  `nv_technologie` tinyint(1) NOT NULL,
  `analyse_env` tinyint(1) NOT NULL,
  `opp_prof` tinyint(1) NOT NULL,
  `div_fondateurs` tinyint(1) NOT NULL,
  `div_fond_genres` tinyint(1) NOT NULL,
  `div_fond_formations` tinyint(1) NOT NULL,
  `div_fond_ages` tinyint(1) NOT NULL,
  `div_fond_orig_soc` tinyint(1) NOT NULL,
  `div_fond_langues` tinyint(1) NOT NULL,
  `div_fond_experiences` tinyint(1) NOT NULL,
  `dev_reseau` int(11) NOT NULL,
  `lead_fondateurs` tinyint(1) NOT NULL,
  `comp_pression` int(11) NOT NULL,
  `exp_inv` int(11) NOT NULL,
  `votre_pq` text NOT NULL,
  `ambition_fond` int(11) NOT NULL,
  `att_collab` int(11) NOT NULL,
  `impact_val` int(11) NOT NULL,
  `att_equipe` int(11) NOT NULL,
  `div_equipe` tinyint(1) NOT NULL,
  `div_eq_genres` tinyint(1) NOT NULL,
  `div_eq_formations` tinyint(1) NOT NULL,
  `div_eq_ages` tinyint(1) NOT NULL,
  `div_eq_orig_soc` tinyint(1) NOT NULL,
  `div_eq_langues` tinyint(1) NOT NULL,
  `div_eq_experiences` tinyint(1) NOT NULL,
  `agi_equipe` int(11) NOT NULL,
  `aut_equipe` int(11) NOT NULL,
  `syst_val` int(11) NOT NULL,
  `adapt_recrue` int(11) NOT NULL,
  `repart_market_vente` int(11) NOT NULL,
  `org_int` int(11) NOT NULL,
  `chgt_org` int(11) NOT NULL,
  `nom_invest` int(11) NOT NULL,
  `phys_invest` int(11) NOT NULL,
  `nb_stagiaire` int(11) NOT NULL,
  `resultats` int(11) NOT NULL,
  `diff_obj` int(11) NOT NULL,
  `besoin_comm` tinyint(1) NOT NULL,
  `besoin_tech` tinyint(1) NOT NULL,
  `besoin_fina` tinyint(1) NOT NULL,
  `besoin_juri` tinyint(1) NOT NULL,
  `besoin_desi` tinyint(1) NOT NULL,
  `besoin_gest` tinyint(1) NOT NULL,
  `besoin_mana` tinyint(1) NOT NULL,
  `pres_dir` int(11) NOT NULL,
  `cons_dir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `financement`
--

CREATE TABLE IF NOT EXISTS `financement` (
  `ID` int(11) NOT NULL,
  `aide_finan` int(11) NOT NULL,
  `fds_priv` tinyint(1) NOT NULL,
  `love_money` tinyint(1) NOT NULL,
  `fina_public` tinyint(1) NOT NULL,
  `seed_capital` tinyint(1) NOT NULL,
  `serie_a` tinyint(1) NOT NULL,
  `serie_b` tinyint(1) NOT NULL,
  `levee_fds` int(11) NOT NULL,
  `calcul_levee` int(11) NOT NULL,
  `calcul_avant_levee` tinyint(1) NOT NULL,
  `affect_fds` int(11) NOT NULL,
  `affect_avant` tinyint(1) NOT NULL,
  `invest_fds` int(11) NOT NULL,
  `affect_6_mois` int(11) NOT NULL,
  `affect_1_an` int(11) NOT NULL,
  `affect_3_ans` int(11) NOT NULL,
  `plan_treso_6_mois` int(11) NOT NULL,
  `plan_treso_1_an` int(11) NOT NULL,
  `plan_treso_3_ans` int(11) NOT NULL,
  `treso_complete` int(11) NOT NULL,
  `sol_treso_complete` int(11) NOT NULL,
  `sortie_invest` int(11) NOT NULL,
  `bfr` int(11) NOT NULL,
  `calcul_bfr` int(11) NOT NULL,
  `gene_bene` int(11) NOT NULL,
  `fins_mois` text NOT NULL,
  `survivre` int(11) NOT NULL,
  `delai_vente` int(11) NOT NULL,
  `delai_vivre` text NOT NULL,
  `taille_struct` int(11) NOT NULL,
  `vente_startup` int(11) NOT NULL,
  `rester_startup` int(11) NOT NULL,
  `affaire_pipe` int(11) NOT NULL,
  `ca_pipe` int(11) NOT NULL,
  `vol_prospect` int(11) NOT NULL,
  `ca_prospect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `global`
--

CREATE TABLE IF NOT EXISTS `global` (
  `ID` int(11) NOT NULL,
  `nom_startup` text NOT NULL,
  `age_startup` int(11) NOT NULL,
  `comm_proj` int(11) NOT NULL,
  `etape_proj` text NOT NULL,
  `das` text NOT NULL,
  `siren` text NOT NULL,
  `CAn` int(11) NOT NULL,
  `CAn_1` int(11) NOT NULL,
  `gd_villes` tinyint(1) NOT NULL,
  `moy_villes` tinyint(1) NOT NULL,
  `zone_rurale` tinyint(1) NOT NULL,
  `etranger` tinyint(1) NOT NULL,
  `local_societe` text NOT NULL,
  `local_eq_travail` text NOT NULL,
  `nb_personnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `marche`
--

CREATE TABLE IF NOT EXISTS `marche` (
  `ID` int(11) NOT NULL,
  `imp_pb` int(11) NOT NULL,
  `intuition` tinyint(1) NOT NULL,
  `etude_marche` tinyint(1) NOT NULL,
  `exp_perso` tinyint(1) NOT NULL,
  `autre_mesure` tinyint(1) NOT NULL,
  `struct_idee` text NOT NULL,
  `val_pb` text NOT NULL,
  `bouleversement` int(11) NOT NULL,
  `business_model` text NOT NULL,
  `pivot` int(11) NOT NULL,
  `brevet_nat` tinyint(1) NOT NULL,
  `brevet_int` tinyint(1) NOT NULL,
  `env_sol` tinyint(1) NOT NULL,
  `non_protege` tinyint(1) NOT NULL,
  `marche_hypo` tinyint(1) NOT NULL,
  `nv_marche` tinyint(1) NOT NULL,
  `marche_niche` tinyint(1) NOT NULL,
  `marche_masse` tinyint(1) NOT NULL,
  `marche_div` tinyint(1) NOT NULL,
  `marche_seg` tinyint(1) NOT NULL,
  `marche_multi` tinyint(1) NOT NULL,
  `dim_marche` int(11) NOT NULL,
  `recherches` tinyint(1) NOT NULL,
  `prospection` tinyint(1) NOT NULL,
  `quali` tinyint(1) NOT NULL,
  `quanti` tinyint(1) NOT NULL,
  `val_marche` int(11) NOT NULL,
  `evol_marche` int(11) NOT NULL,
  `barr_marche` tinyint(1) NOT NULL,
  `imp_barr` int(11) NOT NULL,
  `barr_metier` tinyint(1) NOT NULL,
  `imp_barr_metier` int(11) NOT NULL,
  `plan_strat` int(11) NOT NULL,
  `part_marche` int(11) NOT NULL,
  `connu_marche` int(11) NOT NULL,
  `reconnu_marche` int(11) NOT NULL,
  `personna` tinyint(1) NOT NULL,
  `hypo_val` tinyint(1) NOT NULL,
  `hypo_no_val` tinyint(1) NOT NULL,
  `cust_int` tinyint(1) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_att` int(11) NOT NULL,
  `id_sens` int(11) NOT NULL,
  `timing` int(11) NOT NULL,
  `app_soc` tinyint(1) NOT NULL,
  `att_marche_quali` tinyint(1) NOT NULL,
  `att_marche_quanti` tinyint(1) NOT NULL,
  `int_perso` tinyint(1) NOT NULL,
  `cercle_perso` tinyint(1) NOT NULL,
  `prem_client` int(11) NOT NULL,
  `prem_client_paye` int(11) NOT NULL,
  `methode_seg` int(11) NOT NULL,
  `seg_quanti` int(11) NOT NULL,
  `choix_seg` text NOT NULL,
  `nb_concu` int(11) NOT NULL,
  `id_concu` int(11) NOT NULL,
  `imp_local_concu` tinyint(1) NOT NULL,
  `prox_concu` int(11) NOT NULL,
  `diff_concu` int(11) NOT NULL,
  `prox_sol_concu` int(11) NOT NULL,
  `prox_prix_concu` int(11) NOT NULL,
  `copie_sol_concu` int(11) NOT NULL,
  `copie_sol_delai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL,
  `btob` tinyint(1) NOT NULL,
  `btoc` tinyint(1) NOT NULL,
  `ctoc` tinyint(1) NOT NULL,
  `btobtoc` tinyint(1) NOT NULL,
  `btog` tinyint(1) NOT NULL,
  `comb_market_vente` int(11) NOT NULL,
  `inno_projet` text NOT NULL,
  `exp_fonct` int(11) NOT NULL,
  `concept` tinyint(1) NOT NULL,
  `rd` tinyint(1) NOT NULL,
  `poc` tinyint(1) NOT NULL,
  `proto_maquette` tinyint(1) NOT NULL,
  `brevet` tinyint(1) NOT NULL,
  `beta_test` tinyint(1) NOT NULL,
  `mise_marche` tinyint(1) NOT NULL,
  `pdt_derive` int(11) NOT NULL,
  `lean_startup` tinyint(1) NOT NULL,
  `chaine_pdt_soc` tinyint(1) NOT NULL,
  `chaine_pdt_tiers` tinyint(1) NOT NULL,
  `mode_dist` int(11) NOT NULL,
  `reseau_dist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `repondant`
--

CREATE TABLE IF NOT EXISTS `repondant` (
  `ID` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `profession` text NOT NULL,
  `CEO` tinyint(1) NOT NULL,
  `anciennete` int(11) NOT NULL,
  `genre` char(11) NOT NULL,
  `comite_dir` tinyint(1) NOT NULL,
  `salarie_parts` tinyint(1) NOT NULL,
  `salarie_sans_part` tinyint(1) NOT NULL,
  `consult_ext` tinyint(1) NOT NULL,
  `investisseur` tinyint(1) NOT NULL,
  `struct_acc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
