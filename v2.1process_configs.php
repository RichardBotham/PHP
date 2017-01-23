

<?php

 
    $mpls_lsp_vlan_ccc_desc = "mpls_lsp_vlan_ccc_desc: " . $_POST['mpls_lsp_vlan_ccc_desc'] . "\n";
    $mpls_hop_limit = "mpls_hop_limit: " . $_POST['mpls_hop_limit'] . "\n";

    $ingress_mpls_endpoint_hostname = "ingress_mpls_endpoint_hostname: " . $_POST['ingress_mpls_endpoint_hostname'] . "\n";
    $egress_mpls_endpoint_hostname = "egress_mpls_endpoint_hostname: " . $_POST['egress_mpls_endpoint_hostname'] . "\n";
	
	$ingress_mpls_lsp_name = "ingress_mpls_lsp_name: " . $_POST['ingress_mpls_lsp_name'] . "\n";
	$egress_mpls_lsp_name = "egress_mpls_lsp_name: " . $_POST['egress_mpls_lsp_name'] . "\n";

	$ingress_mpls_vlan_ccc_interface = "ingress_mpls_vlan_ccc_interface: " . $_POST['ingress_mpls_vlan_ccc_interface'] . "\n";
	$egress_mpls_vlan_ccc_interface =  "egress_mpls_vlan_ccc_interface: " . $_POST['egress_mpls_vlan_ccc_interface'] . "\n";

	$ingress_mpls_psn_endpoint = "ingress_mpls_psn_endpoint: " . $_POST['ingress_mpls_psn_endpoint'] . "\n";
	$egress_mpls_psn_endpoint = "egress_mpls_psn_endpoint: " . $_POST['egress_mpls_psn_endpoint'] . "\n";

	$ingress_mpls_lsp_l2cct_neighbor = "ingress_mpls_lsp_l2cct_neighbor: " . $_POST['ingress_mpls_lsp_l2cct_neighbor'] . "\n";
	$egress_mpls_lsp_l2cct_neighbor = "egress_mpls_lsp_l2cct_neighbor: " . $_POST['egress_mpls_lsp_l2cct_neighbor'] . "\n";

	$mpls_vc_id = "mpls_vc_id: " . $_POST['mpls_vc_id'] . "\n"; 
	$mpls_vlan_id = "mpls_vlan_id: " . $_POST['mpls_vlan_id'] . "\n";

	$mpls_lsp_vlan_ccc_desc = "mpls_lsp_vlan_ccc_desc: " . $_POST['mpls_lsp_vlan_ccc_desc'] . "\n";
	$mpls_lsp_policer_name = "mpls_lsp_policer_name: " . $_POST['mpls_lsp_policer_name'] . "\n";

/* Ingress hops*/	

	$ingress_mpls_hops1 =  $_POST['ingress_mpls_hop1'] . "\n";
	$ingress_mpls_hops2 =  $_POST['ingress_mpls_hop2'] . "\n";
	$ingress_mpls_hops3 =  $_POST['ingress_mpls_hop3'] . "\n";
	$ingress_mpls_hops4 =  $_POST['ingress_mpls_hop4'] . "\n";
	$ingress_mpls_hops5 =  $_POST['ingress_mpls_hop5'] . "\n";
	$ingress_mpls_hops6 =  $_POST['ingress_mpls_hop6'] . "\n";
	$ingress_mpls_hops7 =  $_POST['ingress_mpls_hop7'] . "\n";
	$ingress_mpls_hops8 =  $_POST['ingress_mpls_hop8'] . "\n";

/* Egress hops */
	$egress_mpls_hops1 =  $_POST['egress_mpls_hop1'] . "\n";
	$egress_mpls_hops2 =  $_POST['egress_mpls_hop2'] . "\n";
	$egress_mpls_hops3 =  $_POST['egress_mpls_hop3'] . "\n";
	$egress_mpls_hops4 =  $_POST['egress_mpls_hop4'] . "\n";
	$egress_mpls_hops5 =  $_POST['egress_mpls_hop5'] . "\n";
	$egress_mpls_hops6 =  $_POST['egress_mpls_hop6'] . "\n";
	$egress_mpls_hops7 =  $_POST['egress_mpls_hop7'] . "\n";
	$egress_mpls_hops8 =  $_POST['egress_mpls_hop8'] . "\n";


/* DC code here */

	if (empty($dccode1)) {
  	$dccode1 = $_POST['dccode1'] . "\n";
	}
	else {
	$dccode1 = "";
	}
	
	if (empty($dccode2)) {
	$dccode2 = $_POST['dccode2'] . "\n";
	}
	else {
	$dccode2 = "";
	}

	if (empty($dccode3)) {
	$dccode3 = $_POST['dccode3'] . "\n";
	}
	else {
	$dccode3 = "";	
	}
/*	
	if (!empty($dccode4)) {
	$dccode4 = $_POST['dccode4'] . "\n";
	}
	else {
	$dccode4 = " ";
	}

	if (!empty($dccode5)) {
	$dccode5 = $_POST['dccode5'] . "\n";
	}
	else {
	$dccode5 = " ";
	}

	if (!empty($dccode6)) {
	$dccode6 = $_POST['dccode6'] . "\n";
	}
	else {
	$dccode6 = " ";
	}

	if (!empty($dccode7)) {
	$dccode7 = $_POST['dccode7'] . "\n";
	}
	else {
	$dccode7 = " ";
	}
	
	if (!empty($dccode8)) {
	$dccode8 = $_POST['dccode8'] . "\n";
	}
	else {
	$dccode8 = " ";
	}
 */  
    $all_dcodes = "datacentres:" . "\n" . $dccode1 . $dccode2 . $dccode3 . $dccode4 . $dccode5 . $dccode6 . $dccode7 . $dccode8;

    $all_ingress_mpls_hops = "ingress_mpls_lsp_next_hops:" . "\n" . " - " . $ingress_mpls_hops1 . " - " .$ingress_mpls_hops2 . " - " .$ingress_mpls_hops3 . " - " .$ingress_mpls_hops4 . " - " .$ingress_mpls_hops5 . " - " .$ingress_mpls_hops6 . " - " .$ingress_mpls_hops7 . " - " .$ingress_mpls_hops8;

	$all_egress_mpls_hops = "egress_mpls_lsp_next_hops:" . "\n" . " - " . $egress_mpls_hops1 . " - " .$egress_mpls_hops2 . " - " .$egress_mpls_hops3 . " - " .$egress_mpls_hops4 . " - " .$egress_mpls_hops5 . " - " .$egress_mpls_hops6 . " - " .$egress_mpls_hops7 . " - " .$egress_mpls_hops8 ;

 
    $allofit = $ingress_mpls_endpoint_hostname . $egress_mpls_endpoint_hostname . $ingress_mpls_lsp_name . $egress_mpls_lsp_name . $ingress_mpls_vlan_ccc_interface . $egress_mpls_vlan_ccc_interface . $ingress_mpls_psn_endpoint . $egress_mpls_psn_endpoint . $ingress_mpls_lsp_l2cct_neighbor . $egress_mpls_lsp_l2cct_neighbor . $mpls_vc_id . $mpls_vlan_id . $mpls_lsp_vlan_ccc_desc . $mpls_lsp_policer_name . $mpls_hop_limit . $all_ingress_mpls_hops . $all_egress_mpls_hops . $all_dcodes;


    /*:wq$ret = file_put_contents('/usr/playbooks/mytest.txt', $allofit, LOCK_EX);*/

    $ret = file_put_contents('/tmp/mytest.yml', $allofit, LOCK_EX);
?>



	

